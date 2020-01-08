@extends('transaksis.layout')
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
                                    <h3 class="panel-title">Data Transaksi</h3>
                                    <div class="pull-right">
                                        <a class="btn btn-success" href="{{ route('transaksis.create') }}"> Tambah Data Order Masakan</a>
                                    </div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID transaksi</th>
                                            <th>ID User</th>
                                            <th>ID Detail Order</th>
                                            <th>Tanggal</th>
                                            <th>ID Masakan</th>
                                            <th>Total Bayar</th>
                                            <th width="280px">Action</th>
                                        </tr>
										</thead>
										<tbody>
                                        @foreach ($transaksis as $transaksi)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $transaksi->id_transaksi }}</td>
                                            <td>{{ $transaksi->id_user }}</td>
                                            <td>{{ $transaksi->id_order }}</td>
                                            <td>{{ $transaksi->tanggal }}</td>
                                            <td>{{ $transaksi->id_masakan }}</td>
                                            <td>{{ "Rp". number_format( $transaksi['total_bayar'],2,",",".")}}
                                            </td>
                                            <td>
                                                <form action="{{ route('transaksis.destroy',$transaksi->id_transaksi) }}" method="POST">
                                
                                                    <a class="btn btn-info" href="{{ route('transaksis.show',$transaksi->id_transaksi) }}">Show</a>
                                    
                                                    <a class="btn btn-primary" href="{{ route('transaksis.edit',$transaksi->id_transaksi) }}">Edit</a>
                                
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
@endsection