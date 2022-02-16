<?php
    require_once 'Connection.php';
    // if(!(isset($_SESSION['username']))){
    //    header("location: index.php");
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
        <title>Dashbord Courses</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/index.css">
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
              <nav class="navbar navbar-expand-lg pt-3">
                <div class="container-fluid">
                    <h1 class="fs-3">Courses</h1>
                    <form class="d-flex px-3">
                      <i class="bi bi-arrows-expand fs-5 me-3"></i>
                      <a href="AddCourses.php" class="btn btn-outline-success ps-5 pe-5 bg-info text-light border-0" type="submit">ADD NEW COURSE</a>
                    </form>
                </div>
            </nav>

            <div class="container-fluid table-responsive">

            <table class="table  table-borderless">
              <thead>
                <tr class="text-secondary">
                  <th scope="col"></th>
                  <th scope="col">Title</th>
                  <th scope="col">Price</th>
                  <th scope="col">description</th>
                  <th scope="col">Date Lancement</th>
                  <th scope="col">Date Finish</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                 <?php $results = mysqli_query($conn, "SELECT * FROM `courses`"); 
                 while($Students = mysqli_fetch_array($results)) {?>
                    <tr class=" bg-white  mb-3 align-middle border-5 border-light ">
                        <td><?php echo $Students['id'] ?></td>
                        <td><?php echo $Students['Title'] ?></td>
                        <td><?php echo $Students['Price'] ?>DHS</td>
                        <td><?php echo $Students['Description'] ?></td>
                        <td><?php echo $Students['DateLancement'] ?></td>
                        <td><?php echo $Students['DateFinish'] ?></td>
                        <td class="d-flex fs-4 text-info border-0 text-end">
                        <a href="editecourses.php?edit=<?php echo $Students['id']; ?>" class="edit_btn" ><i class="bi bi-pen-fill text-info fs-3 me-3"></i></a>
                        <a href="deletecourses.php?delete=<?php echo $Students['id']; ?>" class="del_btn"><i class="bi bi-archive-fill text-info fs-3 me-3"></i></a>
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