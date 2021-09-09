<?php
ob_start();
include "include/koneksi.php";
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a><b>Laundry</b>Team</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Halaman Login</p>

      <form method="post">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="pass" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-10">
            <strong>Apakah Anda <a href="#" class="mb-3" data-toggle="modal" data-target="#basicModal">Lupa Password ?</a></strong>
          </div>
        </div>

        <div class="row" style="margin-top: 20px;">
          <div class="col-xs-4">
            <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>

          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <!-- modal -->
  <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Lupa Password</h4>
        </div>
        <div class="modal-body">
          <form action="" method="POST">
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="username" placeholder="Username">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="Email" placeholder="Email">
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="lupa_password">Send</button>
        </div>
        </form>
      </div>
    </div>
  </div>


  <!-- end modal -->


  <!-- jQuery 2.2.3 -->
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
</body>

</html>


<?php

// forgot password
if (isset($_POST['lupa_password'])) {
  var_dump($_POST);
}

// login
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $pass = $_POST['pass'];



  $sql = $koneksi->query("select * from tb_user where username='$username' and password='$pass'");

  $data = $sql->fetch_assoc();

  $ketemu = $sql->num_rows;
  if ($ketemu >= 1) {
    session_start();


    if ($data['level'] == "admin") {
      $_SESSION['admin'] = $data['id'];

      header("location:index.php");
    } else if ($data['level'] == "kasir") {
      $_SESSION['kasir'] = $data['id'];

      header("location:index.php");
    }
  } else {
?>
    <script type="text/javascript">
      alert("Login Gagal Username dan Password Salah... Silahkan Ulangi Kembali");
    </script>
<?php
  }
}


?>