<!DOCTYPE html>
<!-- Last Published: Mon Jun 27 2016 19:00:01 GMT+0000 (UTC) -->
<html data-wf-site="57700e53b57b99db3abdccde" data-wf-page="57710b62b57b99db3abeeb18">
<head>
  <meta charset="utf-8">
  <title>Publication</title>
  <meta property="og:title" content="Publication">
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
  <header class="w-section header">
    <div class="w-nav navbar" data-animation="over-left" data-collapse="all" data-doc-height="1" data-duration="500" data-no-scroll="1">
      <div class="w-nav-button menu-button">
        <div class="w-icon-nav-menu menu-icon"></div>
      </div>
      <a class="w-nav-brand brand" href="<?php echo site_url('home');?>">
        <h1 class="brand-text">Asosiasi Sel Punca Indonesia</h1>
      </a>
      <nav class="w-nav-menu nav-menu" role="navigation">
        <a class="w-nav-link main-link" href="<?php echo site_url('home');?>">HOME</a>
        <div class="w-dropdown" data-delay="0">
          <div class="w-dropdown-toggle main-link">
            <div>About Us</div>
            <div class="w-icon-dropdown-toggle"></div>
          </div>
          <nav class="w-dropdown-list drop-list">
            <a class="w-dropdown-link main-link" href="<?php echo site_url('about');?>">- aspi overview</a>
            <a class="w-dropdown-link main-link" href="<?php echo site_url('about');?>">-&nbsp;Vision and Mission</a>
            <a class="w-dropdown-link main-link" href="<?php echo site_url('about');?>">-&nbsp;Structure</a>
          </nav>
        </div>
        <a class="w-nav-link main-link" href="<?php echo site_url('news');?>">news</a>
        <a class="w-nav-link main-link" href="<?php echo site_url('publications');?>">publications</a>
        <a class="w-nav-link main-link" href="<?php echo site_url('events');?>">Events</a>
        <a class="main-link w-nav-link" href="<?php echo site_url('contact');?>">CONTACT Us</a>
      </nav>
      <a class="w-inline-block login-button" data-ix="login" href="#">
        <img class="login-img" src="<?php echo base_url('aset/images/user.png');?>">
        <div class="login-text">Login / Register</div>
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
          <div class="popup-bracket">
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
  <section class="w-section section-hero title about">
    <div class="w-container container about-header">
      <h1 class="bottom-margin-extra-small">Publication</h1>
      <h3 class="hero-sub-title">Most of our publication are dedicated for member-only.<br>You may join our membership to access the full-version of the publications.</h3>
    </div>
  </section>

  <section class="w-section section news">
     <div class="w-container container">
      
      <article class="third-block-holder-single bottom-margin-medium">
       
        <article class="third-block-content-single bottom-margin-medium half" >
          <h4 class="bottom-margin-small">search</h4>
          <!--_<a class="small-text" data-ix="call-to-action-more" href="#"><span>SELENGKAPNYA</span> <span class="more-arrow">→</span></a>-->
          <fieldset>
  <form action="<?php echo site_url('publications/search_journal');?>" method="POST">
  Title: <input id="input-judul" type="text" name="judul" size="100"/>
  <!--<input id="btn-frm-close" type="button" value="batal"/>-->
  </form>
</fieldset>
        </article   >
          
      </article  >
    </div>
    <?php foreach($daftar_jurnalis as $jurnal_publik){?>
    <div class="w-container container">
      
      <article class="third-block-holder-single bottom-margin-medium">
       
        <article class="third-block-content-single bottom-margin-medium half" >
          <h4 class="bottom-margin-small"><?php echo $jurnal_publik->judul;?></h4>
          <a class="small-text" data-ix="call-to-action-more" href="<?php echo site_url('guest/publication_single/'.$jurnal_publik->id_jurnalpublik);?>"><span>SELENGKAPNYA</span> <span class="more-arrow">→</span></a>
        </article   >
          
      </article  >

    <?php } ?>
      
      <div class="pagination-block">
       <?php echo $pagination;?>  
      </div>
    </div>
  </section>
  <div class="w-section">
    <a class="w-inline-block call-to-action" data-ix="call-to-action" href="<?php echo site_url('contact');?>">
      <div class="w-container link-container">
        <h2 class="bottom-call-to-action"><span class="dark-grey inline-to-block">Is there anything we can help?</span> <span>Let's talk</span>&nbsp;<span class="cta-arrow-icon">»</span></h2>
      </div>
    </a>
  </div>
  <footer class="w-section footer">
    <div class="footer-copyright-section">
      <div class="w-container">
        <div class="w-row">
          <div class="w-col w-col-6 w-clearfix align-left logo">
            <a class="w-inline-block footer-brand" href="#">
              <img src="<?php echo base_url('aset/images/aspi white.png');?>" width="200">
            </a>
            <div class="footer-menu">
              <a class="footer-link" href="<?php echo site_url('home');?>">Home</a>
              <a class="footer-link" href="<?php echo site_url('about');?>">About Us</a>
              <a class="footer-link" href="<?php echo site_url('news');?>">News</a>
              <a class="footer-link" href="<?php echo site_url('publications');?>">Publication</a>
              <a class="footer-link" href="<?php echo site_url('events');?>">Event</a>
              <a class="footer-link" href="<?php echo site_url('contact');?>">Contact Us</a>
            </div>
          </div>
          <div class="w-col w-col-6 align-right">
            <div class="sosmed-div">
              <a class="w-inline-block social-icon" href="#">
              <!--  <img src="<?php //echo base_url('aset/images/Social-Dribble.svg');?>">-->
              </a>
              <a class="w-inline-block social-icon" href="#">
               <!-- <img src="<?php //echo base_url('aset/images/Social-Twitter.svg');?>">-->
              </a>
              <a class="w-inline-block social-icon" href="#">
                <img src="<?php echo base_url('aset/images/Social-Facebook.svg');?>">
              </a>
            </div>
            <div class="small-text white" id="navatari">© 2016 ASPI. Website by <a class="credit" href="http://navatari.com" id="navatarilink" target="_blank">Navatari</a>. All rights reserved.</div>
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
  <script type="text/javascript" src="<?php echo base_url('aset/js/secure.js');?>"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>