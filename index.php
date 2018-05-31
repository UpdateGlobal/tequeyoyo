        <!doctype html>
<html class="no-js" lang="es">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- SITE TITLE -->
    <title>Tequecheese</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- twitter card starts from here, if you don't need remove this section -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@yourtwitterusername" />
    <meta name="twitter:creator" content="@yourtwitterusername" />
    <meta name="twitter:url" content="http://yourdomain.com" />
    <meta name="twitter:title" content="Your home page title, max 140 char" /> <!-- maximum 140 char -->
    <meta name="twitter:description" content="Your site description, maximum 140 char " /> <!-- maximum 140 char -->
    <meta name="twitter:image" content="assets/img/twittercardimg/twittercard-280-150.jpg" />  <!-- when you post this page url in twitter , this image will be shown -->
    <!-- twitter card ends from here -->

    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="Your home page title" />
    <meta property="og:url" content="http://your domain here.com" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="Your site name here" />
    <!--meta property="fb:admins" content="" /-->  <!-- use this if you have  -->
    <meta property="og:type" content="website" />
    <meta property="og:image" content="assets/img/opengraph/fbphoto.jpg" /> <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends from here -->

    <!--  FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon/icono.png" />  <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/icono.png" /> <!-- this icon shows in browser toolbar -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/icono.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/icono.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/icono.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/icono.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/icono.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/icono.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/icono.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/icono.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/icono.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/img/favicon/icono.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/icono.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/icono.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/icono.png">
    <link rel="manifest" href="assets/img/favicon/manifest.json">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css" media="all" />

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="assets/libs/fontawesome/css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" crossorigin="anonymous">

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900%7CCookie"/>


    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="assets/libs/owlcarousel/owl.carousel.min.css" media="all" />
    <link rel="stylesheet" href="assets/libs/owlcarousel/owl.theme.default.min.css" media="all" />

    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="assets/libs/datepicker/bootstrap-datetimepicker.min.css" media="all"/>

    <!-- MASTER  STYLESHEET  -->
    <link id="csi-master-style" rel="stylesheet" href="assets/css/style.css" media="all" />

    <!-- MODERNIZER CSS  -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    
<style type="text/css">
/* The side navigation menu */
.sidenav {
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 0; /* Stay at the top */
    right: 0;
    background-color: #e71e20; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 95px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
    padding: 60px 8px 8px 32px;
    text-decoration: none;
    font-size: 37px;
    color: #efcd5a;
    display: block;
    transition: 0.3s;
    letter-spacing: 3px;
    line-height: 0px;
    font-family: "tequetextp"
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
    color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}


/*@media screen  and (max-width: 600px){
    .sidenav .closebtn {
    position: absolute;
    top: 20px;
    right: 60px;
    font-size: 70px;
    margin-left: 0px;
}
    
}*/


/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
    transition: margin-left .5s;
    padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
.icons{
    color: red;
}


.burge{
    margin-top: 20px;
    padding-right: 40px;
}
.topo{
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
}
.fimenu{
    position: fixed;
    margin-left: 70px;
    margin-top: 20px;
}
.logo{margin-bottom: 13px;
    margin-top: 10px;}


@media screen and (max-width:  450px) {.logo{margin-left: 10px;margin-top: 10px;}}
.menuluis{margin-right: -15px; margin-left: 30px;margin-top: 15px;z-index: 1;}

@media screen and (min-width: 1280px){.menuluis {margin-left: 225px;margin-top: 10px;}}
@media screen and (max-width: 1440px){.menuluis {margin-left: 225px;margin-top: 10px;}}
@media screen and (min-width: 768px){.menuluis {margin-left: 225px;margin-top: 10px;}}
@media screen and (max-width: 320px){.menuluis {margin-left: 225px;margin-top: 10px;}}


@media (max-width: 425px){
.csi-banner2 {
    background: url(img/slider-1-res.png) top center no-repeat;
    background-size: cover;
    background-repeat: no-repeat;
    /*margin-top: 0px;*/
    height: 650px;
    }

}


@media (min-width: 1440px){
.csi-banner-zikzak {
    /*background: url("../img/slider-1.png") top center no-repeat;*/

    margin-top: -130px;
    height: 1300px;
    background-size: cover;

}

}
   .buldel{
        font-size: 50px;
        cursor: pointer;
    }
    

</style>


