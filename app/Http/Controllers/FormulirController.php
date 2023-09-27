<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use Illuminate\Http\Request;

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('postingan.index',[
        //     'posts' => Formulir::all()
        // ]);
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
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'double_field' => 'required|numeric|between:2.50,99.99',
        ]);

        $validatedData['image'] = $request->file('image')->store('/public/post-image');

        Formulir::create($validatedData);
        return redirect('/dashboard/post')->with('success', 'New Post added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Formulir $formulir)
    {
        $data=Formulir::all();
        return view('postingan.index',['formulir'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formulir $formulir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formulir $formulir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formulir $formulir)
    {
        //
    }
}
