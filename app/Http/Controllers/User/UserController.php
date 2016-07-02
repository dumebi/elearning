<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit()
    {
        $user = Auth::User();
        return view('user.edit', compact('user'));
    }

    public function update(Request $request)
    {
        return $request->input();
    }
}
