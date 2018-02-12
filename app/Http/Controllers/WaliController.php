<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\wali;

class WaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = wali::all();
        return View('wali.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wali.create');
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
            'nama'=>'required|unique:walis|max:225',
            'alamat'=>'required|min:2',
            'umur'=>'required|min:2',
            'pekerjaan'=>'required|min:2',
        ]);

        $posts = new wali;
        $posts->nama = $request->nama;
        $posts->alamat = $request->alamat;
        $posts->umur = $request->umur;
        $posts->pekerjaan = $request->pekerjaan;
        $posts->save();
        return redirect()->route('wali.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = wali::findOrFail($id);
        return view('wali.show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = wali::findOrFail($id);
        return view('wali.edit', compact('posts'));
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
            'alamat'=>'required|min:2',
            'umur'=>'required|min:2',
            'pekerjaan'=>'required|min:2',
        ]);

        $posts = wali::findOrFail($id);
        $posts->nama = $request->nama;
        $posts->alamat = $request->alamat;
        $posts->umur = $request->umur;
        $posts->pekerjaan = $request->pekerjaan;
        $posts->save();
        return redirect()->route('wali.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = wali::findOrFail($id);
        $posts->delete();
        return redirect()->route('wali.index');
    }
}
