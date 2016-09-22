<!DOCTYPE html>
<!-- Last Published: Wed Jun 29 2016 21:43:45 GMT+0000 (UTC) -->
<html data-wf-site="57700e53b57b99db3abdccde" data-wf-page="57700e53b57b99db3abdccdd">
<head>
  <meta charset="utf-8">
  <title>ASPI</title>
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
      <a class="brand w-nav-brand" href="<?php echo site_url('member/home');?>">
        <h1 class="brand-text w-hidden-medium w-hidden-small w-hidden-tiny">Asosiasi Sel Punca Indonesia</h1>
        <h1 class="brand-text w-hidden-main">ASPI</h1>
      </a>
      <nav class="nav-menu w-nav-menu" role="navigation">
        <a class="main-link w-nav-link" href="<?php echo site_url('member/home');?>">HOME</a>
        <div class="w-dropdown" data-delay="0">
          <div class="main-link w-dropdown-toggle">
            <div>About Us</div>
            <div class="w-icon-dropdown-toggle"></div>
          </div>
          <nav class="drop-list w-dropdown-list">
            <a class="main-link w-dropdown-link" href="<?php echo site_url('member/about');?>">- aspi overview</a>
            <a class="main-link w-dropdown-link" href="<?php echo site_url('member/about');?>">-&nbsp;Vision and Mission</a>
            <a class="main-link w-dropdown-link" href="<?php echo site_url('member/about');?>">-&nbsp;Structure</a>
          </nav>
        </div>
        <a class="main-link w-nav-link" href="<?php echo site_url('member/news');?>">News</a>
        <a class="main-link w-nav-link" href="<?php echo site_url('member/publications');?>">Publications</a>
        <a class="main-link w-nav-link" href="<?php echo site_url('member/events');?>">Events</a>
        <a class="main-link w-nav-link" href="<?php echo site_url('member/contact');?>">CONTACT Us</a>
      </nav>
      <a class="login-button w-hidden-small w-inline-block" data-ix="login" href="<?php echo site_url('member/logout');?>">
        <img class="login-img" src="<?php echo base_url('aset/images/user.png');?>">
        <div class="login-text w-hidden-tiny">Logout</div>
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
                <input class="field w-input" name="username" placeholder="Enter your name" required="required" type="text">
                <label class="label" for="Password">Password</label>
                <input class="field w-input"  name="password" placeholder="Enter your Password" required="required" type="password">
                <input class="log purple w-button" data-wait="Please wait..." type="submit" value="Log In">
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
              <?php echo form_open('member/Registrasi');?>
                <label class="label" for="Real-Name">Name:</label>
                <input class="field w-input" name="nama" placeholder="Enter your name" required="required" type="text">

                <label class="label" for="Email">Email:</label>
                <input class="field w-input" name="email" placeholder="Enter your Email" required="required" type="email">

                <label class="label" for="Institution">Institution:</label>
                <input class="field w-input" name="instansi" placeholder="Enter your institution name" type="text">

                <label class="label" for="Username-Register">Username:</label>
                <input class="field w-input" name="username" placeholder="Enter your username" required="required" type="text">

                <label class="label" for="Password-Register">Password</label>
                <input class="field w-input" name="password" placeholder="Enter your Password" required="required" type="password">
                <input class="log w-button" data-wait="Please wait..." type="submit" value="Register">
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
  <section class="section-hero w-section">
    <div class="hero-slider w-slider" data-animation="fade" data-autoplay="1" data-delay="6000" data-duration="1000" data-infinite="1">
      <div class="hero-frame" data-ix="fly-in-load">
        <h1 class="hero-title">Welcome to ASPI</h1>
        <div class="hero-subtitle">Stem Cells for the Indonesian Future Treatment of Diseases</div>
      </div>
      <div class="w-slider-mask">
        <div class="hero-slide-02 w-slide"></div>
        <div class="hero-slide-03 w-slide"></div>
        <div class="hero-slide-01 w-slide"></div>
      </div>
      <div class="w-hidden-main w-hidden-medium w-hidden-small w-hidden-tiny w-slider-arrow-left">
        <div class="w-icon-slider-left"></div>
      </div>
      <div class="w-hidden-main w-hidden-medium w-hidden-small w-hidden-tiny w-slider-arrow-right">
        <div class="w-icon-slider-right"></div>
      </div>
      <div class="w-slider-nav"></div>
    </div>
  </section>
  <section class="section w-section">
    <div class="w-container" data-ix="fly-on-scroll">
      <h2 class="overview">ASPI sebagai organisasi non-profit yang bebas, mendukung pertukaran dan penyebaran informasi dan ide-ide yang berhubungan dengan sel punca di Indonesia</h2>
      <div>
        <a class="button w-button" href="<?php echo site_url('member/about');?>">Selengkapnya</a>
        <a class="button w-button" data-ix="login" href="#">Registrasi Member</a>
      </div>
    </div>
  </section>
  <section class="section-half-block w-section">
    <div class="w-container">
      <div class="block-main-row w-row">
        <div class="col w-col w-col-6 w-col-stack">
          <article class="block-main-holder left">
            <h2 class="bottom-margin-medium" data-ix="fly-on-scroll-side"><a class="pagelink" href="<?php echo site_url('member/news');?>">Recent News</a></h2>
            <div class="border" data-ix="fly-on-scroll-side"></div>

            <?php foreach($daftar_artikel as $artikel){?>
              <div class="recent-news-item" data-ix="fly-on-scroll">
                <a class="news-block w-clearfix w-inline-block" data-ix="call-to-action-more" href="<?php echo site_url('member/news_single/'.$artikel->id_artikel);?>">
                  <div class="news-title"><?php echo substr($artikel->title,0,50);?>..</div>
                  <img class="news-img" src="<?php echo base_url('./upload/'.$artikel->image);?>">
                  <p class="bottom-margin-medium news-content"><?php echo substr($artikel->information,0,60);?>..</p>
                  <div class="more">Selengkapnya <span class="more-arrow">»</span>
                  </div>
                </a>
              </div>
            <?php } ?>

          </article>
        </div>
        <div class="col w-col w-col-6 w-col-stack">
          <article class="block-main-holder">
            <h2 class="bottom-margin-medium" data-ix="fly-on-scroll-side"><a class="pagelink" href="<?php echo site_url('member/publications');?>">Publication Updates</a></h2>
            <div class="border" data-ix="fly-on-scroll-side"></div>
            
            <?php foreach($daftar_jurnalis as $jurnalis){?> 
              <div data-ix="fly-on-scroll">
                <a class="news-block publication-block w-inline-block" data-ix="call-to-action-more" href="<?php echo site_url('member/publication_single/'.$jurnalis->id_jurnalis);?>">
                  <div class="publication-title"><?php echo $jurnalis->judul;?></div>
                  <div class="more">Selengkapnya <span class="more-arrow">»</span>
                  </div>
                </a>
              </div>
            <?php } ?>

          </article>
        </div>
      </div>
    </div>
  </section>
  <section class="event-section section w-section">
    <h2 class="bottom-margin-medium" data-ix="fly-on-scroll-side"><a class="pagelink" href="<?php echo site_url('member/events');?>">Events</a></h2>
    <div class="border" data-ix="fly-on-scroll-side"></div>
    <div class="row w-row">

      <?php foreach($daftar_event as $event){?>
      <div class="nopad-col w-col w-col-3 w-col-medium-6">
        <div data-ix="fly-on-scroll">
          <a class="event-link w-inline-block" data-ix="call-to-action-event" href="<?php echo site_url('member/event_single/'.$event->id_event);?>">
            <img class="event-img" style="width:100%; height:100%;" src="<?php echo base_url('upload/'.$event->picture);?>">
            <div class="center-div">
              <h4 class="bottom-margin-small event-title"><?php echo $event->judul;?></h4>
              <div class="event-date-time"><?php echo $event->tgl;?> &amp; <?php echo $event->waktu;?></div>
              <div class="event-place"><?php echo $event->tempat;?></div>
            </div>
          </a>
        </div>
      </div>
      <?php } ?> 
    
    </div>
  </section>
  <a class="call-to-action w-inline-block" data-ix="call-to-action" href="<?php echo site_url('member/contact');?>">
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
              <a class="footer-link" href="<?php echo site_url('member/home');?>">Home</a>
              <a class="footer-link" href="<?php echo site_url('member/about');?>">About Us</a>
              <a class="footer-link" href="<?php echo site_url('member/news');?>">News</a>
              <a class="footer-link" href="<?php echo site_url('member/publications');?>">Publications</a>
              <a class="footer-link" href="<?php echo site_url('member/events');?>">Events</a>
              <a class="footer-link" href="<?php echo site_url('member/contact');?>">Contact Us</a>
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