<!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark bg-dark" id="accordionSidebar" style=" position: fixed;z-index: 1; ">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html" ">
        <div class="sidebar-brand-icon rotate-n-15" >
          <i class="fas fa-book-open"></i>
        </div>
        <div class="sidebar-brand-text mx-30" >Perpustakaan Abiyoso</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider mb-1" >

      <!--QUERY MENU, join tabel admin menu dan user akses menu-->
      <?php
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT `admin_menu`.`id`, `menu`
        FROM `admin_menu` JOIN `user_access_menu` 
        ON `admin_menu`.`id` = `user_access_menu`.`menu_id`
        WHERE `user_access_menu`.`role_id` = $role_id
        ORDER BY `user_access_menu`.`menu_id` ASC
        ";
      $menu = $this->db->query($queryMenu)->result_array();
      ?>

      <!-- LOOPING MENU -->
      <?php foreach ($menu as $m) : ?>
      <div class="sidebar-heading">
        <?= $m['menu']; ?>
      </div>

      <!-- SIAPKAN SUB MENU SESUAI MENU -->
      <?php
      $menuId = $m['id'];
        $querySubMenu = "SELECT *
  FROM `admin_sub_menu` JOIN `admin_menu` 
    ON `admin_sub_menu`.`menu_id` = `admin_menu`.`id`
 WHERE `admin_sub_menu`.`menu_id` = $menuId
 ";
 $subMenu = $this->db->query($querySubMenu)->result_array();
      ?>

      <?php foreach ($subMenu as $sm) : ?>
  
           <li class="nav-item">
            
             
        <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
          <i class="<?= $sm['icon']; ?>"></i>
          <span><?= $sm['title']; ?></span></a>
      </li>
        <?php endforeach; ?> 
        <hr class="sidebar-divider mt-1 mb-2">
       
    <?php endforeach; ?>

      
    

      <!-- Sidebar Toggler (Sidebar) -->
      <!--<div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>-->

     

    </ul>
    <!-- End of Sidebar -->