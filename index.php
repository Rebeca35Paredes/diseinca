<?php
    $result="";
    if(isset($_POST['submit'])){
        require 'phpmailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='tls';
        $mail->Username='disein.seo@gmail.com';
        $mail->Password='diseincaseo123';

        $mail->setFrom($_POST['email'],$_POST['name']);
        $mail->addAddress('info@diseinca.com');
        $mail->addReplyTo($_POST['email'],$_POST['name']);

        $mail->isHTML(true);
        $mail->Subject='Enviado por '.$_POST['name'];
        $mail->Body='<h1 align=center>Nombre: '.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Mensaje: '.$_POST['message'].'</h1>';
        
        if(!$mail->send()){
            $result="Algo esta mal, inténtelo de nuevo por favor.";
        }
        else {
            $result="Gracias ".$_POST['name']." por contactarnos, te responderemos lo más pronto posible.";
        }
    }
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M7S4DFL');</script>
<!-- End Google Tag Manager -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-FZYWMZF8W0"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-FZYWMZF8W0');
        </script>
         <meta name="keywords" content="DISEINCA, diseinca, servicio industrial, comercialización, importación y exportación, materia prima, cerámica, pintura, construcción, petróleo, agricultura, plástico, mortero, cemento, cerámicas, pinturas, pintor, recubrimiento, productos terminados, producción de calidad, exportacion e importacion ">
        <meta name="description" content="Diseinca servicios industriales, procura la distribución comercialización importación y exportación de materia prima para todas las industrias con una producción de calidad ">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>DISEINCA - Distribución Servicios Industriales importación exportación</title>
       
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120-precomposed.png" /> <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152-precomposed.png" />
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo.ico">
        <!-- Place favicon.ico in the root directory -->

        <!-- ========================= CSS here ========================= -->
        <link rel="stylesheet" href="assets/css/bootstrap-5.0.0-alpha.min.css">
        <link rel="stylesheet" href="assets/css/LineIcons.2.0.css">
        <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/script.js"></script>
    <script src="assets/js/jquery-3.2.1.js"></script>

    </head>
    <body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M7S4DFL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

        <!-- ========================= preloader start ========================= -->
            <div class="preloader">
                <div class="loader">
                    <div class="ytp-spinner">
                        <div class="ytp-spinner-container">
                            <div class="ytp-spinner-rotator">
                                <div class="ytp-spinner-left">
                                    <div class="ytp-spinner-circle"></div>
                                </div>
                                <div class="ytp-spinner-right">
                                    <div class="ytp-spinner-circle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- preloader end -->

        <!-- ========================= header start ========================= -->
        <header class="header navbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/img/logo/logo.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll active " href="javascript:void(0)">Inicio</a>
                                        
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#indus">Industrias</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll " href="#produ">Productos</a>

                                        
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll " href="#about">Nosotros</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contacto">Contacto</a>
                                    </li>
                                </ul>
                                <!-- <form action="#" class="search-form">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="lni lni-search-alt"></i></button>
                                </form> -->
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        
        </header>
        <!-- ========================= header end ========================= -->

        <!-- ========================= hero-section start ========================= -->
        <section id="home" class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="hero-content-wrapper">
                            <h1 class="mb-25 wow fadeInDown" data-wow-delay=".2s">Distribución Servicios Industriales, C.A. </h1>
                            <p class="mb-35 wow fadeInLeft" data-wow-delay=".4s">Dedicada a la comercialización importación y exportación de materias primas para industrias en sus diferentes ramas.</p>
                            <a href="#about" class="theme-btn">Conócenos</a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="hero-img">
                            <div class="d-inline-block hero-img-right">
                                <img src="assets/img/principal.jpg" alt="" class="wow fadeInRight main" data-wow-delay=".5s">
                                <img src="assets/img/hero/dots.shape.svg" alt="" class="dot-shape">
                                <!-- <div class="video-btn">
                                    <a target="_blank" href="https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM" class="glightbox"><i class="lni lni-play"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= hero-section end ========================= -->

        <!-- ========================= client-logo-section end ========================= -->

        <section id="indus" class="team-section img-bg pt-70">
            <div class="container">
            <div class="row">
            <div class="col-xl-5 col-lg-7 mx-auto">
            <div class="section-title text-center mb-40">
            <!-- <span class="wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">Team</span> -->
            <h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Industrias</h2>

            <p class="wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Materias primas para industrias</p>
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="single-team text-center mb-40 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <div class="team-img">
            <img src="assets/img/1.jpg" alt="">
            <div class="team-social">
            <!-- <ul>
            <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
            <li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
            <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
            <li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
            </ul> -->
            </div>
            </div>
            <div class="team-info">
            <h4>Construcción</h4>
            </div>
            </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="single-team text-center mb-40 wow fadeInUp" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
            <div class="team-img">
            <img src="assets/img/4.jpeg" alt="">
             <div class="team-social">
            <!--<ul>
            <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
            <li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
            <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
            <li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
            </ul>-->
            </div> 
            </div>
            <div class="team-info">
            <h4>Pintura</h4>
            </div>
            </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="single-team text-center mb-40 wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
            <div class="team-img">
            <img src="assets/img/3.jpg" alt="">
            <div class="team-social">
            <!--<ul>
            <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
            <li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
            <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
            <li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
            </ul>-->
            </div> 
            </div>
            <div class="team-info">
            <h4>Cerámica</h4>
           
            </div>
            </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="single-team text-center mb-40 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
            <div class="team-img">
            <img src="assets/img/2.jpg" alt="">
            <div class="team-social">
            <!-- <ul>
             <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
            <li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
            <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
            <li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
            </ul> -->
            </div>
            </div>
            
            
            <div class="team-info">
            <h4>Petróleo</h4>
            </div>
            </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-team text-center mb-40 wow fadeInUp" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                <div class="team-img">
                <img src="assets/img/5.jpg" alt="">
                 <div class="team-social">
                <!--<ul>
                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                <li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                <li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
                </ul>-->
                </div> 
                </div>
                <div class="team-info">
                <h4>Agricultura</h4>
                </div>
                </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-team text-center mb-40 wow fadeInUp" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                    <div class="team-img">
                    <img src="assets/img/6.jpeg" alt="">
                    <div class="team-social">
                    <!-- <ul>
                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
                    </ul> -->
                    </div>
                    </div>
                    <div class="team-info">
                    <h4>Plástico</h4>
                    </div>
                    </div>
                    </div>
            </div>
            </div>
            </section>

        <!-- ========================= feature-section start ========================= -->

            
            <section class="portfolio-section pt-130 " id="produ">
                <div id="container" class="container">
                    <div class="row align-items-end">
                        <div class="col-xl-6 col-lg-6">
                        <div class="section-title mb-60">
                        <!-- <span class="wow fadeInDown" data-wow-delay=".2s" style="visibility: visible;">Productos</span> -->
                        <h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible;">Nuestros productos</h2>
                        </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                        <div class="section-title mb-60">
                        <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible;">Para apoyar producción de calidad, acompañamos a nuestros clientes con el suministro de materias primas que cumplen normativas de calidad garantizadas</p>
                        </div>
                        </div>
                        </div>
                        <div class="row">  
                            <div class="col-12">
                            <div class="portfolio-btn-wrapper">
                            <a category="todo" href="productos.html"><button class="portfolio-btn"> Todos</button></a>
                            <!-- <a category="pego" href="producto/pego.html"><button class="portfolio-btn">Pegos</button></a> -->
                            <a category="construccion" href="producto/construccion.html"><button class="portfolio-btn activo" >Construcción</button></a>
                            <a category="pintura" href="producto/pintura.html"><button class="portfolio-btn">Pinturas</button></a>
                            <a category="cerámica" href="producto/ceramica.html"><button class="portfolio-btn">Cerámicas</button></a>
                            <a category="petróleo" href="#prod"><button class="portfolio-btn">Petróleo</button></a>
                            <a category="agricultura" href="#prod"><button class="portfolio-btn">Agricultura</button></a>
                            <a category="plastico" href="#prod"><button class="portfolio-btn">Plásticos</button></a>
                        </div>
                            </div>
                            </div>
                <div class="row">
                <div class="col-12">
                </div>
                </div>
                <div class="row grid" style="position: relative;">
                
                <div class="col-lg-4 col-md-6 grid-item web marketing" >
                            <div class="portfolio-item-wrapper">
                              <div class="blog-img">
                                <span class="date-meta">Biocellose HPS 100 000S</span>
                              </div>
                            <div class="portfolio-img">
                                <img src="assets/img/saco.png" alt="">
                            </div>
                            <div class="portfolio-overlay">
                            <div class="overlay-content">
                            <h4>Biocellose HPS 100 000S</h4>
                            <p>Sacos de 25 Kg</p>
                            <!-- <a href="portfolio-single.html" data-toggle="modal" data-target="#modalQuickView9" class="theme-btn border-btn">Ver completo</a> -->
                            </div>
                            </div>
                            </div>
                            </div>



                            <div class="col-lg-4 col-md-6 grid-item web marketing" >
                            <div class="portfolio-item-wrapper">
                              <div class="blog-img">
                                <span class="date-meta">Biocellose RDP AP 2080</span>
                              </div>
                            <div class="portfolio-img">
                                <img src="assets/img/saco.png" alt="">
                            </div>
                            <div class="portfolio-overlay">
                            <div class="overlay-content">
                            <h4>Biocellose RDP AP 2080</h4>
                            <p>Sacos de 25 Kg</p>
                            <!-- <a href="portfolio-single.html" data-toggle="modal" data-target="#modalQuickView9" class="theme-btn border-btn">Ver completo</a> -->
                            </div>
                            </div>
                            </div>
                            </div>


                            <div class="col-lg-4 col-md-6 grid-item web marketing" >
                            <div class="portfolio-item-wrapper">
                              <div class="blog-img">
                                <span class="date-meta">Biocellose RO-NXH</span>
                              </div>
                            <div class="portfolio-img">
                                <img src="assets/img/saco.png" alt="">
                            </div>
                            <div class="portfolio-overlay">
                            <div class="overlay-content">
                            <h4>Biocellose RO-NXH</h4>
                            <p>Sacos de 25 Kg</p>
                            <!-- <a href="portfolio-single.html" data-toggle="modal" data-target="#modalQuickView9" class="theme-btn border-btn">Ver completo</a> -->
                            </div>
                            </div>
                            </div>
                            </div>


                            <div class="col-lg-4 col-md-6 grid-item web marketing" >
                            <div class="portfolio-item-wrapper">
                              <div class="blog-img">
                                <span class="date-meta">Tylovis</span>
                              </div>
                            <div class="portfolio-img">
                                <img src="assets/img/saco.png" alt="">
                            </div>
                            <div class="portfolio-overlay">
                            <div class="overlay-content">
                            <h4>Tylovis</h4>
                            <p>Sacos de 25 Kg</p>
                            <!-- <a href="portfolio-single.html" data-toggle="modal" data-target="#modalQuickView9" class="theme-btn border-btn">Ver completo</a> -->
                            </div>
                            </div>
                            </div>
                            </div>


                            <div class="col-lg-4 col-md-6 grid-item web marketing" >
                            <div class="portfolio-item-wrapper">
                              <div class="blog-img">
                                <span class="date-meta">Biocellose RDP VE 3211</span>
                              </div>
                            <div class="portfolio-img">
                                <img src="assets/img/saco.png" alt="">
                            </div>
                            <div class="portfolio-overlay">
                            <div class="overlay-content">
                            <h4>Biocellose RDP VE 3211</h4>
                            <p>Sacos de 25 Kg</p>
                            <!-- <a href="portfolio-single.html" data-toggle="modal" data-target="#modalQuickView9" class="theme-btn border-btn">Ver completo</a> -->
                            </div>
                            </div>
                            </div>
                            </div>

                        <div class="col-lg-4 col-md-6 grid-item web marketing" >
                            <div class="portfolio-item-wrapper">
                              <div class="blog-img">
                                <span class="date-meta">Oxido de Hierro amarillo</span>
                              </div>
                            <div class="portfolio-img">
                                <img src="assets/img/saco.png" alt="">
                            </div>
                            <div class="portfolio-overlay">
                            <div class="overlay-content">
                            <h4>Oxido de Hierro amarillo</h4>
                            <p>Sacos de 25 Kg</p>
                            <!-- <a href="portfolio-single.html" data-toggle="modal" data-target="#modalQuickView9" class="theme-btn border-btn">Ver completo</a> -->
                            </div>
                            </div>
                            </div>
                            </div>
                
                </div>
                <div class="hero-content-wrapper centro">
                <a href="productos.html" class="theme-btn">Ver todos los productos</a>
                </div>
                </div>
                </section>
            
        
        <!-- ========================= feature-section end ========================= -->

       

        <!--========================= about-section start========================= -->
        <section id="about" class="pt-60">
            <div class="about-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-img-wrapper">
                                <div class="about-img position-relative d-inline-block wow fadeInLeft" data-wow-delay=".3s">
                                    <img src="assets/img/segunda2.jpg" alt="">

                                    <div class="about-experience">
                                        <h3>Ventajas de nuestros servicios</h3>
                                        <p>-    Solución Logística <br>
                                            -   Prestación de servicios de importación y exportación <br>
                                            -   Distribución y Comercialización de Productos Terminados <br> <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-content-wrapper">
                                <div class="section-title">
                                    <span class="wow fadeInUp" data-wow-delay=".2s">Sobre nosotros</span>
                                    <h2 class="mb-40 wow fadeInRight" data-wow-delay=".4s">Diseinca Servicios industriales</h2>
                                </div>
                                <div class="about-content">
                                    <p class="mb-45 wow fadeInUp" data-wow-delay=".6s">Distribución de servicios industriales es una empresa que se dedica a la comercializacion importación y exportacion de materias primas para industrias en sus diferentes ramas, así mismo de productos terminados a nivel nacional o internacional y servicios de logistica, almacenaje, importación y exportación.</p>
                                    <div class="counter-up wow fadeInUp" data-wow-delay=".5s">
                                        <div class="counter">
                                            <span id="secondo" class="countup count color-1" cup-end="30" cup-append="k">Misión</span>
                                          
                                            <p>Enfocado con el crecimiento de nuestra organización, y generando aportes de desarrollo industrial en nuestro país, DISEINCA procura la distribución y comercialización eficiente de productos, servicios y tecnología de calidad a la medida de nuestros clientes para el logro optimo de sus objetivos.</p>
                                        </div>
                                        <div class="counter">
                                            <span id="secondo" class="countup count color-2" cup-end="42" cup-append="k">Visión</span>
                            
                                            <p>Ser un proveedor estratégico y confiable de productos, bienes, servicios y tecnología para el desarrollo sustentable de nuestros clientes nacionales e internacionales, la comunidad y el ambiente</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--========================= about-section end========================= -->

        <!-- ========================= service-section start ========================= -->
        <section id="service" class="service-section pt-70 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                        <div class="section-title text-center mb-55">
                            <!-- <span class="wow fadeInDown" data-wow-delay=".2s">Services</span> -->
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Nuestros almacenes</h2>
                            <!-- <p class="wow fadeInUp" data-wow-delay=".6s">At vero eos et accusamus et iusto odio
                                dignissimos ducimus quiblanditiis praesentium</p> -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="service-box box-style">
                            <div class="service-icon box-icon-style">
                                <i class="lni lni-home"></i>
                            </div>
                            <div class="box-content-style service-content">
                                <h4>Almacén Cagua</h4>
                                <p>Abarca el Centro y Oriente del Pais</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="service-box box-style">
                            <div class="service-icon box-icon-style">
                                <i class="lni lni-home"></i>
                            </div>
                            <div class="box-content-style service-content">
                                <h4>Almacén Barquisimeto</h4>
                                <p>Para Centro Occidente y resto del Pais</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- ========================= service-section end ========================= -->


        <!-- ========================= subscribe-section end ========================= -->

        <section id="contacto" class="footer_area">
            <div class="footer_widget bg_cover pt-30 pb-60" style="background-image: url(assets/img/ind.jpg)">
            <div class="container">
            <div class="row">
            <div class="col-lg-5">
            <div class="footer_info mt-45">
            <div class="section_title section_title_2">
            <h1 class="title">Contáctanos </h1>
            </div> 
            <p>Nuestro personal responderá a sus preguntas lo más pronto posible.</p>
            <div class="single_info d-flex align-items-center mt-30">
            <div class="info_icon">
            <i class="lni lni-phone"></i>
            </div>
            <div class="info_content media-body">
            <p>(+58) 02514453083 / (+58) 04144209501</p>
            </div>
            </div> 
            <div class="single_info d-flex align-items-center mt-30">
            <div class="info_icon">
            <i class="lni lni-envelope"></i>
            </div>
            <div class="info_content media-body">
            <p>info@diseinca.com</p>
            </div>
            </div> 
            <div class="single_info d-flex align-items-center mt-30">
            <div class="info_icon">
            <i class="lni lni-map-marker"></i>
            </div>
            <div class="info_content media-body">
            <p>Av. Libertador Esquina Calle 41. Local 41-12. Barquisimeto. Estado Lara. zona Postal 3001</p>
            </div>
            </div> 
            </div> 
            </div>
            <div class="col-lg-7">
            <div class="footer_form pt-40">
            <form action="" id="contact-form" method="post" >
                <div class="row">
                <div class="col-md-6">
                <div class="single_input mt-30">
                <input type="text" name="name" id="name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre'" placeholder = 'Nombre' required>
                </div> 
                </div>
                <div class="col-md-6">
                <div class="single_input mt-30">
                <input name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Correo electrónico'" placeholder = 'Correo electrónico' required>
                </div> 
                </div>
                <!-- <div class="col-md-6">
                <div class="single_input mt-30">
                <input name="phone" id="phone" type="phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Teléfono'" placeholder = 'Teléfono'>
                </div> 
                </div>
                <div class="col-md-6">
                <div class="single_input mt-30">
                <input name="asunto" id="asunto" type="asunto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Asunto'" placeholder = 'Asunto'>
                </div> 
                </div> -->
                <div class="col-md-12">
                <div class="single_input mt-30">
                <textarea name="message" id="message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensaje'" placeholder = 'Mensaje' required></textarea>
                </div> 
                </div>
            <p class="form-message"></p>
            <div class="col-md-12">
            <div class="single_input mt-30">
            <button type="submit" name="submit" class="main-btn">Enviar</button>
            <h5 class="correcto"><?= $result; ?></h5>
            </div> 
            </div>
            </div> 
            </form>
            </div> 
            </div>
            </div> 
            </div> 
            </div> 
        </section>

        <!-- ========================= footer start ========================= -->
        <footer class="footer pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInLeft" data-wow-delay=".2s">
                            <a href="index.html" class="logo mb-30"><img src="assets/img/logo/logo.png" alt="logo"></a>
                            <p class="mb-30 footer-desc">Diseinca se dirige a empresas manufactureras en diversas ramas industriales, para dar soporte en el proceso de procura de Materias Primas de calidad para el logro eficiente de los procesos productivos de alta calidad.</p>
                            <p class="mb-30 footer-desc">Nuestra experiencia nos permite acompañar a nuestros clientes en constante asesoria sobre las recomendaciones de acuerdo a las necesidades de cada caso.</p>
                            <h6 style="margin-bottom: 5px;">Distribuidor exclusivo</h6>
                            <a href="index.html" class="logo mb-30"><img src="assets/img/logo/bio.png" alt="logo"></a>
                          </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-lg-2 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInUp" data-wow-delay=".4s">
                            <h4>Menú rápido</h4>
                            <ul class="footer-links">
                                <li>
                                    <a href="javascript:void(0)">Inicio</a>
                                </li>
                                <li>
                                    <a href="#indus">Industrias</a>
                                </li>
                                <li>
                                    <a href="#produ">Productos</a>
                                </li> 
                                <li>
                                    <a href="#about">Nosotros</a>
                                </li>
                                <li>
                                    <a href="#contacto">Contacto</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInUp" data-wow-delay=".6s">
                            <h4>Redes sociales</h4>
                            <div class="col-md-6">
                                <div class="footer-social-links">
                                    <ul class="d-flex">
                                        <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                        <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                                        <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInRight" data-wow-delay=".8s">
                            <h4>Contacto</h4>
                            <ul class="footer-contact">
                                <li>
                                    <p>Teléfono: (+58) 0414-4209501</p>
                                </li>
                                <li>
                                    <p>Correo: info@diseinca.com</p>
                                </li>
                                <li>
                                    <p>Dirección: Av. Libertador Esquina Calle 41. Local 41-12. Barquisimeto. Estado Lara. zona Postal 3001</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="copyright-area">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <p class="wow fadeInUp" style="text-align: left;" data-wow-delay=".3s">Todos los derecho reservados</p>
                        </div>
                        <div class="col-md-6">
                            <p class="wow fadeInUp" data-wow-delay=".3s">Desarrollado por <a
                                    href="https://branar.com/" rel="nofollow">Branar.C.A.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ========================= footer end ========================= -->


         <!-- Modal: modalQuickView -->
