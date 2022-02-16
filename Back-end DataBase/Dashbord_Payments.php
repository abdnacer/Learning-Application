<?php
    require_once 'Connection.php';
    // if(!(isset($_SESSION['username']))){
    //    header("location: login.php");
    //    exit();
    // }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashbord Payments</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
    
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php
                require_once 'SideBar.php'
            ?>

            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <?php
                  require_once 'NavBarDashbord.php'
                ?>
                
                <!-- Page content-->
                <div class="bg-light navbar-light ">
                  <nav class="navbar navbar-expand-lg pt-3 mx-3">
                    <div class="container-fluid">
                        <h1 class="fs-3">Payment Details</h1>
                        <form class="d-flex px-2">
                          <i class="bi bi-arrows-expand fs-5 me-3 text-info"></i>
                        </form>
                    </div>
                  </nav>

                <div class="container-fluid table-responsive">

                  <table class="table table-borderless">
                    <thead >
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Payment Schedule</th>
                        <th scope="col">Bill Number</th>
                        <th scope="col">Amount Paid</th>
                        <th scope="col">Balance amount</th>
                        <th scope="col">Date</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $results = mysqli_query($conn, "SELECT * FROM `payments`"); 
                        while($payments = mysqli_fetch_array($results)) {?>
                        <tr class=" bg-white  mb-3 align-middle border-5 border-light ">
                        <td><?php echo $payments['name'] ?></td>
                        <td><?php echo $payments['PaymentSchedule'] ?></td>
                        <td><?php echo $payments['BillNumber'] ?></td>
                        <td><?php echo $payments['AmountPaid'] ?></td>
                        <td><?php echo $payments['BalanceAmount'] ?></td>
                        <td><?php echo $payments['Date'] ?></td>
                        <td class="d-flex fs-5  border-0 text-end">
                        <a href="showpayments.php?show=<?php echo $payments['id']; ?>" class="edit_btn" ><i class="bi bi-eye text-info"></i></a>
                        </td>
                        </tr>
                      <?php } ?>
                  </tbody>
                  </table>
              </div>
            </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
