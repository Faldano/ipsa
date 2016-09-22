<!DOCTYPE html>
<html>
	<head>
		<title>
		Home
		</title>
	</head>
		
		<body>
			
			<h2> Daftar Artikel </h2>
			<a href="<?php echo site_url('artikel/add_artikel');?>"> add artikel </a> </br></br>
			
			<?php foreach($daftar_artikel as $artikel){?>
			<fieldset>
			<a href="<?php echo site_url('artikel/select_artikel/'.$artikel->id_artikel);?>">load more </a> </br></br>
				<h3><?php echo substr ($artikel->title,0,10);?>..</h3>
				<a href="<?php echo site_url('artikel/edit_artikel/'.$artikel->id_artikel);?>"> edit </a> | |
				<a href="<?php echo site_url('artikel/delete_artikel/'.$artikel->id_artikel);?>"> delete </a> </br>
				<p>
					<?php echo substr ($artikel->information,0,50);?>...
				</p>

				<img src="<?php echo base_url('./upload/'.$artikel->image);?>"</br>
			</br>
				<h5><?php echo $artikel->tgl;?></h5>

			</fieldset>

			</br>
			<?php
			}
			?>
			
			

		</body>
</html>