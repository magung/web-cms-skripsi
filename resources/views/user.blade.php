<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>

<body>
    <h3>Data User</h3>
    <a href="/user/tambah"> + Tambah User Baru</a>
	
	<br/>
	<br/>
    @if ($message = Session::get('error'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
     @endif
    <table border="1">
		<tr>
			<th>Nama</th>
			<th>Email</th>
            <th>Opsi</th>
		</tr>
		@foreach($data as $user)
		<tr>
			<td>{{ $user['name'] }}</td>
            <td>{{ $user['email'] }}</td>
			<td>
				<a href="/user/edit/{{ $user['id'] }}">Edit</a>
				|
				<a href="/user/hapus/{{ $user['id'] }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
</body>
</html>

{{Session::forget('error')}}