</head>
<body class="home">

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="csi-container ">
    <!-- ***  ADD YOUR SITE CONTENT HERE *** -->

    <!--mmenu-->
    <div id="mySidenav" class="sidenav"> 
        <div class="row text-center">
            <img src="img/logo.png" width="200" class="hidden-xs">
        </div>
      
      <a href="javascript:void(0)"  onclick="closeNav()">&times;</a>
      <a href="#historia">Historia</a>
      <a href="#carta">Carta</a>
      <a href="#ingredientes">Ingredientes</a>
      <a href="#contacto">Contacto</a>
    </div>



    <div class="container navbar-fixed-top" >
        <div class="row">
            <div class="col-sm-6 col-xs-6" align="left"><img class="logo" src="img/logo.png" width="100"></div>
            <div class="col-sm-6 col-xs-6" align="right" style="padding-top: 40px;"><span class="buldel" onclick="openNav()">&#9776; </span></div>
        </div>
    </div>
    <!--mmenu-->

    <!--Banner-->
    <section>
        <div class="csi-banner csi-banner-zikzak csi-banner2">
            <div class="csi-banner-style">
                <div class="csi-inner">
                    <div class="container">
                        <div class="csi-banner-content">
                           <!--  <h1 class="csi-subtitle tequetextp">Lorem Ipsum </h1>
                            <h2 class="csi-title tequetext" style="color: #e61d1f;">Lorem <span style="color:#efcd5a;"> Ipsum is simply</span> dummy</h2>
                            <div class="btn-area">
                                <a class="csi-btn" href="">Text botton</a>
                                <a class="csi-btn csi-btn-white" href="">Text botton</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner END-->

    <!--seccion-->
    <section>
            <div id="historia"></div>
            <div class="container-fluid img_banner" >
                <div class="row" align="center" style="margin: 0px; padding: 0px;">
                    <div class="col-sm-12">
                        <h1 class="tequetext" style="color: #e61d1f;">TODO SOBRE TEQUECHEESE</h1>
                        <h3 class="tequetextp" style="color: #000;">los mas ricos tequeños hechos para ti</h3>
                    </div>
                </div>
            </div>      
    </section>
    <!--seccion-->

    <!--ABOUT-->
    <section >
        <div id="csi-about" class="csi-about csi-about-zikzak">
            <div class="csi-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="csi-heading">
                                <img src="img/3.png" alt="about team">
                                <h3 class="subtitle tequetext" style="color: #e61d1f;">Nuestra Historias</h3>
                                <h2 class="title tequetextp" style="color:#efcd5a;">RICOS TEQUEÑOS PERU</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="csi-about-content">
                                <p class="text" style="color:#000;">
                                    Somos los ricos tequeños hechos en el peru con sabor venezolanos, nacimos de un emprendimiento familiar como aporte gastronomico a todo el sabor caribeño y peruano 
                                </p>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT END-->

    <!--MENU ITEMS-->
    <section id="carta">
        <div id="csi-menu" class="csi-menu">
            <div class="csi-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="csi-heading">
                                <h3 class="subtitle tequetext" style="color:#e61d1f; ">Conoce</h3>
                                <h2 class="title tequetextp" style="color:#efcd5a;">todas nuestras delicias</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">

                            <div class="csi-nav-pills-area">
                                <ul class="nav nav-pills csi-nav-pills">
                                    <li class="active"><a data-toggle="pill" href="#tequenos">Tequeños</a></li>
                                    <li><a data-toggle="pill" href="#cremas">Cremas</a></li>
                                    <li><a data-toggle="pill" href="#pastelitos">Pastelitos</a></li>
                                    <li><a data-toggle="pill" href="#bebidas">Bebidas</a></li>
                                </ul>
                            </div>

                            <div class="tab-content csi-tab-content">
                                <div id="tequenos" class="tab-pane fade in active">
                                    <div class="csi-single-tab">
                                        <div class="menu-thumb">
                                            <a href="#!"><img src="img/tequenos600x600.jpg" alt=""></a>
                                        </div>
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="#!">Queso</a></h3>
                                                    <p class="price">
                                                       <span>S/</span> 15
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    With chopped vegetables, served with plum sauce. Tossed in peppercorns and spiced salt
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="csi-single-tab">
                                        <div class="menu-thumb">
                                            <a href="#!"><img src="img/tequenos600x600.jpg" alt=""></a>
                                        </div>
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="#!">Queso Con Platano</a></h3>
                                                    <p class="price">
                                                       <span>S/</span> 20
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    With chopped vegetables, served with plum sauce. Tossed in peppercorns and spiced salt
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="csi-single-tab">
                                        <div class="menu-thumb">
                                            <a href="#!"><img src="img/tequenos600x600.jpg" alt=""></a>
                                        </div>
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="#!">Queso con Chorizo Parrillero</a></h3>
                                                    <p class="price">
                                                       <span>S/</span> 15
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="csi-single-tab">
                                        <div class="menu-thumb">
                                            <a href="#!"><img src="img/tequenos600x600.jpg" alt=""></a>
                                        </div>
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="#!">Tequeños de Nutella</a></h3>
                                                    <p class="price">
                                                       <span>S/</span> 15
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="csi-single-tab">
                                        <div class="menu-thumb">
                                            <a href="#!"><img src="img/tequenos600x600.jpg" alt=""></a>
                                        </div>
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="#!">Queso con Jamón</a></h3>
                                                    <p class="price">
                                                       <span>S/</span> 15
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                </div>





                                <div id="cremas" class="tab-pane fade">
                                    <div class="csi-single-tab">
                                        <div class="menu-thumb">
                                            <a href="#!"><img  src="img/salsaajo.jpeg" alt=""></a>
                                        </div>
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="#!">Mayoqueso</a></h3>
                                                    <p class="price">
                                                      <span>S/</span>  5
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="csi-single-tab">
                                        <div class="menu-thumb">
                                            <a href="#!"><img src="img/salsaajo.jpeg" alt=""></a>
                                        </div>
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="#!">Aceitunas</a></h3>
                                                    <p class="price">
                                                       <span>S/</span> 10
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="csi-single-tab">
                                        <div class="menu-thumb">
                                            <a href="#!"><img src="img/salsaajo.jpeg" alt=""></a>
                                        </div>
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="#!">Rocoto</a></h3>
                                                    <p class="price">
                                                       <span>S/</span> 15
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="csi-single-tab">
                                        <div class="menu-thumb">
                                            <a href="#!"><img src="img/salsaajo.jpeg" alt=""></a>
                                        </div>
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="#!">Ají de la Casa</a></h3>
                                                    <p class="price">
                                                       <span>S/</span> 10
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="csi-single-tab">
                                        <div class="menu-thumb">
                                            <a href="#!"><img src="img/salsaajo.jpeg" alt=""></a>
                                        </div>
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="#!">Mayonesa</a></h3>
                                                    <p class="price">
                                                       <span>S/</span> 10
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                </div>



                                <div id="pastelitos" class="tab-pane fade">
                                    <div class="csi-single-tab">
                                        <div class="menu-thumb">
                                            <a href="#!"><img src="img/pasteles.png" alt=""></a>
                                        </div>
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="#!">Pollo</a></h3>
                                                    <p class="price">
                                                      <span>S/</span>  3
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="csi-single-tab">
                                        <div class="menu-thumb">
                                            <a href="#!"><img src="img/pasteles.png" alt=""></a>
                                        </div>
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="#!">Andino</a></h3>
                                                    <p class="price">
                                                      <span>S/</span>  5
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="csi-single-tab">
                                        <div class="menu-thumb">
                                            <a href="#!"><img src="img/pasteles.png" alt=""></a>
                                        </div>
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="#!">Papa con Queso</a></h3>
                                                    <p class="price">
                                                      <span>S/</span>  3
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="csi-single-tab">
                                        <div class="menu-thumb">
                                            <a href="#!"><img src="img/pasteles.png" alt=""></a>
                                        </div>
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="#!">Pizza</a></h3>
                                                    <p class="price">
                                                      <span>S/</span>  5
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                </div>




                                <div id="bebidas" class="tab-pane fade">
                                    <div class="csi-single-tab">
                                        <div class="menu-thumb">
                                            <a href="#!"><img src="img/pachi.jpg" alt=""></a>
                                        </div>
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="#!">Cocacola</a></h3>
                                                    <p class="price">
                                                      <span>S/</span>  3
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="csi-single-tab">
                                        <div class="menu-thumb">
                                            <a href="#!"><img src="img/pachi.jpg" alt=""></a>
                                        </div>
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="#!">Inkacola</a></h3>
                                                    <p class="price">
                                                      <span>S/</span>  5
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="csi-single-tab">
                                        <div class="menu-thumb">
                                            <a href="#!"><img src="img/pachi.jpg" alt=""></a>
                                        </div>
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="#!">Chicha Morada</a></h3>
                                                    <p class="price">
                                                      <span>S/</span>  3
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="csi-single-tab">
                                        <div class="menu-thumb">
                                            <a href="#!"><img src="img/pachi.jpg" alt=""></a>
                                        </div>
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="#!">Maracuya</a></h3>
                                                    <p class="price">
                                                      <span>S/</span>  3
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="csi-single-tab">
                                        <div class="menu-thumb">
                                            <a href="#!"><img src="img/pachi.jpg" alt=""></a>
                                        </div>
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="#!">Papelon con Limón</a></h3>
                                                    <p class="price">
                                                      <span>S/</span>  3
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="csi-single-tab">
                                        <div class="menu-thumb">
                                            <a href="#!"><img src="img/pachi.jpg" alt=""></a>
                                        </div>
                                        <div class="menu-content">
                                            <div class="csi-info">
                                                <div class="title-area">
                                                    <h3 class="title"><a href="#!">Agua</a></h3>
                                                    <p class="price">
                                                      <span>S/</span>  3
                                                    </p>
                                                </div>
                                                <p class="text">
                                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam varius a felis eu dictum.
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                </div>










                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--MENU ITEMS END-->


    <!--INGREDIENTES-->
    <section>
        <div id="csi-milestone-about" class="csi-milestone-about">
                    <div id="ingredientes"></div>
            <div class="csi-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="csi-milestone-area">
                                <div class="csi-milestone">
                                    <div class="milestone-inner">
                                        <div class="csi-content">
                                            <div class="row">
                                                <br><br>
                                                <div class="col-sm-12 rot_list">
                                                    <h3 class="tequetext title_ingr" style="color: #e61d1f;">Ingredientes</h3>
                                                    <br>
                                                    <div class="csi-counter-area" style="">
                                                        <ul class="list_ingr">
                                                            <li><i class="fas fa-check icons"></i>harina de trigo</li>
                                                            <li><i class="fas fa-check icons"></i>Mantilla</li>
                                                            <li><i class="fas fa-check icons"></i>Huevos</li>
                                                            <li><i class="fas fa-check icons"></i>Sal</li>
                                                            <li><i class="fas fa-check icons"></i>Queso blanco</li>
                                                            <li><i class="fas fa-check icons"></i>Abundante Aceite</li>
                                                        </ul>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="csi-video-area">
                                <h3 class="tequetext title_ingr" style="color: #e61d1f;">Como se hacen</h3>
                                <figure class="rot_vie">
                                    <a href="home-zikzak.html#"><img src="assets/img/video.jpeg" alt="Special Food"></a>
                                    <figcaption>
                                        <div class="video-icon">
                                            <div class="csi-vertical">
                                                <a id="myModalLabel" class="icon" href="home-zikzak.html#" data-toggle="modal" data-target="#csi-modal">
                                                    <i class="fa fa-play" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                                
                                <div id="csi-modal" class="modal fade csi-modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h3 class="tequetextp">Como se Hacen?</h3>
                                               <!-- <iframe id="modalvideo" src="https://www.youtube.com/watch?v=WiknKsXo2D8&t=555s" allowfullscreen></iframe> -->
                                               <iframe width="854" height="480" src="https://www.youtube.com/embed/WiknKsXo2D8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--INGREDIENTES END-->

    <!--Contacto-->
    <section>
        <div id="csi-contact" class="csi-contact" style="background-color: #f9f9f9;" >
            <div class="csi-inner">
                <div class="contact-top-area">
                        <div class="innerpage-section">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25527.36953922789!2d-77.09831684885098!3d-12.088282564197323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c9a112e39ef3%3A0x4d2c6617bf4529d3!2sGrau+766%2C+Magdalena+del+Mar+15086!5e0!3m2!1ses-419!2spe!4v1526336936965" style="width: 100%;" height="700" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div id="contacto"></div>
                <div class="container" >
                    <div class="row">
                        <div class="col-sm-offset-2 col-sm-8" align="center">
                            <h2 class="tequetext" style="color: #e61d1f; font-size: 68px; margin: 40px 0px 50px;">Cont<span style="color:#efcd5a;">act</span>anos</h2>

                            <form method="POST" class="csi-contactform" action="php/form-handler.php" novalidate="novalidate">
                                <div class="form-group">
                                    <input type="text" name="csiname" class="form-control csiname" id="csiname" placeholder="Nombre" required="" aria-required="true">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="csiemail" class="form-control csiemail" id="csiemail" placeholder="Email" required="" aria-required="true">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="csisubject" class="form-control csisubject" id="csisubject" placeholder="Titulo" required="" aria-required="true">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control csimessage" name="csimessage" id="csimessage" rows="5" placeholder="Escribenos" required="" aria-required="true"></textarea>
                                </div>
                                <button type="submit" name="submit" value="contact-form" class="csi-btn hvr-glow hvr-radial-out csisend csi-send tequetext">Enviar Mensaje</button>

                            </form>

                            <div id="csi-form-modal" class="modal fade csi-form-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content csi-modal-content">
                                        <div class="modal-header csi-modal-header">
                                            <button type="button" class="close brand-color-hover" data-dismiss="modal" aria-label="Close">
                                                <i class="fa fa-power-off"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert csi-form-msg" role="alert"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contacto END-->
    
    <!--Footer--->
    <footer>
        <div id="csi-footer" class="csi-footer">
            <div class="csi-inner">
                <div class="footer-top-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="footer-top">
                                    <a class="footer-logo" href="index.html"><img src="img/logo.png" width="200" alt="logo"/></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <div class="single">
                                    <h3 class="title tequetextp">nuestro local</h3>
                                    <p class="tequetext">Av. Grau 766</p>
                                    <p><a href="../../../../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="335a5d555c734a5c4641575c5e525a5d1d505c5e">Magdalena, Lima</a></p>
                                </div>
                            </div> 
                            <div class="col-xs-12 col-sm-4">
                                <div class="single">
                                    <h3 class="title tequetextp">llamanos</h3>
                                    <p class="tequetext">Movile:</p>
                                    <p class="tequetext">+51987654231</p>
                                </div>
                            </div> 
                            <div class="col-xs-12 col-sm-4">
                                <div class="single">
                                    <h3 class="title tequetextp">atención</h3>
                                    <p class="tequetext">Lun - Vi 11:30 - 22:00  </p>
                                    <p class="tequetext">Sab - Dom 11:30 - 24:00  </p>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="csi-footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <p>TequeCheese <i class="fa fa-copyright" aria-hidden="true"></i> - Peru  |  2018 all rights reserved by Update.pe</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer-->

