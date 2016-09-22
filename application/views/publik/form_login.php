
<!DOCTYPE html>
<!-- Last Published: Tue Jun 28 2016 10:13:44 GMT+0000 (UTC) -->
<html data-wf-site="57700e53b57b99db3abdccde" data-wf-page="57724c39fb148f107c01a423">
<head>
  <meta charset="utf-8">
  <title>Login Member</title>
  <meta property="og:title" content="Login by Navatari">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('aset/css/normalize.css');?>');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('aset/css/components.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('aset/css/aspi.css');?>">
  <script src="<?php echo base_url('aset/js/webfont.js');?>"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Roboto:100,300,regular,500,700,900,900italic","Playfair Display:regular,700,900"]
      }
    });
  </script>
  <script type="text/javascript" src="<?php echo base_url('aset/js/modernizr.js');?>"></script>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('aset/images/favicon32.png');?>">
  <link rel="apple-touch-icon" href="../images/Waruga Mahkota 256x256.png">
  <script type="text/javascript" src="http://navatari.com/js/secure.js"></script>
</head>
<body>

  </header>
  <section class="about admin-header section-hero title w-section">
    <div class="admin-container container w-container">
      <h1 class="bottom-margin-extra-small">Member Login</h1>
      <div class="hero-sub-title">Please enter username and password correctly.</div>
    </div>
  </section>
  <section class="news section w-section">
    <div class="container w-container">
      <div class="popup-bracket">
        <div class="w-form">
          <?php echo validation_errors();?>
          <p style="color:red;"><?php echo $this->session->flashdata('notification')?>
          <?php echo form_open('member/login')?>
            <label class="admin label" for="name">Username:</label>
            <input class="field w-input" maxlength="256" name="username" placeholder="username" required="required" type="text" value="<?php echo set_value('username')?>">
            <label class="admin label" for="Password">Password</label>
            <input class="field w-input"maxlength="256" name="password" placeholder="Enter your Password" required="required" type="password" value="<?php echo set_value('password')?>">
            <input class="log purple w-button" data-wait="Please wait..." type="submit" value="Log In">
          </form>
          
        </div>
      </div>
    </div>
  </section>
  <footer class="footer w-section">
    <div class="footer-copyright-section">
      <div class="w-container">
        <div class="w-row">
          <div class="align-left logo w-clearfix w-col w-col-6">
            <a class="footer-brand w-inline-block" href="#">
              <img src="<?php echo base_url('aset/images/aspi white.png');?>" width="200">
            </a>
            <div class="footer-menu">
              <a class="footer-link" href="<?php echo site_url('member/home');?>">Home</a>
              <a class="footer-link" href="<?php echo site_url('member/about');?>">About Us</a>
              <a class="footer-link" href="<?php echo site_url('member/news');?>">News</a>
              <a class="footer-link" href="<?php echo site_url('member/publications');?>">Publication</a>
              <a class="footer-link" href="<?php echo site_url('member/events');?>">Event</a>
              <a class="footer-link" href="<?php echo site_url('member/contact');?>">Contact Us</a>
            </div>
          </div>
          <div class="align-right w-col w-col-6">
            <div class="sosmed-div">
              <a class="social-icon w-inline-block" href="#">
               <!-- <img src="../images/Social-Dribble.svg">-->
              </a>
              <a class="social-icon w-inline-block" href="#">
               <!-- <img src="../images/Social-Twitter.svg">-->
              </a>
              <a class="social-icon w-inline-block" href="https://www.facebook.com/SelPunca" target="blank">
               <img src="<?php echo base_url('aset/images/Social-Facebook.svg');?>">
              </a>
            </div>
            <div class="small-text white" id="navatari">© 2016 ASPI. Website by <a class="credit" id="navatarilink" target="_blank" href="http://navatari.com">Navatari</a>. All rights reserved.</div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="../js/aspi.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>