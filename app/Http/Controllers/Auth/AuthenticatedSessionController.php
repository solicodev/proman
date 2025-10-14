<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
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
        $random = rand(111111, 999999);
        $otp = 'کد تایید شما :'. $random;

        $user = User::where('mobile',$request->mobile)->first();
        $user->confirm_code = $random;
        $user->update();
        //ToDO
        // sendSms($request->mobile, $otp);

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

        return response()->json([
            'status' => true,
            'confirm_code'    => $user->confirm_code,
            'message' => 'اعتبار سنجی انجام شد',
        ],200);
    }
}
