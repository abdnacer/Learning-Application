<?php
  require_once 'Connection.php';

  if(isset($_POST['save'])){
		$img = $_POST['img'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$number = $_POST['number'];

		$sql = "INSERT INTO `students` (img, name, email, phone, number) 
            VALUES ('$img', '$name', '$email', '$phone', '$number')"; 

    if(!mysqli_query($conn,$sql)){
        die('impossible d’ajouter cet enregistrement : ' . mysqli_error());
    }

    echo "L’enregistrement est ajouté ";

		header('location: Dashbord_Student.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Create Students</title>
</head>
<body>
  <div class="container w-50 pt-5" >
    <form method="POST">
      <div class="form-group mb-3">
        <label for="formFile" class="form-label"></label>
        <input class="form-control shadow-none" type="file" name="img" id="img">
      </div>

      <div class="form-group mb-3">
        <label for="Name ">Name</label>
        <input type="name" class="form-control mt-2" id="name" name="name" placeholder="Enter name" required>
      </div>

      <div class="form-group mb-3">
        <label for="email">Email</label>
        <input type="email" class="form-control mt-2" id="email" name="email" placeholder="Enter email" required>
      </div>
      
      <div class="form-group mb-3">
        <label for="phone">Phone</label>
        <input type="text" class="form-control mt-2" id="phone" name="phone" placeholder="Enter phone" required>
      </div>
      
      <div class="form-group mb-3">
        <label for="number">Enroll Number</label>
        <input type="text" class="form-control mt-2" id="number" name="number" placeholder="Enter number">
      </div>

      <button type="submit" class="btn btn-primary" name="save">Submit</button>
      <a href="Dashbord_Student.php" class="btn btn-secondary ml-2">Cancel</a>
    </form>
  </div>
</body>
</html>