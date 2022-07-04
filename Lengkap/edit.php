<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="stylee.css">
    <style type='text/css'>
        .in {
            border-bottom: 100% solid #ccc;
            border-left: none;
            border-right: none;
            border-top: none;
            outline: none;
            width: 100%;
            margin-top: 10px;
        }
    </style>
    <title>EDIT DATA</title>
</head>

<body>
    <div class="container-logout">
        <center>
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Edit Data</p>
        </center>
        <br/>
        <p class="login-register-text"><a href="berhasil_login.php">KEMBALI</a></p> <br>
        <?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from data where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
            <form method="post" action="update.php">
                <table style="width: 100%;">
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                            <input class="in" type="text" name="nama" value="<?php echo $d['nama']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Nik</td>
                        <td><input class="in" type="number" name="nik" value="<?php echo $d['nik']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input class="in" type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input style="margin-top: 10px;" type="submit" value="SIMPAN"></td>
                    </tr>
                </table>
            </form>
            <?php 
	}
	?>
    </div>
</body>

</html>