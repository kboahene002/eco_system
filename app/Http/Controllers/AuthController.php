<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Handle user logout
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        // Log the user out
        Auth::logout();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate CSRF token
        $request->session()->regenerateToken();

        // Clear any additional session data
        Session::flush();

        // Redirect to login page with success message
        return redirect('/login')->with('success', 'You have been logged out successfully.');
    }

    /**
     * Handle user logout via GET request (for direct links)
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logoutGet(Request $request)
    {
        return $this->logout($request);
    }
}
