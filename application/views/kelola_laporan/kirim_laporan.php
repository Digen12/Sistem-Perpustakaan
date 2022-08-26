<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" >

      <!-- Main Content -->
      <div id="content" style="margin-left: 225px;">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" >

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
         

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
        <div class="container-fluid">

 
       upload file laporan anggota
      <table>  <?= form_open_multipart('kelola_laporan/create') ?>
                    <th> <input type="text" class="form-control" id="id_laporan" name="id_laporan" placeholder="ID Laporan" value="<?= $kodeunik2;?>" readonly></th>
                   <th> <input type="file" name="nama_laporan"></th>
                   <th><input type="text" name="tgl_dibuat" id="tgl_dibuat" readonly value="<?= date('d-m-Y') ?>" /></th>
                    <th><button type="submit">upload</button></th>
                <?= form_close() ?>
                </table>
                <br><br><hr>

                 upload file laporan pengunjung
      <table>  <?= form_open_multipart('kelola_laporan/create_pengunjung') ?>
                    <th> <input type="text" class="form-control" id="id_laporan_pengunjung" name="id_laporan_pengunjung" placeholder="ID Laporan pengunjung" value="<?= $kodeunik;?>" readonly></th>
                   <th> <input type="file" name="nama_laporan_pengunjung"></th>
                   <th><input type="text" name="tgl_dibuat_pengunjung" id="tgl_dibuat_pengunjung" readonly value="<?= date('d-m-Y') ?>" /></th>
                    <th><button type="submit">upload</button></th>
                <?= form_close() ?>
                </table>
<br><br><br>
                upload file laporan peminjaman
      <table>  <?= form_open_multipart('kelola_laporan/create_peminjaman') ?>
                    <th> <input type="text" class="form-control" id="id_laporan_peminjaman" name="id_laporan_peminjaman" placeholder="ID Laporan peminjaman" value="<?= $kodeunik3;?>" readonly></th>
                   <th> <input type="file" name="nama_laporan_peminjaman"></th>
                   <th><input type="text" name="tgl_dibuat_peminjaman" id="tgl_dibuat_peminjaman" readonly value="<?= date('d-m-Y') ?>" /></th>
                    <th><button type="submit">upload</button></th>
                <?= form_close() ?>
                </table>
                </div>