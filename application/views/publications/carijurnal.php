
<fieldset>
	<form action="<?php echo site_url('publications/search_journal');?>" target="_blank" method="POST">
	Title: <input id="input-judul" type="text" name="judul" size="100"/>
	<!--<input id="btn-frm-close" type="button" value="batal"/>-->
	</form>
</fieldset>
<!--<script type="text/javascript">
 
 // menutup form ketika tidak akan digunakan
 $("#btn-form-close").click(function(){
 $('#view-form').html('');
 });
 
 // melakukan proses pencarian ketika mengetikkan judul
 $('#input-judul').keyup(function(){
 var nama = $('#input-judul').val();
 // alert(nama);
 $.ajax({
 type:"POST",
 url:"<?php //echo site_url('publications/search_journal');?>",
 data:'judul='+nama,
 success:function(html){
 $('#view-list-jurnal').html(html);
 }
 });
 });
 
</script>-->

