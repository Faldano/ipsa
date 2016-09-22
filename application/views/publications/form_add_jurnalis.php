<!DOCTYPE html>

	<head>
		<title>FORM ADD JURNAL</title>
	</head>

	<body>
		<form action="<?php echo site_url('jurnalis/proses_add_jurnalis');?>" method="POST">
			<table>
				<tr>
					<td> Judul</td>
					<td>:</td>
					<td><input type="text" name="judul" cols="50"></td>
				</tr>
				<tr>
					<td>link</td>
					<td>:</td>
					<td><input type="text" name="link" cols="50"></td>
				</tr>
			</table>
		</br>
		Deskripsi:
		</br>
			<textarea name="deskripsi" cols="50"></textarea>
		</br>
			<input type="submit" value="add new"/>
		</form>

	</body>
</html>