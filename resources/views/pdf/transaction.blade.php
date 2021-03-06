<!DOCTYPE html>
<html>
<head>
	<title>Transaction Report</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container-fluid">
		<center>
			<a target="_blank" href="https://www.zuramai.net/">
            </a>
			<h4>Transaction Report</h4>
		</center>
		<br/>
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>Date</th>
					<th>Product</th>
					<th>Total Price</th>
				</tr>
			</thead>
			<tbody>
            @foreach($transactions as $transaction)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $transaction->created_at }}</td>
                    <td>
                        <ul>
                            @foreach($transaction->details as $detail)
                            <li>{{ $detail->product->name }} ({{ $detail->quantity }} buah)</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>Aed {{ number_format($transaction->total) }}</td>
                </tr>
            @endforeach
			</tbody>
		</table>

	</div>

</body>
</html>