<?php

namespace App\Http\Controllers;

use App\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksis = Transaksi::latest()->paginate(5);

        return view('transaksis.index',compact('transaksis'))
            ->with('i',(request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksis.create');
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
            'id_user' => 'required',
            'id_order' => 'required',
            'tanggal' => 'required',
            'total_bayar' => 'required',
            'id_masakan' => 'required',
        ]);
  
        Transaksi::create($request->all());
   
        return redirect()->route('transaksis.index')
                        ->with('success','Data Transaksi Berhasil Di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        return view('transaksis.show',compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        return view('transaksis.edit',compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            'id_user' => 'required',
            'id_order' => 'required',
            'tanggal' => 'required',
            'total_bayar' => 'required',
            'id_masakan' => 'required',
        ]);

        $transaksi->update($request->all());

        return redirect()->route('transaksis.index')
                        ->with('success','Data Transaksi Berhasil Di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
  
        return redirect()->route('transaksis.index')
                        ->with('success','Data Masakan Berhasil Di Hapus');
    }
}
