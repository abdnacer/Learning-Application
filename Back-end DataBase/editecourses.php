<?php 
  require_once 'Connection.php';
  $id = $_GET['edit'];
  $results = "SELECT * FROM courses WHERE id = $id";  
  $res = mysqli_query($conn, $results);
  while($row = mysqli_fetch_assoc($res)){
    $title = $row['Title'];
		$price = $row['Price'];
		$description = $row['Description'];
		$dateLancer = $row['DateLancement'];
		$datefin = $row['DateFinish'];
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
<title>Edite Courses</title>
</head>
<body>
  <div class="container w-50 pt-5" >
  <form method="POST">
      <div class="form-group mb-3">
        <label for="Title ">Title</label>
        <input type="name" class="form-control mt-2" id="title" name="title" value="<?php echo $title; ?>">
      </div>

      <div class="form-group mb-3">
        <label for="Price">Price</label>
        <input type="text" class="form-control mt-2" id="price" name="price" value="<?php echo $price; ?>">
      </div>
      
      <div class="form-group mb-3">
        <label for="description">Description</label>
        <input type="text" class="form-control mt-2" id="description" name="description" value="<?php echo $description; ?>">
      </div>
      
      <div class="form-group mb-3">
        <label for="DateLancement">Date Lancement</label>
        <input type="text" class="form-control mt-2" id="DateLancer" name="dateLancer" value="<?php echo $dateLancer; ?>">
      </div>
      
      <div class="form-group mb-3">
        <label for="DateFinish">Date Finish</label>
        <input type="text" class="form-control mt-2" id="datefin" name="datefin" value="<?php echo $datefin; ?>">
      </div>

      <button type="submit" class="btn btn-primary" name="edit">Submit</button>
      <a href="Dashbord_Courses.php" class="btn btn-secondary ml-2">Cancel</a>
    </form>
  </div>

  <?php
    if (isset($_POST['edit'])){

      $title = $_POST['title'];
      $price = $_POST['price'];
      $description = $_POST['description'];
      $dateLancer = $_POST['dateLancer'];
      $datefin = $_POST['datefin'];
 
     $edite_courses ="UPDATE courses SET 
     Title ='$title', 
     Price ='$price',
     Description ='$description',
     DateLancement ='$dateLancer', 
     DateFinish ='$datefin' 
     where id = '$id'";
     mysqli_query($conn, $edite_courses);
 
         header('location: Dashbord_Courses.php');
       }
  ?>
</body>
</html>