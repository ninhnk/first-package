<?php

namespace Ninhnk\FirstPackage\Http\Controllers;

use  App\Http\Controllers\Controller;

class FirstPackageController extends Controller
{
    public function index ()
    {
        return view('first-package::index');
    }
}
