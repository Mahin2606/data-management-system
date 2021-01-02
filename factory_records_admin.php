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
              <li class="breadcrumb-item active">Manage All Records</li>
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
                // C-R-U Operations for Records
                $do = isset( $_GET['do'] ) ? $_GET['do'] : 'TA';

                if ( $do == 'TA' ){ ?>
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Manage Tahsin Agro Records</h3>
                      </div>
                      <div class="card-body" style="display: block; overflow-x: auto;">
                        
                        <table id="allRecords" class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">#Sl.</th>
                              <th scope="col">Input Date</th>
                              <th scope="col">Lime In</th>
                              <th scope="col">Lime Out</th>
                              <th scope="col">Lime Production (Day)</th>
                              <th scope="col">Lime Production (Night)</th>
                              <th scope="col">Total Production</th>
                              <th scope="col">Opening Cash</th>
                              <th scope="col">Receiving Cash</th>
                              <th scope="col">Total Cash</th>
                              <th scope="col">Production Labor Cost</th>
                              <th scope="col">Daily Labor Cost</th>
                              <th scope="col">Labor Food Cost</th>
                              <th scope="col">Staff Bazar</th>
                              <th scope="col">Staff Salary</th>
                              <th scope="col">Loan Given</th>
                              <th scope="col">Loan Received</th>
                              <th scope="col">Gas</th>
                              <th scope="col">Electricity</th>
                              <th scope="col">Machine Materials</th>
                              <th scope="col">Mechanic</th>
                              <th scope="col">Office Stationary</th>
                              <th scope="col">Other Expenses</th>
                              <th scope="col">Dilkusha Acc (Sir)</th>
                              <th scope="col">Burimari Acc (Sir)</th>
                              <th scope="col">Others (Sir)</th>
                              <th scope="col">Total Cost</th>
                              <th scope="col">Closing Cash</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>

                            <?php
                              $sql = "SELECT * FROM tahsin_agro";
                              $allRecords = mysqli_query($db, $sql);
                              $i = 0;
                              while( $row = mysqli_fetch_assoc($allRecords) ){
                                $id                     = $row['id'];
                                $input_date             = date("d-m-Y", strtotime($row['input_date']));
                                $lime_in                = $row['lime_in'];
                                $lime_out               = $row['lime_out'];
                                $lime_prod_day          = $row['lime_prod_day'];
                                $lime_prod_night        = $row['lime_prod_night'];
                                $total_prod             = $row['total_prod'];
                                $opening_cash           = $row['opening_cash'];
                                $receiving_cash         = $row['receiving_cash'];
                                $total_cash             = $row['total_cash'];
                                $prod_labor             = $row['prod_labor'];
                                $daily_labor            = $row['daily_labor'];
                                $labor_food             = $row['labor_food'];
                                $staff_bazar            = $row['staff_bazar'];
                                $staff_salary           = $row['staff_salary'];
                                $loan_given             = $row['loan_given'];
                                $loan_received          = $row['loan_received'];
                                $gas                    = $row['gas'];
                                $electricity            = $row['electricity'];
                                $machine_materials      = $row['machine_materials'];
                                $mechanic               = $row['mechanic'];
                                $office_stationary      = $row['office_stationary'];
                                $other_expenses         = $row['other_expenses'];
                                $pabar_sir_dilkusha_acc = $row['pabar_sir_dilkusha_acc'];
                                $pabar_sir_burimari_acc = $row['pabar_sir_burimari_acc'];
                                $pabar_sir_others       = $row['pabar_sir_others'];
                                $total_cost             = $row['total_cost'];
                                $closing_cash           = $row['closing_cash'];
                                $i++;
                                ?>

                                <tr>
                                  <th scope="row"><?php echo $i; ?></th>
                                  <td><?php echo $input_date; ?></td>
                                  <td><?php echo $lime_in; ?></td>
                                  <td><?php echo $lime_out; ?></td>
                                  <td><?php echo $lime_prod_day; ?></td>
                                  <td><?php echo $lime_prod_night; ?></td>
                                  <td><?php echo $total_prod; ?></td>
                                  <td><?php echo $opening_cash; ?></td>
                                  <td><?php echo $receiving_cash; ?></td>
                                  <td><?php echo $total_cash; ?></td>
                                  <td><?php echo $prod_labor; ?></td>
                                  <td><?php echo $daily_labor; ?></td>
                                  <td><?php echo $labor_food; ?></td>
                                  <td><?php echo $staff_bazar; ?></td>
                                  <td><?php echo $staff_salary; ?></td>
                                  <td><?php echo $loan_given; ?></td>
                                  <td><?php echo $loan_received; ?></td>
                                  <td><?php echo $gas; ?></td>
                                  <td><?php echo $electricity; ?></td>
                                  <td><?php echo $machine_materials; ?></td>
                                  <td><?php echo $mechanic; ?></td>
                                  <td><?php echo $office_stationary; ?></td>
                                  <td><?php echo $other_expenses; ?></td>
                                  <td><?php echo $pabar_sir_dilkusha_acc; ?></td>
                                  <td><?php echo $pabar_sir_burimari_acc; ?></td>
                                  <td><?php echo $pabar_sir_others; ?></td>
                                  <td><?php echo $total_cost; ?></td>
                                  <td><?php echo $closing_cash; ?></td>
                                  <td>
                                    <a class="btn btn-info btn-sm" href="factory_records_admin.php?do=EditTA&editTA=<?php echo $id; ?>">
                                      <i class="fas fa-pencil-alt">
                                      </i>
                                    </a>
                                  </td>
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
                        <h3 class="card-title">Manage Ishfaq Agro Records</h3>
                      </div>
                      <div class="card-body" style="display: block; overflow-x: auto;">
                        
                        <table id="allRecords" class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">#Sl.</th>
                              <th scope="col">Input Date</th>
                              <th scope="col">Lime In</th>
                              <th scope="col">Lime Out</th>
                              <th scope="col">Lime Production (Day)</th>
                              <th scope="col">Lime Production (Night)</th>
                              <th scope="col">Total Production</th>
                              <th scope="col">Opening Cash</th>
                              <th scope="col">Receiving Cash</th>
                              <th scope="col">Total Cash</th>
                              <th scope="col">Production Labor Cost</th>
                              <th scope="col">Daily Labor Cost</th>
                              <th scope="col">Labor Food Cost</th>
                              <th scope="col">Staff Bazar</th>
                              <th scope="col">Staff Salary</th>
                              <th scope="col">Loan Given</th>
                              <th scope="col">Loan Received</th>
                              <th scope="col">Gas</th>
                              <th scope="col">Electricity</th>
                              <th scope="col">Machine Materials</th>
                              <th scope="col">Mechanic</th>
                              <th scope="col">Office Stationary</th>
                              <th scope="col">Other Expenses</th>
                              <th scope="col">Dilkusha Acc (Sir)</th>
                              <th scope="col">Burimari Acc (Sir)</th>
                              <th scope="col">Others (Sir)</th>
                              <th scope="col">Total Cost</th>
                              <th scope="col">Closing Cash</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>

                            <?php
                              $sql = "SELECT * FROM ishfaq_agro";
                              $allRecords = mysqli_query($db, $sql);
                              $i = 0;
                              while( $row = mysqli_fetch_assoc($allRecords) ){
                                $id                     = $row['id'];
                                $input_date             = date("d-m-Y", strtotime($row['input_date']));
                                $lime_in                = $row['lime_in'];
                                $lime_out               = $row['lime_out'];
                                $lime_prod_day          = $row['lime_prod_day'];
                                $lime_prod_night        = $row['lime_prod_night'];
                                $total_prod             = $row['total_prod'];
                                $opening_cash           = $row['opening_cash'];
                                $receiving_cash         = $row['receiving_cash'];
                                $total_cash             = $row['total_cash'];
                                $prod_labor             = $row['prod_labor'];
                                $daily_labor            = $row['daily_labor'];
                                $labor_food             = $row['labor_food'];
                                $staff_bazar            = $row['staff_bazar'];
                                $staff_salary           = $row['staff_salary'];
                                $loan_given             = $row['loan_given'];
                                $loan_received          = $row['loan_received'];
                                $gas                    = $row['gas'];
                                $electricity            = $row['electricity'];
                                $machine_materials      = $row['machine_materials'];
                                $mechanic               = $row['mechanic'];
                                $office_stationary      = $row['office_stationary'];
                                $other_expenses         = $row['other_expenses'];
                                $pabar_sir_dilkusha_acc = $row['pabar_sir_dilkusha_acc'];
                                $pabar_sir_burimari_acc = $row['pabar_sir_burimari_acc'];
                                $pabar_sir_others       = $row['pabar_sir_others'];
                                $total_cost             = $row['total_cost'];
                                $closing_cash           = $row['closing_cash'];
                                $i++;
                                ?>

                                <tr>
                                  <th scope="row"><?php echo $i; ?></th>
                                  <td><?php echo $input_date; ?></td>
                                  <td><?php echo $lime_in; ?></td>
                                  <td><?php echo $lime_out; ?></td>
                                  <td><?php echo $lime_prod_day; ?></td>
                                  <td><?php echo $lime_prod_night; ?></td>
                                  <td><?php echo $total_prod; ?></td>
                                  <td><?php echo $opening_cash; ?></td>
                                  <td><?php echo $receiving_cash; ?></td>
                                  <td><?php echo $total_cash; ?></td>
                                  <td><?php echo $prod_labor; ?></td>
                                  <td><?php echo $daily_labor; ?></td>
                                  <td><?php echo $labor_food; ?></td>
                                  <td><?php echo $staff_bazar; ?></td>
                                  <td><?php echo $staff_salary; ?></td>
                                  <td><?php echo $loan_given; ?></td>
                                  <td><?php echo $loan_received; ?></td>
                                  <td><?php echo $gas; ?></td>
                                  <td><?php echo $electricity; ?></td>
                                  <td><?php echo $machine_materials; ?></td>
                                  <td><?php echo $mechanic; ?></td>
                                  <td><?php echo $office_stationary; ?></td>
                                  <td><?php echo $other_expenses; ?></td>
                                  <td><?php echo $pabar_sir_dilkusha_acc; ?></td>
                                  <td><?php echo $pabar_sir_burimari_acc; ?></td>
                                  <td><?php echo $pabar_sir_others; ?></td>
                                  <td><?php echo $total_cost; ?></td>
                                  <td><?php echo $closing_cash; ?></td>
                                  <td>
                                    <a class="btn btn-info btn-sm" href="factory_records_admin.php?do=EditIA&editIA=<?php echo $id; ?>">
                                      <i class="fas fa-pencil-alt">
                                      </i>
                                    </a>
                                  </td>
                                </tr>

                            <?php  }
                            ?>
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                <?php }

                else if ( $do == 'Add' ){ ?>
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Add New Record</h3>
                      </div>
                      <div class="card-body" style="display: block;">
                        <form action="factory_records_admin.php?do=Insert" method="POST" id="ti_form" name="ti_form">
                          
                          <!-- Upper Side -->
                          <div class="row">
                            <div class="col-lg-12">
                              <label for="agro">Choose Factory:</label>
                              <select id="agro" name="agro" class="form-control" required style="width: 15%;">
                                <option value="">Please Select a Factory </option>
                                <option value="1">Tahsin Agro</option>
                                <option value="2">Ishfaq Agro</option>
                              </select>
                            </div>
                          </div>

                          <div><br></div>
                          
                          <div class="row">

                            <!-- Inner Left Side -->
                            <div class="col-lg-4">
                              <div class="form-group">
                                <label for="date">Input Date:</label>
                                <input id="date" type="date" name="input_date" class="form-control" required="required">
                              </div>
                              <div class="form-group">
                                <label>Lime In:</label>
                                <input type="number" id="lime_in" name="lime_in" class="form-control" value="0">
                              </div>
                              <div class="form-group">
                                <label>Lime Out:</label>
                                <input type="number" id="lime_out" name="lime_out" class="form-control" value="0">
                              </div>
                              <div class="form-group">
                                <label>Lime Production - (Day):</label>
                                <input type="number" id="lime_prod_day" name="lime_prod_day" class="form-control" onchange="getTotalProd()" value="0">
                              </div>
                              <div class="form-group">
                                <label>Lime Production - (Night):</label>
                                <input type="number" id="lime_prod_night" name="lime_prod_night" class="form-control" onchange="getTotalProd()" value="0">
                              </div>
                              <div class="form-group">
                                <label>Total Production:</label>
                                <input type="number" id="total_prod" name="total_prod" class="form-control" value="0" readonly>                             
                              </div>
                              <div class="form-group">
                                <label>Opening Cash:</label>
                                <input type="number" id="opening_cash" name="opening_cash" class="form-control" onchange="getTotalCash()" value="0">
                              </div>
                              <div class="form-group">
                                <label>Receiving Cash:</label>
                                <input type="number" id="receiving_cash" name="receiving_cash" class="form-control" onchange="getTotalCash()" value="0">
                              </div>
                              <div class="form-group">
                                <label>Total Cash:</label>
                                <input type="number" id="total_cash" name="total_cash" class="form-control" value="0" readonly>
                              </div>
                            </div>

                            <!-- Inner Middle Side -->
                            <div class="col-lg-4">
                              <div class="form-group">
                                <label>Production Labor Cost:</label>
                                <input type="number" id="prod_labor" name="prod_labor" class="form-control" onchange="getTotalCost()" value="0">
                              </div>
                              <div class="form-group">
                                <label>Daily Labor Cost:</label>
                                <input type="number" id="daily_labor" name="daily_labor" class="form-control" onchange="getTotalCost()" value="0">
                              </div>
                              <div class="form-group">
                                <label>Labor Food Cost:</label>
                                <input type="number" id="labor_food" name="labor_food" class="form-control" onchange="getTotalCost()" value="0">
                              </div>
                              <div class="form-group">
                                <label>Staff Bazar:</label>
                                <input type="number" id="staff_bazar" name="staff_bazar" class="form-control" onchange="getTotalCost()" value="0">
                              </div>
                              <div class="form-group">
                                <label>Staff Salary:</label>
                                <input type="number" id="staff_salary" name="staff_salary" class="form-control" onchange="getTotalCost()" value="0">
                              </div>
                              <div class="form-group">
                                <label>Loan Given:</label>
                                <input type="number" id="loan_given" name="loan_given" class="form-control" value="0">
                              </div>
                              <div class="form-group">
                                <label>Loan Received:</label>
                                <input type="number" id="loan_received" name="loan_received" class="form-control" value="0">
                              </div>
                              <div class="form-group">
                                <label>Gas:</label>
                                <input type="number" id="gas" name="gas" class="form-control" value="0">
                              </div>
                              <div class="form-group">
                                <label>Electricity:</label>
                                <input type="number" id="electricity" name="electricity" class="form-control" value="0">
                              </div>
                            </div>

                            <!-- Inner Right Side -->
                            <div class="col-lg-4">
                              <div class="form-group">
                                <label>Machine Materials Cost:</label>
                                <input type="number" id="machine_materials" name="machine_materials" class="form-control" value="0">
                              </div>
                              <div class="form-group">
                                <label>Mechanic Cost:</label>
                                <input type="number" id="mechanic" name="mechanic" class="form-control" value="0">
                              </div>
                              <div class="form-group">
                                <label>Office Stationary Cost:</label>
                                <input type="number" id="office_stationary" name="office_stationary" class="form-control" onchange="getTotalCost()" value="0">
                              </div>
                              <div class="form-group">
                                <label>Other Expenses:</label>
                                <input type="number" id="other_expenses" name="other_expenses" class="form-control" onchange="getTotalCost()" value="0">
                              </div>
                              <div class="form-group">
                                <label>Dilkusha Account (Sir):</label>
                                <input type="number" id="pabar_sir_dilkusha_acc" name="pabar_sir_dilkusha_acc" onchange="getTotalCost()" class="form-control" value="0">
                              </div>
                              <div class="form-group">
                                <label>Burimari Account (Sir):</label>
                                <input type="number" id="pabar_sir_burimari_acc" name="pabar_sir_burimari_acc" onchange="getTotalCost()" class="form-control" value="0">
                              </div>
                              <div class="form-group">
                                <label>Others (Sir):</label>
                                <input type="number" id="pabar_sir_others" name="pabar_sir_others" class="form-control" onchange="getTotalCost()" value="0">
                              </div>
                              <div class="form-group">
                                <label>Total Cost:</label>
                                <input type="number" id="total_cost" name="total_cost" class="form-control" value="0" readonly>
                              </div>
                              <div class="form-group">
                                <label>Closing Cash:</label>
                                <input type="number" id="closing_cash" name="closing_cash" class="form-control" value="0" readonly>
                              </div>
                            </div>
                          </div>

                          <!-- Submit Button -->
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="form-group">
                                <input type="submit" name="addRecord" class="btn btn-block btn-success btn-flat" value="Add Record">
                              </div>
                            </div>
                          </div>

                        </form>
                      </div>
                    </div>
                  </div>
                <?php }

                else if ( $do == 'Insert' ){
                  if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
                    $agro                   = $_POST['agro'];
                    $input_date             = $_POST['input_date'];
                    $lime_in                = $_POST['lime_in'];
                    $lime_out               = $_POST['lime_out'];
                    $lime_prod_day          = $_POST['lime_prod_day'];
                    $lime_prod_night        = $_POST['lime_prod_night'];
                    $total_prod             = $_POST['total_prod'];
                    $opening_cash           = $_POST['opening_cash'];
                    $receiving_cash         = $_POST['receiving_cash'];
                    $total_cash             = $_POST['total_cash'];
                    $prod_labor             = $_POST['prod_labor'];
                    $daily_labor            = $_POST['daily_labor'];
                    $labor_food             = $_POST['labor_food'];
                    $staff_bazar            = $_POST['staff_bazar'];
                    $staff_salary           = $_POST['staff_salary'];
                    $loan_given             = $_POST['loan_given'];
                    $loan_received          = $_POST['loan_received'];
                    $gas                    = $_POST['gas'];
                    $electricity            = $_POST['electricity'];
                    $machine_materials      = $_POST['machine_materials'];
                    $office_stationary      = $_POST['office_stationary'];
                    $other_expenses         = $_POST['other_expenses'];
                    $pabar_sir_dilkusha_acc = $_POST['pabar_sir_dilkusha_acc'];
                    $pabar_sir_burimari_acc = $_POST['pabar_sir_burimari_acc'];
                    $pabar_sir_others       = $_POST['pabar_sir_others'];
                    $total_cost             = $_POST['total_cost'];
                    $closing_cash           = $_POST['closing_cash'];

                    if ($agro == 1) {
                      $sql = "INSERT INTO tahsin_agro (input_date, lime_in, lime_out, lime_prod_day, lime_prod_night, total_prod, opening_cash, receiving_cash, total_cash, prod_labor, daily_labor, labor_food, staff_bazar, staff_salary, loan_given, loan_received, gas, electricity, machine_materials, office_stationary, other_expenses, pabar_sir_dilkusha_acc, pabar_sir_burimari_acc, pabar_sir_others, total_cost, closing_cash ) VALUES ('$input_date', '$lime_in', '$lime_out', '$lime_prod_day', '$lime_prod_night', '$total_prod', '$opening_cash', '$receiving_cash', '$total_cash', '$prod_labor', '$daily_labor', '$labor_food', '$staff_bazar', '$staff_salary', '$loan_given', '$loan_received', '$gas', '$electricity', '$machine_materials', '$office_stationary', '$other_expenses', '$pabar_sir_dilkusha_acc', '$pabar_sir_burimari_acc', '$pabar_sir_others', '$total_cost', '$closing_cash')";

                      $addRecord = mysqli_query($db, $sql);

                      if ( $addRecord ){
                        $_SESSION['message'] = 'New Data Records Added Successfully!';
                        header("Location: factory_records_admin.php?do=TA");
                        exit();
                      }
                      else{
                        die("MySQLi Query Failed." . mysqli_error($db));
                      }

                      
                    }
                    else if ($agro == 2) {
                      $sql = "INSERT INTO ishfaq_agro (input_date, lime_in, lime_out, lime_prod_day, lime_prod_night, total_prod, opening_cash, receiving_cash, total_cash, prod_labor, daily_labor, labor_food, staff_bazar, staff_salary, loan_given, loan_received, gas, electricity, machine_materials, office_stationary, other_expenses, pabar_sir_dilkusha_acc, pabar_sir_burimari_acc, pabar_sir_others, total_cost, closing_cash ) VALUES ('$input_date', '$lime_in', '$lime_out', '$lime_prod_day', '$lime_prod_night', '$total_prod', '$opening_cash', '$receiving_cash', '$total_cash', '$prod_labor', '$daily_labor', '$labor_food', '$staff_bazar', '$staff_salary', '$loan_given', '$loan_received', '$gas', '$electricity', '$machine_materials', '$office_stationary', '$other_expenses', '$pabar_sir_dilkusha_acc', '$pabar_sir_burimari_acc', '$pabar_sir_others', '$total_cost', '$closing_cash')";

                      $addRecord = mysqli_query($db, $sql);

                      if ( $addRecord ){
                        $_SESSION['message'] = 'New Data Records Added Successfully!';
                        header("Location: factory_records_admin.php?do=IA");
                        exit();
                      }
                      else{
                        die("MySQLi Query Failed." . mysqli_error($db));
                      }
                    }
                  }
                }

                else if ( $do == 'EditTA' ){ 
                  if ( isset($_GET['editTA']) ){
                    $editID = $_GET['editTA'];
                    $sql = "SELECT * FROM tahsin_agro WHERE id = '$editID'";
                    $readRecord = mysqli_query($db, $sql);
                    while( $row = mysqli_fetch_assoc($readRecord) ){
                      $id                     = $row['id'];
                      $input_date             = $row['input_date'];
                      $lime_in                = $row['lime_in'];
                      $lime_out               = $row['lime_out'];
                      $lime_prod_day          = $row['lime_prod_day'];
                      $lime_prod_night        = $row['lime_prod_night'];
                      $total_prod             = $row['total_prod'];
                      $opening_cash           = $row['opening_cash'];
                      $receiving_cash         = $row['receiving_cash'];
                      $total_cash             = $row['total_cash'];
                      $prod_labor             = $row['prod_labor'];
                      $daily_labor            = $row['daily_labor'];
                      $labor_food             = $row['labor_food'];
                      $staff_bazar            = $row['staff_bazar'];
                      $staff_salary           = $row['staff_salary'];
                      $loan_given             = $row['loan_given'];
                      $loan_received          = $row['loan_received'];
                      $gas                    = $row['gas'];
                      $electricity            = $row['electricity'];
                      $machine_materials      = $row['machine_materials'];
                      $office_stationary      = $row['office_stationary'];
                      $other_expenses         = $row['other_expenses'];
                      $pabar_sir_dilkusha_acc = $row['pabar_sir_dilkusha_acc'];
                      $pabar_sir_burimari_acc = $row['pabar_sir_burimari_acc'];
                      $pabar_sir_others       = $row['pabar_sir_others'];
                      $total_cost             = $row['total_cost'];
                      $closing_cash           = $row['closing_cash'];
                      ?>

                      <div class="col-lg-12">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">Update Tahsin Agro Record</h3>
                          </div>
                          <div class="card-body" style="display: block;">

                            <form action="factory_records_admin.php?do=UpdateTA" method="POST" id="ti_form" name="ti_form">
                              <div class="row">
                                <!-- Inner Left Side -->
                                <div class="col-lg-4">
                                  <div class="form-group">
                                    <label for="date">Input Date:</label>
                                    <input id="date" type="date" name="input_date" class="form-control" value="<?php echo $input_date; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Lime In:</label>
                                    <input type="number" id="lime_in" name="lime_in" class="form-control" value="<?php echo $lime_in; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Lime Out:</label>
                                    <input type="number" id="lime_out" name="lime_out" class="form-control" value="<?php echo $lime_out; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Lime Production - (Day):</label>
                                    <input type="number" id="lime_prod_day" name="lime_prod_day" class="form-control" onchange="getTotalProd()" value="<?php echo $lime_prod_day; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Lime Production - (Night):</label>
                                    <input type="number" id="lime_prod_night" name="lime_prod_night" class="form-control" onchange="getTotalProd()" value="<?php echo $lime_prod_night; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Total Production:</label>
                                    <input type="number" id="total_prod" name="total_prod" class="form-control" value="<?php echo $total_prod; ?>" readonly>
                                  </div>
                                  <div class="form-group">
                                    <label>Opening Cash:</label>
                                    <input type="number" id="opening_cash" name="opening_cash" class="form-control" onchange="getTotalCash()" value="<?php echo $opening_cash; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Receiving Cash:</label>
                                    <input type="number" id="receiving_cash" name="receiving_cash" class="form-control" onchange="getTotalCash()" value="<?php echo $receiving_cash; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Total Cash:</label>
                                    <input type="number" id="total_cash" name="total_cash" class="form-control" value="<?php echo $total_cash; ?>" readonly>
                                  </div>
                                </div>

                                <!-- Inner Middle Side -->
                                <div class="col-lg-4">
                                  <div class="form-group">
                                    <label>Production Labor Cost:</label>
                                    <input type="number" id="prod_labor" name="prod_labor" class="form-control" onchange="getTotalCost()" value="<?php echo $prod_labor; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Daily Labor Cost:</label>
                                    <input type="number" id="daily_labor" name="daily_labor" class="form-control" onchange="getTotalCost()" value="<?php echo $daily_labor; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Labor Food Cost:</label>
                                    <input type="number" id="labor_food" name="labor_food" class="form-control" onchange="getTotalCost()" value="<?php echo $labor_food; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Staff Bazar:</label>
                                    <input type="number" id="staff_bazar" name="staff_bazar" class="form-control" onchange="getTotalCost()" value="<?php echo $staff_bazar; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Staff Salary:</label>
                                    <input type="number" id="staff_salary" name="staff_salary" class="form-control" onchange="getTotalCost()" value="<?php echo $staff_salary; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Loan Given:</label>
                                    <input type="number" id="loan_given" name="loan_given" class="form-control" value="<?php echo $loan_given; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Loan Received:</label>
                                    <input type="number" id="loan_received" name="loan_received" class="form-control" value="<?php echo $loan_received; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Gas:</label>
                                    <input type="number" id="gas" name="gas" class="form-control" value="<?php echo $gas; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Electricity:</label>
                                    <input type="number" id="electricity" name="electricity" class="form-control" value="<?php echo $electricity; ?>">
                                  </div>
                                </div>

                                <!-- Inner Right Side -->
                                <div class="col-lg-4">
                                  <div class="form-group">
                                    <label>Machine Materials Cost:</label>
                                    <input type="number" id="machine_materials" name="machine_materials" class="form-control" value="<?php echo $machine_materials; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Mechanic Cost:</label>
                                    <input type="number" id="mechanic" name="mechanic" class="form-control" value="<?php echo $mechanic; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Office Stationary Cost:</label>
                                    <input type="number" id="office_stationary" name="office_stationary" class="form-control" onchange="getTotalCost()" value="<?php echo $office_stationary; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Other Expenses:</label>
                                    <input type="number" id="other_expenses" name="other_expenses" class="form-control" onchange="getTotalCost()" value="<?php echo $other_expenses; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Dilkusha Account (Sir):</label>
                                    <input type="number" id="pabar_sir_dilkusha_acc" name="pabar_sir_dilkusha_acc" class="form-control" onchange="getTotalCost()" value="<?php echo $pabar_sir_dilkusha_acc; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Burimari Account (Sir):</label>
                                    <input type="number" id="pabar_sir_burimari_acc" name="pabar_sir_burimari_acc" class="form-control" onchange="getTotalCost()" value="<?php echo $pabar_sir_burimari_acc; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Others (Sir):</label>
                                    <input type="number" id="pabar_sir_others" name="pabar_sir_others" class="form-control" onchange="getTotalCost()" value="<?php echo $pabar_sir_others; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Total Cost:</label>
                                    <input type="number" id="total_cost" name="total_cost" class="form-control" value="<?php echo $total_cost; ?>" readonly>
                                  </div>
                                  <div class="form-group">
                                    <label>Closing Cash:</label>
                                    <input type="number" id="closing_cash" name="closing_cash" class="form-control" value="<?php echo $closing_cash; ?>" readonly>
                                  </div>
                                </div>
                              </div>

                              <!-- Submit Button -->
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="form-group">
                                    <input type="hidden" name="updateRecordID" value="<?php echo $id; ?>">
                                    <input type="submit" name="updateRecord" class="btn btn-block btn-success btn-flat" value="Save Changes">
                                  </div>
                                </div>
                              </div>
                            </form>

                          </div>
                        </div>
                      </div>
                  <?php    
                    }// End while
                  }// End isset if
                } // End Main else if

                else if ( $do == 'UpdateTA' ){
                  // Update Start
                  if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
                    $updateRecordID         = $_POST['updateRecordID'];
                    $input_date             = $_POST['input_date'];
                    $lime_in                = $_POST['lime_in'];
                    $lime_out               = $_POST['lime_out'];
                    $lime_prod_day          = $_POST['lime_prod_day'];
                    $lime_prod_night        = $_POST['lime_prod_night'];
                    $total_prod             = $_POST['total_prod'];
                    $opening_cash           = $_POST['opening_cash'];
                    $receiving_cash         = $_POST['receiving_cash'];
                    $total_cash             = $_POST['total_cash'];
                    $prod_labor             = $_POST['prod_labor'];
                    $daily_labor            = $_POST['daily_labor'];
                    $labor_food             = $_POST['labor_food'];
                    $staff_bazar            = $_POST['staff_bazar'];
                    $staff_salary           = $_POST['staff_salary'];
                    $loan_given             = $_POST['loan_given'];
                    $loan_received          = $_POST['loan_received'];
                    $gas                    = $_POST['gas'];
                    $electricity            = $_POST['electricity'];
                    $machine_materials      = $_POST['machine_materials'];
                    $office_stationary      = $_POST['office_stationary'];
                    $other_expenses         = $_POST['other_expenses'];
                    $pabar_sir_dilkusha_acc = $_POST['pabar_sir_dilkusha_acc'];
                    $pabar_sir_burimari_acc = $_POST['pabar_sir_burimari_acc'];
                    $pabar_sir_others       = $_POST['pabar_sir_others'];
                    $total_cost             = $_POST['total_cost'];
                    $closing_cash           = $_POST['closing_cash'];

                    $sql = "UPDATE tahsin_agro SET input_date = '$input_date', lime_in = '$lime_in', lime_out = '$lime_out', lime_prod_day = '$lime_prod_day', lime_prod_night = '$lime_prod_night', total_prod = '$total_prod', opening_cash = '$opening_cash', receiving_cash = '$receiving_cash', total_cash = '$total_cash', prod_labor = '$prod_labor', daily_labor = '$daily_labor', labor_food = '$labor_food', staff_bazar = '$staff_bazar', staff_salary = '$staff_salary', loan_given = '$loan_given', loan_received = '$loan_received', gas = '$gas', electricity = '$electricity', machine_materials = '$machine_materials', office_stationary = '$office_stationary', other_expenses = '$other_expenses', pabar_sir_dilkusha_acc = '$pabar_sir_dilkusha_acc', pabar_sir_burimari_acc = '$pabar_sir_burimari_acc', pabar_sir_others = '$pabar_sir_others', total_cost = '$total_cost', closing_cash = '$closing_cash' WHERE id = '$updateRecordID' ";

                    $updateRecord = mysqli_query($db, $sql);

                    if ( $updateRecord ){
                      $_SESSION['message'] = 'Data Records Updated Successfully!';
                      header("Location: factory_records_admin.php?do=TA");
                      exit();
                    }
                    else{
                      die("MySQLi Query Failed." . mysqli_error($db));
                    }
                  }
                  // Update End
                }

                else if ( $do == 'EditIA' ){ 
                  if ( isset($_GET['editIA']) ){
                    $editID = $_GET['editIA'];
                    $sql = "SELECT * FROM ishfaq_agro WHERE id = '$editID'";
                    $readRecord = mysqli_query($db, $sql);
                    while( $row = mysqli_fetch_assoc($readRecord) ){
                      $id                     = $row['id'];
                      $input_date             = $row['input_date'];
                      $lime_in                = $row['lime_in'];
                      $lime_out               = $row['lime_out'];
                      $lime_prod_day          = $row['lime_prod_day'];
                      $lime_prod_night        = $row['lime_prod_night'];
                      $total_prod             = $row['total_prod'];
                      $opening_cash           = $row['opening_cash'];
                      $receiving_cash         = $row['receiving_cash'];
                      $total_cash             = $row['total_cash'];
                      $prod_labor             = $row['prod_labor'];
                      $daily_labor            = $row['daily_labor'];
                      $labor_food             = $row['labor_food'];
                      $staff_bazar            = $row['staff_bazar'];
                      $staff_salary           = $row['staff_salary'];
                      $loan_given             = $row['loan_given'];
                      $loan_received          = $row['loan_received'];
                      $gas                    = $row['gas'];
                      $electricity            = $row['electricity'];
                      $machine_materials      = $row['machine_materials'];
                      $office_stationary      = $row['office_stationary'];
                      $other_expenses         = $row['other_expenses'];
                      $pabar_sir_dilkusha_acc = $row['pabar_sir_dilkusha_acc'];
                      $pabar_sir_burimari_acc = $row['pabar_sir_burimari_acc'];
                      $pabar_sir_others       = $row['pabar_sir_others'];
                      $total_cost             = $row['total_cost'];
                      $closing_cash           = $row['closing_cash'];
                      ?>

                      <div class="col-lg-12">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">Update Ishfaq Agro Record</h3>
                          </div>
                          <div class="card-body" style="display: block;">

                            <form action="factory_records_admin.php?do=UpdateIA" method="POST" id="ti_form" name="ti_form">
                              <div class="row">
                                <!-- Inner Left Side -->
                                <div class="col-lg-4">
                                  <div class="form-group">
                                    <label for="date">Input Date:</label>
                                    <input id="date" type="date" name="input_date" class="form-control" value="<?php echo $input_date; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Lime In:</label>
                                    <input type="number" id="lime_in" name="lime_in" class="form-control" value="<?php echo $lime_in; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Lime Out:</label>
                                    <input type="number" id="lime_out" name="lime_out" class="form-control" value="<?php echo $lime_out; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Lime Production - (Day):</label>
                                    <input type="number" id="lime_prod_day" name="lime_prod_day" class="form-control" onchange="getTotalProd()" value="<?php echo $lime_prod_day; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Lime Production - (Night):</label>
                                    <input type="number" id="lime_prod_night" name="lime_prod_night" class="form-control" onchange="getTotalProd()" value="<?php echo $lime_prod_night; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Total Production:</label>
                                    <input type="number" id="total_prod" name="total_prod" class="form-control" value="<?php echo $total_prod; ?>" readonly>
                                  </div>
                                  <div class="form-group">
                                    <label>Opening Cash:</label>
                                    <input type="number" id="opening_cash" name="opening_cash" class="form-control" onchange="getTotalCash()" value="<?php echo $opening_cash; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Receiving Cash:</label>
                                    <input type="number" id="receiving_cash" name="receiving_cash" class="form-control" onchange="getTotalCash()" value="<?php echo $receiving_cash; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Total Cash:</label>
                                    <input type="number" id="total_cash" name="total_cash" class="form-control" value="<?php echo $total_cash; ?>" readonly>
                                  </div>
                                </div>

                                <!-- Inner Middle Side -->
                                <div class="col-lg-4">
                                  <div class="form-group">
                                    <label>Production Labor Cost:</label>
                                    <input type="number" id="prod_labor" name="prod_labor" class="form-control" onchange="getTotalCost()" value="<?php echo $prod_labor; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Daily Labor Cost:</label>
                                    <input type="number" id="daily_labor" name="daily_labor" class="form-control" onchange="getTotalCost()" value="<?php echo $daily_labor; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Labor Food Cost:</label>
                                    <input type="number" id="labor_food" name="labor_food" class="form-control" onchange="getTotalCost()" value="<?php echo $labor_food; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Staff Bazar:</label>
                                    <input type="number" id="staff_bazar" name="staff_bazar" class="form-control" onchange="getTotalCost()" value="<?php echo $staff_bazar; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Staff Salary:</label>
                                    <input type="number" id="staff_salary" name="staff_salary" class="form-control" onchange="getTotalCost()" value="<?php echo $staff_salary; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Loan Given:</label>
                                    <input type="number" id="loan_given" name="loan_given" class="form-control" value="<?php echo $loan_given; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Loan Received:</label>
                                    <input type="number" id="loan_received" name="loan_received" class="form-control" value="<?php echo $loan_received; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Gas:</label>
                                    <input type="number" id="gas" name="gas" class="form-control" value="<?php echo $gas; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Electricity:</label>
                                    <input type="number" id="electricity" name="electricity" class="form-control" value="<?php echo $electricity; ?>">
                                  </div>
                                </div>

                                <!-- Inner Right Side -->
                                <div class="col-lg-4">
                                  <div class="form-group">
                                    <label>Machine Materials Cost:</label>
                                    <input type="number" id="machine_materials" name="machine_materials" class="form-control" value="<?php echo $machine_materials; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Mechanic Cost:</label>
                                    <input type="number" id="mechanic" name="mechanic" class="form-control" value="<?php echo $mechanic; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Office Stationary Cost:</label>
                                    <input type="number" id="office_stationary" name="office_stationary" onchange="getTotalCost()" class="form-control" value="<?php echo $office_stationary; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Other Expenses:</label>
                                    <input type="number" id="other_expenses" name="other_expenses" class="form-control" onchange="getTotalCost()" value="<?php echo $other_expenses; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Dilkusha Account (Sir):</label>
                                    <input type="number" id="pabar_sir_dilkusha_acc" name="pabar_sir_dilkusha_acc" class="form-control" onchange="getTotalCost()" value="<?php echo $pabar_sir_dilkusha_acc; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Burimari Account (Sir):</label>
                                    <input type="number" id="pabar_sir_burimari_acc" name="pabar_sir_burimari_acc" class="form-control" onchange="getTotalCost()" value="<?php echo $pabar_sir_burimari_acc; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Others (Sir):</label>
                                    <input type="number" id="pabar_sir_others" name="pabar_sir_others" class="form-control" onchange="getTotalCost()" value="<?php echo $pabar_sir_others; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label>Total Cost:</label>
                                    <input type="number" id="total_cost" name="total_cost" class="form-control" value="<?php echo $total_cost; ?>" readonly>
                                  </div>
                                  <div class="form-group">
                                    <label>Closing Cash:</label>
                                    <input type="number" id="closing_cash" name="closing_cash" class="form-control" value="<?php echo $closing_cash; ?>" readonly>
                                  </div>
                                </div>
                              </div>

                              <!-- Submit Button -->
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="form-group">
                                    <input type="hidden" name="updateRecordID" value="<?php echo $id; ?>">
                                    <input type="submit" name="updateRecord" class="btn btn-block btn-success btn-flat" value="Save Changes">
                                  </div>
                                </div>
                              </div>
                            </form>

                          </div>
                        </div>
                      </div>
                  <?php    
                    }// End while
                  }// End isset if
                } // End Main else if

                else if ( $do == 'UpdateIA' ){
                  // Update Start
                  if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
                    $updateRecordID         = $_POST['updateRecordID'];
                    $input_date             = $_POST['input_date'];
                    $lime_in                = $_POST['lime_in'];
                    $lime_out               = $_POST['lime_out'];
                    $lime_prod_day          = $_POST['lime_prod_day'];
                    $lime_prod_night        = $_POST['lime_prod_night'];
                    $total_prod             = $_POST['total_prod'];
                    $opening_cash           = $_POST['opening_cash'];
                    $receiving_cash         = $_POST['receiving_cash'];
                    $total_cash             = $_POST['total_cash'];
                    $prod_labor             = $_POST['prod_labor'];
                    $daily_labor            = $_POST['daily_labor'];
                    $labor_food             = $_POST['labor_food'];
                    $staff_bazar            = $_POST['staff_bazar'];
                    $staff_salary           = $_POST['staff_salary'];
                    $loan_given             = $_POST['loan_given'];
                    $loan_received          = $_POST['loan_received'];
                    $gas                    = $_POST['gas'];
                    $electricity            = $_POST['electricity'];
                    $machine_materials      = $_POST['machine_materials'];
                    $office_stationary      = $_POST['office_stationary'];
                    $other_expenses         = $_POST['other_expenses'];
                    $pabar_sir_dilkusha_acc = $_POST['pabar_sir_dilkusha_acc'];
                    $pabar_sir_burimari_acc = $_POST['pabar_sir_burimari_acc'];
                    $pabar_sir_others       = $_POST['pabar_sir_others'];
                    $total_cost             = $_POST['total_cost'];
                    $closing_cash           = $_POST['closing_cash'];

                    $sql = "UPDATE ishfaq_agro SET input_date = '$input_date', lime_in = '$lime_in', lime_out = '$lime_out', lime_prod_day = '$lime_prod_day', lime_prod_night = '$lime_prod_night', total_prod = '$total_prod', opening_cash = '$opening_cash', receiving_cash = '$receiving_cash', total_cash = '$total_cash', prod_labor = '$prod_labor', daily_labor = '$daily_labor', labor_food = '$labor_food', staff_bazar = '$staff_bazar', staff_salary = '$staff_salary', loan_given = '$loan_given', loan_received = '$loan_received', gas = '$gas', electricity = '$electricity', machine_materials = '$machine_materials', office_stationary = '$office_stationary', other_expenses = '$other_expenses', pabar_sir_dilkusha_acc = '$pabar_sir_dilkusha_acc', pabar_sir_burimari_acc = '$pabar_sir_burimari_acc', pabar_sir_others = '$pabar_sir_others', total_cost = '$total_cost', closing_cash = '$closing_cash' WHERE id = '$updateRecordID' ";

                    $updateRecord = mysqli_query($db, $sql);

                    if ( $updateRecord ){
                      $_SESSION['message'] = 'Data Records Updated Successfully!';
                      header("Location: factory_records_admin.php?do=IA");
                      exit();
                    }
                    else{
                      die("MySQLi Query Failed." . mysqli_error($db));
                    }
                  }
                  // Update End
                }
              ?>
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


  <!-- Footer -->
  <?php include "inc/footer.php"; ?>

  <!-- Control Sidebar -->
  <?php include "inc/sidebar.php"; ?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include "inc/script.php"; ?>