<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashbord Students</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
    <?php
      $TableauxStudents = [
        [
          'img'   => './images/img_table.png',
          'Name'  => 'Anas Jabllah',
          'Email' => 'Anas Jabllah@exemple.com',
          'Phone' => 7305477760,
          'Number'=> 1234567305477760,
          'Date'  => "08-Dec-2021",
          'icon1' => '<i class="bi bi-pen "></i>',
          'icon2' => '<i class="bi bi-trash-fill ms-3"></i>',
        ],

        [
        'img'   => './images/img_table.png',
        'Name'  => 'Abdenacer Sandali',
        'Email' => 'nasseressaouira@exemple.com',
        'Phone' => 7305477760,
        'Number'=> 1234567305477760,
        'Date'  => "08-Dec-2021",
        'icon1' => '<i class="bi bi-pen "></i>',
        'icon2' => '<i class="bi bi-trash-fill ms-3"></i>'
        
        ],

        [
        'img'   => './images/img_table.png',
        'Name'  => 'Bader Abourial',
        'Email' => 'Bader_Abourial@exemple.com',
        'Phone' => 7305477760,
        'Number'=> 1234567305477760,
        'Date'  => "08-Dec-2021",
        'icon1' => '<i class="bi bi-pen "></i>',
        'icon2' => '<i class="bi bi-trash-fill ms-3"></i>'
        ], 

        [
        'img'   => './images/img_table.png',
        'Name'  => 'Ahmed Salim',
        'Email' => 'Ahmed_Salim@exemple.com',
        'Phone' => 7305477760,
        'Number'=> 1234567305477760,
        'Date'  => "08-Dec-2021",
        'icon1' => '<i class="bi bi-pen "></i>',
        'icon2' => '<i class="bi bi-trash-fill ms-3"></i>'
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
                    <h1 class="fs-3">Students List</h1>
                    <form class="d-flex">
                      <i class="bi bi-arrows-expand fs-5 me-3"></i>
                      <button class="btn btn-outline-success ps-5 pe-5 bg-info text-light border-0" type="submit">ADD NEW STUDENT</button>
                    </form>
                </div>
            </nav>

            <div class="container-fluid table-responsive">

            <table class="table  table-borderless">
              <thead>
                <tr class="text-secondary">
                  <th scope="col"></th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Enroll Number</th>
                  <th scope="col">Date of admission</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($TableauxStudents as $Students) : ?>
                    <tr class=" bg-white  mb-3 align-middle border-5 border-light ">
                        <th scope="row"><img src= <?php echo $Students['img'] ?> alt="img_table"></th>
                        <td><?php echo $Students['Name'] ?></td>
                        <td><?php echo $Students['Email'] ?></td>
                        <td><?php echo $Students['Phone'] ?></td>
                        <td><?php echo $Students['Number'] ?></td>
                        <td><?php echo $Students['Date'] ?></td>
                        <td class="d-flex fs-4 text-info border-0 text-end">
                          <?php echo $Students['icon1'] ?>
                          <?php echo $Students['icon2'] ?>
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