</div> <!--//.csi SITE CONTAINER-->
<!-- *** ADD YOUR SITE SCRIPT HERE *** -->
<!-- JQUERY  -->

<script>
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
    document.getElementById("main").style.marginLeft = "300px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.body.style.backgroundColor = "white";
}
</script>


<script data-cfasync="false" src="../../../../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

<!-- BOOTSTRAP JS  -->
<script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>

<!-- bootstrap date picker js with moment js -->
<script src="assets/libs/datepicker/moment-with-locales.min.js"></script>
<script src="assets/libs/datepicker/bootstrap-datetimepicker.min.js"></script>


<!-- SKILLS SCRIPT  -->
<script src="assets/libs/jquery.validate.js"></script>

<!-- if load google maps then load this api, change api key as it may expire for limit cross as this is provided with any theme -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzfNvH2kifJQ0PhBIyuuG-swdkW1NPQVE"></script>

<!-- CUSTOM GOOGLE MAP -->
<script type="text/javascript" src="assets/libs/gmap/jquery.googlemap.js"></script>

<!-- Owl Carousel  -->
<script src="assets/libs/owlcarousel/owl.carousel.min.js"></script>

<!-- tweetie feed js  -->
<script src="tweetie/tweetie.js"></script>

<!-- adding magnific popup js library -->
<script type="text/javascript" src="assets/libs/maginificpopup/jquery.magnific-popup.min.js"></script>

