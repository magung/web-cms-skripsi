<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
</head>
<body>
    <h3>Edit User</h3>
 
	<a href="/user"> Kembali</a>
	
	<br/>
	<br/>
 
	
	<form action="/user/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $user['id'] }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $user['name'] }}"> <br/>
		Email <input type="text" required="required" name="email" value="{{ $user['email'] }}"> <br/>
		Password <input type="password" name="password" value=""> <br/>
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>