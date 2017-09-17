<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from psdconverthtml.com/live/yourjob/yourjob-v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Jun 2017 20:50:08 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title>Universidad Nacional Jorge Basadre Grohmann</title>
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

    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">

    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- PRELOADER -->
        <!-- <div class="cssload-container">
            <div class="cssload-loader"></div>
        </div> -->
    <!-- end PRELOADER -->

    <!-- START SITE -->
    <div class="cssload-container">
        <div class="cssload-loader"></div>
    </div>
        <div id="wrapper">

            @include('portada.includes.nav')

            <!-- end header -->

            <div class="parallax section homehero" data-stellar-background-ratio="0.5" style="background-image:url('/images/demo.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="home-message">
                                <h1 class="color-letra">Buscador <span class="element"></span><br>Convenios</h1>

                                <!-- <div class="svg-wrapper ">
                                    <div class="ttext">
                                        <a class="btn btn-custom" href="#">Un. Convenios <span class="fa fa-angle-right"></span></a>
                                    </div>
                                    <svg height="57" width="200" xmlns="http://www.w3.org/2000/svg">
                                        <rect class="shape" height="57" width="200" />
                                    </svg>
                                </div> -->
                            </div><!-- end message -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end section -->

            <div class="sectionnr nopadding wb">
                <div class="container">
                    <div class="submit-form customform">
                      <div class="row">
                          <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon2"><i class="fa fa-search"></i></span>
                                  <input type="text" id="m" name="finalidad"class="form-control ui-autocomplete-input" placeholder="Buscar Convenio" aria-describedby="basic-addon2">
                              </div>
                          </div><!-- end col -->

                          <div class="col-md-3 col-sm-6 col-xs-12">
                              <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-map-o"></i></span>
                                  <input type="text" id="b" name="NumResol" class="form-control" placeholder="Buscar por Resolucion" aria-describedby="basic-addon1">
                              </div>
                          </div><!-- end col -->

                          <div class="col-md-3 col-sm-6 col-xs-12">
                              <select class="form-control" name="resol" data-style="btn-default" data-live-search="true">

                                  <option value="" >Tipo Resolucion</option>

                                  <?php foreach ($tipo_resol as $item) : ?>

                                      <option value="<?php echo $item->id ?>"><?php echo $item->nombr_tipo_resol ?></option>

                                  <?php endforeach ?>
                              </select>
                          </div><!-- end col -->

                          <div class="col-md-3 col-sm-6 col-xs-12">
                              <select class="form-control" name="year" data-style="btn-default" data-live-search="true">

                                  <option value="" >Año de publicacion Resolucion</option>

                                  <?php foreach ($date as $item) : ?>

                                        <option value="{{$item->aa}}">{{$item->aa}}</option>

                                  <?php endforeach ?>
                              </select>
                          </div><!-- end col -->

                      </div><!-- end row -->

                      <row>
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                            <button name='buscar' value="BUSCAR" class="btn btn-custom" title="Presione para Buscar">Buscar Convenio</button>
                        </div><!-- end col -->
                      </row>
                  </div>
                        <div class="row listcheckbox">
                            <div class="col-md-12">
                                <ul class="list-inline text-center">

                                  </ul>
                            </div>
                            <!-- <div class="col-md-3 text-right">
                                <a href="#" class="readmore">View All</a>
                            </div> -->
                        </div><!-- end row -->

                </div><!-- end container -->
            </div><!-- end section -->



            <div class="section lb">
                <div class="container">
                    <div class="section-title text-center clearfix ">
                        <h4>Lista de Convenios</h4>
                        <hr>
                    </div>

                    <div class="all-jobs job-listing clearfix job-tab" name="list2" id="listando">
                      <?php foreach ($year as $item) :?>
                        <div class="row border-row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="badge freelancer-badge"><?php echo $item->nro_resol ?></div>
                        <h5><?php echo $item->inst_conv ?><h5>
                        <small><span><?php echo $item->vigencia_in ?></span>
                        <span> Fin. Convenio :<?php echo $item->vigencia_fn ?></span></small></div>
                        <div class="col-md-5 col-sm-5 col-xs-12"><div class="job-meta"><p><?php echo $item->nombr_tipo_resol ?></p> <small><?php echo $item->finalidad ?></small></div></div>

                        <div class="col-md-2 col-sm-2 col-xs-12"><div class="job-meta"><p><?php echo $item->nomb_tipo_conv1 ?></p> <small>Fecha Resol:<?php echo $item->fecha_resol ?></small></div></div>
                        <div class="col-md-2 col-sm-2 col-xs-12"><div class="job-meta"><p><?php echo $item->programa ?></p> <a href="javascript:window.open('http://www.unjbg.edu.pe/resoluciones/pdf/rr7182016.pdf','','width=600,height=400,left=50,top=50,toolbar=yes');void 0" class="btn btn-primary btn-sm btn-block"><span class="glyphicon glyphicon-eye-open"></span></a></div></div>
                        </div>
                      <?php endforeach ?>

                    </div><!-- end alljobs -->


                </div><!-- end container -->
            </div><!-- end section -->



              @include('portada.includes.footer')





            @include('portada.auth.login')

        </div><!-- end wrapper -->
    <!-- /END SITE -->

    <!-- ******************************************
    DEFAULT JAVASCRIPT FILES
    ********************************************** -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/EasyAutocomplete/dist/jquery.easy-autocomplete.min.js"></script>


   <!-- ******************************************
    ADD YOUR CUSTOM JAVASCRIPT FILES HERE
    ********************************************** -->


