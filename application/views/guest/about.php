<!DOCTYPE html>
<!-- Last Published: Wed Jun 29 2016 21:43:45 GMT+0000 (UTC) -->
<html data-wf-site="57700e53b57b99db3abdccde" data-wf-page="57700e53b57b99db3abdcce1">
<head>
  <meta charset="utf-8">
  <title>About</title>
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
          <div class="popup-bracket w-hidden-tiny">
            <h3 class="login-title">Registration</h3>
            <div class="w-form">
              <?php echo form_open('guest/registrasi')?>
                <label class="label" for="Real-Name">Name:</label>
                <input class="field w-input"name="nama" placeholder="Enter your name" required="required" type="text">

                <label class="label" for="Email">Email:</label>
                <input class="field w-input" name="email" placeholder="Enter your Email" required="required" type="email">

                <label class="label" for="Institution">Institution:</label>
                <input class="field w-input" name="insatansi" placeholder="Enter your institution name" type="text">

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
  <section class="about section-hero title w-section">
    <div class="about-header container w-container">
      <h1 class="bottom-margin-extra-small" data-ix="fly-in-load-side">About Us</h1>
    </div>
  </section>
  <div class="tabs w-tabs" data-duration-in="300" data-duration-out="100">
    <div class="tab-menu w-tab-menu">
      <a class="tab-link tab1 w--current w-inline-block w-tab-link" data-w-tab="Tab 1">
        <div>ASPI Overview</div>
      </a>
      <a class="tab-link tab2 w-inline-block w-tab-link" data-w-tab="Tab 2">
        <div>Vision &amp; Mission</div>
      </a>
      <a class="tab-link tab3 w-inline-block w-tab-link" data-w-tab="Tab 3">
        <div>Organisation Structure</div>
      </a>
    </div>
    <div class="w-tab-content">
      <div class="w--tab-active w-tab-pane" data-w-tab="Tab 1">
        <section class="section---white-holder w-section">
          <div class="container content w-container">
            <h2 class="about-title" data-ix="fly-in-load-2">ASPI Overview</h2>
            <p class="paragraph-justified" data-ix="fly-in-load-3">ASPI sebagai organisasi non-profit yang bebas, mendukung pertukaran dan penyebaran informasi dan ide-ide yang berhubungan dengan sel punca. Karenanya, diharapkan ASPI menjadi sumber yang terpercaya untuk hal-hal yang berhubungan dengan sel punca dan dapat memberikan manfaat terhadap peningkatan kesehatan dan ilmu pengetahuan di Indonesia.
              <br>
              <br>Didirikan pada tanggal 2 Februari 2008, Asosiasi Sel Punca Indonesia (ASPI) merupakan wadah pemersatu bagi para peneliti, dokter, pebisnis, pemerintah, dan pemerhati sel punca yang memiliki satu tujuan untuk memajukan penelitian akan sel punca dan pengaplikasiannya di Indonesia.
              <br>
              <br>Pembentukan Asosiasi Sel Punca Indonesia (ASPI) merupakan tindak lanjut dari salah rumusan hasil workshop yang diselenggarakan Dewan Riset Nasional (DRN) Komisi Teknis Kesehatan dan Obat bulan November 2007. Demikian dijelaskan DR Ir Tusy A. Adibroto, MSI, Ketua Panitia Persiapan Pembentukan ASPI di depan sekitar 200 peserta Seminar Sel Punca, "The new Era of Biotechnology" di Gedung Widya Graha LIPI, Jalan Gatot Soebroto Jakarta, Sabtu 2 Februari 2008.</p>
          </div>
          <figure class="full-spread-image">
            <img data-ix="fade-in-scroll" src="<?php echo base_url('aset/images/Overview-img (1).jpg');?>">
          </figure>
          <div class="container w-container">
            <p class="paragraph-justified" data-ix="fly-on-scroll">Ketua Dewan Penasehat ASPI, Dr. Ir. Kusmayanto Kadiman, mengatakan, ada 3 misi yang akan dijalankan ASPI yaitu dalam hal (1) etika, (2) hukum, dan (3) sosial. Dalam waktu dekat ASPI akan membuat media informasi seperti website dimana masyarakat luas bisa bertanya apa saja mengenai Sel Punca ini. Dengan demikian masyarakat bisa memperoleh informasi langsung dari pakarnya. Dengan demikian akan terbentuk kepedulian masyarakat terhadap Sel Punca.
              <br>
              <br>Dalam menjalankan hal tersebut ASPI bekerjasama dengan pelbagai pihak, antara lain:
              <br>- Kemeneg Ristek
              <br>- Depkes
              <br>- Komite Bioetik Nasional
              <br>- PB IDI, dll.</p>
          </div>
        </section>
      </div>
      <div class="w-tab-pane" data-w-tab="Tab 2">
        <section class="section-half-block w-section">
          <div class="half-block-main right work-1" data-ix="fade-in-on-load"></div>
          <div class="w-container">
            <div class="block-main-row w-row">
              <div class="col w-col w-col-6">
                <article class="block-main-holder left">
                  <h2 class="bottom-margin-medium" data-ix="fly-in-load-2">Vision</h2>
                  <p class="bottom-margin-medium paragraph-justified" data-ix="fly-in-load-3">We're ego-less and jargon-free (unless we’re in the depths of our disciplines and need some elaborate terminology to get things done). Choosing instead to use approachable language and concepts. This unites visions throughout the process of change, while fuelling integration across every stakeholder, client, agency and, of course, the audience.</p>
                </article>
              </div>
              <div class="col w-col w-col-6"></div>
            </div>
          </div>
        </section>
        <section class="section-half-block w-section">
          <div class="half-block-main work-2" data-ix="fade-in-scroll"></div>
          <div class="w-container">
            <div class="block-main-row w-row">
              <div class="col w-col w-col-6"></div>
              <div class="col w-col w-col-6">
                <article class="block-main-holder">
                  <h2 class="bottom-margin-medium" data-ix="fly-on-scroll">Mission</h2>
                  <p class="bottom-margin-medium paragraph-justified" data-ix="fly-on-scroll">We always try to unearth simple truths that connect brands with people and enhance those connections. Our rare culture blends professionalism and informality that means disciplines coalesce. Resulting in projects that function brilliantly, yet also possess spirit, texture and character to fuel that hard-to-reach distinctiveness.</p>
                </article>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="w-tab-pane" data-w-tab="Tab 3">
        <section class="section w-section">
          <div class="container w-container">
            <h2 class="bottom-margin-medium team" data-ix="fly-in-load-2">Susunan Kepengurusan
