
@extends('frontend.layouts.app2')

@section('content')



<div class="row">
                <div class="col-md-12 backg">
                    <!--
                    <div class="col-md-4 col-md-offset-4 inner col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">-->
                        <div class="col-md-6 col-md-offset-3  col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">




                                <h2 class="form__titulo">INICIE BUSQUEDA</h2>
                                <div class="contenedor-input_and_select">
                                  <select name="convenios_carac" id="tipo" class="inputt-48">
                                        <option></option>
                                            <?php foreach ($tipo_conv as $item) : ?>

                                                  <option value="{{$item->id}}">{{$item->nomb_tipo_conv1}}</option>

                                            <?php endforeach ?>
                                  </select>

                                  <div class="inputt-48 select-especial">
                                      <select name="aniofijo" id="anio" class="selectigual"  >
                                          <option></option>
                                        <?php foreach ($date as $item) : ?>

                                              <option value="{{$item->aa}}">{{$item->aa}}</option>

                                        <?php endforeach ?>


                                      </select>
                                      <select name="mesfijo" id="mes" class="selectigual">
                                          <option></option>
                                        <?php foreach ($date as $item) : ?>

                                              <option value="{{$item->mm}}">{{$item->mm}}</option>

                                        <?php endforeach ?>
                                      </select>
                                  </div>

                                    <input type="text" name="inst" id="inst" placeholder="Institución" class="inputt-48"/>
                                    <select name="mar_espc" id="" class="inputt-48">
                                        <option value="marco_name">Marco</option>
                                        <option value="espec_name">Específico</option>
                                    </select>
                                    <button name='buscar' value="BUSCAR" class="btnenviar" class="input-100 as" title="Presione para Buscar" id="btn1">Buscar</button>


                                </div>


                        </div>
                    </div>


                </div>

                @php
                  $pag = true;
                @endphp
@endsection

@section('after-scripts')
    <script src="js/custom.js"></script>

    <script>
      $(function() {

            $("[name='buscar']").click(function () {
              var id = $("[name='inst']").val();
              $.ajax({
                  url: '{{url('/pagina/index/buscar')}}' + '/'+id+'/anofijo',

                  success:function (detalles) {
                        $("[name='conv']").empty();

                        for (var i = 0; i < detalles.length; i++) {

                          $("[name='conv']").append('<h4>'+ detalles[i].nro_resol  +'</h4>');
                          $("[name='conv']").append('<p>'+ detalles[i].finalidad  +'</p>');
                        }
                  }

              });
          });

      });
  </script>
@stop

