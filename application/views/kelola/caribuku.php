       <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content" style="margin-left: 230px;">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <?= form_open('Kelola/cari_buku') ?>
    <form method="post" >
      <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Cari" name="katakunci2" id="katakunci2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit" id="tombolcari">
            <i class="fas fa-search fa-sm"></i>
          </button>
        </div>
      </div>
    </form>
    <?= form_close() ?>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
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

     

      <div class="topbar-divider d-none d-sm-block"></div>

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

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambahBukuModal">Tambah Buku</a>
            <hr>
         <div class="">
          <div class="">

 
           <table class="table table-sm" border="2">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Buku</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Penulis</th>
      <th scope="col">Tahun Cetak</th>
      <th scope="col">Stok Buku</th>
      <th scope="col">Kategori</th>
      <th scope="col">Label</th>
      <th scope="col" colspan="3">Aksi</th>
    </tr>
  </thead>
  <tbody>
  
    <?php $no = 1;
    foreach($data_buku as $dbu){
     ?>
   
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><?= $dbu->id ?></td>
      <td><?= $dbu->judul ?></td>
      <td><?= $dbu->penerbit ?></td>
      <td><?= $dbu->penulis ?></td>
      <td><?= $dbu->tahun_cetak ?></td>
      <td><?= $dbu->stok ?></td>
      <td><?= $dbu->kategori ?></td>
      <td><?= $dbu->label ?></td>
      <td>
        <?= anchor('Kelola/detailbuk/'.$dbu->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>' ) ?>
      </td>
      <td>
      <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#EditBukuModal<?=$dbu->id;?>">Edit</a></td>
        <td onclick="javascript: return confirm('Apakah anda yakin?')"><a href="<?php echo site_url('Kelola/hapus_buku/'.$dbu->id); ?>" class="btn btn-danger btn-sm" title="Hapus Data">Hapus</a>
      </td>
    </tr>
   <?php } ?>
  </tbody>
  
</table>
          </div>
        </div>

        </div>
        <!-- /.container-fluid -->
</div>
      </div>
      <!-- End of Main Content -->

     <!-- Modal tambah -->
<div class="modal fade" id="tambahBukuModal" tabindex="-1" role="dialog" aria-labelledby="tambahBukuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahBukuModalLabel">Tambah Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('kelola/tambah_aksi_buku'); ?>" method="post">
      <div class="modal-body">
        <div class="form-group">
          <input type="text" class="form-control" id="id" name="id" readonly value="<?= $kodeunik2;?>" placeholder="Kode Buku">
          <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Buku">
          <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit">
          <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Penulis">
          <input type="text" class="form-control" id="tahun_cetak" name="tahun_cetak" placeholder="Tahun Cetak">
          <input type="text" class="form-control" id="stok" name="stok" placeholder="Stok">
          <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori buku">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal edit -->
<?php foreach($data_buku as $dbu): ?>
<div id="EditBukuModal<?=$dbu->id;?>" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="EditBukuModalLabel">Edit Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('kelola/update_buku'); ?>" method="post">
      <div class="modal-body">
      <input type="hidden" readonly value="<?=$dbu->id;?>" name="id" class="form-control">
        <div class="form-group">
    
          <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Buku" value="<?= $dbu->judul; ?>">
          <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit" value="<?= $dbu->penerbit; ?>">
          <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Penulis" value="<?= $dbu->penulis; ?>">
          <input type="text" class="form-control" id="tahun_cetak" name="tahun_cetak" placeholder="Tahun Cetak" value="<?= $dbu->tahun_cetak; ?>">
          <input type="text" class="form-control" id="stok" name="stok" placeholder="Stok" value="<?= $dbu->stok; ?>">
          <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori buku" value="<?= $dbu->kategori; ?>">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>
