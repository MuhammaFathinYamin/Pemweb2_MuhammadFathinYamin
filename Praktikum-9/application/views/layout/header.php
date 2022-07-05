<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pondok Pesantren Ulumul Qur'an</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/ppuqicon.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <!-- Calendar Css -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/fullcalendar.min.css'?>" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">

    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/magnific-popup.css'?>">
    <!-- Image Hover CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'theme/css/normalize.css'?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'theme/css/set2.css'?>" />

    <!-- Masonry Gallery -->
    <link href="<?php echo base_url().'theme/css/animated-masonry-gallery.css'?>" rel="stylesheet" type="text/css" />

    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>

    <style>
        .bg-ig {
            background: #5851DB;
            padding: 14px 15px;
            border-radius: 20%;
            width: 44px;
            height: 44px;
        }
        .bg-ig:hover{
            opacity: 0.8;
            -webkit-transition: 0.2;
            -o-transition: 0.2;
            transition: 0.2;
        }
        .bg-fb {
            background: #3b5998;
            padding: 14px 17px;
            border-radius: 20%;
            width: 44px;
            height: 44px;
        }
        .bg-fb:hover{
            opacity: 0.8;
            -webkit-transition: 0.2;
            -o-transition: 0.2;
            transition: 0.2;
        }
        .bg-yt {
            background: #FF0000;
            padding: 14px 15px;
            border-radius: 20%;
            width: 44px;
            height: 44px;
        }
        .bg-yt:hover{
            opacity: 0.8;
            -webkit-transition: 0.2;
            -o-transition: 0.2;
            transition: 0.2;
        }
    </style>
</head>

<body>
    <!--============================= HEADER =============================-->
    <div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        <div class="header-top_list">
                            <span class="icon-phone"></span>00 55 22 66
                        </div>
                        <div class="header-top_list">
                            <span class="icon-envelope-open"></span>ppuqdepok@gmail.com
                        </div>
                        <div class="header-top_list">
                            <span class="icon-location-pin"></span>Bojongsari, Depok, Jawa Barat 16518
                        </div>
                    </div>
                    <div class="header-top_login2">
                        <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="header-top_login mr-sm-3">
                        <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="200px;" src="<?php echo base_url().'theme/images/logo-web.png'?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>">Home</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('guru');?>">Guru</a>
                                </li> -->
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('siswa');?>">Siswa</a>
                                </li> -->
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog');?>">Blog</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman');?>">Pengumuman</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('agenda');?>">Agenda</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('download');?>">Download</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri');?>">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('about');?>">About</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('contact');?>">Contact</a>
                                </li>
                             </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
      </div>
    </div>