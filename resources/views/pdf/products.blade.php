<!DOCTYPE html>
<html>
<head>
	<title>Produc Report</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head> 
<body>

	<div class="container-fluid">
		<center>
			<a target="_blank" href="https://www.zuramai.net/">
            </a>
			<h4>Product List</h4>
		</center>
		<br/>
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>Product Id</th>
					<th>Product Name</th>
					<th>Price</th>
					<th>Product Personal Number</th>
					<th>Category</th>
					<th>Stock</th>
				</tr>
			</thead>
			<tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->name }}</td>
                    <td>AED {{ number_format($product->price) }}</td>
                    <td>{{ $product->ppn }}%</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->stock }}</td>
                </tr>
            @endforeach
			</tbody>
		</table>

	</div>

</body>
</html>