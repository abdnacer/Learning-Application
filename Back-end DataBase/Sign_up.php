<?php
  require_once 'Connection.php';

  if(isset($_POST['save'])){
		$name = $_POST['name'];
		$prenom = $_POST['prenom'];
    // $checkEmail = "SELECT * FROM signup WHERE '$email'";
		$email = $_POST['email'];
    // if($checkEmail === $email )
		$password = hash('ripemd160', $_POST['password']);
		$confermepassword = hash('ripemd160', $_POST['confermepassword']);
    if($password === $confermepassword){
        $sql = "INSERT INTO `Signup` (Name, Prenom, email, Password, ConfermePassword)
              VALUES ('$name', '$prenom', '$email', '$password', '$confermepassword')"; 

        if(!mysqli_query($conn,$sql)){
            die('impossible d’ajouter cet enregistrement : ' . mysqli_error());
        }

         echo "L’enregistrement est ajouté ";
        header('location: index.php');
      }
    }
		
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Sign UP</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css>
</head>
<body class="bg-light">
  <div class="container w-50 mt-5 p-5 bg-white shadow-lg p-3 mb-5 rounded">
    <div class="" id="check_Signup"></div>
    <form action="" method="POST" id="form">
      <div class="border-start border-info border-5 col-12 mb-4 ms-3">
        <h1 class="ms-2">E-classe</h1>
      </div>
      <div class="form-group mb-3">
        <label for="name ">Name</label>
        <input type="name" class="form-control mt-2 shadow-none" id="name" name="name" placeholder="Enter Name" ">
        <div class="fs-6 text-danger errorName"></div>
      </div>
      <div class="form-group mb-3">
        <label for="prenom ">Prenom</label>
        <input type="name" class="form-control mt-2 shadow-none" id="prenom" name="prenom" placeholder="Enter Prenom">
        <div class="fs-6 text-danger errorPrenom"></div>
      </div>
      <div class="form-group mb-3">
        <label for="email ">Email</label>
        <input type="text" class="form-control mt-2 shadow-none" id="email" name="email" placeholder="Enter Email">
        <div class="fs-6 text-danger errorEmail"></div>
      </div>
      <div class="form-group mb-3">
        <label for="password ">Password</label>
        <input type="password" class="form-control mt-2 shadow-none" id="password" name="password" placeholder="Enter Password">
        <div class="fs-6 text-danger errorPassword"></div>
        
      </div>
      <div class="form-group mb-3">
        <label for="password ">Conferme Password</label>
        <input type="password" class="form-control mt-2 shadow-none" id="confermepassword" name="confermepassword" placeholder="Enter Conferme Password">
        <div class="fs-6 text-danger errorConfPassword"></div>
      </div>
      <button type="submit" class="btn btn-primary mt-2 px-4 shadow-none" name="save" onclick="myFunction()">Submit</button>
      <a href="index.php" class="btn btn-secondary mt-2 px-3 shadow-none ">Cancel</a>
      <div class="d-flex mt-4">
        <p>Already have an account?</p>
        <a class=" text-decoration-none fw-bold ms-1" href="index.php">Login here</a>
      </div>
    </form>
  </div>
  

  <script src="js/scripts.js"></script>
</body>
</html>