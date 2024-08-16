<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;

class AuthController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $titleDelete = 'Hapus CV ?';
        $textDelete = 'Apakah Anda yakin ?';
        confirmDelete($titleDelete, $textDelete);

        $data = Resume::all();
        return view('user.index', compact('data'));
    }
} 
