  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('#') ?>" class="brand-link">
      <img src="<?php echo base_url('dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8')?>">
      <span class="brand-text font-weight-light">Praktikum Web 2</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image')?>">
        </div>
        <div class="info">
          <a href="#" class="d-block">Muhammad Fathin Yamin</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
                <a href="<?php echo base_url('#') ?>" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table "></i>
              <p>
                Data Kampus
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('index.php/mahasiswa') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('index.php/dosen') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Dosen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('index.php/matakuliah') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Mata Kuliah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('index.php/prodi') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Program Studi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
                <a href="<?php echo base_url('index.php/mahasiswa/creat') ?>" class="nav-link">
                <i class="nav-icon fas fa-plus"></i>
                    <p>
                        Input Data Mahasiswa
                    </p>
                </a>
            </li>
        </ul>
        
      
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>