
@extends('frontend.layouts.app2')

@section('content')



<div class="row">
                <div class="col-md-12 backg">
                    <!--
                    <div class="col-md-4 col-md-offset-4 inner col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">-->
                        <div class="col-md-6 col-md-offset-3  col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">



                                <div class="form-register">
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
                            <h2 class="text-center features-text">Lista de Convenioss</h2>

                            <div class="all-jobs job-listing clearfix">

                            <div class="job-tab">
                                <div class="row">


                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="badge freelancer-badge">Convenio</div>
                                        <h2 ><a href="job-single.html" title="">Development Team Leaasd (Group Wide Technology)</a></h3>
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
                    <div class="modal-content">
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
