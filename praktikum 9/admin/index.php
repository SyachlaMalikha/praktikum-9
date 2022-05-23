<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head> 
  <body>
    <div class="col-md-4 col-md-offset-4 form-login">
<div class="card-body">
            <?php
            if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
            echo "<center>Username dan password salah!</center>";
            echo "<br>";
            }else if($_GET['pesan'] == "logout"){
            echo "Berhasil logout";
            }else if($_GET['pesan'] == "belum_login"){
            echo "Silahkan Login untuk mengakses halaman admin";
            }
            }
            ?>
<form action="cek_login.php" class="inner-login" method="post">
            <h3 class="text-center title-login">Login</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                
                <input type="submit" class="btn btn-block btn-custom-green" value="LOGIN" />
          </form>
          </div>
      </div>
  </body>
</html>