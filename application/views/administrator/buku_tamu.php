

 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content" style="margin-left: 225px;">

  <!-- Topbar -->
  <nav  class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" >

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3" >
      <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <?= form_open('Administrator/cari') ?>
    <form method="post" >
      <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Cari" name="katakunci" id="katakunci">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit" id="tombolcari">
            <i class="fas fa-search fa-sm"></i>
          </button>
        </div>
      </div>
    </form>
    <?= form_close() ?>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto" >

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      <li class="nav-item dropdown no-arrow d-sm-none" >
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown" >
          <form class="form-inline mr-auto w-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

     

      <div class="topbar-divider d-none d-sm-block" ></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?= $user['name']; ?> </span>
          <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>
      </li>

    </ul>

  </nav>
  <!-- End of Topbar -->

   <!-- Begin Page Content -->
   <div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
 <div class="row">
 
<!-- Page Heading -->

<div class="col-md-4">
	
            <div style="color: red;"><?php echo validation_errors(); ?></div>
            <?php echo form_open("Administrator/tambah"); ?>
			<form class="form-horizontal">
                <div class="form-group">
                    
                    <div class="col-xs-9">
                        <input name="id_btamu" id="id_btamu" class="form-control" type="text" placeholder="id_btamu " style="width:335px; " value="<?= $kodeunik4;?>" readonly>
                        <br>
                        <input name="id_anggota" id="id_anggota" class="form-control" type="text" placeholder="id_anggota " style="width:335px; " value="<?php echo set_value('id_anggota'); ?>">
                        <br>
                        <input name="tujuan" class="form-control" type="text" placeholder="tujuan..." style="width:335px;" value="<?php echo set_value('tujuan'); ?>">
                        <br>
                        <input name="nama" class="form-control" type="text" placeholder="Nama Anggota..." style="width:335px;" value="<?php echo set_value('nama'); ?>" readonly>
                        <br>
                          <input name="tanggal_dtg" class="form-control" type="text" placeholder="tanggal_dtg Barang..." style="width:335px;" value="<?= date('d-m-Y') ?>" readonly>
                          <br>
                          <center><button style="margin-right: 90px" class="btn btn-primary">Simpan</button></center>
               <?php echo form_close(); ?>
                    </div>

                </div>
              </form>
            </div>
             <div class="col">
    <table border="1" cellpadding="7" align="center">
      <tr class="bg-success">
        <th>id tamu</th>
        <th>kode anggota</th>
        <th>tujuan </th>
        <th>Nama </th>
        <th>Tanggal datang </th>
        
      </tr>
      <?php
      if( ! empty($data)){ // Jika data buku_tamu tidak sama dengan kosong, artinya jika data buku_tamu ada
        foreach($data as $data){
          echo "<tr>
          <td>".$data->id_btamu."</td>
          <td>".$data->id_anggota."</td>
          <td>".$data->tujuan."</td>
          <td>".$data->nama."</td>
          <td>".date('d-m-Y',strtotime($data->tanggal_dtg))."</td>
          
        
          </tr>";
        }
      }
      ?>
    </table><br>
    <div class="row">
      <div class="col">
        <!--Tampilkan pagination-->
        <?php echo $pagination; ?>
      </div>
    </div>
  </div>
          </div>
			</div>

  </div>
     