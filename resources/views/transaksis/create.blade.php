@extends('transaksis.desin')
  
@section('content')
<div class="row">
<div class="row-col-lg-12 margin-tb">
<div class="pull-right">
            <a class="btn btn-primary" href="{{ route('transaksis.index') }}"> Back</a>
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
   
<form action="{{ route('transaksis.store') }}" method="POST">
    @csrf
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID user :</strong>
                    <select name="id_user" class="form-control">
                        <option disabled="disabled" selected="selected">ID User</option>
                        @foreach ($user_array as $user)
                        <option value="{{ $user->nama_user }}">{{ $user->nama_user}}</option>
                        @endforeach
                    </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Detail Order :</strong>
                <select name="id_order" class="form-control" onchange='changeValue(this.value)'>
                    <option disabled="disabled" selected="selected">ID Order</option>
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
                <input type="date" name="tanggal" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Masakan :</strong>
                <input type="text" name="id_masakan" id="id_masakan" class="form-control" placeholder="ID Masakan" onchange='changeValueN(this.value)' readonly>
                <?php
                $con = mysqli_connect("127.0.0.1", "root","", "kelayakan");
                $query=mysqli_query($con, "select * from masakans order by nama_masakan asc");
                $result = mysqli_query($con, "select * from masakans");
                $jsArrayN = "var nisNama = new Array();\n";
                while ($rowa = mysqli_fetch_array($result)) {
                $jsArrayN .= "nisNama['" . $rowa['nama_masakan'] . "'] = {harga:'" . addslashes($rowa['harga']) . "' };\n";
                }
                ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Total :</strong>
                <input type="number" name="total_bayar" id="harga_total" class="form-control" value="0" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
   
</form>
    <script>
            <?php echo $jsArray; ?>
            function changeValue(id){
            console.log(id);
            console.log(nisName);
            document.getElementById('id_masakan').value = nisName[id].id_masakan
            changeValueN(document.getElementById('id_masakan').value);
        }
        </script>
        <script>
            <?php echo $jsArrayN; ?>
            function changeValueN(id){
            console.log(id);
            console.log(nisNama);
            document.getElementById('harga_total').value = nisNama[id].harga
            total();
        }
        </script>
@endsection