@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Convenio {{ $convenio->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('convenio/convenios/' . $convenio->id . '/edit') }}" class="btn btn-primary btn-xs" title="Editar convenio"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['convenio/convenios', $convenio->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Borrar convenio',
                                    'onclick'=>'return confirm("Confirmar?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $convenio->id }}</td>
                                    </tr>
                                    <tr><th>Num. Resol</th><td> {{ $convenio->nro_resol }} </td></tr>
                                    <tr><th>Fecha Ini.</th><td> {{ $convenio->vigencia_in }} </td></tr>
                                    <tr><th>Fecha Fin.</th><td> {{ $convenio->vigencia_fn }} </td></tr>
                                    <tr><th>Finalidad</th><td> {{ $convenio->finalidad }} </td></tr>
                                    <tr><th>Instituto Conv.</th><td> {{ $convenio->inst_conv }} </td></tr>
                                    <tr><th>Tipo Conv.</th><td> {{ $tipo_conv->nomb_tipo_conv1 }} </td></tr>
                                    <tr><th>Programa</th><td> {{ $convenio->programa }} </td></tr>
                                    <tr><th>Fecha Resolucion</th><td> {{ $convenio->fecha_resol }} </td></tr>
                                    <tr><th>Tipo Resol.</th><td> {{ $tipo_resol->nombr_tipo_resol }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