<br>
						Dewan Pelaksana ASPI periode 2016-2019</h2>
            <div class="row team-row w-row" data-ix="fly-in-load-3">
              <div class="col w-clearfix w-col w-col-4 w-col-stack">
                <article class="third-block-holder-single">
                  <article class="half third-block-content-single">
                    <h4 class="h4-light position">ketua Dewan Pelaksana</h4>
                    <h3 class="bottom-margin-extra-small name">Dr. dr. Ismail H. Dilogo, SpOT(K)</h3>
                  </article>
                </article>
              </div>
              <div class="col w-clearfix w-col w-col-4 w-col-stack">
                <article class="third-block-holder-single">
                  <article class="half third-block-content-single">
                    <h4 class="h4-light position">Wakil Ketua</h4>
                    <h3 class="bottom-margin-extra-small name">Yuyus Kusnadi, PhD</h3>
                  </article>
                </article>
              </div>
              <div class="col w-col w-col-4 w-col-stack">
                <article class="no-bottom-margin third-block-holder-single">
                  <article class="half third-block-content-single">
                    <h4 class="h4-light position">Sekretaris 1</h4>
                    <h3 class="bottom-margin-extra-small name">Dr. dr. Heri Suroto, SpOT(K)</h3>
                  </article>
                </article>
              </div>
            </div>
            <div class="row team-row w-row" data-ix="fly-in-load-3">
              <div class="col w-clearfix w-col w-col-4 w-col-stack">
                <article class="third-block-holder-single">
                  <article class="half third-block-content-single">
                    <h4 class="h4-light position">Sekretaris 2</h4>
                    <h3 class="bottom-margin-extra-small name">Tri Kurniawati, SSi</h3>
                  </article>
                </article>
              </div>
              <div class="col w-clearfix w-col w-col-4 w-col-stack">
                <article class="third-block-holder-single">
                  <article class="half third-block-content-single">
                    <h4 class="h4-light position">Bendahara</h4>
                    <h3 class="bottom-margin-extra-small name">Ines Soepinarko, SSi. Apt.</h3>
                  </article>
                </article>
              </div>
              <div class="col w-col w-col-4 w-col-stack">
                <article class="no-bottom-margin third-block-holder-single">
                  <article class="half longname third-block-content-single">
                    <h4 class="h4-light longname position">Ketua Dewan Ilmiah</h4>
                    <h3 class="bottom-margin-extra-small name">Prof. Drh. Arief Boediono, PhD, PAVet(K)</h3>
                  </article>
                </article>
              </div>
            </div>
            <div>
              <h3 class="bottom-margin-medium team1" data-ix="fly-on-scroll">Kelompok Kerja Organisasi dan Keanggotaan</h3>
              <div class="row team-row w-row" data-ix="fly-on-scroll">
                <div class="col w-col w-col-2 w-col-stack"></div>
                <div class="col w-col w-col-4 w-col-stack">
                  <article class="third-block-holder-single">
                    <article class="half third-block-content-single">
                      <h4 class="h4-light position">Koordinator</h4>
                      <h3 class="bottom-margin-extra-small name">Dr. dr. Rahyussalim, SpOT(K)</h3>
                    </article>
                  </article>
                </div>
                <div class="col w-col w-col-4 w-col-stack">
                  <article class="third-block-holder-single">
                    <article class="half third-block-content-single">
                      <h4 class="h4-light position">Anggota</h4>
                      <h3 class="bottom-margin-extra-small name">Anton Hidayat, SSi, Apt</h3>
                    </article>
                  </article>
                </div>
                <div class="w-col w-col-2 w-col-stack"></div>
              </div>
            </div>
            <div>
              <h3 class="bottom-margin-medium team1" data-ix="fly-on-scroll">Kelompok Kerja Riset dan Pengembangan Dasar</h3>
              <div class="row team-row w-row" data-ix="fly-on-scroll">
                <div class="col w-clearfix w-col w-col-4 w-col-stack">
                  <article class="third-block-holder-single">
                    <article class="half third-block-content-single">
                      <h4 class="h4-light position">Koordinator</h4>
                      <h3 class="bottom-margin-extra-small name">dr. Marhaen Hardjo, MBiomed, PhD</h3>
                    </article>
                  </article>
                </div>
                <div class="col w-clearfix w-col w-col-4 w-col-stack">
                  <article class="third-block-holder-single">
                    <article class="half third-block-content-single">
                      <h4 class="h4-light position">Anggota</h4>
                      <h3 class="bottom-margin-extra-small name">Prof. dr. Jeanne A. Pawitan, PhD</h3>
                    </article>
                  </article>
                </div>
                <div class="col w-col w-col-4 w-col-stack">
                  <article class="third-block-holder-single">
                    <article class="half third-block-content-single">
                      <h4 class="h4-light position">Anggota</h4>
                      <h3 class="bottom-margin-extra-small name">Dr. dr. Purwati, SpPD(K)</h3>
                    </article>
                  </article>
                </div>
              </div>
              <div class="row team-row w-row" data-ix="fly-on-scroll">
                <div class="col w-clearfix w-col w-col-4 w-col-stack">
                  <article class="third-block-holder-single">
                    <article class="half third-block-content-single">
                      <h4 class="h4-light position">ANGGOTA</h4>
                      <h3 class="bottom-margin-extra-small name">Indra Bachtiar, PhD</h3>
                    </article>
                  </article>
                </div>
                <div class="col w-clearfix w-col w-col-4 w-col-stack">
                  <article class="third-block-holder-single">
                    <article class="half longname third-block-content-single">
                      <h4 class="h4-light position">Anggota</h4>
                      <h3 class="bottom-margin-extra-small name">Dr. rer. physiol. dr. Septelia Inawati W</h3>
                    </article>
                  </article>
                </div>
                <div class="col w-col w-col-4 w-col-stack">
                  <article class="third-block-holder-single">
                    <article class="half third-block-content-single">
                      <h4 class="h4-light position">Anggota</h4>
                      <h3 class="bottom-margin-extra-small name">Ratih Rinendyaputri, SKH, MBiomed</h3>
                    </article>
                  </article>
                </div>
              </div>
            </div>
            <div>
              <h3 class="bottom-margin-medium team1" data-ix="fly-on-scroll">Kelompok Kerja Riset dan Pengembangan Terapan</h3>
              <div class="row team-row w-row" data-ix="fly-on-scroll">
                <div class="col w-clearfix w-col w-col-4 w-col-stack">
                  <article class="third-block-holder-single">
                    <article class="half third-block-content-single">
                      <h4 class="h4-light position">Koordinator</h4>
                      <h3 class="bottom-margin-extra-small name">Dr. dr. Andri MT. Lubis, SpOT(K)</h3>
                    </article>
                  </article>
                </div>
                <div class="col w-clearfix w-col w-col-4 w-col-stack">
                  <article class="third-block-holder-single">
                    <article class="half third-block-content-single">
                      <h4 class="h4-light position">Anggota</h4>
                      <h3 class="bottom-margin-extra-small name">Dr. dr. Ferdiansyah, SpOT(K)</h3>
                    </article>
                  </article>
                </div>
                <div class="col w-col w-col-4 w-col-stack">
                  <article class="third-block-holder-single">
                    <article class="half longname third-block-content-single">
                      <h4 class="h4-light longname position">Anggota</h4>
                      <h3 class="bottom-margin-extra-small name">Dr. dr. Cosphiadi Irawan, SpPD-KHOM</h3>
                    </article>
                  </article>
                </div>
              </div>
              <div class="row team-row w-row" data-ix="fly-on-scroll">
                <div class="col w-clearfix w-col w-col-4 w-col-stack">
                  <article class="third-block-holder-single">
                    <article class="half third-block-content-single">
                      <h4 class="h4-light position">ANGGOTA</h4>
                      <h3 class="bottom-margin-extra-small name">Dr. dr. Yoga Yuniadi, SpJP(K)</h3>
                    </article>
                  </article>
                </div>
                <div class="col w-clearfix w-col w-col-4 w-col-stack">
                  <article class="third-block-holder-single">
                    <article class="half third-block-content-single">
                      <h4 class="h4-light position">Anggota</h4>
                      <h3 class="bottom-margin-extra-small name">Dr. dr. Yetty Ramli, SpS(K)</h3>
                    </article>
                  </article>
                </div>
                <div class="col w-col w-col-4 w-col-stack">
                  <article class="third-block-holder-single">
                    <article class="half third-block-content-single">
                      <h4 class="h4-light position">Anggota</h4>
                      <h3 class="bottom-margin-extra-small name">dr. Gita Pratama, SpOG, MrepSc</h3>
                    </article>
                  </article>
                </div>
              </div>
              <div class="row team-row w-row" data-ix="fly-on-scroll">
                <div class="col w-col w-col-4 w-col-stack"></div>
                <div class="col w-col w-col-4 w-col-stack">
                  <article class="third-block-holder-single">
                    <article class="half third-block-content-single">
                      <h4 class="h4-light position">ANGGOTA</h4>
                      <h3 class="bottom-margin-extra-small name">Berry Juliandi, PhD</h3>
                    </article>
                  </article>
                </div>
                <div class="col w-col w-col-4 w-col-stack"></div>
              </div>
            </div>
            <div>
              <h3 class="bottom-margin-medium team1" data-ix="fly-on-scroll">Kelompok Kerja Hubungan Masyarakat dan Publikasi Dokumentasi</h3>
              <div class="row team-row w-row" data-ix="fly-on-scroll">
                <div class="col w-col w-col-2 w-col-stack"></div>
                <div class="col w-col w-col-4 w-col-stack">
                  <article class="third-block-holder-single">
                    <article class="half third-block-content-single">
                      <h4 class="h4-light position">Koordinator</h4>
                      <h3 class="bottom-margin-extra-small name">dr. Dito Anurogo</h3>
                    </article>
                  </article>
                </div>
                <div class="col w-col w-col-4 w-col-stack">
                  <article class="third-block-holder-single">
                    <article class="half third-block-content-single">
                      <h4 class="h4-light position">Anggota</h4>
                      <h3 class="bottom-margin-extra-small name">Ir. Erik Ridwan Santoso</h3>
                    </article>
                  </article>
                </div>
                <div class="w-col w-col-2 w-col-stack"></div>
              </div>
            </div>
            <div>
              <h3 class="bottom-margin-medium team1" data-ix="fly-on-scroll">Kelompok Kerja Continuing Medical Education (CME)/<br>Continuing Professional