<!-- type js -->
<script src="assets/libs/typed/typed.min.js"></script>

<!-- SMOTH SCROLL -->
<script src="assets/libs/jquery.smooth-scroll.min.js"></script>
<script src="assets/libs/jquery.easing.min.js"></script>

<!-- Counter JS -->
<script src="assets/libs/waypoints.min.js"></script>
<script src="assets/libs/counterup/jquery.counterup.min.js"></script>

<!-- CUSTOM SCRIPT  -->
<script src="assets/js/custom.script.js"></script>

<script>
$(document).ready(function(){
  //  Agregue desplazamiento suave a todos los enlaces
  $("a").on('click', function(event) {

    // Asegúrate de que this.hash tenga un valor antes de anular el comportamiento predeterminado
    if (this.hash !== "") {

      // Evitar el comportamiento de clic de ancla predeterminado
      event.preventDefault();

      // Almacenar hash
      var hash = this.hash;

      // Usar el método animado () de jQuery para agregar un desplazamiento suave de la página
      // El número opcional (800) especifica la cantidad de milisegundos necesarios para desplazarse al área especificada
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Agregue hash (#) a URL cuando finalice el desplazamiento (comportamiento de clic predeterminado)
        window.location.hash = hash;
      });
    } // fin if
  });
});
</script>




</body>
</html>
