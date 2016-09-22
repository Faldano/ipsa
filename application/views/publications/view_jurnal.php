<!DOCTYPE html>
<html>
	<head>
		<title> Search Journal
		</title>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	</head>
	<body>
		<h2> Daftar Jurnal </h2>
		<a id="show-list-agenda" href="javascript:void(0)"> All Journal</a>|
		<a id="show-form-cari-agenda" href="javascript:void(0)"> Search Journal</a>|
		</br></br>
		
		<div id="view-form">
		</div>
		</br>
		<div id="view-list-agenda"> </div>
		
	</body>
	
	 <script type="text/javascript">    

	 
	 $(document).ready(function(){ 
	 // menampilkan semua list agenda saat pertama kali halaman utama diload            
	 $("#view-list-agenda").load('<?php echo site_url('publications/all_journal');?>');
	 
	 
	 // menampilkan semua list ketika menu lihat agenda ditekan         
	 $("#show-list-agenda").click(function(){              
	 $("#view-form").empty();               
	 $("#view-list-agenda").load('<?php echo site_url('publications/all_journal');?>');
	 }); 

	 
	 // menampilkan form tambah agenda            
	 $("#show-form-tambah-agenda").click(function(){              
	 $("#view-form").load('<?php echo site_url('ajaxsample/tambah_agenda');?>');            
	 });
	 
	 
	 // menampilkan form cari agenda          
	 $("#show-form-cari-agenda").click(function(){              
	 $("#view-form").load('<?php echo site_url('publications/search');?>');           
	 });                   
	 });   
	 </script>
	
</html>