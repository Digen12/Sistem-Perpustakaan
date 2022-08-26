<html>
<head>
	<title>Cetak PDF</title>
	<style>
		table {
			border-collapse:collapse;
			table-layout:fixed;width: 630px;
		}
		table td {
			word-wrap:break-word;
			width: 20%;
		}
	</style>
</head>
<body>
    <b><?php echo $ket; ?></b><br /><br />
    
	<table border="1" cellpadding="8">
    <tr>
       <th scope="col">No</th>
       <th scope="col">Tanggal dibuat</th>
      <th scope="col">ID Anggota</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">No HP</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Tingkat Pendidikan</th>
      <th scope="col">Kategori</th>
    </tr>
    <?php
    if( ! empty($data_anggota)){
        $no = 1;
        foreach($data_anggota as $dta){
            $tgl = date('d-m-Y', strtotime($dta->data_created));

            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".$tgl."</td>";
            echo "<td>".$dta->id_anggota."</td>";
            echo "<td>".$dta->nama."</td>";
            echo "<td>".$dta->alamat."</td>";
            echo "<td>".$dta->no_hp."</td>";
            echo "<td>".$dta->Jenis_kelamin."</td>";
            echo "<td>".$dta->tingkat_pendidikan."</td>";
            echo "<td>".$dta->kategori."</td>";
            echo "</tr>";
            $no++;
    	}
    }
    ?>
	</table>
</body>
</html>
