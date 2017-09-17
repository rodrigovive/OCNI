@extends('backend.layouts.app')

@section('after-styles')

@stop

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar convenio {{ $convenio->id }}</div>
                    <div class="panel-body">

                        {!! Form::model($convenio, [
                            'method' => 'PATCH',
                            'url' => ['/convenio/convenios', $convenio->id],
                            'class' => 'form-horizontal',
                            'id' => 'convenio-form',
                            'files' => true
                        ]) !!}

                        @include ('convenios.form')


                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-4">

                                <a href="{{ url('convenio/convenios') }}" class="btn btn-warning">Cancelar</a>

                                {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Guardar convenio', ['class' => 'btn btn-primary']) !!}

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
