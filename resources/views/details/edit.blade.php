@extends('details.desin')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data Detail Order Masakan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('details.index') }}"> Back</a>
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
  
    <form action="{{ route('details.update',$detail->id_detail_order) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Order :</strong>
                <input type="text" name="id_order" class="form-control" placeholder="ID order" value="{{ $detail->id_order }}"> 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Masakan :</strong>
                    <select name="id_masakan" class="form-control">
                        <option selected="selected" value="{{ $detail->id_masakan }}">{{ $detail->id_masakan }}</option>
                        @foreach ($masakan_array as $masakan)
                        <option value="{{ $masakan->id_masakan }}">{{ $masakan->nama_masakan}}</option>
                        @endforeach
                    </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan :</strong>
                <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" value="{{ $detail->keterangan }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                 <strong>Status Detail Order Masakan :</strong>
                <select name="status_order" class="form-control">
                <option selected value="{{ $detail->status_detail_order }}">{{$detail->status_detail_order}}</option>
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