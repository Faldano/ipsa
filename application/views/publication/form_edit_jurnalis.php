<html>
	<head>
		<title> Edit Jurnal
		</title>
	</head>
		<body>
			<h2> Form Edit Jurnal</h2>
			<fieldset>
				<form action="<?php echo site_url('jurnalis/proses_add_jurnalis');?>" method="POST">
					Judul: </br><textarea name="judul" cols="50" rows="5"><?php echo $jurnalis->judul;?></textarea>
					</br></br>
					Keterangan: </br><textarea name="deskripsi" cols="50" rows="5"><?php echo $jurnalis->deskripsi;?></textarea>
					
					</br></br> 
						<input type="hidden" name="id_jurnalis" value="<?php echo $jurnalis->id_jurnalis;?>"/>
					</br>
						<input type="submit" value="edit"/>
				</form>
			</fieldset>
		</body>
</html>