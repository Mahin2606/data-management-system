<?php include "inc/header.php"; ?>

  <!-- Navbar -->
  <?php include "inc/topbar.php"; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include "inc/menu.php"; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Manage All Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <?php
            if ($_SESSION['role'] == 1) { ?>
              <!-- Left Side -->
              <div class="col-lg-4">
                <!-- Add New User Start -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Add New User</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body" style="display: block;">
                    <form action="" method="POST">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required="required">
                      </div>
                      <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" required="required">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required="required">
                      </div>
                      <div class="form-group">
                        <label>Retype Password</label>
                        <input type="password" name="repassword" class="form-control" required="required">
                      </div>
                      <div class="form-group">
                        <label>User Role</label>
                        <select name="role" class="form-control" required>
                          <option value="">Please Select User Role</option>
                          <option value="1">Admin</option>
                          <option value="2">Editor</option>
                        </select>
                      </div>
                      <div class="form-group text-center">
                        <input type="submit" name="addUser" class="btn btn-block btn-primary btn-flat" value="Add New User">
                      </div>
                    </form>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- Add New User End -->

                <?php
                  // Register New User
                  if ( isset($_POST['addUser']) ){
                    $name       = $_POST['name'];
                    $email      = $_POST['email'];
                    $password   = $_POST['password'];
                    $repassword = $_POST['repassword'];
                    $role       = $_POST['role'];

                    if ( $password != $repassword ) {
                      echo '<div class="alert alert-danger">Password Doesn\'t match!!!</div>';
                    }
                    else {
                      $sql = "INSERT INTO users (name, email, password, role, join_date) VALUES ('$name', '$email', '$password', '$role', now())";

                      $addUser = mysqli_query($db, $sql);

                      if ( $addUser ){
                        $_SESSION['message'] = 'New User Registered Successfully!';
                        header("Location: users.php");
                        exit();
                      }
                      else{
                        die("MySQL Connection Faild." . mysqli_error($db));
                      }
                    }
                  }
                ?>
              </div>

              <!-- Right Side -->
              <div class="col-lg-8">
                <!-- Edit Form Start -->
                <?php
                  if (isset( $_GET['edit'] )){ 
                    $editID = $_GET['edit'];
                    
                    $sql = "SELECT * FROM users WHERE id = '$editID'";
                    $editCat = mysqli_query($db, $sql);
                    while ( $row = mysqli_fetch_assoc($editCat) ) {
                      $id         = $row['id'];
                      $name       = $row['name'];
                      $email      = $row['email'];
                      $password   = $row['password'];
                      $role       = $row['role'];
                      ?>

                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Update User Information</h3>
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                              <i class="fas fa-times"></i>
                            </button>
                          </div>
                        </div>
                        <div class="card-body" style="display: block;">
                          <form action="" method="POST">
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" name="name" class="form-control" autocomplete="off" required="required" id="name" value="<?php echo $name; ?>">
                            </div>
                            <div class="form-group">
                              <label>Email Address</label>
                              <input type="email" name="email" class="form-control" required="required" value="<?php echo $email; ?>">
                            </div>
                            <div class="form-group">
                              <label>Password</label>
                              <input type="password" name="password" class="form-control" required="required" placeholder="Change the password">
                            </div>
                            <div class="form-group">
                              <label>Retype Password</label>
                              <input type="password" name="repassword" class="form-control" required="required" placeholder="Retype the password">
                            </div>
                            <div class="form-group">
                              <label>User Role</label>
                              <select class="form-control" name="role">
                                <option value="">Please Select the Category Status</option>
                                <option value="1" <?php if ( $role == 1 ){ echo 'selected'; } ?> >Admin</option>
                                <option value="2" <?php if ( $role == 2 ){ echo 'selected'; } ?> >Editor</option>
                              </select>
                            </div>
                            <div class="form-group text-center">
                              <input type="hidden" name="updateID" value="<?php echo $id; ?>">
                              <input type="submit" name="updateUser" class="btn btn-block btn-primary btn-flat" value="Save Changes">
                            </div>
                          </form>
                        </div>
                        <!-- /.card-body -->
                      </div>
                  <?php  }                
                  }
                ?>

                <?php
                  // Update User Info
                  if (isset($_POST['updateUser'])){
                    $name       = $_POST['name'];
                    $email      = $_POST['email'];
                    $password   = $_POST['password'];
                    $repassword = $_POST['repassword'];
                    $role       = $_POST['role'];
                    $updateID   = $_POST['updateID'];

                    if ( $password != $repassword ) {
                      echo '<div class="alert alert-danger">Password Doesn\'t match!!!</div>';
                    }
                    else {
                      $sql = "UPDATE users SET name = '$name', email = '$email', password = '$password', role = '$role' WHERE id = '$updateID'";

                      $updateUser = mysqli_query($db, $sql);

                      if ( $updateUser ){
                        $_SESSION['message'] = 'User Information Updated Successfully!';
                        header("Location: users.php");
                        exit();
                      }
                      else{
                        die("MySQL Connection Faild." . mysqli_error($db));
                      }
                    }
                  }
                ?>
                <!-- Edit Form End -->

                <!-- All User Start -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Manage All Users</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body p-0" style="display: block;">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>
                                #SL.
                            </th>
                            <th>
                                User Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Password
                            </th>
                            <th>
                                User Role
                            </th>                             
                            <th>
                              Action
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            $sql = "SELECT * FROM users";
                            $allUsers = mysqli_query($db, $sql);
                            $i = 0;
                            while ( $row = mysqli_fetch_assoc($allUsers) ) {
                              $id       = $row['id'];
                              $name     = $row['name'];
                              $email    = $row['email'];
                              $password = $row['password'];
                              $role     = $row['role'];
                              $i++;
                              ?>

                              <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $password; ?></td>
                                <td>
                                  <?php
                                    if ( $role == 1 ){ ?>
                                      <span class="badge badge-warning ">Admin</span>
                                    <?php }
                                    else if ( $role == 2 ){ ?>
                                      <span class="badge badge-success">Editor</span>
                                    <?php }
                                  ?>
                                </td>
                                <td>
                                  <a class="btn btn-info btn-sm" href="users.php?edit=<?php echo $id; ?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                  </a>
                                  <?php
                                    if ($role == 1) {
                                      
                                    }
                                    else { ?>
                                      <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#delete<?php echo $id; ?>">
                                        <i class="fas fa-trash">
                                        </i>
                                      </a>
                                    <?php }
                                  ?>
                                </td>
                              </tr>

                              <!-- Delete Modal -->
                              <div class="modal fade" id="delete<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Do you Confirm to delete this user?</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="delete-option text-center">
                                        <ul>
                                          <li><a href="users.php?delete=<?php echo $id; ?>" class="btn btn-danger">Delete</a></li>
                                          <li><button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button></li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            <?php  }
                            ?>
                            
                        </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- All Category End -->
              </div>
            <?php }
            else {
              echo '<div class = "alert alert-danger"><h5>Sorry!! You have no access in this page.</h5></div>';
            }
          ?>

        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
    // Delete Category Query
    if ( isset( $_GET['delete'] ) ){
      $delete_id = $_GET['delete'];

      $sql = "DELETE FROM users WHERE id = '$delete_id' ";
      $delete_query = mysqli_query($db, $sql);
      if ( $delete_query ){
        $_SESSION['message'] = 'User Deleted Successfully!';
        header("Location: users.php");
        exit();
      }
      else{
        die("MySQL Query Failed. " . mysqli_error($db));
      }
    }
  ?>


  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

  <!-- Control Sidebar -->
  <?php include "inc/sidebar.php"; ?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include "inc/script.php"; ?>