Develompment (CPD</h3>
              <div class="row team-row w-row" data-ix="fly-on-scroll">
                <div class="col w-col w-col-2 w-col-stack"></div>
                <div class="col w-col w-col-4 w-col-stack">
                  <article class="third-block-holder-single">
                    <article class="half longname third-block-content-single">
                      <h4 class="h4-light longname position">Koordinator</h4>
                      <h3 class="bottom-margin-extra-small name">dr. Isabella Kurnia Liem, MBiomed, PhD</h3>
                    </article>
                  </article>
                </div>
                <div class="col w-col w-col-4 w-col-stack">
                  <article class="third-block-holder-single">
                    <article class="half third-block-content-single">
                      <h4 class="h4-light position">Anggota</h4>
                      <h3 class="bottom-margin-extra-small name">dr. Erik Tapan, MHA</h3>
                    </article>
                  </article>
                </div>
                <div class="w-col w-col-2 w-col-stack"></div>
              </div>
            </div>
            <div>
              <h3 class="bottom-margin-medium team1" data-ix="fly-on-scroll">Kelompok Kerja Dampak Etik, Legal</h3>
              <div class="row team-row w-row" data-ix="fly-on-scroll">
                <div class="col w-col w-col-4 w-col-stack"></div>
                <div class="col w-col w-col-4 w-col-stack">
                  <article class="third-block-holder-single">
                    <article class="fuckinglongassname half third-block-content-single">
                      <h4 class="fuckinglongassname h4-light position">Koordinator</h4>
                      <h3 class="bottom-margin-extra-small name">Prof. dr. Djaja Surya Atmadja, SpF, SH, PhD</h3>
                    </article>
                  </article>
                </div>
                <div class="col w-col w-col-4 w-col-stack"></div>
              </div>
            </div>
            <div>
              <h3 class="bottom-margin-medium team1" data-ix="fly-on-scroll">Kelompok Kerja Hubungan Masyarakat dan Publikasi Dokumentasi</h3>
              <div class="row team-row w-row" data-ix="fly-on-scroll">
                <div class="col w-col w-col-2 w-col-stack"></div>
                <div class="col w-col w-col-4 w-col-stack">
                  <article class="third-block-holder-single">
                    <article class="half third-block-content-single">
                      <h4 class="h4-light position">Koordinator</h4>
                      <h3 class="bottom-margin-extra-small name">Dr. dr. Cynthia R Sartika, MSi</h3>
                    </article>
                  </article>
                </div>
                <div class="col w-col w-col-4 w-col-stack">
                  <article class="third-block-holder-single">
                    <article class="half third-block-content-single">
                      <h4 class="h4-light position">Anggota</h4>
                      <h3 class="bottom-margin-extra-small name">Dr. dr. Reza Yuridian Purwoko, SpKK</h3>
                    </article>
                  </article>
                </div>
                <div class="w-col w-col-2 w-col-stack"></div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
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
              <a class="footer-link" href="<?php echo site_url('guest');?>">Home</a>
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