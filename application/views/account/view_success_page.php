<h1> Anda Berhasil Login </h1>

<hr/>
hai,<?php echo $this->session->userdata('username');?> :D
</br>
Selamat datang di website bo'ongan
</br></br>

<a href="<?php echo site_url('account/logout');?>">Keluar</a>