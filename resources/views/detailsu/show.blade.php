@extends('details.desin')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Detail Order Masakan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('details.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Order :</strong>
                {{ $detail->id_order }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>ID Masakan :</strong>
                {{ $detail->id_masakan}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>Keterangan :</strong>
                {{ $detail->keterangan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>Status Detail Order :</strong>
                {{ $detail->status_detail_order }}
            </div>
        </div>
    </div>
@endsection