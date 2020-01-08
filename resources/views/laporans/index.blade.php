@extends('laporans.layout')
@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
								<div class="panel-heading">
                                    <h3 class="panel-title">Data Transaksi</h3>
                                   <div class="pull-right">
                                   <form method="get">
                                        <label>PILIH TANGGAL</label>
                                        <input type="date" name="tanggal">
                                        <input type="submit" value="FILTER">
                                    </form>
                                    <a href="/laporans/cetak_pdf" class="btn btn-primary">CETAK PDF</a>
                                    </div>
								</div>
                                <div class="panel-body">
									<table class="table table-hover">
										<thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Transaksi</th>
                                            <th>ID User</th>
                                            <th>ID Order</th>
                                            <th>Tanggal</th>
                                            <th>Harga Total</th>
                                            <th>ID Masakan</th>
                                        </tr>
										</thead>
                            <?php   
                            $koneksi = mysqli_connect("127.0.0.1", "root", "", "kelayakan");
                             if(isset($_GET['tanggal'])){
                                $tgl = $_GET['tanggal'];
                                $sql = mysqli_query($koneksi,"select * from transaksis where tanggal='$tgl'");
                            }else{
                                $sql = mysqli_query($koneksi,"select * from transaksis");
                            }
                            
                            while($data = mysqli_fetch_array($sql)){
			                ?>
                                        @foreach ($transaksis as $transaksi)
                                        <tbody>
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $transaksi->id_transaksi }}</td>
                                            <td>{{ $transaksi->id_user }}</td>
                                            <td>{{ $transaksi->id_order }}
                                            </td>
                                            <td>{{ $transaksi->tanggal }}
                                            </td>
                                            <td>{{ "Rp". number_format( $transaksi['total_bayar'],2,",",".")}}
                                            </td>
                                            <td>{{ $transaksi->id_masakan }}
                                            </td>
                                        </tr>
                                        @endforeach
										</tbody>
									</table>
								</div>
							</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    }
 ?>
@endsection