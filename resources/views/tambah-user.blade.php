<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah User</title>
</head>
<body>
    <h3>Data User</h3>
 
	<a href="/user"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/user/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Email <input type="text" name="email" required="required"> <br/>
		Password <input type="password" name="password" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>