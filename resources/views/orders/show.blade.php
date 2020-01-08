@extends('orders.desin')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Order Masakan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('orders.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Meja :</strong>
                {{ $order->no_meja }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>Tanggal :</strong>
                {{ $order->tanggal }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>ID user :</strong>
                {{ $order->id_user }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>Keterangan :</strong>
                {{ $order->keterangan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>Status Order :</strong>
                {{ $order->status_order }}
            </div>
        </div>
    </div>
@endsection