<?php

namespace App\Http\Controllers;

use App\Masakan;
use Illuminate\Http\Request;

class MasakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masakans = Masakan::latest()->paginate(5);

        return view('masakans.index',compact('masakans'))
            ->with('i',(request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masakans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_masakan' => 'required',
            'harga' => 'required',
            'status_masakan' => 'required',
        ]);
  
        Masakan::create($request->all());
   
        return redirect()->route('masakans.index')
                        ->with('success','Data Masakan Berhasil Di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Masakan  $masakan
     * @return \Illuminate\Http\Response
     */
    public function show(Masakan $masakan)
    {
        return view('masakans.show',compact('masakan'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Masakan  $masakan
     * @return \Illuminate\Http\Response
     */
    public function edit(Masakan $masakan)
    {
        return view('masakans.edit',compact('masakan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Masakan  $masakan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Masakan $masakan)
    {
        $request->validate([
            'nama_masakan' => 'required',
            'harga' => 'required',
            'status_masakan' => 'required',
        ]);

        $masakan->update($request->all());

        return redirect()->route('masakans.index')
                        ->with('success','Data Masakan Berhasil Di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Masakan  $masakan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Masakan $masakan)
    {
        $masakan->delete();
  
        return redirect()->route('masakans.index')
                        ->with('success','Data Masakan Berhasil Di Hapus');
    }
}
