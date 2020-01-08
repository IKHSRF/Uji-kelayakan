<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<center>
		<h5>Laporan Transaksi</h4>
	</center>
 
	<center><table class='table table-bordered'>
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
		<tbody>
        @php $i=1 @endphp
        @foreach ($transaksis as $transaksi)
			<tr>
                <td>{{ ++$i }}</td>
                <td>{{ $transaksi->id_transaksi }}</td>
                <td>{{ $transaksi->id_user }}</td>
                <td>{{ $transaksi->id_order }}
                </td>
                <td>{{ $transaksi->tanggal }}
                </td>
                <td>{{ $transaksi->total_bayar }}
                </td>
                <td>{{ $transaksi->id_masakan }}
                </td>
			</tr>
			@endforeach
		</tbody>
	</table></center>
 
</body>
</html>