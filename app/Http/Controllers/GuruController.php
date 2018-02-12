<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\guru;
class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = guru::all();
        return View('guru.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'=>'required|unique:gurus|max:225',
            'mata_pelajaran'=> 'required|min:3',
        ]);

        $posts = new guru;
        $posts->nama = $request->nama;
        $posts->mata_pelajaran = $request->mata_pelajaran;
        $posts->save();
        return redirect()->route('guru.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = guru::findOrFail($id);
        return view('guru.show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = guru::findOrFail($id);
        return view('guru.edit', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama'=>'required|max:225',
            'mata_pelajaran'=> 'required|min:3',
        ]);

        $posts = guru::findOrFail($id);
        $posts->nama = $request->nama;
        $posts->mata_pelajaran = $request->mata_pelajaran;
        $posts->save();
        return redirect()->route('guru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = guru::findOrFail($id);
        $posts->delete();
        return redirect()->route('guru.index');
    }
}
