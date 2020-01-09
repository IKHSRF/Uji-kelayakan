@extends('detailsu.layout')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
                </div>
                @endif
								<div class="panel-heading">
                                    <h3 class="panel-title">Data Detail Order Masakan</h3>
                                </div>
                                <form method="get">
                                        <label>PILIH TANGGAL</label>
                                        <input type="date" name="tanggal">
                                        <input type="submit" value="FILTER">
                                    </form>
                                    <a href="/laporans/cetak_pdf" class="btn btn-primary">CETAK PDF</a>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Order</th>
                                            <th>ID Masakan</th>
                                            <th>keterangan</th>
                                            <th>Status Detail Order</th>
                                            <th width="280px">Action</th>
                                        </tr>
                                        </thead>
                                        <?php   
                            $koneksi = mysqli_connect("127.0.0.1", "root", "", "kelayakan");
                             if(isset($_GET['tanggal'])){
                                $tgl = $_GET['tanggal'];
                                $sql = mysqli_query($koneksi,"select * from orders where tanggal='$tgl'");
                            }else{
                                $sql = mysqli_query($koneksi,"select * from orders");
                            }
                            
                            while($data = mysqli_fetch_array($sql)){
			                ?>
										<tbody>
                                        @foreach ($detail_order as $order)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $order->id_order }}</td>
                                            <td>{{ $order->id_masakan }}</td>
                                            <td>{{ $order->keterangan }}</td>
                                            <td>{{ $order->status_detail_order }}</td>
                                            <td>
                                                <form action="{{ route('details.destroy',$order->id_detail_order) }}" method="POST">
                                
                                                    <a class="btn btn-info" href="{{ route('details.show',$order->id_detail_order) }}">Show</a>
                                    
                                                    @csrf
                                                    @method('DELETE')
                                    
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
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