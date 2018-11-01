<?php 
    include "koneksi.php";
	$qry = mysqli_query($koneksi,"SELECT * FROM users");
	$data = mysqli_fetch_array($qry);
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <section id="input-form">
		<form method="post">
            <div class="form">
				<label>id</label>
				<input type="number" name="id">
			</div>	
			<div class="form">
				<label>Username</label>
				<input type="text" name="username">
			</div>
			<div class="form">
				<label>Password</label>
				<input type="password" name="password">
			</div>
			<div class="form">
				<label>Level</label>
				<select name='level'>
					<option>Admin</option>
					<option>User</option>
					<option>Guest</option>
				</select>
			</div>
			<div class="form">
				<label>Fullname</label>
				<input id="fullname" type="text" name="fullname">
			</div>
			<div class="form">
				<input type="submit" name="simpan" value="SIMPAN">
			</div>
            </form>
            <?php
                if (isset($_POST['simpan'])) 
                {
                    $id = $_POST['id'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $level = $_POST['level'];
                    $fullname = $_POST['fullname'];
                    $tambah = mysqli_query($koneksi, "INSERT INTO users(id,username,password,level,fullname)VALUES('$id','$username','$password','$level','$fullname')");
                    if($tambah)
                    {
                        ?>
                        <script type="text/javascript">
                            alert('Tambah Berhasil ');
                            document.location.href="index.php";
                        </script>
                        <?php
                    }
                    else
                    {
                        echo "FAIL GANNN";
                    }
                }
            ?>
	</section>
</body>
</html>