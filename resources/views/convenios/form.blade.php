<div class="row">
    <div class="col-md-4">
        <div class="block_nro_resol">
            {!! Form::label('nro_resol', 'Num. Resol.', ['class' => 'control-label']) !!}
            {!! Form::text('nro_resol', null, ['class' => 'form-control']) !!}

        </div>
    </div>

    <div class="col-md-4">
        <div class="block_fech">
          {!! Form::label('fecha_resol', 'Fecha de Resol.', ['class' => 'control-label']) !!}

          {!! Form::date('fecha_resol', date('Y-m-d'), ['class' => 'form-control ']) !!}

        </div>
    </div>


    <div class="col-md-4">
        <div class="block_tipo">

            {!! Form::label('tipo_resol', 'Tipo Resol.', ['class' => 'control-label']) !!}
            <select name="tipo_resol" id="select_resol" class="form-control">
                  <option></option>
                        <?php foreach ($tipo_resol as $item) : ?>
                          @if (isset($convenio))
                            <option value="{{$item->id}}" {{$item->id==$convenio->tipo_resol? 'selected':''}}>{{$item->nombr_tipo_resol}}</option>
                          @else
                            <option value="<?php echo $item->id ?>"><?php echo $item->nombr_tipo_resol ?></option>
                          @endif
                        <?php endforeach ?>
                  </select>
            <!-- {!! Form::text('tipo_resol', null, ['class' => 'form-control']) !!} -->

        </div>
      </div>


</div>

<div class="row">

    <div class="col-md-4">
        <div class="block_programa">
            {!! Form::label('programa', 'Programa', ['class' => 'control-label']) !!}

            {!! Form::text('programa', null, ['class' => 'form-control']) !!}

        </div>
    </div>

    <div class="col-md-4">
        <div class="block_tipo">
            {!! Form::label('tipo_conv', 'Tipo Conv.', ['class' => 'control-label']) !!}

            <select name="tipo_conv" id="select_conv" class="form-control">
                  <option></option>
                      <?php foreach ($tipo_conv as $item) : ?>
                          @if (isset($convenio))
                            <option value="{{$item->id}}" {{$item->id==$convenio->tipo_conv? 'selected':''}}>{{$item->nomb_tipo_conv1}}</option>
                          @else
                            <option value="{{$item->id}}">{{$item->nomb_tipo_conv1}}</option>
                          @endif
                      <?php endforeach ?>
            </select>
            <!-- {!! Form::text('tipo_conv', null, ['class' => 'form-control']) !!} -->

        </div>
    </div>


    <div class="col-md-4">
        <div class="block_inst_conv">
            {!! Form::label('inst_conv', 'Inst. Conv.', ['class' => 'control-label']) !!}

            {!! Form::text('inst_conv', null, ['class' => 'form-control']) !!}

        </div>
    </div>

</div>


<div class="row">



        <div class="col-md-4">
            {!! Form::label('vigencia_in', 'Fecha de inicio', ['class' => 'control-label']) !!}

            {!! Form::date('vigencia_in', date('Y-m-d'), ['class' => 'form-control ']) !!}
        </div>

        <div class="col-md-4">
            {!! Form::label('vigencia_fn', 'Fecha final', ['class' => 'control-label']) !!}

            {!! Form::date('vigencia_fn', date('Y-m-d'), ['class' => 'form-control ']) !!}

        </div>


</div>

<div class="row">
  <div class="col-md-12">
    <div class="block_finalidad">

        {!! Form::label('finalidad', 'Finalidad', ['class' => 'control-label']) !!}

        {!! Form::textarea('finalidad', null, ['rows'=>5,'class' => 'form-control']) !!}

    </div>
  </div>
</div>
<hr>
