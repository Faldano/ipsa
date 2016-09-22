<!DOCTYPE html>
<!-- Last Published: Tue Jun 28 2016 10:13:44 GMT+0000 (UTC) -->
<html data-wf-site="57700e53b57b99db3abdccde" data-wf-page="57713081b57b99db3abf2bb7">
<head>
  <meta charset="utf-8">
  <title>Admin - Add News</title>
  <meta property="og:title" content="Admin - Add News">
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
   <script src="<?php echo base_url('aset/js/tinymce/tinymce.dev.js');?>"></script>
  <script src="<?php echo base_url('aset/js/tinymce/plugins/table/plugin.dev.js');?>"></script>
  <script src="<?php echo base_url('aset/js/tinymce/plugins/paste/plugin.dev.js');?>"></script>
  <script src="<?php echo base_url('aset/js/tinymce/plugins/spellchecker/plugin.dev.js');?>"></script>
  <script>
    tinyMCE.init({
        selector: "textarea#information",
        theme: "modern",
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code insertdatetime media nonbreaking",
            "table contextmenu directionality textcolor"
        ],
        external_plugins: {
            //"moxiemanager": "/moxiemanager-php/plugin.js"
        },
        content_css: "css/development.css",
        add_unload_trigger: false,
        autosave_ask_before_unload: true,

        toolbar1: "newdocument | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
        toolbar2: "searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | insertdatetime preview | forecolor backcolor",
        toolbar3: "table | hr removeformat | subscript superscript | charmap | print | ltr rtl | | visualchars visualblocks nonbreaking pagebreak | insertfile insertimage",
        menubar: false,
        toolbar_items_size: 'small',

        style_formats: [
            {title: 'Bold text', inline: 'b'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],
        //KCFinder
        file_browser_callback: function(field, url, type, win) {
            tinyMCE.activeEditor.windowManager.open({
                file: '<?=base_url ('asset')?>/kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
                title: 'KCFinder',
                width: 700,
                height: 500,
                inline: true,
                close_previous: false
            }, {
                window: win,
                input: field
            });
            return false;
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
      <a class="w-nav-brand brand" href="<#">
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
      <a class="w-inline-block login-button" data-ix="login" href="<?php echo site_url('login_by_navatari/logout');?>">
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
      <h1 class="bottom-margin-extra-small">Add News</h1>
    </div>
  </section>
  <section class="news section w-section">
    <div class="container w-container">
      <div class="w-form">
        <?php echo $error;?>
        <?php echo form_open_multipart('login_by_navatari/proses_add_artikel','name="myform" novalidate');?>
          <div class="w-clearfix">
            
            <label class="admin-label" for="News-Title">News Title:</label>
             <input class="admin-field w-input"  name="title" placeholder="Enter Title"  type="text">
            </br>
          </br>
        </br>
             
            <label class="admin-label" for="News-Content">News Content:</label>
            
            <textarea class="admin-text-field w-input" id="information" name="information" placeholder="Enter Text Content" required="required"></textarea>
            </br>
            <label class="admin-label" for="News-Title">Image:</label>
            <input type="file" name="userfile" required/>

            
            
          </div>
          <div class="but-contain w-clearfix">
            <a class="cancel purple-button w-button" href="<?php echo site_url('login_by_navatari/index_artikel');?>">Cancel</a>
            <input class="green-button save w-button" data-wait="Please wait..." type="submit" value="Publish">
          </div>
        </form>
        
      </div>
    </div>
  </section>
  <footer class="w-section footer">
    <div class="footer-copyright-section">
      <div class="w-container">
        <div class="w-row">
          <div class="w-col w-col-6 w-clearfix align-left logo">
            <a class="w-inline-block footer-brand" href="#">
              <img src="<?php echo base_url('aset/images/aspi white.png');?>" width="200">
            </a>
            <div class="footer-menu">
             <!-- <a class="footer-link" href="#">Home</a>
              <a class="footer-link" href="#">About Us</a>
              <a class="footer-link" href="#">News</a>
              <a class="footer-link" href="#">Publication</a>
              <a class="footer-link" href="#">Event</a>-->
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
              <!--  <img src="<?php// echo base_url('aset/images/Social-Facebook.svg');?>">-->
              </a>
            </div>
            <div class="small-text white" id="navatari">© 2016 ASPI. Website by <a class="credit" href="http://navatari.com" id="navatarilink" target="_blank">Navatari</a>. All rights reserved.</div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script type="text/javascript">
  tinymce.init({
    selector: 'textarea',
    height: 500,
    plugins: [
      'advlist autolink lists link image charmap print preview anchor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table contextmenu paste code'
    ],
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    content_css: [
      '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
      '//www.tinymce.com/css/codepen.min.css'
    ]
  });
  </script>
  <script type="text/javascript" src="<?php echo base_url('aset/js/jquery.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('aset/js/aspi.js');?>"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>