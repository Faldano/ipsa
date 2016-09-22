<!DOCTYPE html>
<html>
	<head>
		<title>
		Home
		</title>
	</head>
		
		<body>
			<h2> Daftar Jurnalis </h2>
			<a href="<?php echo site_url('jurnalis/add_jurnalis');?>"> add jurnalis </a> </br></br>
			
			<?php foreach($daftar_jurnalis as $jurnalis){?>
			<fieldset>
			<a href="<?php echo site_url('jurnalis/select_jurnalis/'.$jurnalis->id_jurnalis);?>">load more </a> </br></br>

				<h3><?php echo $jurnalis->judul;?>..</h3>

				<a href="<?php echo site_url('jurnalis/edit_jurnalis/'.$jurnalis->id_jurnalis);?>"> edit </a> | |
				<a href="<?php echo site_url('artikel/delete_jurnalis/'.$jurnalis->id_jurnalis);?>"> delete </a> </br>

				<p>
					<?php echo $jurnalis->deskripsi;?>
				</p>
				<a href="<?php echo urldecode($jurnalis->link);?>" target="blank"><?php echo urldecode($jurnalis->link);?></a>
			</fieldset>
			</br>
			<?php
			}
			?>
			
		</body>
</html>