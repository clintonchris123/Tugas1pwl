<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function show_postingan()
    {
        return view('admin.postingan');
    }
    
    public function show_akun()
    {
        return view('admin.akun');
    }

    public function show_tentang()
    {
        return view('admin.tentang');
    }

    public function show_terbaru()
    {
        return view('admin.terbaru');
    }
    
    public function show_populer()
    {
        return view('admin.populer');
    }
    
    public function show_keluar()
    {
        return view('admin.keluar');
    }
    
    public function show_arsip()
    {
        return view('admin.arsip');
    }

    public function show_terkini()
    {
        return view('admin.terkini');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
