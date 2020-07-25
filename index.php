<?php
session_start();
include 'connect.php';
if (isset($_POST['login'])) {
      $query ='SELECT * from user where username = "'.$_POST['username'].'" AND password = "'.md5($_POST['password']).'"';
      $result = mysqli_query($koneksi,$query);
        
        if(mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
            //echo "<script>alert('Login Bener');</script>";
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            header("Location: barang.php");

        } else {
            echo "<script>alert('Username atau Password Salah!');</script>";
        }
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
	      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/home.css">
        <meta charset="utf-8">
    		<meta name="viewport" content="width=device-width, initial-scale=1">
		 </head>
    <body>
    <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form action="index.php" method="post" class="form-signin">
              <div class="form-label-group">
                <input type="name" id="inputEmail" class="form-control" placeholder="Username" name="username"required autofocus>
                <label for="inputEmail">Username</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                <label for="inputPassword">Password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="login">Sign in</button>
              <hr class="my-4">
           
          </div>
        </div>
      </div>
    </div>
  </div>

    </body>
</html>