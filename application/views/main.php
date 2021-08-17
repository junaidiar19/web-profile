<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMPN 24 Banjarmasin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="freehtml5.co" />

    <!-- 
    //////////////////////////////////////////////////////

    FREE HTML5 TEMPLATE 
    DESIGNED & DEVELOPED by FreeHTML5.co
        
    Website:        http://freehtml5.co/
    Email:          info@freehtml5.co
    Twitter:        http://twitter.com/fh5co
    Facebook:       https://www.facebook.com/fh5co

    //////////////////////////////////////////////////////
     -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="<?=base_url('assets/logo.png')?>">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/owl.theme.default.min.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/flexslider.css">

    <!-- Pricing -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/pricing.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/style.css">

    <!-- Modernizr JS -->
    <script src="<?php echo base_url('assets/') ?>js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <style>
        .modal-header {
            display: flex;
            justify-content: space-between;
        }

        .border-0 {
            border: unset;
        }
    </style>
    </head>
    <body>
    <div id="page">
    <nav class="fh5co-nav" role="navigation" >
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-right">
                        <p class="site">www.smp24bjm.com</p>
                        <p class="num">Call: (0511) 3303164</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <a href="home"><img src="<?=base_url('assets/lambang.png')?>" class="img-fluid" style="height: 40px; margin-left: 10px;" alt=""></a>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul> 
                            <li class="<?php echo $content=='home'? 'active' : ''?>"><a href="<?php echo base_url('home') ?>">HOME</a></li>
                            <li class="has-dropdown <?php echo $content=='profil'? 'active' : ''?>">
                                <a href="#">PROFIL</a>
                                <ul class="dropdown">                     
                                    <li><a href="<?php echo base_url('sambutan') ?>">SAMBUTAN</a></li>
                                    <li><a href="<?php echo base_url('visi') ?>">VISI MISI</a></li>
                                    <li><a href="<?php echo base_url('staff') ?>">TENAGA PENGAJAR & STAFF</a></li>
                                    <li><a href="<?php echo base_url('fasilitas') ?>">FASILITAS</a></li>
                                </ul>
                            </li>
                            <li class="<?php echo $content=='berita'? 'active' : ''?>"><a href="<?php echo base_url('kegiatan') ?>">BERITA</a></li>
                            <li class="has-dropdown <?php echo $content=='jadwal'? 'active' : ''?>"><a href="#">JADWAL PELAJARAN</a>
                                <ul class="dropdown">                     
                                    <li><a href="<?php echo base_url('jadwal') ?>">KELAS VII</a></li>
                                    <li><a href="<?php echo base_url('jadwal_del') ?>">KELAS VIII</a></li>
                                    <li><a href="<?php echo base_url('jadwal_sem') ?>">KELAS IX</a></li>
                                </ul></li>
                            <li class="<?php echo $content=='ekscool'? 'active' : ''?>"><a href="<?php echo base_url('ekstra') ?>">EKSTRAKULIKULER</a></li>
                            <li class="<?php echo $content=='prestasi'? 'active' : ''?>"><a href="<?php echo base_url('prestasi') ?>">PRESTASI</a></li>
                            <li class="<?php echo $content=='galeri'? 'active' : ''?>"><a href="<?php echo base_url('galeri') ?>">GALERI</a></li>
                            <li class="<?php echo $content=='kontak'? 'active' : ''?>"><a href="<?php echo base_url('kontak') ?>">KONTAK</a></li>
                            <li class="<?php echo $content=='kritik-saran'? 'active' : ''?>"><a href="<?php echo base_url('kritik') ?>">KRITIK & SARAN</a></li>
                        </ul>
                    </div>
                </div>
                
                
            </div>
        </div>
    </nav>
    
    <?php $this->load->view($content); ?>

    <footer id="fh5co-footer" role="contentinfo" style="background-color: #0F044C">
        <div class="overlay"></div>
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-5 fh5co-widget">
                    <h3>SMPN 24 Banjarmasin</h3>
                    <p>Jalan Sultan Adam Komplek Madani No. 05 RT. 31, Kelurahan Surgi Mufti, Kecamatan Banjarmasin Utara, Kota Banjarmasin, Provinsi Kalimantan Selatan</p>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                    <h3>Aktivitas Sekolah</h3>
                    <ul class="fh5co-footer-links">
                        <li><a href="<?= base_url('jadwal') ?>">Jadwal</a></li>
                        <li><a href="<?= base_url('ekstra') ?>">Ekstrakulikuler</a></li>
                        <li><a href="<?= base_url('prestasi') ?>">Prestasi</a></li>
                        <li><a href="<?= base_url('galeri') ?>">Galeri</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                    <h3>Info Sekolah</h3>
                    <ul class="fh5co-footer-links">
                        <li><a href="<?= base_url('home') ?>">Home</a></li>
                        <li><a href="<?= base_url('profil') ?>">Profil</a></li>
                        <li><a href="<?= base_url('kegiatan') ?>">Berita</a></li>
                        <li><a href="<?= base_url('kontak') ?>">Kontak</a></li>
                        <li><a href="<?= base_url('kritik') ?>">Kritik Saran</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                    <h3>Kunjungi Kami</h3>
                    <ul class="fh5co-footer-links">
                        <li><a href="<?= base_url('home') ?>">Website</a></li>
                    </ul>
                </div>
            </div>

            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">Copyright &copy; 2021 <a href="#!">SMPN 24 BANJARMASIN</a>. All rights reserved.</small> 
                        <small class="block">CREATE by <a href="#!" target="_blank">Siti Zulaika</a></small>
                    </p>
                </div>
            </div>

        </div>
    </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/') ?>js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="<?php echo base_url('assets/') ?>js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/') ?>js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="<?php echo base_url('assets/') ?>js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="<?php echo base_url('assets/') ?>js/jquery.stellar.min.js"></script>
    <!-- Carousel -->
    <script src="<?php echo base_url('assets/') ?>js/owl.carousel.min.js"></script>
    <!-- Flexslider -->
    <script src="<?php echo base_url('assets/') ?>js/jquery.flexslider-min.js"></script>
    <!-- countTo -->
    <script src="<?php echo base_url('assets/') ?>js/jquery.countTo.js"></script>
    <!-- Magnific Popup -->
    <script src="<?php echo base_url('assets/') ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>js/magnific-popup-options.js"></script>
    <!-- Count Down -->
    <script src="<?php echo base_url('assets/') ?>js/simplyCountdown.js"></script>
    <!-- Main -->
    <script src="<?php echo base_url('assets/') ?>js/main.js?v=" . time()></script>
    <script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
    </script>
    <script id="dsq-count-scr" src="//zulaika-polhas-xyz.disqus.com/count.js" async></script>
    </body>
</html>

