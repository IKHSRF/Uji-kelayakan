@extends('ordersu.layout')
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
                                    <h3 class="panel-title">Data Order Masakan</h3>
                                    <div class="pull-right">
                                        <a class="btn btn-success" href="{{ route('orders.create') }}"> Tambah Data Order Masakan</a>
                                    </div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Meja</th>
                                            <th>Tanggal</th>
                                            <th>ID user</th>
                                            <th>keterangan</th>
                                            <th>Status Order</th>
                                            <th width="280px">Action</th>
                                        </tr>
										</thead>
										<tbody>
                                        @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $order->no_meja }}</td>
                                            <td>{{ $order->tanggal }}</td>
                                            <td>{{ $order->id_user }}</td>
                                            <td>{{ $order->keterangan }}</td>
                                            <td>{{ $order->status_order }}</td>
                                            <td>
                                                <form action="{{ route('orders.destroy',$order->id_order) }}" method="POST">
                                
                                                    <a class="btn btn-info" href="{{ route('orders.show',$order->id_order) }}">Show</a>
                                    
                                                    <a class="btn btn-primary" href="{{ route('orders.edit',$order->id_order) }}">Edit</a>
                                
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