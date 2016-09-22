<!DOCTYPE html>
<!-- Last Published: Wed Jun 29 2016 21:43:45 GMT+0000 (UTC) -->
<html data-wf-site="57700e53b57b99db3abdccde" data-wf-page="57700e53b57b99db3abdcce3">
<head>
  <meta charset="utf-8">
  <title>News - Single</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('aset/css/normalize.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('aset/css/components.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('aset/css/aspi.css');?>">
  <script src="<?php echo base_url('aset/js/webfont.js');?>"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Roboto:100,300,regular,500,700,900,900italic","Playfair Display:regular,700,900","Raleway:100,300,regular,700","Raleway:regular,900"]
      }
    });
  </script>
  <script type="text/javascript" src="<?php echo base_url('aset/js/modernizr.js');?>"></script>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('aset/images/favicon32.png');?>">
  <link rel="apple-touch-icon" href="<?php echo base_url('aset/images/favicon256.png');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('aset/css/preloader.css');?>">
  <script>
    var Webflow = Webflow || [];
    Webflow.push(function () {
    var tabName = getParam('tab');
    if (!tabName) return;
    $('.' + tabName).triggerHandler('click');
    function getParam(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results == null ? "" : decodeURIComponent(results[1].
    replace(/\+/g, " "));
    }
    });
  </script>
