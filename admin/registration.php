<?php

 session_start();
 if ( isset( $_SESSION['adminUser'] ) ) {
  header( 'Location:dashboard.php' );
 }
 require_once "../db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Registration</title>

    <link rel="shortcut icon" href="../assets/images/favicon/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
    <div class="container">
        <div class="content-area">
            <h2 class="title-text">Admin Registration</h2>
            <div class="form-container">
                <?php
                 if ( isset( $_POST['submit'] ) ) {

                  $admin_name     = $_POST['name'];
                  $admin_email    = $_POST['email'];
                  $admin_pass     = $_POST['password'];
                  $admin_con_pass = $_POST['conpassword'];

                  $admin_pass_hash = password_hash( $admin_pass, PASSWORD_DEFAULT );

                  $errors = array();

                  if ( empty( $admin_name ) OR empty( $admin_email ) OR empty( $admin_pass ) OR empty( $admin_con_pass ) ) {
                   array_push( $errors, "All fields are required" );
                  }

                  if ( !filter_var( $admin_email, FILTER_VALIDATE_EMAIL ) ) {
                   array_push( $errors, "Email is not valid" );
                  }

                  if ( strlen( $admin_pass ) < 5 ) {
                   array_push( $errors, "Password must be at least 5 character long" );
                  }

                  if ( $admin_pass !== $admin_con_pass ) {
                   array_push( $errors, "Password does not match" );
                  }

                  $sql      = "SELECT * FROM admin WHERE email = '$admin_email'";
                  $result   = mysqli_query( $conn, $sql );
                  $rowCount = mysqli_num_rows( $result );

                  if ( $rowCount > 0 ) {
                   array_push( $errors, "Email already exists!" );
                  }

                  if ( count( $errors ) > 0 ) {
                   foreach ( $errors as $error ) {
                    echo "<div class='alert alert-danger'>$error</div>";
                   }
                  } else {

                   $sql         = "INSERT INTO admin (name, email, password) VALUES(?,?,?)";
                   $stmt        = mysqli_stmt_init( $conn );
                   $prepareStmt = mysqli_stmt_prepare( $stmt, $sql );

                   if ( $prepareStmt ) {
                    mysqli_stmt_bind_param( $stmt, "sss", $admin_name, $admin_email, $admin_pass_hash );
                    mysqli_stmt_execute( $stmt );
                    echo "<div class='alert alert-success'>Registared Successfully.</div>";
                   } else {
                    die( "Something went wrong." );
                   }
                  }
                 }
                ?>
                <form class="login-form" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="POST">
                    <div class="mb-3">
                        <input type="name" class="form-control" id="username" name="name" placeholder="Admin Name">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="useremail" name="email" placeholder="Admin Email" >
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="conpassword" name="conpassword" placeholder="Confirm password" >
                    </div>
                    <div class="submit-btn">
                        <button type="submit" name="submit" class="btn">Register</button>
                    </div>
                    <div id="createAccount" class="form-text text-center my-2 text-dark">
                        Have Account?
                        <a href="index.php" class="text-dark fw-bold">Please Login</a>
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