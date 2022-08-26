<div class="content-wrapper">
	<section class="content">
		<h4><strong>Perpustakaan Braille BPBI Abiyoso</strong></h4>



<table>
	<tr>
		<th>ID Anggota : </th>
		<td><?= $detailang->id_anggota ?></td>
			</tr>
			<tr>
				<th>Nama Anggota : </th>
		<td><?= $detailang->nama ?></td>

			</tr>
			<tr>
				<th>Tipe Keanggotaan : </th>
		<td><?= $detailang->kategori ?></td>
			</tr>
</table>

<button onclick="myFunction()">Cetak Kartu Anggota</button>
 
<script>
 
function myFunction() {
 
    window.print();
 
}
 
</script>
</section>
</div>