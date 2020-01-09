@extends('orders.desin')
  
@section('content')
<div class="row">
<div class="row-col-lg-12 margin-tb">
<div class="pull-right">
            <a class="btn btn-primary" href="{{ route('orders.index') }}"> Back</a>
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
   
<form action="{{ route('orders.store') }}" method="POST">
    @csrf
    <input type="hidden" name="id_order" class="form-control"  placeholder="ID Order" readonly value="{{rand(1, 10000)}}">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Meja :</strong>
                <input type="text" name="no_meja" class="form-control" placeholder="No Meja">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal :</strong>
                <input type="date" name="tanggal" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID user :</strong>
                    <select name="id_user" class="form-control">
                        <option disabled="disabled" selected="selected">ID User</option>
                        @foreach ($user_array as $user)
                        <option value="{{ $user->id_user }}">{{ $user->nama_user}}</option>
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
                 <strong>Status Order Masakan :</strong>
                <select name="status_order" class="form-control">
                <option disabled selected>Status Order Masakan</option>
                <option value="Ready">Ready</option>
                <option value="Not Ready">Not Ready</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Masakan :</strong>
                <select name="id_order" class="form-control">
                    <option disabled="disabled" selected="selected">ID Order</option>
                    @foreach ($masakan_array as $detail)
                    <option value="{{ $detail->id_masakan }}">{{ $detail->id_masakan}}</option>
                    @endforeach
                 </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
   
</form>
@endsection