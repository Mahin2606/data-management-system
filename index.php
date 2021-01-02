<?php
  ob_start();
  session_start();
  include("inc/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>T-I Agro Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Toastr CSS -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>T-I Agro </b>Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <h5 class="login-box-msg">Please Login to Start...</h5>

      <form action="" method="POST">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required="required">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
          <br>
        </div>
        <div class="row">
          <div class="col-12">
            <input type="submit" name="login" class="btn btn-block btn-primary" value="&#x27a4;  Log In">
          </div>
          <!-- /.col -->
        </div>
      </form>

      <?php

        if (isset($_POST['login'])) {
          $email      = mysqli_real_escape_string($db, $_POST['email']);
          $password   = mysqli_real_escape_string($db, $_POST['password']);

          $sql = "SELECT * FROM users WHERE email = '$email'";
          $authUser = mysqli_query($db, $sql);
          while( $row = mysqli_fetch_assoc($authUser) ){
            $_SESSION['id']         = $row['id'];
            $_SESSION['name']       = $row['name'];
            $_SESSION['email']      = $row['email'];
            $_SESSION['password']   = $row['password'];
            $_SESSION['role']       = $row['role'];
            $_SESSION['join_date']  = $row['join_date'];

            $_SESSION['message']    = '';
          }

          if ($email == $_SESSION['email']) {
            if ($password == $_SESSION['password']) {
              header("Location: dashboard.php");
              exit();
            }
            else {
              $_SESSION['message'] = 'Invalid Password!';
              header("Location: index.php");
              exit();
            }
          }
          else {
            $_SESSION['message'] = 'Invalid Email Address!';
            header("Location: index.php");
            exit();
          }
        }

      ?>

      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Toastr JS -->
<script src="plugins/toastr/toastr.min.js"></script>
<script>
  toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": false,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "1500",
      "extendedTimeOut": "1500",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
   }
</script>
<script type="text/javascript">
  <?php
    if ($_SESSION['message'] == 'Invalid Password!') { ?>
      toastr.error('<?php echo $_SESSION['message']; ?>');
    <?php }
    else if ($_SESSION['message'] == 'Invalid Email Address!') { ?>
      toastr.error('<?php echo $_SESSION['message']; ?>');
    <?php }
  ?>
</script>

<?php
  unset($_SESSION['message']);
?>

<?php
  ob_end_flush();
?>

</body>
</html>
