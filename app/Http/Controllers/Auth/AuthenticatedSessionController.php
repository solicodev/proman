<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginPasswordRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{

    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.sign-in');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request)
    {
        $user = User::where('mobile',$request->mobile)->first();
        $random = rand(111111, 999999);
        $otp = $user->Name .' کد تایید شما در پلتفرم سولیکوکاله '. $random ;
        $user->confirm_code = $random;
        $user->update();

        //ToDO
         sendSms($request->mobile, $otp);

        return response()->json([
            'status' => true,
            'confirm_code'    => $user->confirm_code,
            'message' => 'کد تایید برای شما ارسال شد',
        ],200);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function MobileCheck(Request $request) : JsonResponse
    {

        $user_mobile = User::where('mobile',$request->mobile)->first();
        $user = User::where('confirm_code',$request->confirm_code)->first();
        if (!$user_mobile)
        {
            return response()->json([
                'status' => false,
                'message' => 'دقت کنید! شماره موبایل وارد شده در سیستم ثبت نشده است!',
            ],403);
        }
        if (!$user)
        {
            return response()->json([
                'status' => false,
                'message' => 'دقت کنید! کد وارد شده معتبر نیست!',
            ],503);
        }

        $user->mobile_verified_at = Carbon::now();
        $user->update();
        Auth::login($user);
        $request->session()->regenerate();
        $roles = \Illuminate\Support\Facades\Auth::user()->roles()->first()->name;

        return response()->json([
            'status' => true,
            'confirm_code' => $user->confirm_code,
            'user_type' => $roles,
            'message' => 'اعتبار سنجی انجام شد',
        ],200);
    }

    public function LoginPassword(LoginPasswordRequest $request)
    {
        $user = User::where('mobile', $request->mobile)->first();

        if (!$user) {
            return redirect()->back()
                ->with('err_message','نام کاربری (شماره موبایل) وارد شده در سیستم ثبت نشده است!');
        }

        if (empty($user->password)) {
            return redirect()->back()
                ->with('err_message','رمز عبور برای این کاربر تعریف نشده است!');
        }

        if (Hash::check($request->password, $user->password)) {

            Auth::login($user);
            $request->session()->regenerate();

            if ($user->hasRole('Super Admin')) {
                return redirect()->route('admin.index')
                    ->with('flash_message','به پنل ادمین خوش آمدید');
            }
            if( $user->hasRole('Admin Panel')){
                return redirect()->route('admin.index')
                    ->with('flash_message','به پنل ادمین خوش آمدید');
            }

            if ($user->hasRole('Manager')) {
                return redirect()->route('dashboard.index')
                    ->with('flash_message','به پلتفرم مدیریت پروژه سولیکو خوش آمدید');
            }

            if ($user->hasRole('Member')) {
                return redirect()->route('dashboard.index')
                    ->with('flash_message','به پلتفرم مدیریت پروژه سولیکو خوش آمدید');
            }
            if ($user->hasRole('Assignee')) {
                return redirect()->route('dashboard.index')
                    ->with('flash_message','به پلتفرم مدیریت پروژه سولیکو خوش آمدید');
            }
        }

        return redirect()->back()
            ->with('err_message','رمز عبور اشتباه است!');
    }
}
