@extends('masakans.desin')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Masakan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('masakans.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Masakan :</strong>
                {{ $masakan->nama_masakan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Harga Masakan :</strong>
                {{ "Rp". number_format( $masakan['harga'],2,",",".")}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Status Masakan :</strong>
                {{ $masakan->status_masakan }}
            </div>
        </div>
    </div>
@endsection