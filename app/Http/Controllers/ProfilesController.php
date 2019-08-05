<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
    	$user=user::findorFail($user);
        return view('home', [
        	'user' => $user,
        ]);
    }
}
