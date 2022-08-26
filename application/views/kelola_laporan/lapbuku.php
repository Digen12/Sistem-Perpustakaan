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

    <!-- Topbar Search 
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
    <?= form_close() ?> -->

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
  <!-- End of Topbar -->   <!-- Begin Page Content -->

   <!-- Begin Page Content -->
   <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

            <hr>
 <form method="get" action="">

             
        </div>

        <label>Filter Berdasarkan</label><br>
        <select name="filter" id="filter">
            <option value="">Pilih</option>
            
            <option value="2">Per Bulan</option>
            <option value="3">Per Tahun</option>
        </select>
        <br /><br />

      

        <div id="form-bulan">
            <label>Bulan</label><br>
            <select name="bulan">
                <option value="">Pilih</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
            <br /><br />
        </div>

        <div id="form-tahun">
            <label>Tahun</label><br>
            <select name="tahun">
                <option value="">Pilih</option>
                <?php
                foreach($option_tahun as $data){ // Ambil data tahun dari model yang dikirim dari controller
                    echo '<option value="'.$data->tahun.'">'.$data->tahun.'</option>';
                }
                ?>
            </select>
            <br /><br />
        </div>

        <button type="submit">Tampilkan</button>
   
    </form>
    <hr />
    <b><?php echo $ket; ?></b><br /><br />
    <a href="<?php echo $url_cetak2; ?>" class="btn btn-warning"><i class="fa fa-file"></i> CETAK PDF</a><br /><br />

<table class="table table-sm" border="2" width="100%">
  <thead>
    <tr>
    <th scope="col">No</th>
      <th scope="col">ID Peminjaman</th>
      <th scope="col">Tanggal Pinjam</th>
      <th scope="col">Nama Anggota</th>
      <!-- <th></th> -->
       <th scope="col">Judul Buku</th>
      <th scope="col">Tanggal Pengembalian</th>
      <th scope="col">Status</th>
           <th scope="col">Aksi</th>
    
    </tr>
  </thead>
  <tbody>

  <?php $no = 1; foreach ($peminjaman as $i):?>
   <!--  <?php $s=implode(",",(array($i->judul)));
    // var_dump($s);die;
    // echo $s;die;
    ?>-->
      <tr>
        
    <td><?= $no++ ?></td>
    <td><?= $i->id_peminjaman?></td>
  <td><?= $i->tanggal_pinjam?></td>
    <td><?= $i->nama?></td>
    <!-- <td><?= $i->nopinjam?></td> -->
    <td><?= $i->judul ?></td>
      <td><?= $i->tgl_pengembalian?></td>
      <td><button class="btn btn-success" readonly >Buku dikembalikan</button></td>
      <td><button type="button" class="btn btn-warning histori" id_peminjaman="<?= $i->id_peminjaman ?>"><i class="fa fa-info fa-fw"></i> Detail</button></td>
    </tr>

    <?php endforeach;?>
  </tbody>
  
</table>

<!-- Modal -->
 <div class="modal fade" id="detail" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                   
                    <h4 class="modal-title">Detail Peminjaman</h4>
                </div>
                <div class="modal-body">
                <form>
                    <div class="form-group">
                      
                        <span id="pinjam"></span>

                      
                     </div>
                 </form>

                </div>
               
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                </div>
            </div>
    
        </div>
    </div>

    <!-- akhir kode modal dialog -->