</head>
<body>
  <header class="header w-section">
    <div class="navbar w-nav" data-animation="over-left" data-collapse="all" data-doc-height="1" data-duration="500" data-no-scroll="1">
      <div class="menu-button w-nav-button">
        <div class="menu-icon w-icon-nav-menu"></div>
      </div>
      <a class="brand w-nav-brand" href="<?php echo site_url('home');?>">
        <h1 class="brand-text w-hidden-medium w-hidden-small w-hidden-tiny">Asosiasi Sel Punca Indonesia</h1>
        <h1 class="brand-text w-hidden-main">ASPI</h1>
      </a>
      <nav class="nav-menu w-nav-menu" role="navigation">
        <a class="main-link w-nav-link" href="<?php echo site_url('home');?>">HOME</a>
        <div class="w-dropdown" data-delay="0">
          <div class="main-link w-dropdown-toggle">
            <div>About Us</div>
            <div class="w-icon-dropdown-toggle"></div>
          </div>
          <nav class="drop-list w-dropdown-list">
            <a class="main-link w-dropdown-link" href="<?php echo site_url('about');?>">- aspi overview</a>
            <a class="main-link w-dropdown-link" href="<?php echo site_url('about');?>">-&nbsp;Vision and Mission</a>
            <a class="main-link w-dropdown-link" href="<?php echo site_url('about');?>">-&nbsp;Structure</a>
          </nav>
        </div>
        <a class="main-link w-nav-link" href="<?php echo site_url('news');?>">News</a>
        <a class="main-link w-nav-link" href="<?php echo site_url('publications');?>">Publications</a>
        <a class="main-link w-nav-link" href="<?php echo site_url('events');?>">Events</a>
        <a class="main-link w-nav-link" href="<?php echo site_url('contact');?>">CONTACT Us</a>
      </nav>
      <a class="login-button w-hidden-small w-inline-block" data-ix="login" href="#">
        <img class="login-img" src="<?php echo base_url('aset/images/user.png');?>">
        <div class="login-text w-hidden-tiny">Login / Register</div>
      </a>
    </div>
    <div class="w-embed">
      <style>
        body {
            -webkit-font-smoothing: antialiased;
            }
      </style>
    </div>
    <div class="header-fade"></div>
  </header>
  <div class="login-popup">
    <div class="login-container w-container">
      <div class="pop-up-header">
        <h2>Membership</h2>
        <div class="w-hidden-tiny">Join our membership to access the full version of premium publications.</div>
      </div>
      <div class="w-row">
        <div class="w-col w-col-6">
          <div class="popup-bracket">
            <h3 class="login-title">Log In</h3>
            <div class="w-form">
             <?php echo validation_errors();?>
            <p style="color:red;"><?php echo $this->session->flashdata('notification')?>
            <?php echo form_open('member/login')?>
                <label class="label" for="name">Username:</label>
                <input class="w-input field" name="username" placeholder="Enter your name" required="required" type="text">
                <label class="label" for="Password">Password</label>
                <input class="w-input field" name="password" placeholder="Enter your Password" required="required" type="password">
                <input class="w-button log purple" data-wait="Please wait..." type="submit" value="Log In">
              </form>
              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form</div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-col w-col-6">
          <div class="popup-bracket w-hidden-tiny">
            <h3 class="login-title">Registration</h3>
            <div class="w-form">
               <?php echo form_open('guest/registrasi');?>
                <label class="label" for="Real-Name">Name:</label>
                <input class="w-input field" name="nama" placeholder="Enter your name" required="required" type="text">
                <label class="label" for="Email">Email:</label>
                <input class="w-input field"  name="email" placeholder="Enter your Email" required="required" type="email">
                <label class="label" for="Institution">Institution:</label>
                <input class="w-input field" name="instansi" placeholder="Enter your institution name" type="text">
                <label class="label" for="Username-Register">Username:</label>
                <input class="w-input field" name="username" placeholder="Enter your username" required="required" type="text">
                <label class="label" for="Password-Register">Password</label>
                <input class="w-input field" name="password" placeholder="Enter your Password" required="required" type="password">
                <input class="w-button log"  type="submit" value="Register">
              </form>
              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="about section-hero title w-section">
    <div class="about-header container w-container">
      <h1 class="bottom-margin-small" data-ix="fly-in-load-side"><?php echo $daftar_artikel->title;?></h1>
      <h3 class="hero-sub-title" data-ix="fly-in-load-2"><?php echo substr($daftar_artikel->tgl,0,10);?></h3>
    </div>
  </section>
  <section class="section---white-holder w-section">
    <div class="container w-container" data-ix="fly-in-load-3">
      
      <img class="selected-news-img" data-ix="fade-in-scroll" src="<?php echo base_url('./upload/'.$daftar_artikel->image);?>">

      <p class="bottom-margin-medium paragraph-justified" data-ix="fly-on-scroll"><?php echo $daftar_artikel->information;?></p>
        
    </div>
  </section>
  
  <a class="call-to-action w-inline-block" data-ix="call-to-action" href="<?php echo site_url('contact');?>">
    <div class="link-container w-container">
      <h2 class="bottom-call-to-action" data-ix="fly-on-scroll-side"><span class="dark-grey inline-to-block">Is there anything we can help?</span> <span>Let's talk</span>&nbsp;<span class="cta-arrow-icon">»</span></h2>
    </div>
  </a>
  <footer class="footer w-section">
    <div class="footer-copyright-section">
      <div class="w-container">
        <div class="w-row">
          <div class="align-left logo w-clearfix w-col w-col-6">
            <a class="footer-brand w-inline-block" href="#">
              <img src="<?php echo base_url('aset/images/aspi white.png');?>" width="150">
            </a>
            <div class="footer-menu">
              <a class="footer-link" href="<?php echo site_url('home');?>">Home</a>
              <a class="footer-link" href="<?php echo site_url('about');?>">About Us</a>
              <a class="footer-link" href="<?php echo site_url('news');?>">News</a>
              <a class="footer-link" href="<?php echo site_url('publications');?>">Publications</a>
              <a class="footer-link" href="<?php echo site_url('events');?>">Events</a>
              <a class="footer-link" href="<?php echo site_url('contact');?>">Contact Us</a>
            </div>
          </div>
          <div class="align-right w-col w-col-6">
            <div class="sosmed-div">
              <a class="social-icon w-inline-block" href="https://www.facebook.com/SelPunca" target="_blank">
                <img src="<?php echo base_url('aset/images/Social-Facebook.svg');?>">
              </a>
            </div>
            <div class="small-text white" id="navatari">© 2016 ASPI. Website by <a class="credit" id="navatarilink" target="_blank" href="http://navatari.com">Navatari</a>. All rights reserved.</div>
          </div>
        </div>
      </div>
    </div>
    <div class="preloader" data-ix="preload">
      <div class="center-content" data-ix="fade-in-preloader">
        <img class="preload-logo" src="<?php echo base_url('aset/images/aspi 200px.png');?>">
        <div class="w-embed">
          <div class="cssload-wrap">
            <div class="cssload-container">
              <span class="cssload-dots"></span>
              <span class="cssload-dots"></span>
              <span class="cssload-dots"></span>
              <span class="cssload-dots"></span>
              <span class="cssload-dots"></span>
              <span class="cssload-dots"></span>
              <span class="cssload-dots"></span>
              <span class="cssload-dots"></span>
              <span class="cssload-dots"></span>
              <span class="cssload-dots"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script type="text/javascript" src="<?php echo base_url('aset/js/jquery.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('aset/js/aspi.js');?>"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
  <script type="text/javascript" src="<?php echo base_url('aset/js/secure.js');?>"></script>
</body>
</html>