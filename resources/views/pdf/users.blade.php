<!DOCTYPE html>
<html>
<head>
	<title>Report User</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container-fluid">
		<center>
			<a target="_blank" href="https://www.zuramai.net/">
            </a>
			<h4>List User</h4>
		</center>
		<br/>
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>Role</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone number</th></th>
					<th>Alamat</th>
				</tr>
			</thead>
			<tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><span class="badge badge-{{ $user->Level == 'Admin' ? 'primary' : 'secondary' }}">{{ $user->Level }}</span></td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->address }}</td>
                </tr>
            @endforeach
			</tbody>
		</table>

	</div>

</body>
</html>