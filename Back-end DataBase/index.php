<?php
$erroremail ="";
$errorpss ="";
 if(isset($_POST['save'])){
        if(!empty($_POST["email"]) && !empty($_POST["password"])) {
            require_once 'Connection.php';
            $email = $_POST["email"];
            $password = hash('ripemd160', $_POST['password']);
            $query = "SELECT * FROM signup WHERE email = '$email' AND Password ='$password'";
            $user = mysqli_query($conn, $query);
            if(mysqli_num_rows($user) != 0 ){
                session_start();
                $rsl = mysqli_fetch_assoc($user);
                $_SESSION['email'] = $rsl['email'];
                $_SESSION['Name'] = $rsl['Name'];
                if(isset($_POST['checkcookie'])){
                  setcookie('email', $email, time() + 60 * 60 * 24);
                }
                header('location: Dashbord_Admin.php');
            }
        }

        else{
            $erroremail = 'email incorect';
            $errorpss = 'mot de passe incorect';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sign In</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="bg-body" style="width: 100%; height: 100vh;">
    <main class="d-flex justify-content-start mt-5">
        <div class="container-fluid">
          <div class="d-flex justify-content-center">
              <div class="col-md-4 shadow col-sm-12 p-4 bg-white" style="border-radius: 20px;">
                <div class="border-start border-info border-5 col-12 mb-3 ms-3">
                  <h1 class="ms-2">E-classe</h1>
                </div>
                  <div class="text-center">
                      <h2 class="text-uppercase h4 mt-4">Sign In</h2>
                      <p class="text-muted small">
                          Enter your credentials to access your account 
                      </p>
                  </div>
                  <form method="POST">
                      <div class="p-4">
                          <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="text" class="form-control shadow-none " placeholder="Enter your email" id="email" name="email" value=<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email'];?> >
                              <p class='fs-6 text-danger'><?php echo $erroremail;?></p>
                          </div>
                          <div class="mb-3">
                              <label for="password" class="form-label">Password</label>
                              <input type="password" class="form-control shadow-none" placeholder="Enter your password" id="password" name="password">
                              <p class='fs-6 text-danger'><?php echo $errorpss;?></p>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input shadow-none" type="checkbox" value="" id="flexCheckDefault" name="checkcookie">
                            <label class="form-check-label" for="flexCheckDefault">
                                 I remember Me 
                            </label>
                            </div>

                          <input type="submit" class="btn bg-button text-center mt-2 w-100 d-flex align-items-center justify-content-center shadow-none" name="save" value="SIGN IN">
                          <div class="d-flex align-items-center mt-2 flex-column">
                            <a class="bg-link mb-3" href="#">Reset password</a>
                            <a class=" text-decoration-none fw-bold " href="Sign_up.php">Register</a>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
        </div>
    </main>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>