<?php
session_start();
if(isset($_SESSION['user_id'])) {
    header('location: index.php');
}
include "koneksi.php";
if(isset($_POST['login'])) {
    $query = "SELECT * FROM login WHERE username = :username";
    $stmt = $conn->prepare($query);
    $stmt->execute(
        array(':username' => $_POST['username'])
    );
    $count = $stmt->rowCount();
    if($count > 0) {
        $results = $stmt->fetchAll();
        foreach($results as $row) {
            if($row['password'] == md5($_POST['password'])) {
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['username'] = $row['username'];
                $subquery = "INSERT INTO login_details (user_id) VALUES ('".$row['user_id']."')";
                $stmt = $conn->prepare($subquery);
                $stmt->execute();
                $_SESSION['login_details_id'] = $conn->lastInsertId();
                header('location: index.php');
            }else {
                $message = '<div class="alert alert-danger" role="alert"><b>Password Salah!!</b></div>';
            }
        }

    }else {
        $message = '<div class="alert alert-danger" role="alert"><b>Username dan Password Tidak Tersedia!!</b></div>';
    }
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login To Chat</title>
	<link rel="icon" type="image/png" href="img/favicon.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<style>
	body,html{
			height: 100%;
			margin: 0;
			background: #7F7FD5;
	        background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
	        background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
		}

	</style>
</head>
<body>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<p class="text-center">Form Login</p>
				<table class="table">
				  <form method="post" action="">
				  	<tr>
				  		<td>
				  			<label for=""><?php if(isset($message)) {echo $message;} ?></label>
				  		</td>
				  	</tr>
					<tr>
						<td><input type="text" name="username" class="form-control" placeholder="Username.."></td>
					</tr>
					<tr>
						<td><input type="password" name="password" class="form-control" placeholder="Password.."></td>
					</tr>
					<tr>
						<td> <button type="submit" class="btn btn-primary btn-block" name="login" ><i class="fa fa-location-arrow"></i> Login</button></td>
					</tr>
			   </form>
                    <tr>
                        <td><a href="registrasi.php" class="btn btn-warning btn-block">Registrasi</a></td>
                    </tr>
                  
			</table>
			</div>		
			
		</div>
	</div>
</body>
</html>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
