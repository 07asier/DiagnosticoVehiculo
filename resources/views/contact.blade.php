<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
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
</head>

<div>
<!-- header section -->
<section class="innerbanner" role="banner">
    <header id="header">
        <!-- navigation section  -->
        <div class="header-content clearfix"> <a class="logo" href="home"><img src="images/logo.png" alt="zubiri"></a>
            <nav class="navigation" role="navigation">
                <ul class="primary-nav">
                    <li><a href="home">Home</a></li>
                    <li><a href="about">Sobre nosotros</a></li>
                </ul>
            </nav>
            <a href="#" class="nav-toggle">Menu<span></span></a> </div>
        <!-- navigation section  -->
    </header>
    <!-- banner text -->



    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/pitstop.jpg">
            </div>

        </div>


</section>
<!-- header section -->
<!-- description text section -->



{{--<section id="inner-description" class="section inner-description">
    <div class="container">
        <div class="col-md-10 col-md-offset-1 text-center">
            <p>Si dispone de cualquier duda, rellene y envienos el formulario, contactaremos con usted y le resolveremos su duda cuanto antes.</p>
                <form method="post" action="" name="cform" id="cform">
                    {{ csrf_field()}}
                    <input name="name" id="name" type="text"  placeholder="Nombre">
                    <input name="secondname" id="secondname" type="text"  placeholder="Apellido">
                    <input name="email" id="email" type="email"  placeholder="Correo electrónico" >
                    <input type="submit" id="submit" name="send" class="submitBnt" value="Enviar">
                </form>
        </div>
    </div>
</section>--}}

<section id="inner-description" class="section inner-description">
    <div class="col-md-10 col-md-offset-1 text-center">
    <h4>Si dispone de cualquier duda, rellene y envienos el formulario, contactaremos con usted y le resolveremos su duda cuanto antes.</h4>
    </div>


<form method=post action="/contact">
    <div class="col-md-10 col-md-offset-1 text-center">
        {{ csrf_field()}}
        <input type= "text" name="nombre" placeholder="Nombre"></input>
        <input type="text" name="apellido" placeholder="Apellido"></input>
        <input type="email" name="email" placeholder="Correo Electronico"></input>
        <input type="submit" name="aceptar" value="Enviar"></input>

    </div>
</form>
</section>

@if($errors->any())
    <div class="alert alert-danger">
        <p>Introduce bien los datos</p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>

            @endforeach
        </ul>

    </div>
@endif


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
<script src="js/jquery.contact.js"></script>
<script src="js/main.js"></script>
</body>
</html>