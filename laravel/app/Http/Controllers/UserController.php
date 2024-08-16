<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Resume;
use App\Http\Requests\StoreRequest; //request
use Alert; //sweet alert

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('user.create-cv');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        // dd($request);
        $validated = $request->validated();

        if($request->hasFile('foto_profile')) {
            $filePath = Storage::disk('public')->put('user', request()->file('foto_profile'));
            $validated['foto_profile'] = $filePath;
        } 

        $validated['user_id'] = auth()->user()->id;

        $create = Resume::create($validated);
        if($create) {
            Alert::success('Selamat!', 'CV Online Anda berhasil dibuat !');
            return redirect()->route('users.index');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = Resume::findOrFail($id);
        return view('user.show', compact($data));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = Resume::findOrFail($id);
        return view('user.edit', compact($data));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
