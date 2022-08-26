

    

    

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
             <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $user['name']; ?></h5>
        <p class="card-text"><?= $user['email']; ?></p>
        <p class="card-text"><small class="text-muted">Dibuat pada <?= date('d F Y', $user['data_created']); ?></small></p>
      </div>
    </div>

  </div>
</div>
         

        </div>
        <!-- /.container-fluid -->
         <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
               <div class="ecommerce-widget">
                   <div class="row">
                           
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Jumlah Anggota</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $data_anggota?></h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end sales  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- new customer  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Jumlah Buku</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $data_buku?></h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Jumlah Peminjaman</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $peminjaman?></h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                            <span class="icon-circle-small icon-box-xs text-success bg-success-light bg-success-light "><i class="fa fa-fw fa-arrow-up"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>     
                        

                     
        </div>
    
    </div>
    <br>
    <br>
    <div class="container">
    	<h2>Grafik Jumlah Pengunjung</h2>
      <canvas id="canvas" width="1000" height="280"></canvas>
  </div>

  <br>
    <br>
    <div class="container">
    	<h2>Grafik Jumlah Buku yang Dipinjam</h2>
      <canvas id="canvas1" width="1000" height="280"></canvas>
  </div>
      </div>
      <!-- End of Main Content -->

     
