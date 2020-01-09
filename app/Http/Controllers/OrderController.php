<?php

namespace App\Http\Controllers;

use App\Order;
use App\Detail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::latest()->paginate(5);

        return view('orders.index',compact('orders'))
            ->with('i',(request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
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
            'no_meja' => 'required',
            'tanggal' => 'required',
            'id_user' => 'required',
            'keterangan' => 'required',
            'status_order' => 'required',
            'id_masakan' => 'required',
        ]);
        
        Order::create($request->all());

        Detail::create([
            'id_user' => $request->id_user,
            'id_order' => $request->id_order,
            'id_masakan' => $request->id_masakan,
            'keterangan' => $request->keterangan,
            'status_detail_order' => $request->status_order,
        ]);
  
   
        return redirect()->route('orders.index')
                        ->with('success','Data Order Masakan Berhasil Di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('orders.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('orders.edit',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'no_meja' => 'required',
            'tanggal' => 'required',
            'id_user' => 'required',
            'keterangan' => 'required',
            'status_order' => 'required',
            'id_masakan' => 'required',
        ]);
        $order->update($request->all());

        Detail::update([
            'id_user' => $request->id_user,
            'id_masakan' => $request->id_masakan,
            'keterangan' => $request->keterangan,
            'status_detail_order' => $request->status_order,
        ]);
        
        return redirect()->route('orders.index')
                        ->with('success','Data Order Masakan Berhasil Di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
  
        return redirect()->route('orders.index')
                        ->with('success','Data Order Masakan Berhasil Di Hapus');
    }
}
