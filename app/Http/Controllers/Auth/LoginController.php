<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * The user has been authenticated. Show a friendly welcome message.
     */
    protected function authenticated(Request $request, $user)
    {
        Alert::toast('Welcome back, ' . $user->name . '!', 'success');
        return null; // continue with the default redirect
    }

    /**
     * Friendlier message when login credentials don't match.
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => ['The email/password combination you entered is incorrect. Please try again.'],
        ]);
    }

    /**
     * Log the user out with a confirmation message.
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Alert::toast('You have been logged out successfully.', 'success');

        return $request->wantsJson()
            ? new \Illuminate\Http\JsonResponse([], 204)
            : redirect('/');
    }
}