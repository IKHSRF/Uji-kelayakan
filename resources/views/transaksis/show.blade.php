@extends('transaksis.desin')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Transaksi Masakan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('transaksis.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Transaksi :</strong>
                {{ $transaksi->id_transaksi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>ID User :</strong>
                {{ $transaksi->id_user }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>ID Order :</strong>
                {{ $transaksi->id_order }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>Tanggal :</strong>
                {{ $transaksi->tanggal }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>ID Masakan :</strong>
                {{ $transaksi->id_masakan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>Total Bayar:</strong>
                {{ $transaksi->total_bayar }}
            </div>
        </div>
    </div>
@endsection