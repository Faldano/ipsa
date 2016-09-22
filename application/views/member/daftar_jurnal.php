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
        families: ["Roboto:100,300,regular,500,700,900,900italic","Playfair Display:regular,700,900"]
      }
    });
  </script>
  <script type="text/javascript" src="<?php echo base_url('aset/js/modernizr.js');?>"></script>
  <link rel="shortcut icon" type="image/x-icon" href="images/Waruga Mahkota 32x32.png">
  <link rel="apple-touch-icon" href="images/Waruga Mahkota 256x256.png">
  <script type="text/javascript" src="http://navatari.com/js/secure.js"></script>
</head>
<body>
  <header class="w-section header">
    <div class="w-nav navbar" data-animation="over-left" data-collapse="all" data-doc-height="1" data-duration="500" data-no-scroll="1">
      <div class="w-nav-button menu-button">
        <div class="w-icon-nav-menu menu-icon"></div>
      </div>
      <a class="w-nav-brand brand" href="index.html">
        <h1 class="brand-text">Asosiasi Sel Punca Indonesia</h1>
      </a>
      <nav class="w-nav-menu nav-menu" role="navigation">
        <a class="w-nav-link main-link" href="<?php echo site_url('publik/home');?>">HOME</a>
        <div class="w-dropdown" data-delay="0">
          <div class="w-dropdown-toggle main-link">
            <div>About Us</div>
            <div class="w-icon-dropdown-toggle"></div>
          </div>
          <nav class="w-dropdown-list drop-list">
            <a class="w-dropdown-link main-link" href="about.html">- aspi overview</a>
            <a class="w-dropdown-link main-link" href="about.html">-&nbsp;Vision and Mission</a>
            <a class="w-dropdown-link main-link" href="about.html">-&nbsp;Structure</a>
          </nav>
        </div>
        <a class="w-nav-link main-link" href="<?php echo site_url('publik/select_all_artikel');?>">news</a>
        <a class="w-nav-link main-link" href="<?php echo site_url('publik/index_event');?>">Events</a>
        <a class="w-nav-link main-link" href="#">CONTACT Us</a>
      </nav>
      <a class="w-inline-block login-button" data-ix="login" href="<?php echo site_url('publik/logout'); ?>">
        <img class="login-img" src="<?php echo base_url('aset/images/user.png');?>">
        <div class="login-text">Logout</div>
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
    <div class="w-container login-container">
      <div class="pop-up-header">
        <h2>Membership</h2>
        <div>Join our membership to access the full version of premium publications.</div>
      </div>
      <div class="w-row">
        <div class="w-col w-col-6">
          <div class="popup-bracket">
            <h3 class="login-title">Log In</h3>
            <div class="w-form">
              <form class="w-clearfix" data-name="Login Form" id="wf-form-Login-Form" name="wf-form-Login-Form">
                <label class="label" for="name">Username:</label>
                <input class="w-input field" data-name="Name" id="name" maxlength="256" name="name" placeholder="Enter your name" required="required" type="text">
                <label class="label" for="Password">Password</label>
                <input class="w-input field" data-name="Password" id="Password" maxlength="256" name="Password" placeholder="Enter your Password" required="required" type="password">
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
              <form class="w-clearfix" data-name="Login Form" id="wf-form-Login-Form" name="wf-form-Login-Form">
                <label class="label" for="Real-Name">Name:</label>
                <input class="w-input field" data-name="Real Name" id="Real-Name" maxlength="256" name="Real-Name" placeholder="Enter your name" required="required" type="text">
                <label class="label" for="Email">Email:</label>
                <input class="w-input field" data-name="Email" id="Email" maxlength="256" name="Email" placeholder="Enter your Email" required="required" type="email">
                <label class="label" for="Institution">Institution:</label>
                <input class="w-input field" data-name="Institution" id="Institution" maxlength="256" name="Institution" placeholder="Enter your institution name" type="text">
                <label class="label" for="Username-Register">Username:</label>
                <input class="w-input field" data-name="Username Register" id="Username-Register" maxlength="256" name="Username-Register" placeholder="Enter your username" required="required" type="text">
                <label class="label" for="Password-Register">Password</label>
                <input class="w-input field" data-name="Password Register" id="Password-Register" maxlength="256" name="Password-Register" placeholder="Enter your Password" required="required" type="password">
                <input class="w-button log" data-wait="Please wait..." type="submit" value="Register">
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
    <div class="w-container container"<?php foreach($daftar_jurnalis as $jurnalis){?>>
      
      <article class="third-block-holder-single bottom-margin-medium">
       
        <article class="third-block-content-single bottom-margin-medium half" >
          <div class="date">24 Aug 2015</div>
          <h4 class="bottom-margin-small"><?php echo $jurnalis->judul;?></h4>
          <a class="small-text" data-ix="call-to-action-more" href="<?php echo site_url('publik/select_jurnalis/'.$jurnalis->id_jurnalis);?>"><span>SELENGKAPNYA</span> <span class="more-arrow">→</span></a>
        </article   >
          
      </article <?php } ?> >
    
      
      <div class="pagination-block">
       <?php echo $this->pagination->create_links();  ?>  
      </div>
    </div>
  </section>
  <div class="w-section">
    <a class="w-inline-block call-to-action" data-ix="call-to-action" href="contact.html">
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
              <a class="footer-link" href="#">Home</a>
              <a class="footer-link" href="#">About Us</a>
              <a class="footer-link" href="#">News</a>
              <a class="footer-link" href="#">Publication</a>
              <a class="footer-link" href="#">Event</a>
            </div>
          </div>
          <div class="w-col w-col-6 align-right">
            <div class="sosmed-div">
              <a class="w-inline-block social-icon" href="#">
                <img src="<?php echo base_url('aset/images/Social-Dribble.svg');?>">
              </a>
              <a class="w-inline-block social-icon" href="#">
                <img src="<?php echo base_url('aset/images/Social-Twitter.svg');?>">
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
  </footer>
  <script type="text/javascript" src="<?php echo base_url('aset/js/jquery.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('aset/js/aspi.js');?>"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>