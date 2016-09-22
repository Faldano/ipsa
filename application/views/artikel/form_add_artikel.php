<html>
	<head>
		<title> add new artikel
		</title>
	</head>
		<body>
			<?php echo $error;?>
			<h2> Form Add Artikel</h2>
			<fieldset>
				<?php echo form_open_multipart('artikel/proses_add_artikel');?>
					Nama: </br><textarea name="title" cols="50" rows="5"></textarea>
					</br></br>
					Keterangan: </br><textarea name="information" cols="50" rows="5"></textarea></br>
					</br>
					Upload File : <input type="file" name="userfile" size="20"/> </br></br>
					<input type="submit" value="Save"/>
				</form>
			</fieldset>
		</body>
</html>