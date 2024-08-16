<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;

class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']); //verified user
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Resume::all();
        return view('user.index', compact('data'));
    }
} 
