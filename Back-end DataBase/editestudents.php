<?php 
  require_once 'Connection.php';
  require_once 'check_validate.php';
  $id = $_GET['edit'];
  $results = "SELECT * FROM students WHERE id = $id";  
  $res = mysqli_query($conn, $results);
  while($row = mysqli_fetch_assoc($res)){
    $img = $row['img'];
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $number = $row['number'];
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
        <input class="form-control shadow-none" type="file" name="img" id="img" value="<?php echo $img; ?>">
      </div>

      <div class="form-group mb-3">
        <label for="Name ">Name</label>
        <input type="name" class="form-control mt-2" id="name" name="name" placeholder="Enter name"  value="<?php echo $name; ?>"  >
      </div>

      <div class="form-group mb-3">
        <label for="email">Email</label>
        <input type="email" class="form-control mt-2" id="email" name="email" placeholder="Enter email" value="<?php echo $email; ?>">
      </div>
      
      <div class="form-group mb-3">
        <label for="phone">Phone</label>
        <input type="text" class="form-control mt-2" id="phone" name="phone" placeholder="Enter phone" value="<?php echo $phone; ?>">
      </div>
      
      <div class="form-group mb-3">
        <label for="number">Enroll Number</label>
        <input type="text" class="form-control mt-2" id="number" name="number" placeholder="Enter number" value="<?php echo $number; ?>">
      </div>

      <button type="submit" class="btn btn-primary" name="edit">Submit</button>
      <a href="Dashbord_Student.php" class="btn btn-secondary ml-2">Cancel</a>
    </form>
  </div>

  <?php
    if (isset($_POST['edit'])){

    $img = $_POST["img"] ;
    $name = $_POST["name"] ;
    $email =$_POST["email"] ;
    $phone =$_POST["phone"] ;
    $number = $_POST["number"] ;
 
     $edite_student ="UPDATE students SET img ='$img',
     name ='$name', 
     email ='$email',
     phone ='$phone',
     number ='$number' 
     where id = '$id'";
     mysqli_query($conn, $edite_student);
 
         header('location: Dashbord_Student.php');
       }
  ?>
</body>
</html>