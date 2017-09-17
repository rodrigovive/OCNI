<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from psdconverthtml.com/live/yourjob/yourjob-v1/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jun 2017 01:56:42 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title>Contactenos</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">

    <!-- BOOTSTRAP STYLES -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- RESPONSIVE STYLES -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!-- COLORS -->
    <link rel="stylesheet" type="text/css" href="css/colors.css">

    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	
    <!-- PRELOADER -->
        <div class="cssload-container">
            <div class="cssload-loader"></div>
        </div>
    <!-- end PRELOADER -->

    <!-- START SITE -->
        <div id="wrapper">
            @include('portada.includes.nav')
				
           

            <div class="section lb">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="post-padding">
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="content col-md-8">
                            <div class="post-padding">
                                <div class="content-title">
                                    <h4>Envíanos un mensaje</h4>
                                    <hr>
                                </div><!-- end widget-title -->
								<!--
                                <p>Remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->

                                <hr class="invis">

                                <form id="submit" class="submit-form">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Nombre</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label class="control-label">Correo</label>
                                            <input type="email" class="form-control" placeholder="">
                                        </div>
                                    </div><!-- end row -->

                                    
                                    

                                    <hr class="invis">

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <label class="control-label">Mensaje</label>
                                            <textarea class="form-control" placeholder=""></textarea>
                                        </div>
                                    </div><!-- end row -->

                                    <button class="btn btn-custom">Enviar</button>
                                </form>
                            </div><!-- end post-padding -->
                        </div><!-- end col -->

                        <div class="sidebar col-md-4">
                            
                            <div class="widget clearfix">
                                <div class="widget-title">
                                    <h4>Detalles de Contacto</h4>
                                </div><!-- end widget-title -->
                                <ul class="contact-details">
                                    <li><a href="#"><i class="fa fa-phone"></i> +90 264 987 66 55</a></li>
                                    <li><a href="#"><i class="fa fa-fax"></i> +90 264 987 66 54</a></li>
                                    <li><a href="#"><i class="fa fa-envelope-o"></i> support@yoursite.com</a></li>
                                    <li><a href="#"><i class="fa fa-link"></i> www.yoursite.com</a></li>
                                </ul>
                            </div><!-- end widget -->

                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end section -->

   

            @include('portada.includes.footer')

            

            <div class="dmtop"><i class="fa fa-angle-up"></i></div>

            
        </div><!-- end wrapper -->
    <!-- /END SITE -->

    <!-- ******************************************
    DEFAULT JAVASCRIPT FILES
    ********************************************** -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>
    <script src="js/custom.js"></script>

    <!-- ******************************************
    ADD YOUR CUSTOM JAVASCRIPT FILES HERE
    ********************************************** -->

    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
    <script src="js/map-upload.js"></script>
   <!-- MAP & CONTACT -->
    <script src="js/map.js"></script>

</body>

<!-- Mirrored from psdconverthtml.com/live/yourjob/yourjob-v1/page-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jun 2017 01:56:42 GMT -->
</html>
