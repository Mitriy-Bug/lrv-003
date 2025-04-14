<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        return view('profile', [
            'name' => $user->name,
            'email' => $user->email,
            'id' => $user->id
        ]);
    }
}
