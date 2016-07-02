<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Requests;
use App\Subject;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return User::with(['department', 'subject'])->get();
        if (Auth::check()) {
            $auth = Auth::User();
            return view('user/profile', compact('auth'));
        }
        return view('home');
    }

    public function pdf($fileName)
    {
        $path = storage_path() . '/pdf/' . $fileName;
        if (!File::exists($path)) abort(404);
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
        return $response;
    }
}
