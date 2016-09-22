<!DOCTYPE html>
	<head>
		<title> form add event </title>

	</head>
	<body>
		<?php echo form_open_multipart('login_by_navatari/proses_add_event');?> 
			<table>
				<tr>
					<td>Judul Event</td>
					<td>:</td>
					<td><input type="text" name="judul" required/></td>
				</tr>
				<tr>
					<td>Deskripsi Event</td>
					<td>:</td>
					<td><input type="text" name="deskripsi" required/></td>
				</tr>
				<tr>
					<td>Tempat</td>
					<td>:</td>
					<td><input type="text" name="tempat" required/></td>
				</tr>
				<tr>
					<td>Tanggal</td>
					<td>:</td>
					<td><input type="date" name="tgl" required/></td>
				</tr>
				<tr>
					<td>Waktu</td>
					<td>:</td>
					<td><input type="time" name="waktu" required/></td>
				</tr>
				<tr>
					<td>Upload Image</td>
					<td>:</td>
					<td><input type="file" name="userfile" required/></td>
				</tr>
				<tr>
					<td><input type="submit" value="Add"</td>

				</tr>


			</table>

	</body>
</html>