<div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-body">
      <div class="row">
        <div class="col-lg-5">
          <!--Carousel Wrapper-->
          <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
            data-ride="carousel">
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block w-100"
                  src="assets/img/saco.png"
                  alt="First slide">
              </div>
            </div>
            
          </div>
          <!--/.Carousel Wrapper-->
        </div>
        <div class="col-lg-7">
          <h3 class="h2-responsive product-name">
            Product Name
          </h3>
          <h5 class="h4-responsive">
            <span style="color: green">
              $49
            </span>
            <span style="color: lightgray">
              <small>
                <s>$89</s>
              </small>
            </span>
          </h5>

          <!--Accordion wrapper-->
          <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

            <!-- Accordion card -->
            <div class="card">

              <!-- Card header -->
              <div class="card-header" role="tab" id="headingOne1">
                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                  aria-controls="collapseOne1">
                  <h5 class="mb-0">
                    Collapsible Group Item #1 <i class="lni lni-chevron-down"></i>
                  </h5>
                </a>
              </div>

              <!-- Card body -->
              <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                data-parent="#accordionEx">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                  squid. 3
                  wolf moon officia aute,
                  non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                </div>
              </div>

            </div>
            <!-- Accordion card -->

            <!-- Accordion card -->
            <div class="card">

              <!-- Card header -->
              <div class="card-header" role="tab" id="headingTwo2">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                  aria-expanded="false" aria-controls="collapseTwo2">
                  <h5 class="mb-0">
                    Collapsible Group Item #2 <i class="lni lni-chevron-down"></i>
                  </h5>
                </a>
              </div>

              <!-- Card body -->
              <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                data-parent="#accordionEx">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                  squid. 3
                  wolf moon officia aute,
                  non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                </div>
              </div>

            </div>
            <!-- Accordion card -->

            <!-- Accordion card -->
            <div class="card">

              <!-- Card header -->
              <div class="card-header" role="tab" id="headingThree3">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                  aria-expanded="false" aria-controls="collapseThree3">
                  <h5 class="mb-0">
                    Collapsible Group Item #3 <i class="lni lni-chevron-down"></i>
                  </h5>
                </a>
              </div>

              <!-- Card body -->
              <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                data-parent="#accordionEx">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                  squid. 3
                  wolf moon officia aute,
                  non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                </div>
              </div>

            </div>
            <!-- Accordion card -->

            <!-- Accordion card -->
            <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingThree4">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4"
                    aria-expanded="false" aria-controls="collapseThree4">
                    <h5 class="mb-0">
                      Collapsible Group Item #4 <i class="lni lni-chevron-down"></i>
                    </h5>
                  </a>
                </div>
  
                <!-- Card body -->
                <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4"
                  data-parent="#accordionEx">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                    squid. 3
                    wolf moon officia aute,
                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
  
              </div>
              <!-- Accordion card -->
          </div>
          <!-- Accordion wrapper -->
          </div>
          <!-- /.Add to Cart -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>





        

         <!-- Modal: modalQuickView -->
         <div class="modal fade" id="modalQuickView6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
           <div class="modal-content">
             <div class="modal-body">
               <div class="row">
                 <div class="col-lg-5">
                   <!--Carousel Wrapper-->
                   <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
                     data-ride="carousel">
                     <!--Slides-->
                     <div class="carousel-inner" role="listbox">
                       <div class="carousel-item active">
                         <img class="d-block w-100"
                           src="assets/img/saco.png"
                           alt="First slide">
                       </div>
                     </div>
                     
                   </div>
                   <!--/.Carousel Wrapper-->
                 </div>
                 <div class="col-lg-7">
                   <h3 class="h2-responsive product-name">
                     Product Name
                   </h3>
                   <h5 class="h4-responsive">
                     <span style="color: green">
                       $49
                     </span>
                     <span style="color: lightgray">
                       <small>
                         <s>$89</s>
                       </small>
                     </span>
                   </h5>
         
                   <!--Accordion wrapper-->
                   <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
         
                     <!-- Accordion card -->
                     <div class="card">
         
                       <!-- Card header -->
                       <div class="card-header" role="tab" id="headingOne1">
                         <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                           aria-controls="collapseOne1">
                           <h5 class="mb-0">
                             Collapsible Group Item #1 <i class="lni lni-chevron-down"></i>
                           </h5>
                         </a>
                       </div>
         
                       <!-- Card body -->
                       <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                         data-parent="#accordionEx">
                         <div class="card-body">
                           Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                           squid. 3
                           wolf moon officia aute,
                           non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                         </div>
                       </div>
         
                     </div>
                     <!-- Accordion card -->
         
                     <!-- Accordion card -->
                     <div class="card">
         
                       <!-- Card header -->
                       <div class="card-header" role="tab" id="headingTwo2">
                         <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                           aria-expanded="false" aria-controls="collapseTwo2">
                           <h5 class="mb-0">
                             Collapsible Group Item #2 <i class="lni lni-chevron-down"></i>
                           </h5>
                         </a>
                       </div>
         
                       <!-- Card body -->
                       <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                         data-parent="#accordionEx">
                         <div class="card-body">
                           Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                           squid. 3
                           wolf moon officia aute,
                           non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                         </div>
                       </div>
         
                     </div>
                     <!-- Accordion card -->
         
                     <!-- Accordion card -->
                     <div class="card">
         
                       <!-- Card header -->
                       <div class="card-header" role="tab" id="headingThree3">
                         <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                           aria-expanded="false" aria-controls="collapseThree3">
                           <h5 class="mb-0">
                             Collapsible Group Item #3 <i class="lni lni-chevron-down"></i>
                           </h5>
                         </a>
                       </div>
         
                       <!-- Card body -->
                       <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                         data-parent="#accordionEx">
                         <div class="card-body">
                           Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                           squid. 3
                           wolf moon officia aute,
                           non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                         </div>
                       </div>
         
                     </div>
                     <!-- Accordion card -->
         
                     <!-- Accordion card -->
                     <div class="card">
         
                         <!-- Card header -->
                         <div class="card-header" role="tab" id="headingThree4">
                           <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4"
                             aria-expanded="false" aria-controls="collapseThree4">
                             <h5 class="mb-0">
                               Collapsible Group Item #4 <i class="lni lni-chevron-down"></i>
                             </h5>
                           </a>
                         </div>
           
                         <!-- Card body -->
                         <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4"
                           data-parent="#accordionEx">
                           <div class="card-body">
                             Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                             squid. 3
                             wolf moon officia aute,
                             non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                           </div>
                         </div>
           
                       </div>
                       <!-- Accordion card -->
                   </div>
                   <!-- Accordion wrapper -->
                   </div>
                   <!-- /.Add to Cart -->
                   <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
         </div>

        <!-- ========================= scroll-top ========================= -->
        <a href="#" class="scroll-top">
            <i class="lni lni-arrow-up"></i>
        </a>
        
        <!-- ========================= JS here ========================= -->
        <script src="assets/js/bootstrap.bundle-5.0.0.alpha-min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/imagesloaded.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script type="text/javascript">
            //========= glightbox
            GLightbox({
                'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
                'type': 'video',
                'source': 'youtube', //vimeo, youtube or local
                'width': 900,
                'autoplayVideos': true,
            });

            //========= testimonial 
            tns({
                container: '.testimonial-active',
                items: 1,
                slideBy: 'page',
                autoplay: false,
                mouseDrag: true,
                gutter: 0,
                nav: false,
                controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
            });

            //============== isotope masonry js with imagesloaded
            imagesLoaded( '#container', function() {
                var elem = document.querySelector('.grid');
                var iso = new Isotope(elem, {
                    // options
                    itemSelector: '.grid-item',
                    masonry: {
                    // use outer width of grid-sizer for columnWidth
                    columnWidth: '.grid-item'
                    }
                });

                let filterButtons = document.querySelectorAll('.portfolio-btn-wrapper button');
                filterButtons.forEach(e =>
                    e.addEventListener('click', () => {

                        let filterValue = event.target.getAttribute('data-filter');
                        iso.arrange({
                            filter: filterValue
                        });
                    })
                );
            });
        </script>
    </body>
</html>