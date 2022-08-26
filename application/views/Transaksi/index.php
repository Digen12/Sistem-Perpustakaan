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
  <!-- End of Topbar -->   <!-- Begin Page Content -->
   <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
<a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambahPeminjamanModal">Tambah Peminjaman</a>
            <hr>

<table class="table table-sm" border="2" width="100%">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID Peminjaman</th>
      <th scope="col">ID Anggota</th>
    
      <th scope="col">Kode Buku</th>
      <th scope="col">Tanggal Pinjam</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    
    </tr>
  </thead>
  <tbody>

    <?php $no = 1; foreach ($peminjaman as $i):?>
      <tr>
    <td><?= $no++ ?></td>
    <td><?= $i->id_peminjaman?></td>
    <td><?= $i->id_anggota?></td>
    <td><?= $i->id?></td>
    <td><?= $i->tanggal_pinjam?></td>
    <td><button class="btn btn-primary" readonly >Sedang dipinjam</button></td>
    <td><button type="button" class="btn btn-warning rincian" id_peminjaman="<?= $i->id_peminjaman ?>"><i class="fa fa-info fa-fw"></i> Detail</button></td>
    </tr>
    <?php endforeach;?>
  </tbody>
  
</table>

<!-- Modal tambah-->
<div class="modal fade" id="tambahPeminjamanModal" tabindex="-1" role="dialog" aria-labelledby="tambahPeminjamanModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahPeminjamanModalLabel">Tambah Peminjaman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('Transaksi/tambah_peminjaman'); ?>" method="post" id="tambah">
      <div class="modal-body">
        <div class="form-group">
          <input type="text" class="form-control" id="id_peminjaman" name="id_peminjaman" placeholder="ID Anggota" value="<?= $kodeunik3;?>" readonly>
      
          <select name="id_anggota" id="">
          <option></option>
          <?php foreach ($anggota as $dta) :?>
          <option value="<?php echo $dta->id_anggota ?>"><?php echo $dta->id_anggota ?></option>
          <?php endforeach; ?>
          </select>
   
          <select id="carijudul" name="carijudul" class="form-control" title="pilih abjad" >
                                            <option value="kosong">pilih Judul Buku </option>
                                            <option value="A">Judul Buku Awalan huruf A </option>
                                            <option value="B">Judul Buku Awalan huruf B</option>
                                            <option value="C">Judul Buku Awalan huruf C</option>
                                            <option value="D">Judul Buku Awalan huruf D</option>
                                            <option value="E">Judul Buku Awalan huruf E</option>
                                            <option value="F">Judul Buku Awalan huruf F</option>
                                            <option value="G">Judul Buku Awalan huruf G</option>
                                            <option value="H">Judul Buku Awalan huruf H</option>
                                            <option value="I">Judul Buku Awalan huruf I</option>
                                            <option value="J">Judul Buku Awalan huruf J</option>
                                            <option value="K">Judul Buku Awalan huruf K</option>
                                            <option value="L">Judul Buku Awalan huruf L</option>
                                            <option value="M">Judul Buku Awalan huruf M</option>
                                            <option value="N">Judul Buku Awalan huruf N</option>
                                            <option value="O">Judul Buku Awalan huruf O</option>
                                            <option value="P">Judul Buku Awalan huruf P</option>
                                            <option value="Q">Judul Buku Awalan huruf Q</option>
                                            <option value="R">Judul Buku Awalan huruf R</option>
                                            <option value="S">Judul Buku Awalan huruf S</option>
                                            <option value="T">Judul Buku Awalan huruf T</option>
                                            <option value="U">Judul Buku Awalan huruf U</option>
                                            <option value="V">Judul Buku Awalan huruf V</option>
                                            <option value="W">Judul Buku Awalan huruf W</option>
                                            <option value="X">Judul Buku Awalan huruf X</option>
                                            <option value="Y">Judul Buku Awalan huruf Y</option>
                                            <option value="Z">Judul Buku Awalan huruf Z</option>
                                        </select>
          <div class="form-row">
           <div class="form-group col-md-6">
             <br>
              <label for="id" class="col-sm-6 control-label" id="labeljudul" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbuku">
            <?php 
                                                        $no=0;
                                                          foreach ($buku as $row) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbuku" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row->id;?>"><?=$row->judul;?><br>

                                                             <?php }?>
                     </div>
                     <!-- huruf B -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulB" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuB">
            <?php 
                                                        $no=0;
                                                          foreach ($bukuB as $row1) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuB" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row1->id;?>"><?=$row1->judul;?><br>

                                                             <?php }?>
                     </div>
                     <!-- huruf C -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulC" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuC">
            <?php 
                                                        $no=0;
                                                          foreach ($bukuC as $row2) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuC" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row2->id;?>"><?=$row2->judul;?><br>

                                                             <?php }?>
                     </div>
                         <!-- huruf D -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulD" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuD">
            <?php 
                                                        $no=0;
                                                          foreach ($bukuD as $row3) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuD" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row3->id;?>"><?=$row3->judul;?><br>

                                                             <?php }?>
                     </div>
                               <!-- huruf E -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulE" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuE">
            <?php 
                                                        $no=0;
                                                          foreach ($bukuE as $row4) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuE" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row4->id;?>"><?=$row4->judul;?><br>

                                                             <?php }?>
                     </div>
                               <!-- huruf F -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulF" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuF">
            <?php 
                                                        $no=0;
                                                          foreach ($bukuF as $row5) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuF" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row5->id;?>"><?=$row5->judul;?><br>

                                                             <?php }?>
                     </div>
                    
                      <!-- huruf G -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulG" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuG">
                                                       <?php 
                                                        $no=0;
                                                          foreach ($bukuG as $row6) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuG" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row6->id;?>"><?=$row6->judul;?><br>

                                                             <?php }?>
                     </div>
                         <!-- huruf H -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulH" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuH">
                                                       <?php 
                                                        $no=0;
                                                          foreach ($bukuH as $row7) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuH" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row7->id;?>"><?=$row7->judul;?><br>

                                                             <?php }?>
                     </div>
                         <!-- huruf I -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulI" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuI">
                                                       <?php 
                                                        $no=0;
                                                          foreach ($bukuI as $row8) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuI" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row8->id;?>"><?=$row8->judul;?><br>

                                                             <?php }?>
                     </div>
                         <!-- huruf J -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulJ" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuJ">
                                                       <?php 
                                                        $no=0;
                                                          foreach ($bukuJ as $row9) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuJ" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row9->id;?>"><?=$row9->judul;?><br>

                                                             <?php }?>
                     </div>
                         <!-- huruf K -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulK" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuK">
                                                       <?php 
                                                        $no=0;
                                                          foreach ($bukuK as $row10) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuK" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row10->id;?>"><?=$row10->judul;?><br>

                                                             <?php }?>
                     </div>
                         <!-- huruf L -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulL" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuL">
                                                       <?php 
                                                        $no=0;
                                                          foreach ($bukuL as $row11) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuL" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row11->id;?>"><?=$row11->judul;?><br>

                                                             <?php }?>
                     </div>
                         <!-- huruf M -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulM" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuM">
                                                       <?php 
                                                        $no=0;
                                                          foreach ($bukuM as $row12) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuM" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row12->id;?>"><?=$row12->judul;?><br>

                                                             <?php }?>
                     </div>
                         <!-- huruf N -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulN" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuN">
                                                       <?php 
                                                        $no=0;
                                                          foreach ($bukuN as $row13) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuN" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row13->id;?>"><?=$row13->judul;?><br>

                                                             <?php }?>
                     </div>
                         <!-- huruf O -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulO" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuO">
                                                       <?php 
                                                        $no=0;
                                                          foreach ($bukuO as $row14) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuO" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row14->id;?>"><?=$row14->judul;?><br>

                                                             <?php }?>
                     </div>
                         <!-- huruf P -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulP" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuP">
                                                       <?php 
                                                        $no=0;
                                                          foreach ($bukuP as $row15) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuP" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row15->id;?>"><?=$row15->judul;?><br>

                                                             <?php }?>
                     </div>
                         <!-- huruf Q -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulQ" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuQ">
                                                       <?php 
                                                        $no=0;
                                                          foreach ($bukuQ as $row16) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuQ" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row16->id;?>"><?=$row16->judul;?><br>

                                                             <?php }?>
                     </div>
                           <!-- huruf R -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulR" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuR">
                                                       <?php 
                                                        $no=0;
                                                          foreach ($bukuR as $row17) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuR" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row17->id;?>"><?=$row17->judul;?><br>

                                                             <?php }?>
                     </div>
                           <!-- huruf S -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulS" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuS">
                                                       <?php 
                                                        $no=0;
                                                          foreach ($bukuS as $row18) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuS" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row18->id;?>"><?=$row18->judul;?><br>

                                                             <?php }?>
                     </div>
                            <!-- huruf T -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulT" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuT">
                                                       <?php 
                                                        $no=0;
                                                          foreach ($bukuT as $row19) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuT" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row19->id;?>"><?=$row19->judul;?><br>

                                                             <?php }?>
                     </div>
                            <!-- huruf U -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulU" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuU">
                                                       <?php 
                                                        $no=0;
                                                          foreach ($bukuU as $row20) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuU" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row20->id;?>"><?=$row20->judul;?><br>

                                                             <?php }?>
                     </div>
                            <!-- huruf V -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulV" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuV">
                                                       <?php 
                                                        $no=0;
                                                          foreach ($bukuV as $row21) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuV" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row21->id;?>"><?=$row21->judul;?><br>

                                                             <?php }?>
                     </div>
                            <!-- huruf W -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulW" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuW">
                                                       <?php 
                                                        $no=0;
                                                          foreach ($bukuW as $row22) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuW" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row22->id;?>"><?=$row22->judul;?><br>

                                                             <?php }?>
                     </div>
                            <!-- huruf X -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulX" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuX">
                                                       <?php 
                                                        $no=0;
                                                          foreach ($bukuX as $row23) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuX" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row23->id;?>"><?=$row23->judul;?><br>

                                                             <?php }?>
                     </div>
                            <!-- huruf Y -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulY" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuY">
                                                       <?php 
                                                        $no=0;
                                                          foreach ($bukuY as $row24) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuY" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row24->id;?>"><?=$row24->judul;?><br>

                                                             <?php }?>
                     </div>
                            <!-- huruf Z -->
                      <label for="id" class="col-sm-6 control-label" id="labeljudulZ" style="font-family:Arial black;font-size:12px;">Judul Buku</label>
                  <div class="col-sm-6" id="tampilbukuZ">
                                                       <?php 
                                                        $no=0;
                                                          foreach ($bukuZ as $row25) { 
                                                         $no++;
                                                        ?>
                                                
                    <input type="checkbox" id="judulbukuZ" name="id[]" onchange="limit_checkbox(2,'id');" alt="Checkbox" value="<?=$row25->id;?>"><?=$row25->judul;?><br>

                                                             <?php }?>
                     </div>
                    </div>
                    </div>
       
          <input type="hidden" class="form-control" id="status" name="status" value="1" placeholder="Status">
          <input type="text" name="tanggal_pinjam" id="tanggal_pinjam" readonly value="<?= date('d-m-Y') ?>" />
          <input type="hidden" name="qty" id="qty" readonly value="1" />
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