

  <header class="main-header">
    <!-- Logo -->
    <a href="general.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>HR</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>HR</b> System</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $name; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../img/avatar5.png" class="img-circle" alt="User Image">
                <p>
                  <?php echo $name; ?>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../presenters/destroysession.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>






      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
            <a ui-sref-active="active" ui-sref="vacants" ><i class="fa fa-dashboard fa-fw"></i> <span>Vacants</span></a>
        </li>
        <li>
            <a ui-sref-active="active" ui-sref="employees"><i class="fa fa-times fa-fw"></i><span> Employees</span></a>
        </li>
        <li>
            <a ui-sref-active="active" ui-sref="nomines"><i class="fa fa-table fa-fw"></i><span> Nomine</span></a>
        </li>
        <li>
            <a ui-sref-active="active" ui-sref="candidats"><i class="fa fa-edit fa-fw"></i><span> Candidats</span></a>
        </li>

        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>LABELS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
          </ul>
        </li>

        <li>
          <a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->






  <!-- /.content-wrapper -->
