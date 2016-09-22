<html>
	<head>
		<title> Edit Artikel
		</title>
	</head>
		<body>
			<h2> Form Edit Artikel</h2>
			<fieldset>
				<form action="<?php echo site_url('artikel/proses_edit_artikel');?>" method="POST">
					Judul: </br><textarea name="title" cols="50" rows="5"><?php echo $artikel->title;?></textarea>
					</br></br>
					Keterangan: </br><textarea name="information" cols="50" rows="5"><?php echo $artikel->information;?></textarea>
					
					</br></br> 
						<input type="hidden" name="id_artikel" value="<?php echo $artikel->id_artikel;?>"/>
						<input type="submit" value="edit"/>

						<a href="<?php echo site_url('artikel/index');?>"> Cancel</a>
				</form>
			</fieldset>
		</body>
</html>