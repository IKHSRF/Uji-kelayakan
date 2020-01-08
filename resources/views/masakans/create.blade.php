@extends('masakans.desin')
@section('content')
<div class="row">
<div class="row-col-lg-12 margin-tb">
<div class="pull-right">
            <a class="btn btn-primary" href="{{ route('masakans.index') }}"> Back</a>
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
   
<form action="{{ route('masakans.store') }}" method="POST">
    @csrf
  
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Masakan :</strong>
                <input type="text" name="nama_masakan" class="form-control" placeholder="Nama Masakan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                 <strong>Status Masakan :</strong>
                <select name="status_masakan" class="form-control">
                <option disabled selected>Status Masakan</option>
                <option value="Ready">Ready</option>
                <option value="Not Ready">Not Ready</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="input-group">
                <span class="input-group-addon">Rp</span>
                <input class="form-control" type="number" name="harga" class="form-control" placeholder="Harga Masakan">
                <span class="input-group-addon">.00</span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
   
</form>
@endsection