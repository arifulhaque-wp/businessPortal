<?php

 if ( isset( $_POST['login'] ) ) {

  $admin_email = $_POST['email'];
  $admin_pass  = $_POST['password'];

  $empmsg_aemail = "";
  $empmsg_apass  = "";

  if ( empty( $admin_email ) ) {
   $empmsg_aemail = "Email not found.";
  }

  if ( empty( $admin_pass ) ) {
   $empmsg_apass = "Password not match.";
  }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Admin Login</title>

  <link rel="shortcut icon" href="../assets/images/favicon/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
  <div class="container">
    <div class="content-area">
      <h2 class="title-text">Admin Login</h2>
      <div class="form-container">
        <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post" id="login_form" class="login-form">
          <div class="avater">
            <img src="assets/images/avatar-1295397__340.webp" alt="profile">
          </div>

          <div class="field">
            <input type="email" class="form-input" id="useremail" name="email" placeholder="Admin Email">
            <span class="text-danger"><?php if ( isset( $_POST['login'] ) ) {echo $empmsg_aemail;} ?></span>
          </div>
          <div class="field">
            <input type="password" class="form-input" id="password" name="password" placeholder="password">
            <span class="text-danger"><?php if ( isset( $_POST['login'] ) ) {echo $empmsg_apass;} ?></span>
          </div>
          <div class="submit-btn">
            <button type="submit" name="login" class="btn">Login</button>
          </div>
          <div id="createAccount" class="form-text text-center my-2 text-dark">Not Registered? <a href="registration.php" class="text-dark fw-bold">Create an Account</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery-3.6.4.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>