</body>

<script>

    $(function () {
      $("[name='buscar']").click(function () {
        $(document).scrollTop(750)
        var id = $("[name='NumResol']").val();
        var id2 = $("[name='finalidad']").val();
        var id3 = $("[name='year']").val();
        var id4 = $("[name='resol']").val();
        if(id == ''){
         id = 'empty';
        }
        if(id2 == ''){
         id2 = 'empty';
        }


        if(id4 == ''){
         id4 = 'empty';
        }

        if(id3 == ''){

         id3 = 'empty';
        }

        //alert("probando");
        $.ajax({
            url: '{{url('/pagina/index/buscar')}}' + '/'+id+'/'+id2+'/'+id3+'/'+id4+'/anofijo',

            success:function (detalles) {
                  $("[name='list2']").empty();

                  for (var i = 0; i < detalles.length; i++) {

                    $("[name='list2']").append('<div class="row">'+
                    ' <div class="col-md-3 col-sm-3 col-xs-12">'+
                    '<div class="badge freelancer-badge">'+detalles[i].nro_resol+'</div>'+
                    '<h5>'+detalles[i].inst_conv+'<h5>'+
                    '<small><span>Ini. Convenio :'+detalles[i].vigencia_in+'</span>'+
                    '<span> Fin. Convenio :'+detalles[i].vigencia_fn+'</span></small></div>'+
                    '<div class="col-md-5 col-sm-5 col-xs-12"><div class="job-meta"><p>'+detalles[i].nombr_tipo_resol+'</p> <small>'+detalles[i].finalidad+'</small></div></div>'+
                    '<div class="col-md-2 col-sm-2 col-xs-12"><div class="job-meta"><p>'+detalles[i].nomb_tipo_conv1+'</p> <small>Fecha Resol:'+detalles[i].fecha_resol+'</small></div></div>'+

                    '<div class="col-md-2 col-sm-2 col-xs-12"><div class="job-meta"><p>'+detalles[i].programa+'</p> <a href="http://www.unjbg.edu.pe/resoluciones/pdf/rr8662016.pdf" class="btn btn-primary btn-sm btn-block">URL</a></div></div>'+

                    '</div>');
                  }
            }
        });
      });
      // var data: ["blue", "green", "pink", "red", "yellow"]
      //
      // var options = {
      //
      //   url: function(phrase) {
      //     return "/pagina/index/buscar/"+'puno'+'/resol';
      //   },
      //
      //   getValue: "inst_conv",
      //
      // };
      //
      // $("[name='finalidad']").easyAutocomplete(options)

      $("#m").autocomplete({

        source: '/pagina/index/buscar/resol/xd',
    	  select: function(event, ui) {
    	  	$("#m").val(ui.item.value);
    	  }
      });

      $("#b").autocomplete({

        source: '/pagina/index/buscar/resol/xd2',
    	  select: function(event, ui) {
    	  	$("#b").val(ui.item.value);
    	  }
      });

      $("[name='resol']").change(function () {
              $(document).scrollTop(750)
              var id = $("[name='NumResol']").val();
               var id2 = $("[name='finalidad']").val();
               var id3 = $("[name='year']").val();
               var id4 = $("[name='resol']").val();
               if(id == ''){
                id = 'empty';
               }
               if(id2 == ''){
                id2 = 'empty';
               }
               if(id4 == ''){
                id4 = 'empty';
               }
               if(id3 == ''){

                id3 = 'empty';
               }

             $.ajax({
                 url: '{{url('/pagina/index/buscar')}}' + '/'+id+'/'+id2+'/'+id3+'/'+id4+'/anofijo',

                 success:function (detalles) {
                       $("[name='list2']").empty();

                       for (var i = 0; i < detalles.length; i++) {

                         $("[name='list2']").append('<div class="row">'+
                         ' <div class="col-md-3 col-sm-3 col-xs-12">'+
                         '<div class="badge freelancer-badge">'+detalles[i].nro_resol+'</div>'+
                         '<h5>'+detalles[i].inst_conv+'<h5>'+
                         '<small><span>Ini. Convenio :'+detalles[i].vigencia_in+'</span>'+
                         '<span> Fin. Convenio :'+detalles[i].vigencia_fn+'</span></small></div>'+
                         '<div class="col-md-5 col-sm-5 col-xs-12"><div class="job-meta"><p>'+detalles[i].nombr_tipo_resol+'</p> <small>'+detalles[i].finalidad+'</small></div></div>'+
                         '<div class="col-md-2 col-sm-2 col-xs-12"><div class="job-meta"><p>'+detalles[i].nomb_tipo_conv1+'</p> <small>Fecha Resol:'+detalles[i].fecha_resol+'</small></div></div>'+
                         '<div class="col-md-2 col-sm-2 col-xs-12"><div class="job-meta"><p>'+detalles[i].programa+'</p> <a href="http://www.unjbg.edu.pe/resoluciones/pdf/rr8662016.pdf" class="btn btn-primary btn-sm btn-block">URL</a></div></div>'+
                         '</div>');
                       }
                 }
             });
        });
        $("[name='year']").change(function () {
                $(document).scrollTop(750)
                var id = $("[name='NumResol']").val();
                 var id2 = $("[name='finalidad']").val();
                 var id3 = $("[name='year']").val();
                 var id4 = $("[name='resol']").val();
                 if(id == ''){
                  id = 'empty';
                 }
                 if(id2 == ''){
                  id2 = 'empty';
                 }
                 if(id4 == ''){
                  id4 = 'empty';
                 }
                 if(id3 == ''){

                  id3 = 'empty';
                 }

               $.ajax({
                   url: '{{url('/pagina/index/buscar')}}' + '/'+id+'/'+id2+'/'+id3+'/'+id4+'/anofijo',

                   success:function (detalles) {
                         $("[name='list2']").empty();

                         for (var i = 0; i < detalles.length; i++) {

                           $("[name='list2']").append('<div class="row">'+
                           ' <div class="col-md-3 col-sm-3 col-xs-12">'+
                           '<div class="badge freelancer-badge">'+detalles[i].nro_resol+'</div>'+
                           '<h5>'+detalles[i].inst_conv+'<h5>'+
                           '<small><span>Ini. Convenio :'+detalles[i].vigencia_in+'</span>'+
                           '<span> Fin. Convenio :'+detalles[i].vigencia_fn+'</span></small></div>'+
                           '<div class="col-md-5 col-sm-5 col-xs-12"><div class="job-meta"><p>'+detalles[i].nombr_tipo_resol+'</p> <small>'+detalles[i].finalidad+'</small></div></div>'+
                           '<div class="col-md-2 col-sm-2 col-xs-12"><div class="job-meta"><p>'+detalles[i].nomb_tipo_conv1+'</p> <small>Fecha Resol:'+detalles[i].fecha_resol+'</small></div></div>'+
                           '<div class="col-md-2 col-sm-2 col-xs-12"><div class="job-meta"><p>'+detalles[i].programa+'</p> <a href="http://www.unjbg.edu.pe/resoluciones/pdf/rr8662016.pdf" class="btn btn-primary btn-sm btn-block">URL</a></div></div>'+
                           '</div>');
                         }
                   }
               });
          });



    });
  </script>


</html>
