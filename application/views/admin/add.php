<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah</title>
</head>
<body>
	<form action="<?= base_url()?>admin/produk/store" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>deskripsi</td>
			<td><input type="text" name="deskripsi"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="text" name="harga"></td>
		</tr>
		<tr>
			<td>foto</td>
			<td><input type="file" name="foto"></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td><input type="text" name="kategori"></td>
		</tr>
	</table>
	<input type="submit" value="SIMPAN">
</form>
</body>
</html>
