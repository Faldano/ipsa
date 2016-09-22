

<!DOCTYPE html>
<!-- Last Published: Tue Jun 28 2016 10:13:44 GMT+0000 (UTC) -->
<html data-wf-site="57700e53b57b99db3abdccde" data-wf-page="57724b0c3f253b3d27a61e27">
<head>
  <meta charset="utf-8">
  <title>Admin - Member Applicant</title>
  <meta property="og:title" content="Admin - Membership">
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
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('aset/images/favicon32.png');?>">
  <link rel="apple-touch-icon" href="<?php echo base_url('aset/images/favicon256.png');?>">
  <script type="text/javascript" src="<?php echo base_url('aset/js/secure.js');?>"></script>
</head>
<body>
  <header class="header w-section">
    <div class="navbar w-nav" data-animation="over-left" data-collapse="all" data-doc-height="1" data-duration="500" data-no-scroll="1">
      <div class="menu-button w-nav-button">
        <div class="menu-icon w-icon-nav-menu"></div>
      </div>
      <a class="brand w-nav-brand" href="#">
        <h1 class="brand-text">Asosiasi Sel Punca Indonesia</h1>
      </a>
    <!-- 20 july navbar admin -->
      <nav class="w-nav-menu nav-menu" role="navigation">
        <a class="main-link w-nav-link" href="<?php echo site_url('login_by_navatari/index_artikel');?>">News</a>
        <a class="w-nav-link main-link" href="<?php echo site_url('login_by_navatari/publications');?>">Publications</a>
        <a class="w-nav-link main-link" href="<?php echo site_url('login_by_navatari/publications_guest');?>">Publications Guest</a>
        <a class="w-nav-link main-link" href="<?php echo site_url('login_by_navatari/index_event');?>">Events</a>
        <a class="main-link w-nav-link" href="<?php echo site_url('login_by_navatari/index_member');?>">Memberships</a>
        <a class="main-link w-nav-link" href="<?php echo site_url('login_by_navatari/index_temp_member');?>">Member Applicant</a>
      </nav>
      <!-- end here -->
      <a class="login-button w-inline-block" href="<?php echo site_url('login_by_navatari/logout');?>">
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
    <div class="login-container w-container">
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
                <input class="field w-input" data-name="Name" id="name" maxlength="256" name="name" placeholder="Enter your name" required="required" type="text">
                <label class="label" for="Password">Password</label>
                <input class="field w-input" data-name="Password" id="Password" maxlength="256" name="Password" placeholder="Enter your Password" required="required" type="password">
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
          <div class="popup-bracket">
            <h3 class="login-title">Registration</h3>
            <div class="w-form">
              <form class="w-clearfix" data-name="Login Form" id="wf-form-Login-Form" name="wf-form-Login-Form">
                <label class="label" for="Real-Name">Name:</label>
                <input class="field w-input" data-name="Real Name" id="Real-Name" maxlength="256" name="Real-Name" placeholder="Enter your name" required="required" type="text">
                <label class="label" for="Email">Email:</label>
                <input class="field w-input" data-name="Email" id="Email" maxlength="256" name="Email" placeholder="Enter your Email" required="required" type="email">
                <label class="label" for="Institution">Institution:</label>
                <input class="field w-input" data-name="Institution" id="Institution" maxlength="256" name="Institution" placeholder="Enter your institution name" type="text">
                <label class="label" for="Username-Register">Username:</label>
                <input class="field w-input" data-name="Username Register" id="Username-Register" maxlength="256" name="Username-Register" placeholder="Enter your username" required="required" type="text">
                <label class="label" for="Password-Register">Password</label>
                <input class="field w-input" data-name="Password Register" id="Password-Register" maxlength="256" name="Password-Register" placeholder="Enter your Password" required="required" type="password">
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
  <section class="about admin-header section-hero title w-section">
    <div class="admin-container container w-container">
      <h1 class="bottom-margin-extra-small">Member Applicant</h1>
      <div class="hero-sub-title">Accept or decline member applicants.</div>
    </div>
  </section>
  <section class="news section w-section">
    <div class="container w-container">

      <table class="table">
      <thead class="table-hover" >
        <tr class="table-hover" >
          <td class="table-hover" >ID Temp</td>
          <td class="table-hover" >Nama</td>
          <td class="table-hover" >Email</td>
          <td class="table-hover" >Instansi</td>
          <td class="table-hover" >Username</td>
          <td class="table-hover" >Password</td>
          <td class="table-hover" >Action</td>
        </tr>
      </thead>
        <?php foreach ($daftar_temp_member as $temp_member){?>
        <tr class="table-hover" >
        	<td class="table-hover" ><?php echo $temp_member->id_temp;?></td>
					<td class="table-hover" ><?php echo $temp_member->nama;?></td>
					<td class="table-hover" ><?php echo $temp_member->email;?></td>
					<td class="table-hover" ><?php echo $temp_member->instansi;?></td>
					<td class="table-hover" ><?php echo $temp_member->username;?></td>
					<td class="table-hover" ><?php echo $temp_member->password;?></td>
          
          <td class="table-hover" ><a class="green-button w-button" href="<?php echo site_url('login_by_navatari/proses_add_member/'.$temp_member->id_temp);?>">Accept</a>
              <a class="purple-button w-button" href="<?php echo site_url('login_by_navatari/delete_temp_member/'.$temp_member->id_temp);?>">Decline</a>
          </td>
        </tr>
          
        <?php 
        }
        ?>
    </table>
    <div class="pagination-block">
    <?php echo $pagination ;?>
    </div>
     

<!--
      <a class="green-button w-button" href="#">Button Text</a>

      <a class="purple-button w-button" href="#">Button Text</a> -->

      
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
             <!-- <a class="footer-link" href="<?php //echo site_url('login_by_navatari/view_success_page');?>">Home</a>
              <a class="footer-link" href="<?php //echo site_url('login_by_navatari/index_artikel');?>">News</a>
              <a class="footer-link" href="<?php //echo site_url('login_by_navatari/publications');?>">Publication</a>
              <a class="footer-link" href="<?php //echo site_url('login_by_navatari/index_event');?>">Event</a>-->
            </div>
          </div>
          <div class="align-right w-col w-col-6">
            <div class="sosmed-div">
              <a class="social-icon w-inline-block" href="#">
                <!--<img src="../images/Social-Dribble.svg">-->
              </a>
              <a class="social-icon w-inline-block" href="#">
               <!-- <img src="../images/Social-Twitter.svg">-->
              </a>
              <a class="social-icon w-inline-block" href="#">
                <!--<img src="<?php //echo base_url('aset/images/Social-Facebook.svg');?>">-->
              </a>
            </div>
            <div class="small-text white" id="navatari">© 2016 ASPI. Website by <a class="credit" id="navatarilink" target="_blank" href="http://navatari.com">Navatari</a>. All rights reserved.</div>
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