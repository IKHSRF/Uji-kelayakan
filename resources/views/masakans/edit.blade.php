@extends('masakans.desin')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data Masakan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('masakans.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('masakans.update',$masakan->id_masakan) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Masakan :</strong>
                <input type="text" name="nama_masakan" class="form-control" placeholder="Nama Masakan" value="{{ $masakan->nama_masakan }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group"><strong>Harga Masakan :</strong></div>
            <div class="input-group">
                <span class="input-group-addon">Rp</span>
                <input class="form-control" type="number" name="harga" class="form-control" placeholder="Harga Masakan" value="{{ $masakan->harga }}">
                <span class="input-group-addon">.00</span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>status Masakan :</strong>
                <select name="status_masakan" class="form-control">
                <option selected value="{{ $masakan->status_masakan }}">{{ $masakan->status_masakan }}</option>
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