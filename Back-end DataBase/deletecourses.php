<?php
  require_once 'Connection.php';
  session_start();
    if(!(isset($_SESSION['username']))){
       header("location: index.php");
       exit();
    }
  if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM courses WHERE id = $id");
    header('location: Dashbord_Courses.php');
  }
?>