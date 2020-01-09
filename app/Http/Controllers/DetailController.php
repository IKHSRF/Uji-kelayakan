<?php

namespace App\Http\Controllers;

use App\Detail;
use PDF;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail_order = Detail::latest()->paginate(5);

        return view('details.index',compact('detail_order'))
            ->with('i',(request()->input('page', 1) - 1) * 5);
    }

    public function cetak_pdf()
    {
    	$details = Detail::all();
 
    	$pdf = PDF::loadview('details.laporanpdf',['details'=>$details]);
    	return $pdf->download('laporan-transaksi-pdf');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('details.create');
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
            'id_order' => 'required',
            'id_masakan' => 'required',
            'keterangan' => 'required',
            'status_detail_order' => 'required',
        ]);
  
        Detail::create($request->all());
   
        return redirect()->route('details.index')
                        ->with('success','Data Detail Orde Masakan Berhasil Di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(Detail $detail)
    {
        return view('details.show',compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail $detail)
    {
        return view('details.edit',compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail $detail)
    {
        $request->validate([
            'id_order' => 'required',
            'id_masakan' => 'required',
            'keterangan' => 'required',
            'status_detail_order' => 'required',
        ]);

        $masakan->update($request->all());

        return redirect()->route('details.index')
                        ->with('success','Data Detail Order Masakan Berhasil Di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail $detail)
    {
        $detail->delete();
  
        return redirect()->route('details.index')
                        ->with('success','Data Detail Order Masakan Berhasil Di Hapus');
    }
}
