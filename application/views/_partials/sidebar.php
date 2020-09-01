<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo site_url('admin/dashboard') ?>" class="brand-link">
      <img src="<?php echo base_url('imgindex/logo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Hi Admin!</span>
    </a>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo site_url('admin/dashboard') ?>" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('admin/grafik') ?>" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                grafik Siswa Daftar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('admin/print') ?>" class="nav-link">
            <i class="nav-icon fas fa-print"></i>
              <p>
                Print Data Siswa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('login/logout') ?>" class="nav-link">
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