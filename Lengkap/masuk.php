<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body>
	<p class="login-text" style="font-size: 1.5rem; font-weight: 800;">Data Desa</p>
	<br/>
	<p class="login-register-text"><a href="tambah.php">Tambah Data</a></p>
	<br/>
	<table>
		<tr>
			<th>NO &nbsp;&nbsp;</th>
			<th>Nama &nbsp;&nbsp;</th>
			<th>NIK &nbsp;&nbsp;</th>
			<th>Alamat &nbsp;&nbsp;</th>
			<th>OPSI &nbsp;&nbsp;</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from data");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?>&nbsp;&nbsp;</td>
				<td><?php echo $d['nama']; ?>&nbsp;&nbsp;</td>
				<td><?php echo $d['nik']; ?>&nbsp;&nbsp;</td>
				<td><?php echo $d['alamat']; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td>
					<a class="login-register-text" style="text-decoration: none; color: #6c5ce7;" href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a> /
					<a class="login-register-text" style="text-decoration: none; color: #6c5ce7;" href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>