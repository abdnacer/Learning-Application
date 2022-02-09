<?php

  require_once 'Connection.php';

  $sql = 'CREATE DATABASE e_class_db'; 
  
  if($conn->query($sql)  === TRUE){
    echo "Database created successfully.";
  } 
  
  else{
      echo "ERROR: Could not able to execute $sql. " . $conn->error;
  }
?>