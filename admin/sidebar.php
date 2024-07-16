<!-- Main Sidebar Container -->

<aside class="main-sidebar sidebar-dark-gray elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="" class="brand-link bg-gray">
      <img src="../assets/img/FD22.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">FD22 | POS System</span>
    </a> -->


    <a href="" class="brand-link bg-gray">
      <img src="../assets/img/ffd2222.png"
           alt="AdminLTE Logo"
           class="brand-image"
          >
      <span class="brand-text font-weight-light">POS System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="../mem_img/<?php echo $_SESSION['mem_img'];?>" class="img-circle elevation-2" alt="User Image"> -->
          <img src="../assets/img/FD22.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="edit_profile.php" target="" class="d-block"> <?php echo $_SESSION['mem_name'];?> | Edit Profile</a>
        </div>
      </div>



        <!-- Sidebar Menu -->
      <nav class="mt-2">
        <!-- nav-compact -->
        <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">เมนูสำหรับการขาย</li>

          <li class="nav-item">
            <a href="/admin/index.php" class="nav-link <?php if($menu=="index"){echo "active";} ?> ">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>รายการขาย </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="index2.php" class="nav-link <?php if($menu=="index2"){echo "active";} ?> ">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>Index2</p>
            </a>
          </li>
        <hr>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link text-danger">
              <i class="nav-icon fas fa-power-off"></i>
              <p>ออกจากระบบ</p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      
    </div>
    <!-- /.sidebar -->
  </aside>