@extends('layouts.principal')






<!--<![endif]-->

@section('head')
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diagnostico Coches</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@endsection

@section('content')
<!-- header section -->
<section class="banner" role="banner">
    <header id="header">
        <!-- navigation section  -->
        <div class="header-content clearfix"> <a class="logo" href="#"><img src="images/logo.png" alt="zubiri"></a>
            <nav class="navigation" role="navigation">
                <ul class="primary-nav">
                    <li><a href="about">Sobre nosotros</a></li>
                    <li><a href="contact">Contacto</a></li>
                    <!--<li><a href="#">Análisis</a></li>-->
                </ul>
            </nav>
            <a href="#" class="nav-toggle">Menu<span></span></a> </div>
        <!-- navigation section  -->
    </header>

    <!-- banner text -->
    <!--<div class="container">
      <div class="col-md-10 col-md-offset-1">
        <div class="banner-text text-center">
          <h1>Diagnostico de Coches</h1>
          <p>Esta aplicacion web se encargara de analizar los datos de un coche de carreras.</p>-->
    <!-- banner text -->
    <!--   </div>
     </div>
   </div> -->


    <!--carousel-->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/home.jpg">
            </div>

            <div class="item">
                <img src="images/maxresdefault.jpg" >
            </div>

            <div class="item">
                <img src="images/s15.jpg" >
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>




</section>
<!-- header section -->
<!-- description text section -->
<section id="descripton" class="section descripton">
    <div class="container">
        <div class="col-md-10 col-md-offset-1 text-center">
            <p>Proyecto entre Zubiri Manteo y Don Bosco. Mediante el OBD(On Board Diagnostics) analizaremos y visualizaremos los datos a tiempo real de un coche en esta aplicación web.  </p>
        </div>
    </div>
</section>
<!-- description text section -->

<!-- footer -->
<footer class="section footer">
    <div class="footer-bottom">
        <div class="container">
            <div class="col-md-12">
                <p>
                <ul class="footer-share">
                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://es.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://plus.google.com/discover?hl=es"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="https://es.pinterest.com/"><i class="fa fa-pinterest-p"></i></a></li>
                    <li><a href="https://vimeo.com/upgrade/host?utm_id=Vimeo+-+Exact&gclid=EAIaIQobChMIwoWhz7nl1gIVA58bCh2mCg76EAAYASAAEgLGFfD_BwE&gclsrc=aw.ds&dclid=CO2BiNC55dYCFdBxGwodu40H8Q"><i class="fa fa-vimeo"></i></a></li>
                </ul>
                </p>
                <p>© 2017 All rights reserved.<br>
                    Hecho  <i class="fa fa-heart pulse"></i> por Julen,Asier,Sergio</p>
            </div>
        </div>
    </div>
</footer>
<!-- footer -->

<!-- JS FILES -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/main.js"></script>

@endsection

