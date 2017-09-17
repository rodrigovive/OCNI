@extends('frontend.layouts.app')

@section('content')


<div class="panel-body">
            <div class="container-fluid main" id="page-top">
            <div class="row">
              <div class="col-md-12">

                <div class="row">

                    <div class="col-md-4">
                        <div class="block_programa">
                            {!! Form::label('Num Resol', 'Num. Resol', ['class' => 'control-label']) !!}

                            {!! Form::text('NumResol', null, ['class' => 'form-control']) !!}

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="block_tipo">
                            {!! Form::label('tipo_conv', 'Tipo Conv.', ['class' => 'control-label']) !!}

                            <select name="tipo_conv2" id="select_conv" class="form-control">
                                  <option></option>
                                      <?php foreach ($tipo_conv as $item) : ?>

                                            <option value="{{$item->id}}">{{$item->nomb_tipo_conv1}}</option>

                                      <?php endforeach ?>
                            </select>
                            <!-- {!! Form::text('tipo_conv', null, ['class' => 'form-control']) !!} -->

                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="block_tipo">

                            {!! Form::label('tipo_resol', 'Tipo Resol.', ['class' => 'control-label']) !!}
                            <select name='tipo_resol2' id="select_resol" class="form-control">
                                  <option></option>
                                        <?php foreach ($tipo_resol as $item) : ?>

                                            <option value="<?php echo $item->id ?>"><?php echo $item->nombr_tipo_resol ?></option>

                                        <?php endforeach ?>
                                  </select>
                            <!-- {!! Form::text('tipo_resol', null, ['class' => 'form-control']) !!} -->

                        </div>
                    </div>

                </div>

                <div class="row">
                  <select class="itemName form-control .placeSelect2" name="placeSelect2" id="placeSelect2"></select>
                </div>

                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon2"><i class="fa fa-search"></i></span>
                    <input type="text" id="m" name="finalidad"class="form-control" placeholder="Buscar Convenio" aria-describedby="basic-addon2">
                </div>


                      <!--
                <div class="col-md-4 col-md-offset-4 inner col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">-->

              </div>

            </div>
          </div>

          <div class="form-group">
              <div class="col-md-offset-4 col-md-4 text-center">

              <button name='buscar' value="BUSCAR" class="btn btn-primary buscar-tabla" title="Presione para Buscar">Buscar Convenio</button>

              </div>
          </div>

      <hr>
      <table id="mp-convenios" class="table table-striped table-bordered table-hover">
          <thead>
              <tr>
                  <th>Num. Resol</th>
                  <th>Fecha Fin.</th>
                  <th>Finalidad</th>
                  <!-- <th>Tipo Resol.</th> -->
                  <th>Instituto Conv.</th>
              </tr>
          </thead>
          <tbody class="list" name='list2'>


          </tbody>
      </table>
    </div>
@endsection

@section('after-scripts')
{{ Html::script('js/jquery.js') }}
{{ Html::script('js/EasyAutocomplete/dist/jquery.easy-autocomplete.min.js') }}

{{ Html::script('js/jquery-ui.min.js') }}

  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
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
                      $("[name='list2']").append('<tr>');
                      $("[name='list2']").append('<td class="nro_resol">'+detalles[i].nro_resol+'</td>');
                      $("[name='list2']").append('<td class="vigencia">'+detalles[i].vigencia_fn+'</td>');
                      $("[name='list2']").append('<td class="finalidad">'+detalles[i].finalidad+'</td>');
                      $("[name='list2']").append('<td class="inst_conv">'+detalles[i].inst_conv+'</td>');
                      $("[name='list2']").append('</tr>');
                    }
              }

          });
        });
        $("[name='tipo_resol2']").change(function () {
               var id = $(this).val();

             $.ajax({
                 url: '{{url('/pagina/index/buscar')}}' + '/'+id+'/resol',
                 success:function (detalles) {
                       $("[name='list2']").empty();

                       for (var i = 0; i < detalles.length; i++) {
                         $("[name='list2']").append('<tr>');
                         $("[name='list2']").append('<td class="nro_resol">'+detalles[i].nro_resol+'</td>');
                         $("[name='list2']").append('<td class="vigencia">'+detalles[i].vigencia_fn+'</td>');
                         $("[name='list2']").append('<td class="finalidad">'+detalles[i].finalidad+'</td>');
                         $("[name='list2']").append('<td class="inst_conv">'+detalles[i].inst_conv+'</td>');
                         $("[name='list2']").append('</tr>');
                       }
                 }

             });
          });
          $("[name='tipo_conv2']").change(function () {
                 var id = $(this).val();

               $.ajax({
                   url: '{{url('/pagina/index/buscar')}}' + '/'+id+'/conv',
                   success:function (detalles) {
                         $("[name='list2']").empty();

                         for (var i = 0; i < detalles.length; i++) {
                           $("[name='list2']").append('<tr>');
                           $("[name='list2']").append('<td class="nro_resol">'+detalles[i].nro_resol+'</td>');
                           $("[name='list2']").append('<td class="vigencia">'+detalles[i].vigencia_fn+'</td>');
                           $("[name='list2']").append('<td class="finalidad">'+detalles[i].finalidad+'</td>');
                           $("[name='list2']").append('<td class="inst_conv">'+detalles[i].inst_conv+'</td>');
                           $("[name='list2']").append('</tr>');
                         }
                   }

               });
            });

            $('#placeSelect2').select2({
              placeholder: 'Select an item',
                      ajax: {
                        url: '/pagina/index/buscar/puno/resol',
                        dataType: 'json',
                        delay: 250,
                        processResults: function (data) {
                          return {
                            results:  $.map(data, function (item) {
                                  return {
                                      text: item.inst_conv,
                                      id: item.id
                                  }
                              })
                          };
                        },
                        cache: true
                      }

            });

            $("#m").autocomplete({

              source: "/pagina/index/buscar/puno/resol",
          	  select: function(event, ui) {
          	  	$("#m").val(ui.item.value);
          	  }
            });

      });
    </script>
  @stop
