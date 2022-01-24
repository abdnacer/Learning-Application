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
    <?php
    $TableauxPayments = [
      [
        'Name'  => 'Anas Jabllah',
        'Payment' => 'First',
        'Number' => 7305477760,
        'Paid'=> 'DHS100,000',
        'Amount'=> 'DHS500,000',
        'Date'  => "05-Jan-2022",
        'icon' => '<i class="bi bi-eye"></i>',
      ],

      [
      'Name'  => 'Abdenacer Sandali',
      'Payment' => 'Second',
      'Number' => 7305477760,
      'Paid'=> 'DHS200,000',
      'Amount'=> 'DHS1000,000',
      'Date'  => "06-Jan-2022",
      'icon' => '<i class="bi bi-eye"></i>'
      
      ],

      [
      'Name'  => 'Bader Abourial',
      'Payment' => 'Three',
      'Number' => 7305477760,
      'Paid'=> 'DHS300,000',
      'Amount'=> 'DHS1500,000',
      'Date'  => "07-Jan-2022",
      'icon' => '<i class="bi bi-eye"></i>'
      ], 

      [
      'Name'  => 'Ahmed Salim',
      'Payment' => 'Foor',
      'Number' => 7305477760,
      'Paid'=> 'DHS400,000',
      'Amount'=> 'DHS2000,000',
      'Date'  => "08-Jan-2022",
      'icon' => '<i class="bi bi-eye"></i>'
      ]
      
    ];
    ?>
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
                  <nav class="navbar navbar-expand-lg pt-3">
                    <div class="container-fluid">
                        <h1 class="fs-3">Payment Details</h1>
                        <form class="d-flex">
                          <i class="bi bi-arrows-expand fs-5 me-3"></i>
                          <button class="btn btn-outline-success ps-5 pe-5 bg-info text-light border-0" type="submit">ADD NEW STUDENT</button>
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
                      <?php foreach($TableauxPayments as $Payments) : ?>
                        <tr class=" bg-white  mb-3 align-middle border-5 border-light ">
                            <td><?php echo $Payments['Name'] ?></td>
                            <td><?php echo $Payments['Payment'] ?></td>
                            <td><?php echo $Payments['Number'] ?></td>
                            <td><?php echo $Payments['Paid'] ?></td>
                            <td><?php echo $Payments['Amount'] ?></td>
                            <td><?php echo $Payments['Date'] ?></td>
                            <td class="text-info">
                            <?php echo $Payments['icon'] ?>
                            </td>
                        </tr>
                      <?php endforeach ?>
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
