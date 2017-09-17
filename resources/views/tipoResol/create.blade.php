@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo Tipo Resolucion</div>
                    <div class="panel-body">

                        {!! Form::open(['url' => '/tipo/resolucion', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('tipoResol.form')

                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-4">

                                <a href="{{ url('tipo/resolucion') }}" class="btn btn-warning">Cancelar</a>

                                {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Guardar resolucion', ['class' => 'btn btn-primary']) !!}

                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
