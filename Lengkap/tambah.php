<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="stylee.css">
    <title>TAMBAH DATA</title>
	<style type='text/css'>
        .in{
            border-bottom: 100% solid #ccc;
            border-left: none;
            border-right: none;
            border-top: none;
            outline: none;
            width:100%;
			margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container-logout">
		<center>
		<p class="login-text" style="font-size: 2rem; font-weight: 800;">Tambah Data</p>
		</center>
    <br/>
	<p class="login-register-text"><a href="berhasil_login.php">KEMBALI</a></p>
	<br/>

	
	<form method="post" action="tambah_aksi.php" class="login-email">
			<table style="width:100%;">
				<tr>			
					<td>Nama</td>
					<td><input type="text" name="nama" class="in"></td>
				</tr>
				<tr>
					<td>NIK</td>
					<td><input type="number" name="nik" class="in"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" class="in"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN" style="margin-top: 10px;"></td>
				</tr>
			</table>    
        </form>
    </div>
</body>
</html>
