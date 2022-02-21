<?php

  require_once 'Connection.php';

    // Create Table Students
  $sql = "CREATE TABLE students(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    img VARCHAR(255) NOT NULL,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    number VARCHAR(50) NOT NULL,
  
    Date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
  
    if(!mysqli_query($conn, $sql)){
      echo "Table Students created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }



    // Create Table Payments 
    $sql = "CREATE TABLE payments(
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(30) NOT NULL,
      PaymentSchedule VARCHAR(50) NOT NULL,
      BillNumber INT(50) NOT NULL,
      AmountPaid INT(50) NOT NULL,
      BalanceAmount INT(50) NOT NULL,
    
      Date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      )";
    
      if($conn->query($sql) === TRUE){
        echo "Table Payments created successfully";
      } else {
        echo "Error creating table: " . $conn->error;
      }


      
      // Create Table Courses
      $sql = "CREATE TABLE courses(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Title VARCHAR(255) NOT NULL,
        Price VARCHAR(30) NOT NULL,
        Description VARCHAR(20) NOT NULL,
        DateLancement VARCHAR(50) NOT NULL,
        DateFinish VARCHAR(50) NOT NULL,
      
        Date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
      
        if($conn->query($sql) === TRUE){
          echo "Table Students created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }
      
        // Create Table SignUp
      $sql = "CREATE TABLE SignUp(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Name VARCHAR(255) NOT NULL,
        Prenom VARCHAR(30) NOT NULL,
        email VARCHAR(20) NOT NULL,
        Password VARCHAR(50) NOT NULL,
        ConfermePassword VARCHAR(50) NOT NULL,
      
        Date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
      
        if($conn->query($sql) === TRUE){
          echo "Table Students created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }

?>