 <!-- Footer -->
   <?php
        foreach($data as $data){
            $total[] = (float) $data->total;
            $tanggal_dtg[] = date('d F Y',strtotime($data->tanggal_dtg));
        }
    ?>
<!--   <?php
        foreach($data1 as $data1){
            $total1[] = $data1->total;
            $id[] = $data1->id;
        }
    ?> -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; KP Unjani 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
  <script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
    <!-- <script src="<?php echo base_url('assets/jquery-ui/jquery-ui.min.js'); ?>"></script> -->
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
  
  <script src="<?= base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="<?php echo base_url()?>assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/Chart.min.js'?>"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets'); ?>/js/sb-admin-2.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url().'assets/js/Chart.js'?>"></script>
     <script type="text/javascript">
     // buat nyimpen isi grafik nya
    var ctx = document.getElementById("canvas").getContext('2d'); 
     // buat bikin grafiknya
    var myChart = new Chart(ctx, {
      // ini bisa diubah tipe chartnya bisa line, bar, dll
      type: 'line', 
      data: {
        // ini buat  label grafik yang sumbu y
        labels: <?php echo json_encode($tanggal_dtg);?>,
        datasets: [{
          // kalau ini  label buat nama tiap bar di grafiknya
          label: 'Jumlah Pengunjung',
          // variabel data ini diisi sama jumlah pengunjungnya alias hasil perhitungan di model
          data: <?php echo json_encode($total);?>,
          // ini buat ngatur warnanya 
          backgroundColor: [
         
          'rgba(54, 235, 126)'
          ],
          borderColor: [
          
          'rgba(  0, 42, 100)'
          ],
          borderWidth: 3
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>

   
    <script type="text/javascript">

         $('#tampilbuku').hide();
      $('#judulbuku').hide();
      $('#labeljudul').hide();
       $('#tampilbukuB').hide();
      $('#judulbukuB').hide();
      $('#labeljudulB').hide();
      $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();
        $('#carijudul').change(function(){
         var carijudul = $(this).val();
         if (carijudul =='A') {
           $('#labeljudul').show();
             $('#tampilbuku').show();
            $('#judulbuku').show();
            // huruf B di hide
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
            $('#labeljudulB').hide();
             $('#tampilbukuC').hide();
            $('#judulbukuC').hide();
            $('#labeljudulC').hide();
            $('#tampilbukuD').hide();
            $('#judulbukuD').hide();
            $('#labeljudulD').hide();
            $('#tampilbukuE').hide();
            $('#judulbukuE').hide();
            $('#labeljudulE').hide();
            $('#tampilbukuF').hide();
            $('#judulbukuF').hide();
            $('#labeljudulF').hide();
            $('#tampilbukuG').hide();
            $('#judulbukuG').hide();
            $('#labeljudulG').hide();
            $('#tampilbukuH').hide();
            $('#judulbukuH').hide();
            $('#labeljudulH').hide();
            $('#tampilbukuI').hide();
            $('#judulbukuI').hide();
            $('#labeljudulI').hide();
            $('#tampilbukuJ').hide();
            $('#judulbukuJ').hide();
            $('#labeljudulJ').hide();
            $('#tampilbukuK').hide();
            $('#judulbukuK').hide();
            $('#labeljudulK').hide();
            $('#tampilbukuL').hide();
            $('#judulbukuL').hide();
            $('#labeljudulL').hide();
            $('#tampilbukuM').hide();
            $('#judulbukuM').hide();
            $('#labeljudulM').hide();
            $('#tampilbukuN').hide();
            $('#judulbukuN').hide();
            $('#labeljudulN').hide();
            $('#tampilbukuO').hide();
            $('#judulbukuO').hide();
            $('#labeljudulO').hide();
            $('#tampilbukuP').hide();
            $('#judulbukuP').hide();
            $('#labeljudulP').hide();
               $('#tampilbukuQ').hide();
            $('#judulbukuQ').hide();
            $('#labeljudulQ').hide();
               $('#tampilbukuR').hide();
            $('#judulbukuR').hide();
            $('#labeljudulR').hide();
               $('#tampilbukuS').hide();
            $('#judulbukuS').hide();
            $('#labeljudulS').hide();
               $('#tampilbukuT').hide();
            $('#judulbukuT').hide();
            $('#labeljudulT').hide();
               $('#tampilbukuU').hide();
            $('#judulbukuU').hide();
            $('#labeljudulU').hide();
               $('#tampilbukuV').hide();
            $('#judulbukuV').hide();
            $('#labeljudulV').hide();
               $('#tampilbukuW').hide();
            $('#judulbukuW').hide();
            $('#labeljudulW').hide();
               $('#tampilbukuX').hide();
            $('#judulbukuX').hide();
            $('#labeljudulX').hide();
               $('#tampilbukuY').hide();
            $('#judulbukuY').hide();
            $('#labeljudulY').hide();
               $('#tampilbukuZ').hide();
            $('#judulbukuZ').hide();
            $('#labeljudulZ').hide();
                       
         } else if (carijudul =='B') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg show
             $('#labeljudulB').show();
             $('#tampilbukuB').show();
            $('#judulbukuB').show();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();
         }
         else if (carijudul =='C') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').show();
      $('#judulbukuC').show();
      $('#labeljudulC').show();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         }
        else if (carijudul =='D') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').show();
      $('#judulbukuD').show();
      $('#labeljudulD').show();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         }   
          else if (carijudul =='E') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').show();
      $('#judulbukuE').show();
      $('#labeljudulE').show();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         }  
          else if (carijudul =='F') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').show();
      $('#judulbukuF').show();
      $('#labeljudulF').show();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         } 
          else if (carijudul =='G') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').show();
      $('#judulbukuG').show();
      $('#labeljudulG').show();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         }
          else if (carijudul =='H') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').show();
      $('#judulbukuH').show();
      $('#labeljudulH').show();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         }        

          else if (carijudul =='I') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').show();
      $('#judulbukuI').show();
      $('#labeljudulI').show();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         }   

          else if (carijudul =='J') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').show();
      $('#judulbukuJ').show();
      $('#labeljudulJ').show();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         }

          else if (carijudul =='K') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').show();
      $('#judulbukuK').show();
      $('#labeljudulK').show();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         }

          else if (carijudul =='L') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').show();
      $('#judulbukuL').show();
      $('#labeljudulL').show();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         }
         
          else if (carijudul =='M') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').show();
      $('#judulbukuM').show();
      $('#labeljudulM').show();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         } 

          else if (carijudul =='N') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').show();
      $('#judulbukuN').show();
      $('#labeljudulN').show();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         }

          else if (carijudul =='O') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').show();
      $('#judulbukuO').show();
      $('#labeljudulO').show();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         }   

          else if (carijudul =='P') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').show();
      $('#judulbukuP').show();
      $('#labeljudulP').show();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         }  

          else if (carijudul =='Q') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').show();
      $('#judulbukuQ').show();
      $('#labeljudulQ').show();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         }

          else if (carijudul =='R') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').show();
      $('#judulbukuR').show();
      $('#labeljudulR').show();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         }  

          else if (carijudul =='S') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').show();
      $('#judulbukuS').show();
      $('#labeljudulS').show();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         } 

          else if (carijudul =='T') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').show();
      $('#judulbukuT').show();
      $('#labeljudulT').show();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         }

          else if (carijudul =='U') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').show();
      $('#judulbukuU').show();
      $('#labeljudulU').show();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         } 

          else if (carijudul =='V') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').show();
      $('#judulbukuV').show();
      $('#labeljudulV').show();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         }   

          else if (carijudul =='W') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').show();
      $('#judulbukuW').show();
      $('#labeljudulW').show();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         }  

          else if (carijudul =='X') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').show();
      $('#judulbukuX').show();
      $('#labeljudulX').show();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         } 

          else if (carijudul =='Y') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').show();
      $('#judulbukuY').show();
      $('#labeljudulY').show();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         }

          else if (carijudul =='Z') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').show();
      $('#judulbukuZ').show();
      $('#labeljudulZ').show();

         }

           else if (carijudul =='kosong') {
          // huruf A di hide
                  $('#tampilbuku').hide();
            $('#judulbuku').hide();
            $('#labeljudul').hide();
            // huruf B yg hid
             $('#labeljudulB').hide();
             $('#tampilbukuB').hide();
            $('#judulbukuB').hide();
             $('#tampilbukuC').hide();
      $('#judulbukuC').hide();
      $('#labeljudulC').hide();
      $('#tampilbukuD').hide();
      $('#judulbukuD').hide();
      $('#labeljudulD').hide();
      $('#tampilbukuE').hide();
      $('#judulbukuE').hide();
      $('#labeljudulE').hide();
      $('#tampilbukuF').hide();
      $('#judulbukuF').hide();
      $('#labeljudulF').hide();
      $('#tampilbukuG').hide();
      $('#judulbukuG').hide();
      $('#labeljudulG').hide();
      $('#tampilbukuH').hide();
      $('#judulbukuH').hide();
      $('#labeljudulH').hide();
      $('#tampilbukuI').hide();
      $('#judulbukuI').hide();
      $('#labeljudulI').hide();
      $('#tampilbukuJ').hide();
      $('#judulbukuJ').hide();
      $('#labeljudulJ').hide();
      $('#tampilbukuK').hide();
      $('#judulbukuK').hide();
      $('#labeljudulK').hide();
      $('#tampilbukuL').hide();
      $('#judulbukuL').hide();
      $('#labeljudulL').hide();
      $('#tampilbukuM').hide();
      $('#judulbukuM').hide();
      $('#labeljudulM').hide();
      $('#tampilbukuN').hide();
      $('#judulbukuN').hide();
      $('#labeljudulN').hide();
      $('#tampilbukuO').hide();
      $('#judulbukuO').hide();
      $('#labeljudulO').hide();
      $('#tampilbukuP').hide();
      $('#judulbukuP').hide();
      $('#labeljudulP').hide();
         $('#tampilbukuQ').hide();
      $('#judulbukuQ').hide();
      $('#labeljudulQ').hide();
         $('#tampilbukuR').hide();
      $('#judulbukuR').hide();
      $('#labeljudulR').hide();
         $('#tampilbukuS').hide();
      $('#judulbukuS').hide();
      $('#labeljudulS').hide();
         $('#tampilbukuT').hide();
      $('#judulbukuT').hide();
      $('#labeljudulT').hide();
         $('#tampilbukuU').hide();
      $('#judulbukuU').hide();
      $('#labeljudulU').hide();
         $('#tampilbukuV').hide();
      $('#judulbukuV').hide();
      $('#labeljudulV').hide();
         $('#tampilbukuW').hide();
      $('#judulbukuW').hide();
      $('#labeljudulW').hide();
         $('#tampilbukuX').hide();
      $('#judulbukuX').hide();
      $('#labeljudulX').hide();
         $('#tampilbukuY').hide();
      $('#judulbukuY').hide();
      $('#labeljudulY').hide();
         $('#tampilbukuZ').hide();
      $('#judulbukuZ').hide();
      $('#labeljudulZ').hide();

         }
           })
           
    </script>
     <script type="text/javascript">
     
     $('.histori').click(function(){
                var id_peminjaman = $(this).attr('id_peminjaman');
                $.ajax({
                    url:"<?php echo site_url('Transaksi/get_pinjam')?>",
                    method:"post",
                    data:{id_peminjaman:id_peminjaman},
                    dataType:"json",
                    success:function(result)
                    {

                        $('#pinjam').html(result.peminjaman);
                        $('#detail').modal('show');
                        
                    }
                })
           })

          
    </script>
   <script type="text/javascript">
     
     $('.rincian').click(function(){
                var nopinjam = $(this).attr('nopinjam');
                $.ajax({
                    url:"<?php echo site_url('Transaksi/get_histori')?>",
                    method:"post",
                    data:{nopinjam:nopinjam},
                    dataType:"json",
                    success:function(result)
                    {

                        $('#pinjam').html(result.peminjaman);
                        $('#detail').modal('show');
                        
                    }
                })
           })
          
    </script>
  <script type="text/javascript">
    
      

    $('.update').click(function(){
                var nopinjam = $(this).attr('nopinjam');
                        $('#update_status_peminjaman').modal('show');
                        $('.setuju').attr('href','<?php echo base_url();?>Transaksi/update_status_peminjaman/'+nopinjam+'/2');
                        // $('.tolak').attr('href','<?php echo base_url();?>Transaksi/update_status_peminjaman/'+nopinjam+'/3');
             });
   
    </script>
   <script type="text/javascript">
function limit_checkbox(max,identifier)
{
  var checkbox = $("input[name='"+identifier+"[]']");
  var checked  = $("input[name='"+identifier+"[]']:checked").length;
  checkbox.filter(':not(:checked)').prop('disabled', checked >= max);
  
}
</script>
<!--  <script type="text/javascript">
    $(document).ready(function(){ // Ketika halaman selesai di load
        $('.input-tanggal').datepicker({
            dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
        });

        $('#form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya

        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                //$('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else{ // Jika filternya 3 (per tahun)
                $('#form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }

            $('#form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    })
    </script> -->
    <script type="text/javascript">
         $('#form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya

        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                //$('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else{ // Jika filternya 3 (per tahun)
                $('#form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }

            $('#form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    </script>
     
     <script type="text/javascript">
		$(document).ready(function(){
			 $('#id_anggota').on('input',function(){
                
                var id_anggota=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url()?>administrator/get_anggota",
                    dataType : "JSON",
                    data : {id_anggota: id_anggota},
                    cache:false,
                    success: function(data){
                        $.each(data,function(id_anggota, nama){
                            $('[name="nama"]').val(data.nama);
                           
                        });
                        
                    }
                });
                return false;
           });

		});
	</script>
</body>

</html>