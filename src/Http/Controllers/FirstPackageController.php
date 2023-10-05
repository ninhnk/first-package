<?php

namespace Ninhnk\FirstPackage\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FirstPackageController extends Controller
{
    public function index ()
    {
        return view('first-package::index');
    }

    public function signIn (Request $request)
    {
        $credentials = $request->only(['user_name', 'password']);

        if (Auth::attempt($credentials, true)) {
            return redirect()->route('home');
        }
        dd('ĐĂNG NHẬP THẤT BẠI');
    }

    public function signOut ()
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect()->route('sign-in');
        }
    }

    public function home ()
    {
        return view('first-package::home');
    }
}
