<?php
  require_once 'Connection.php';

  if(isset($_POST['save'])){
		$name = $_POST['name'];
		$prenom = $_POST['prenom'];
		$email = $_POST['email'];
		$password = strtoupper(hash('sha256', $_POST['password']));
		$confermepassword = strtoupper(hash('sha256', $_POST['confermepassword']));

		$sql = "INSERT INTO `Signup` (Name, Prenom, email, Password, ConfermePassword) 
            VALUES ('$name', '$prenom', '$email', '$password', '$confermepassword')"; 

    if(!mysqli_query($conn,$sql)){
        die('impossible d’ajouter cet enregistrement : ' . mysqli_error());
    }

    echo "L’enregistrement est ajouté ";

		header('location: index.php');
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
</head>
<body class="bg-light">
  <div class="container w-50 mt-5 p-5 bg-white shadow-lg p-3 mb-5 rounded">
    <form action="" method="POST">
      <div class="border-start border-info border-5 col-12 mb-4 ms-3">
        <h1 class="ms-2">E-classe</h1>
      </div>
      <div class="form-group mb-3">
        <label for="name ">Name</label>
        <input type="name" class="form-control mt-2" id="name" name="name" placeholder="Enter Name" required>
      </div>
      <div class="form-group mb-3">
        <label for="prenom ">Prenom</label>
        <input type="name" class="form-control mt-2" id="prenom" name="prenom" placeholder="Enter Prenom" required>
      </div>
      <div class="form-group mb-3">
        <label for="email ">Email</label>
        <input type="email" class="form-control mt-2" id="email" name="email" placeholder="Enter Email" required>
      </div>
      <div class="form-group mb-3">
        <label for="password ">Password</label>
        <input type="password" class="form-control mt-2" id="password" name="password" placeholder="Enter Password" required>
      </div>
      <div class="form-group mb-3">
        <label for="password ">Conferme Password</label>
        <input type="password" class="form-control mt-2" id="confermepassword" name="confermepassword" placeholder="Enter Password" required>
      </div>
      <button type="submit" class="btn btn-primary mt-2 px-4" name="save">Submit</button>
      <a href="index.php" class="btn btn-secondary mt-2 px-3  ">Cancel</a>
      <div class="d-flex mt-4">
        <p>Already have an account?</p>
        <a class=" text-decoration-none fw-bold ms-1" href="index.php">Login here</a>
      </div>
    </form>
  </div>
</body>
</html>