@section('seccction2')
<div class="container-fluid features" id="section2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center features-text">Lista de Convenios</h2>

                            <div class="all-jobs job-listing clearfix">

                            <div class="job-tab " name="rw">
                                <div class="row">


                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="badge freelancer-badge">Convenio</div>
                                        <h6 name='f'></h6>
                                        <small>
                                            <span>Publisher : <a href="#">Amanda Sun</a></span>
                                            <span>In : <a href="#">Development</a></span>
                                            <span>Date : 21.06.2016</span>
                                        </small>
                                    </div><!-- end col -->

                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <div class="job-meta">
                                            <p>Melbourne</p>
                                            <small>Australia</small>
                                        </div><!-- end meta -->
                                    </div><!-- end col -->

                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <div class="job-meta">
                                            <p>Melbourne</p>
                                            <small>Australia</small>
                                        </div><!-- end meta -->
                                    </div><!-- end col -->

                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <div class="job-meta text-center">
                                            <h4>$1200 - $1300</h4>
                                            <a href="#" class="btn btn-primary btn-sm btn-block">Make Offer</a>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end job-tab -->
                                    </div><!-- end alljobs -->
                            <div class="col-md-12 col-sm-12 col-xs-12 icon-box">


                                <div class="col-md-10 col-md-offset-1 col-sm-10 col-xs-12 icon-text-box">
                                  <div name='conv'>

                                  </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="modal fade" id="loginmodal" tabindex="-1" role="dialog">
                <div class="modal-dialog">

                        <button type="button" class="close closebtn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="panel-body">

                            {{ Form::open(['route' => 'frontend.auth.login.post', 'class' => 'form-horizontal']) }}

                            <div class="form-group">
                                {{ Form::label('email', 'Correo electronico' , ['class' => 'col-md-4 control-label']) }}
                                <div class="col-md-6">
                                    {{ Form::email('email', null, ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('validation.attributes.frontend.email')]) }}
                                </div><!--col-md-6-->
                            </div><!--form-group-->

                            <div class="form-group">
                                {{ Form::label('password', 'Contraseña', ['class' => 'col-md-4 control-label']) }}
                                <div class="col-md-6">
                                    {{ Form::password('password', ['class' => 'form-control', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.password')]) }}
                                </div><!--col-md-6-->
                            </div><!--form-group-->

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            {{ Form::checkbox('remember') }} {{ 'Recuerdame' }}
                                        </label>
                                    </div>
                                </div><!--col-md-6-->
                            </div><!--form-group-->

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    {{ Form::submit(trans('labels.frontend.auth.login_button'), ['class' => 'btn btn-primary', 'style' => 'margin-right:15px']) }}

                                    {{ link_to_route('frontend.auth.password.reset', 'Olvidaste tu contraseña') }}
                                </div><!--col-md-6-->
                            </div><!--form-group-->

                            {{ Form::close() }}


                        </div><!-- panel body -->

                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->



@endsection


@section('after-scripts')


  <script>
  $(function () {
    $("[name='buscar']").click(function () {
      var id = $("[name='NumResol']").val();
      //alert("probando");
      $.ajax({
          url: '{{url('/pagina/index/buscar')}}' + '/'+id+'/anofijo',

          success:function (detalles) {
                $("[name='list2']").empty();

                for (var i = 0; i < detalles.length; i++) {
                  $("[name='rw']").append('  <div class="row">');
                  $("[name='f']").append('<a>'+'detalles[i].finalidad'+'</a>');

                  $("[name='rw']").append('  <div class="row">');
                  $("[name='list2']").append('<td class="nro_resol">'+detalles[i].nro_resol+'</td>');
                  $("[name='list2']").append('<td class="vigencia">'+detalles[i].vigencia_fn+'</td>');
                  $("[name='list2']").append('<td class="finalidad">'+detalles[i].finalidad+'</td>');
                  $("[name='list2']").append('<td class="inst_conv">'+detalles[i].inst_conv+'</td>');
                  $("[name='rw']").append('</div>');
                }
          }

      });
    });
  });
</script>
@stop















<script>

    $(function () {
      $("[name='buscar']").click(function () {
        alert('as')
        var id = $("[name='NumResol']").val();
        //alert("probando");
        $.ajax({
            url: '{{url('/pagina/index/buscar')}}' + '/'+id+'/anofijo',

            success:function (detalles) {
                  $("[name='list2']").empty();

                  for (var i = 0; i < detalles.length; i++) {
                    $("[name='list2']").append('<div class="job-tab"> <div class="row"> <div class="col-md-6 col-sm-6 col-xs-12">');

                    $("[name='list2']").append('<div class="badge freelancer-badge">'+detalles[i].nro_resol+'</div>');
                   $("[name='list2']").append('<h5>'+detalles[i].finalidad+'</h5>');
                     $("[name='list2']").append('<small>');
                    //
                     $("[name='list2']").append('<span>Publisher :'+detalles[i].vigencia_fn+'</span>');
                    $("[name='list2']").append('<span>In :'+detalles[i].vigencia_fn+'</span>');
                    $("[name='list2']").append('<span>Publisher :'+detalles[i].vigencia_fn+'</span>');
                    //
                     $("[name='list2']").append('</small>');
                     $("[name='list2']").append('</div><!-- end col -->');
                    //
                    //
                    $("[name='list2']").append('<div class="col-md-2 col-sm-2 col-xs-12"><div class="job-meta">');
                     $("[name='list2']").append('<p>'+detalles[i].nro_resol+'</p>');
                     $("[name='list2']").append('<small>'+detalles[i].inst_conv+'</small>');
                    $("[name='list2']").append('  </div></div><!-- end col -->');
                    //
                    $("[name='list2']").append('<div class="col-md-2 col-sm-2 col-xs-12"><div class="job-meta">');
                    $("[name='list2']").append('<p>'+detalles[i].nro_resol+'</p>');
                    $("[name='list2']").append('<small>'+detalles[i].inst_conv+'</small>');
                    $("[name='list2']").append('  </div></div><!-- end col -->');

                    $("[name='list2']").append('<div class="col-md-2 col-sm-2 col-xs-12"><div class="job-meta text-center">');
                    $("[name='list2']").append('<h4>'+detalles[i].vigencia_fn+' - '+detalles[i].vigencia_fn+'</h4>');
                    $("[name='list2']").append('<a href="#" class="btn btn-primary btn-sm btn-block">Make Offer</a>');
                    $("[name='list2']").append('  </div></div><!-- end col -->');

                    $("[name='list2']").append('</div>');
                    $("[name='list2']").append('</div>');
                  }
            }

        });
      });

    });
  </script>








  $("[name='list2']").append('<div class="job-tab"> <div class="row"> <div class="col-md-6 col-sm-6 col-xs-12"><div class="badge freelancer-badge">'+detalles[i].nro_resol+'</div>
  <h5>'+detalles[i].finalidad+'</h5><span>Publisher :'+detalles[i].vigencia_fn+'</span>
  <small><span>Publisher :'+detalles[i].vigencia_fn+'</span></small></div>
  <div class="col-md-2 col-sm-2 col-xs-12"><div class="job-meta"><p>'+detalles[i].nro_resol+'</p> <small>'+detalles[i].inst_conv+'</small></div></div>
  <div class="col-md-2 col-sm-2 col-xs-12"><div class="job-meta"><p>'+detalles[i].nro_resol+'</p><small>'+detalles[i].inst_conv+'</small></div></div><!-- end col -->

<div class="col-md-2 col-sm-2 col-xs-12"><div class="job-meta text-center"><h4>'+detalles[i].vigencia_fn+' - '+detalles[i].vigencia_fn+'</h4><a href="#" class="btn btn-primary btn-sm btn-block">Make Offer</a></div></div><!-- end col -->

  </div>
  </div>)';
