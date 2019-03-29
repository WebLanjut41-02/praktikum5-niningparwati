<form action="<?php echo base_url()?>Prak5/Search">
	<input type="search" name="cari" placeholder="Search Nama atau NIM... ">
	<input type="submit" name="q" value="SEARCH">
</form>
<br>
<br>
<table border="1">
	<tr>
		<th>Nama Mahasiswa</th>
		<th>NIM</th>
		<th>Tanggal Lahir</th>
		<th>IPK</th>
		<th>Kelas</th>
		<th>Aksi</th>
	</tr>
	<tr>
		<?php 
		$no = $this->uri->segment(3)+1;

		foreach ($mahasiswa as $mhs) {
		 ?>
		
		<td><?php echo $mhs->nama; ?></td>
		<td><?php echo $mhs->nim; ?></td>
		<td><?php echo $mhs->ttl; ?></td>
		<td><?php echo $mhs->ipk; ?></td>
		<td><?php echo $mhs->kelas; ?></td>
		<td>
			<form method="POST" action="<?php echo base_url()?>Prak5/Edit?nim=<?php echo $mhs->nim ?>">
				<input type="submit" name="edit" value="EDIT">
			</form>

			<form method="POST" action="<?php echo base_url()?>Prak5/Hapus?nim=<?php echo $mhs->nim ?>">
				<input type="submit" name="hapus" value="HAPUS">
			</form>
		</td>
	</tr>
	<?php } ?>
</table>
<br>
<br>

	<?php 

		echo $this->pagination->create_links();

	 ?>

<br>
<br>

<form method="POST" action="<?php echo base_url()?>Prak5/Input">
	<input type="submit" name="tambah" value="TAMBAH DATA">
</form>