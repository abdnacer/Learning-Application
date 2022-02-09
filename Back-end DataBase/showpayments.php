<?php
    require_once 'Connection.php';
    $id = $_GET['show'];
    $results = "SELECT * FROM payments WHERE id = $id";  
    $res = mysqli_query($conn, $results);
    $payments = mysqli_fetch_array($res)
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
        <label for="Name ">ID</label>
        <input type="name" class="form-control mt-2" id="id" name="id" value="<?php echo $payments['id']  ?>" disabled>
      </div>
      
      <div class="form-group mb-3">
        <label for="Name">Name</label>
        <input type="name" class="form-control mt-2" id="id" name="name" value="<?php echo $payments['name'] ?>" disabled>
      </div>

      <div class="form-group mb-3">
        <label for="PaymentSchedule">Payment Schedule</label>
        <input type="text" class="form-control mt-2" id="PaymentSchedule" name="PaymentSchedule" value="<?php echo $payments['PaymentSchedule'] ?>" disabled>
      </div>
      
      <div class="form-group mb-3">
        <label for="BillNumber">Bill Number</label>
        <input type="text" class="form-control mt-2" id="BillNumber" name="BillNumber" value="<?php echo $payments['BillNumber'] ?>" disabled>
      </div>
      
      <div class="form-group mb-3">
        <label for="AmountPaid">Amount Paid</label>
        <input type="text" class="form-control mt-2" id="AmountPaid" name="AmountPaid" value="<?php echo $payments['AmountPaid'] ?>"disabled>
      </div>
      
      <div class="form-group mb-3">
        <label for="BalanceAmount">Balance Amount</label>
        <input type="text" class="form-control mt-2" id="BalanceAmount" name="BalanceAmount" value="<?php echo $payments['BalanceAmount'] ?>" disabled>
      </div>

      <!-- <button type="submit" class="btn btn-primary" name="save">Submit</button> -->
      <a href="Dashbord_Payments.php" class="btn btn-secondary ml-2 ">Cancel</a>
    </form>
  </div>
</body>
</html>