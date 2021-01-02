<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">T-I Agro</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block"><?php echo $_SESSION['name']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>


          <li class="nav-header">Application Features</li>

          <?php
            if ($_SESSION['role'] == 1) { ?>

              <!-- Manage Users Nav Start -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    All Users
                    <i class="fas fa-angle-left right"></i>
                    <!-- <span class="badge badge-info right">6</span> -->
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="users.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage Users</p>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- Manage Users Nav End -->
              
              <!-- Manage All Factory Records Nav Start -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Manage Records
                    <i class="fas fa-angle-left right"></i>
                    <!-- <span class="badge badge-info right">6</span> -->
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="factory_records_admin.php?do=TA" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tahsin Agro</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="factory_records_admin.php?do=IA" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Ishfaq Agro</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="factory_records_admin.php?do=Add" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add New Record</p>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- Manage All Factory Records Nav End -->

              <!-- Monthly Financial Records of All Factory nav Start -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Monthly Records
                    <i class="fas fa-angle-left right"></i>
                    <!-- <span class="badge badge-info right">6</span> -->
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="monthly_records.php?do=TA" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tahsin Agro</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="monthly_records.php?do=IA" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Ishfaq Agro</p>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- Monthly Financial Records of All Factory nav End -->

            <?php }
            else if ($_SESSION['role'] == 2) {
              if ($_SESSION['name'] == "Tahsin Agro Manager") { ?>
                <!-- Manage Tahsin Records Nav Start -->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                      Manage Records
                      <i class="fas fa-angle-left right"></i>
                      <!-- <span class="badge badge-info right">6</span> -->
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="tAgro_records.php?do=TA" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Tahsin Agro</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="tAgro_records.php?do=Add" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add New Record</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- Manage Tahsin Records Nav End -->

                <!-- Monthly Financial Records of Tahsin Agro Factory nav Start -->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                      Monthly Records
                      <i class="fas fa-angle-left right"></i>
                      <!-- <span class="badge badge-info right">6</span> -->
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="monthly_records.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Tahsin Agro</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- Monthly Financial Records of Tahsin Agro Factory nav End -->

              <?php }
              else if ($_SESSION['name'] == "Ishfaq Agro Manager") { ?>
                <!-- Manage Ishfaq Records Nav Start -->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                      Manage Records
                      <i class="fas fa-angle-left right"></i>
                      <!-- <span class="badge badge-info right">6</span> -->
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="iAgro_records.php?do=IA" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Ishfaq Agro</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="iAgro_records.php?do=Add" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add New Record</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- Manage Ishfaq Records Nav End -->

                <!-- Monthly Financial Records of Ishfaq Agro Factory nav Start -->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                      Monthly Records
                      <i class="fas fa-angle-left right"></i>
                      <!-- <span class="badge badge-info right">6</span> -->
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="monthly_records.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Ishfaq Agro</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- Monthly Financial Records of Ishfaq Agro Factory nav End -->
              <?php }
            }
          ?>


          <!-- Logout Nav Option -->
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>