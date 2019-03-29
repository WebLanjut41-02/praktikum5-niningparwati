<form method="POST" action="<?php echo base_url()?>Prak5/Proses_Edit">
	<table>
		<tr>
			<td>Nama Mahasiswa</td>
			<td><input type="text" name="nama" value="<?php echo $mahasiswa[0]->nama?>"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim" value="<?php echo $mahasiswa[0]->nim?>"></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><input type="date" name="ttl" value="<?php echo $mahasiswa[0]->ttl?>"></td>
		</tr>
		<tr>
			<td>IPK</td>
			<td><input type="text" name="ipk" value="<?php echo $mahasiswa[0]->ipk?>"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>
				<select name="kelas" >
					<option hidden=""><-pilih kelas-></option>
					<option value="42-01">42-01</option>
					<option value="42-01">42-02</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="submit" value="SUBMIT">
			</td>
		</tr>
	</table>
</form>