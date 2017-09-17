@extends('backend.layouts.app')

@section('after-styles')

@stop

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo Convenio</div>
                    <div class="panel-body">

                        {!! Form::open(['url' => '/convenio/convenios', 'class' => 'form-horizontal', 'files' => true, 'id' => 'convenio-form']) !!}

                        @include ('convenios.form')

                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-4">

                                <a href="{{ url('convenio/convenios') }}" class="btn btn-warning">Cancelar</a>

                                {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Guardar Convenio', ['class' => 'btn btn-primary']) !!}

                            </div>
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
@endsection

@section('after-scripts')

@stop
