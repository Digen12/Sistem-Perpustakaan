

  

 
           <table class="table table-sm" border="2" width="100%">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID Anggota</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Noooo HP</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Tingkat Pendidikan</th>
      <th scope="col">Kategori</th>
      <th scope="col">Dibuat Pada</th>
      
    </tr>
  </thead>
  <tbody>
  
    <?php $no = 1;
    foreach($data_anggota as $dta){
     ?>
   
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><?= $dta->id_anggota ?></td>
      <td><?= $dta->nama ?></td>
      <td><?= $dta->alamat ?></td>
      <td><?= $dta->no_hp ?></td>
      <td><?= $dta->Jenis_kelamin ?></td>
      <td><?= $dta->tingkat_pendidikan ?></td>
      <td><?= $dta->kategori ?></td>
      <td><?=date('d-m-Y',strtotime($dta->data_created))?></td>
      
    </tr>
    
   <?php } ?>
  </tbody>
  
</table>


         


