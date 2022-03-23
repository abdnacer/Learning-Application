<?php
    require_once 'Connection.php';
    require_once 'check_validate.php';

    if(isset($_POST['save'])){
      $img = $_POST['img'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $number = $_POST['number'];
  
      $sql = "INSERT INTO `students`  (img, name, email, phone, number) 
              VALUES ('$img', '$name', '$email', '$phone', '$number')"; 
  
      if(!mysqli_query($conn,$sql)){
          die('impossible d’ajouter cet enregistrement : ' . mysqli_error());
      }
  
      echo "L’enregistrement est ajouté ";
      header('location: Dashbord_Student.php');
    }

?>

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
        <link rel="stylesheet" href="css/style.css">
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
                    <h1 class="fs-3">Students List</h1>
                    <form class="d-flex px-3">
                      <i class="bi bi-arrows-expand fs-5 me-3"></i>
                      <button class="btn btn-outline-success ps-5 pe-5 bg-info text-light border-0" type="button" onclick="moddalForm()">ADD NEW STUDENT</button>
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
                 <?php $results = mysqli_query($conn, "SELECT * FROM `students`"); 
                 while($Students = mysqli_fetch_array($results)) {?>
                    <tr class=" bg-white  mb-3 align-middle border-5 border-light ">
                        <td><img src="images/<?php echo $Students['img'] ?>" alt="img_table"></td>
                        <td><?php echo $Students['name'] ?></td>
                        <td><?php echo $Students['email'] ?></td>
                        <td><?php echo $Students['phone'] ?></td>
                        <td><?php echo $Students['number'] ?></td>
                        <td><?php echo $Students['Date'] ?></td>
                        <td class="d-flex fs-4 text-info border-0 text-end">
                        <td>  
                        <a href="editestudents.php?edit=<?php echo $Students['id']; ?>" class="edit_btn" ><i class="bi bi-pen-fill text-info fs-3 me-3"></i></a>
                        <a href="deletestudents.php?delete=<?php echo $Students['id']; ?>" id="deleteModel" class="del_btn"><i class="bi bi-archive-fill text-info fs-3 me-3"></i></a>
                        <!-- <button class="bg-white border-0" onclick="delete()" style="cursor:pointer"><i class="bi bi-archive-fill text-info fs-3 me-3"></i></button> -->
                        <div id="model_parent_delete" class="parent_check">
                        </td>
                    </tr>
                  <?php } ?>
              </tbody>
            </table>
          </div>
            </div>
            </div>
        </div>

        <div id="model_parent" class="parent">
        <div class="models">
        <form method="POST">
        <button onclick="close_()" class="btnclose"><i class="bi bi-x-circle fs-3"></i></button>
        
        <div class="form-group mb-3">
        <label for="formFile" class="form-label"></label>
        <input class="form-control shadow-none" type="file" name="img" id="img">
        </div>

        <div class="form-group mb-3">
        <label for="Name ">Name</label>
        <input type="name" class="form-control mt-2" id="name" name="name" placeholder="Enter name" required>
      </div>

        <div class="form-group mb-3">
        <label for="email">Email</label>
        <input type="email" class="form-control mt-2" id="email" name="email" placeholder="Enter email" required>
      </div>

      <div class="form-group mb-3">
        <label for="phone">Phone</label>
        <input type="text" class="form-control mt-2" id="phone" name="phone" placeholder="Enter phone" required>
      </div>

      <div class="form-group mb-3">
        <label for="number">Enroll Number</label>
        <input type="text" class="form-control mt-2" id="number" name="number" placeholder="Enter number">
      </div>

      <button type="submit" class="btn btn-primary" name="save" onclick="saved()">Submit</button>
      <button type="submit" class="btn btn-secondary ml-2" onclick="close_()">Cancel</button>

    </form> 

    </div>
    </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>