<?php
  require_once 'Connection.php';

  if(isset($_POST['save'])){
		$title = $_POST['title'];
		$price = $_POST['price'];
		$description = $_POST['description'];
		$dateLancer = $_POST['dateLancer'];
		$datefin = $_POST['datefin'];

		$sql = "INSERT INTO `courses` (Title, Price, Description, DateLancement, DateFinish) 
            VALUES ('$title', '$price', '$description', '$dateLancer', '$datefin')"; 

    if(!mysqli_query($conn,$sql)){
        die('impossible d’ajouter cet enregistrement : ' . mysqli_error());
    }

    echo "L’enregistrement est ajouté ";

		header('location: Dashbord_Courses.php');
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
        <label for="Title ">Title</label>
        <input type="name" class="form-control mt-2" id="title" name="title" placeholder="Enter Title Course" required>
      </div>

      <div class="form-group mb-3">
        <label for="Price">Price</label>
        <input type="text" class="form-control mt-2" id="price" name="price" placeholder="Enter price" required>
      </div>
      
      <div class="form-group mb-3">
        <label for="description">Description</label>
        <input type="text" class="form-control mt-2" id="description" name="description" placeholder="Enter description" required>
      </div>
      
      <div class="form-group mb-3">
        <label for="DateLancement">Date Lancement</label>
        <input type="date" class="form-control mt-2" id="DateLancer" name="dateLancer" placeholder="Enter Date Lancement">
      </div>
      
      <div class="form-group mb-3">
        <label for="DateFinish">Date Finish</label>
        <input type="date" class="form-control mt-2" id="datefin" name="datefin" placeholder="Enter Date Finish">
      </div>

      <button type="submit" class="btn btn-primary" name="save">Submit</button>
      <a href="Dashbord_Courses.php" class="btn btn-secondary ml-2">Cancel</a>
    </form>
  </div>
</body>
</html>