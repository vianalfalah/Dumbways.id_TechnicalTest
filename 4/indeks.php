<!DOCTYPE html>
<html>
<head>
	<title>Test Web Aplikasi CRUD</title>
	<link rel="stylesheet" type="text/css" href="5.css">
</head>
<body>
	<div class="judul">		
		<h1>Web Aplikasi Produsen Sepeda</h1>
		<h2>Menampilkan data dari database</h2>
	
	</div>
	<br/>
 
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>
 
	<h3>Data Produk dan Importir</h3>
	<table border="1" class="table">
		<tr>
			<th>ID Produk</th>
			<th>Name</th>
			<th>Importir_ID</th>
			<th>QTY</th>
			<th>Price</th>	
			<th></th>
			<th>ID Importir</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telp</th>	
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM produk_tb,importir_tb")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['name']; ?></td>
			<td><?php echo $data['importir_id']; ?></td>
            <td><?php echo $data['qty']; ?></td>
            <td><?php echo $data['price']; ?></td>
			<td><?php echo $data['']; ?></td>
			<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['name']; ?></td>
			<td><?php echo $data['address']; ?></td>
			<td><?php echo $data['phone']; ?></td>
			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>