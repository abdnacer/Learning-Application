<?php
  require_once 'Connection.php';
  require_once 'check_validate.php';

  if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM students WHERE id = $id");
    
    header('location: Dashbord_Student.php');
  }
?>