<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __invoke(Request $request)
    {
        $pageTitle = 'Profile';
    return view('profile', ['pageTitle' => $pageTitle]);
    }
}
