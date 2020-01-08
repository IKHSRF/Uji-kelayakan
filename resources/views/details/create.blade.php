@extends('details.desin')
  
@section('content')
<div class="row">
<div class="row-col-lg-12 margin-tb">
<div class="pull-right">
            <a class="btn btn-primary" href="{{ route('details.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong>Anda memasukan inputan yang salah<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('details.store') }}" method="POST">
    @csrf
  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Order :</strong>
                <select name="id_order" class="form-control">
                    <option disabled="disabled" selected="selected">ID Order</option>
                    @foreach ($order_array as $masakan)
                    <option value="{{ $masakan->id_order }}">{{ $masakan->id_order}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Masakan :</strong>
                    <select name="id_masakan" class="form-control">
                        <option disabled="disabled" selected="selected">ID Masakan</option>
                        @foreach ($masakan_array as $masakan)
                        <option value="{{ $masakan->id_masakan }}">{{ $masakan->nama_masakan}}</option>
                        @endforeach
                    </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan :</strong>
                <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                 <strong>Status Detail Order Masakan :</strong>
                <select name="status_detail_order" class="form-control">
                <option disabled selected>Status Detail Order Masakan</option>
                <option value="Ready">Ready</option>
                <option value="Not Ready">Not Ready</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
   
</form>
@endsection