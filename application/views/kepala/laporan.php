 <table class="table table-sm" border="2" width="100%">
 
  
    <?php $no = 1;
    foreach($laporan as $l){
     ?>
   
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><?= $l->id_laporan ?></td>
      <td><?= $l->nama_laporan ?></td>
      <td><?=date('d-m-Y',strtotime($l->tgl_dibuat))?></td>
      <td><a href="<?php echo base_url().'kepala/download/'.$l->id_laporan; ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-download-alt">Download</a></td>
        <?php
              }
              ?>
    </tr>
   
  </tbody>
  
</table>

 <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; KP Unjani 2019</span>
          </div>
        </div>
      </footer>