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
    <?= form_open('Transaksi/cari') ?>
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
  <!-- End of Topbar -->   <!-- Begin Page Content -->

 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

<table width="747" height="209" border="2px" align="center" bgcolor="#FFFF99">
			<tr>
				<th><span class="style40">No.</span></th>
				<th><span class="style40">Peminjaman kode</span></th>
            <th><span class="style40">Tgl Pinjam</span></th>
        <th><span class="style40">Tgl Harus Kembali</span></th>
        <th><span class="style40">Tanggal Pengembalian</span></th>
        <th><span class="style40">Nama Anggota</span></th>
        <th><span class="style40">Judul Buku</span></th>
						<th><span class="style40">Status</span></th>
				<th><span class="style40">Aksi</span></th>
			</tr>

            <?php $no = 1;
    foreach($peminjaman as $pmn){
     ?>
   
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><?= $pmn->id_peminjaman ?></td>
      <td><?=date('d-m-Y',strtotime($pmn->tanggal_pinjam))?></td>
      <td><?=date('d-m-Y',strtotime($pmn->tanggal_kembali))?></td>
  
      <td><p>00-00-0000</p></td>
 
      <td><?= $pmn->id_anggota ?></td>
      <td><?= $pmn->id ?></td>

      <td><button class="btn btn-primary" readonly >Sedang dipinjam</button></td>

      <td><button type="button" class="btn btn-primary update" nopinjam="<?php echo $pmn->nopinjam ?>">Kembalikan</button></td>
     
    </tr>
   <?php } ?>
  </tbody>

  </table>
  <div class="modal fade" id="update_status_peminjaman" tabindex="-1" role="dialog" aria-labelledby="update_status_peminjaman" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-body">
                   <b>Apakah anda yakin ingin mengembalikannya?</b><br><br>
                   <a  type="button" class="btn btn-success setuju" >Ya</a>
      <!--              <a  type="button" class="btn btn-danger tolak" >Tidak</a> -->
               </div>
           </div>
       </div>
   </div>
<!-- Modal -->
 <div class="modal fade" id="detail" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                   
                    <h4 class="modal-title">Detail Pengembalian</h4>
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
  
  
 
  