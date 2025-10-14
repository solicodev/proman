<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
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
    public function store(LoginRequest $request): JsonResponse
    {

        $random = rand(111111, 999999);
        $otp = 'کد تایید شما :'. $random;

        $user = User::where('mobile',$request->mobile)->first();
        $user->confirm_code = $random;
        $user->update();
        //ToDO
        // sendSms($request->mobile, $otp);

        $request->authenticate();

        $request->session()->regenerate();

        return response()->json([
            'status' => true,
            'confirm_code'    => $user->confirm_code,
            'message' => 'ورود با موفقیت انجام شد توکن صادر شد.',
        ],200);

//        return redirect()->intended(route('dashboard', absolute: false));
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
}
