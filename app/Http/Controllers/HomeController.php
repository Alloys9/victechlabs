<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        try {
            return view('home.index');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()]);
        }
    }

    public function logout()
    {
        try {
            Auth::logout();
            return redirect(url()->previous())->with('success', 'Logged out successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while logging out.');
        }
    }
}
