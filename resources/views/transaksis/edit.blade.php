@extends('transaksis.desin')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Transaksi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('transaksis.index') }}"> Back</a>
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
  
    <form action="{{ route('transaksis.update',$transaksi->id_transaksi) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID user :</strong>
                    <select name="id_user" class="form-control">
                        <option selected="selected" value="{{ $transaksi->id_user }}">{{ $transaksi->id_user }}</option>
                        @foreach ($user_array as $user)
                        <option value="{{ $user->id_user }}">{{ $user->nama_user}}</option>
                        @endforeach
                    </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Detail Order :</strong>
                <select name="id_order" class="form-control" onchange='changeValue(this.value)'>
                    <option selected="selected" value="{{ $transaksi->id_order }}">{{ $transaksi->id_order }}</option>
                    @foreach ($detail_array as $detail)
                    <option value="{{ $detail->id_detail_order }}">{{ $detail->id_detail_order}}</option>
                    @endforeach
                    <?php   
                    $con = mysqli_connect("127.0.0.1", "root","", "kelayakan");
                    $query=mysqli_query($con, "select * from detail_order order by id_detail_order asc");
                    $result = mysqli_query($con, "select * from detail_order");
                    $jsArray = "var nisName = new Array();\n";
                    while ($row = mysqli_fetch_array($result)) {
                    $jsArray .= "nisName['" . $row['id_detail_order'] . "'] = {id_masakan:'" . addslashes($row['id_masakan']) . "' };\n";
                    }
                ?>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal :</strong>
                <input type="date" name="tanggal" class="form-control" value="{{ $transaksi->tanggal }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Masakan :</strong>
                <input type="text" name="id_masakan" id="id_masakan" class="form-control" placeholder="ID Masakan" onchange='changeValueN(this.value)' value="{{ $transaksi->id_masakan }}" readonly>
                <?php
                $con = mysqli_connect("127.0.0.1", "root","", "kelayakan");
                $query=mysqli_query($con, "select * from masakans order by id_masakan asc");
                $result = mysqli_query($con, "select * from masakans");
                $jsArrayN = "var nisNama = new Array();\n";
                while ($rowa = mysqli_fetch_array($result)) {
                $jsArrayN .= "nisNama['" . $rowa['id_masakan'] . "'] = {harga:'" . addslashes($rowa['harga']) . "' };\n";
                }
                ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Total :</strong>
                <input type="number" name="total_bayar" id="harga_total" class="form-control" value="{{ $transaksi->total_bayar }}" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
   
    </form>
@endsection