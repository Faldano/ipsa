<?php foreach($daftar_jurnalis as $jurnal_publik){?>
<div>
  <article class="bottom-margin-medium third-block-content-single">
    <h4 class="bottom-margin-small"><?php echo $jurnal_publik->judul ;?></h4>
    
      
    <a class="small-text" data-ix="call-to-action-more" href="<?php echo site_url('guest/publication_single/'.$jurnal_publik->id_jurnalpublik);?>"><span>SELENGKAPNYA</span> <span class="more-arrow">→</span></a>
</article>
  </div>
</br>
</br>
    <?php } 
    ?>