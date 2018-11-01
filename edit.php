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
				<input type="number" name="id" value="<?php echo $data['id'] ?>">
			</div>	
			<div class="form">
				<label>Username</label>
				<input type="text" name="username" value="<?php echo $data['username'] ?>">
			</div>
			<div class="form">
				<label>Password</label>
				<input type="password" name="password" value="<?php echo $data['password'] ?>">
			</div>
			<div class="form">
				<label>Level</label>
				<select type="text" name='level' value="<?php echo $data['level'] ?>">
					<option>Admin</option>
					<option>User</option>
					<option>Guest</option>
				</select>
			</div>
			<div class="form">
				<label>Fullname</label>
				<input id="fullname" type="text" name="fullname" value="<?php echo $data['fullname'] ?>">
			</div>
			<div class="form">
				<input type="submit" name="edit" value="UPDATE">
			</div>
            <?php
                if (isset($_POST['edit'])) 
                {
                    $id = $_POST['id'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $level = $_POST['level'];
                    $fullname = $_POST['fullname'];
                    $update = mysqli_query($koneksi, "UPDATE users SET id='$id',username='$username',password='$password',level='$level',fullname='$fullname' WHERE 1");
                    if($update)
                    {
                        ?>
                        <script type="text/javascript">
                            alert('Update Berhasil ');
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
		<!-- </form> -->
	</section>
</body>
</html>