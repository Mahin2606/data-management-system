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
              <li class="breadcrumb-item active">Monthly Records Account</li>
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
              <?php
                // R Operations for Records
                $do = isset( $_GET['do'] ) ? $_GET['do'] : 'TA';

                if ( $do == 'TA' ) { ?>
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Tahsin Agro Monthly Records</h3>
                      </div>
                      <div class="card-body" style="display: block; overflow-x: auto;">
                        
                        <table id="allRecords" class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">#Sl.</th>
                              <th scope="col">Time Duration</th>
                              <th scope="col">Lime In</th>
                              <th scope="col">Lime Out</th>
                              <th scope="col">Total Production</th>
                              <th scope="col">Total Cash</th>
                              <th scope="col">Total Cost</th>
                              <th scope="col">Revenue</th>
                            </tr>
                          </thead>
                          <tbody>

                            <?php
                              $sql = "SELECT * FROM tahsin_agro_mr";
                              $allRecords = mysqli_query($db, $sql);
                              $i = 0;
                              while( $row = mysqli_fetch_assoc($allRecords) ) {
                                $id             = $row['id'];
                                $time_duration  = $row['time_duration'];
                                $lime_in        = $row['lime_in'];
                                $lime_out       = $row['lime_out'];
                                $total_prod     = $row['total_prod'];
                                $total_cash     = $row['total_cash'];
                                $total_cost     = $row['total_cost'];
                                $revenue        = $row['revenue'];
                                $i++;
                                ?>

                                <tr>
                                  <th scope="row"><?php echo $i; ?></th>
                                  <td><?php echo $time_duration; ?></td>
                                  <td><?php echo $lime_in; ?></td>
                                  <td><?php echo $lime_out; ?></td>
                                  <td><?php echo $total_prod; ?></td>
                                  <td><?php echo $total_cash; ?></td>
                                  <td><?php echo $total_cost; ?></td>
                                  <td><?php echo $revenue; ?></td>
                                </tr>

                            <?php  }
                            ?>
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                <?php }

                else if ( $do == 'IA' ) { ?>
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Ishfaq Agro Monthly Records</h3>
                      </div>
                      <div class="card-body" style="display: block; overflow-x: auto;">
                        
                        <table id="allRecords" class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">#Sl.</th>
                              <th scope="col">Time Duration</th>
                              <th scope="col">Lime In</th>
                              <th scope="col">Lime Out</th>
                              <th scope="col">Total Production</th>
                              <th scope="col">Total Cash</th>
                              <th scope="col">Total Cost</th>
                              <th scope="col">Revenue</th>
                            </tr>
                          </thead>
                          <tbody>

                            <?php
                              $sql = "SELECT * FROM ishfaq_agro_mr";
                              $allRecords = mysqli_query($db, $sql);
                              $i = 0;
                              while( $row = mysqli_fetch_assoc($allRecords) ) {
                                $id             = $row['id'];
                                $time_duration  = $row['time_duration'];
                                $lime_in        = $row['lime_in'];
                                $lime_out       = $row['lime_out'];
                                $total_prod     = $row['total_prod'];
                                $total_cash     = $row['total_cash'];
                                $total_cost     = $row['total_cost'];
                                $revenue        = $row['revenue'];
                                $i++;
                                ?>

                                <tr>
                                  <th scope="row"><?php echo $i; ?></th>
                                  <td><?php echo $time_duration; ?></td>
                                  <td><?php echo $lime_in; ?></td>
                                  <td><?php echo $lime_out; ?></td>
                                  <td><?php echo $total_prod; ?></td>
                                  <td><?php echo $total_cash; ?></td>
                                  <td><?php echo $total_cost; ?></td>
                                  <td><?php echo $revenue; ?></td>
                                </tr>

                            <?php  }
                            ?>
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                <?php }
              ?>
            <?php }
            else if ($_SESSION['role'] == 2) {
              if ($_SESSION['name'] == "Tahsin Agro Manager") { ?>
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Tahsin Agro Monthly Records</h3>
                    </div>
                    <div class="card-body" style="display: block; overflow-x: auto;">
                      
                      <table id="allRecords" class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#Sl.</th>
                            <th scope="col">Time Duration</th>
                            <th scope="col">Lime In</th>
                            <th scope="col">Lime Out</th>
                            <th scope="col">Total Production</th>
                            <th scope="col">Total Cash</th>
                            <th scope="col">Total Cost</th>
                            <th scope="col">Revenue</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php
                            $sql = "SELECT * FROM tahsin_agro_mr";
                            $allRecords = mysqli_query($db, $sql);
                            $i = 0;
                            while( $row = mysqli_fetch_assoc($allRecords) ) {
                              $id             = $row['id'];
                              $time_duration  = $row['time_duration'];
                              $lime_in        = $row['lime_in'];
                              $lime_out       = $row['lime_out'];
                              $total_prod     = $row['total_prod'];
                              $total_cash     = $row['total_cash'];
                              $total_cost     = $row['total_cost'];
                              $revenue        = $row['revenue'];
                              $i++;
                              ?>

                              <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $time_duration; ?></td>
                                <td><?php echo $lime_in; ?></td>
                                <td><?php echo $lime_out; ?></td>
                                <td><?php echo $total_prod; ?></td>
                                <td><?php echo $total_cash; ?></td>
                                <td><?php echo $total_cost; ?></td>
                                <td><?php echo $revenue; ?></td>
                              </tr>

                          <?php  }
                          ?>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              <?php }
              else if ($_SESSION['name'] == "Ishfaq Agro Manager") { ?>
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Ishfaq Agro Monthly Records</h3>
                    </div>
                    <div class="card-body" style="display: block; overflow-x: auto;">
                      
                      <table id="allRecords" class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#Sl.</th>
                            <th scope="col">Time Duration</th>
                            <th scope="col">Lime In</th>
                            <th scope="col">Lime Out</th>
                            <th scope="col">Total Production</th>
                            <th scope="col">Total Cash</th>
                            <th scope="col">Total Cost</th>
                            <th scope="col">Revenue</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php
                            $sql = "SELECT * FROM ishfaq_agro_mr";
                            $allRecords = mysqli_query($db, $sql);
                            $i = 0;
                            while( $row = mysqli_fetch_assoc($allRecords) ) {
                              $id             = $row['id'];
                              $time_duration  = $row['time_duration'];
                              $lime_in        = $row['lime_in'];
                              $lime_out       = $row['lime_out'];
                              $total_prod     = $row['total_prod'];
                              $total_cash     = $row['total_cash'];
                              $total_cost     = $row['total_cost'];
                              $revenue        = $row['revenue'];
                              $i++;
                              ?>

                              <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $time_duration; ?></td>
                                <td><?php echo $lime_in; ?></td>
                                <td><?php echo $lime_out; ?></td>
                                <td><?php echo $total_prod; ?></td>
                                <td><?php echo $total_cash; ?></td>
                                <td><?php echo $total_cost; ?></td>
                                <td><?php echo $revenue; ?></td>
                              </tr>

                          <?php  }
                          ?>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              <?php }
            }
          ?>
          
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

  <!-- Control Sidebar -->
  <?php include "inc/sidebar.php"; ?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include "inc/script.php"; ?>