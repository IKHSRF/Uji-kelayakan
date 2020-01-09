<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 15pt;
		}
	</style>
	<center>
		<h5>Laporan Transaksi</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
            <th>No</th>
            <th>ID Order</th>
            <th>ID Masakan</th>
            <th>keterangan</th>
            <th>Status Detail Order</th>
			</tr>
		</thead>
		<tbody>
        @php $i=1 @endphp
        @foreach ($details as $order)
			<tr>
                <td>{{ ++$i }}</td>
                <td>{{ $order->id_order }}</td>
                <td>{{ $order->id_masakan }}</td>
                <td>{{ $order->keterangan }}</td>
                <td>{{ $order->status_detail_order }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>