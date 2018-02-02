<?php 

$query_us = $conn->query("SELECT*FROM user WHERE id_user='$_SESSION[id]'");
$admin = $query_us->fetch_assoc();
$admin_name = $admin['name_user'];
 ?>
<!-- Logo -->
        <a href="home" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b></b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img src="http://www.pgascom.co.id/assets/front/images/logo.png" height="40" width="200">
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="asset/dist/img/user.PNG" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $admin_name; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="asset/dist/img/user.png" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $admin_name; ?> - Network Monitoring
                      <small>PT. PGAS Telekomunikasi Nusantara</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                      <li><a href="katasandi" class="btn btn-default btn-flat"><i class="glyphicon glyphicon-wrench"></i>Ubah Kata Sandi</a><li>
                      <li><a href="asset/proses.php?logout" class="btn btn-default btn-flat"><i class="glyphicon glyphicon-log-out"></i>Keluar</a></li>
                    </center>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>