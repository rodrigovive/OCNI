@extends('backend.layouts.app')

@section('after-styles')
    {{ Html::style("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.css") }}
@endsection

@section('content')

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Convenios</div>
                    <div class="panel-body">

                        <a href="{{ url('/convenio/convenios/create') }}" class="btn btn-primary btn-xs" title="Nuevo Convenio"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>

                        <div id="convenios">
                            <div class="row">
                                <div class="col-md-4 pull-right">
                                    <input class="search form-control" placeholder="Filtrar Resultados" />
                                </div>
                            </div>

                            <table id="users-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Num. Resol</th>
                                        <th>Fecha Ini.</th>
                                        <th>Fecha Fin.</th>
                                        <th>Finalidad</th>
                                        <!-- <th>Tipo Resol.</th> -->
                                        <th>Instituto Conv.</th>
                                    </tr>
                                </thead>
                                <tbody >
                                @foreach($convenios as $item)
                                    <tr>
                                        <td><span class="btn btn-info detalle"> + </span></td>
                                        <td class="nro_resol">{{ $item->nro_resol }}</td>
                                        <td class="vigencia">{{ date('Y-m-d', strtotime($item->vigencia_fn)) }}</td>
                                        <td class="vigencia">{{ date('Y-m-d', strtotime($item->vigencia_in)) }}</td>
                                        <td class="finalidad">{{ $item->finalidad }}</td>
                                        <!-- <td class="tipo_resol">{{ $item->tipo_resol }}<</td> -->
                                        <td class="inst_conv">{{ $item->inst_conv }}</td>

                                        <td>
                                            <a href="{{ url('/convenio/convenios/' . $item->id) }}" class="btn btn-success btn-xs" title="Ver Convenio"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/convenio/convenios/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Editar Convenio"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/convenio/convenios', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}

                                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Deshabilitar Convenio" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Deshabilitar Convenio',
                                                        'onclick'=>'return confirm("Confirmar?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>

                                    <tr class="detallescompra">
                                        <td colspan="9">
                                            <table class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <th>Fecha Resol.</th>
                                                    <th>Tipo Resol.</th>
                                                    <th>Tipo Convenio</th>
                                                    <th>Programa</th>
                                                    <th>URL</th>
                                                </thead>
                                                <tr colspan="9">
                                                    <td class="fecha_resol">{{ $item->fecha_resol }}</td>
                                                    <td class="tipo_resol">{{ $item->nombr_tipo_resol}}</td>
                                                    <td class="tipo_conv">{{ $item->nomb_tipo_conv1}}</td>
                                                    <td class="programa">{{ $item->programa }}</td>
                                                    <td> <a href="{{ url('http://www.unjbg.edu.pe/resoluciones/pdf/rr22262017.pdf')}}" class="btn btn-success btn-xs" title="Ver PDF"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a></td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>


                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('after-scripts')
    {{ Html::script('plugins/listjs/list.min.js') }}
    {{ Html::script("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.js") }}
    <script>
        /* show / hide order details */

        $(function () {


            $(".detalle").click(function() {
              $(this).closest("tr").next().toggle('fast');
              if($(this).text() == ' + ')
                $(this).text(' + ');
              else
                $(this).text(' + ');
            });
            $('#users-table').DataTable({

                // processing: true,
                // serverSide: true,
                // ajax: {
                //     url: '{{ route("admin.access.user.get") }}',
                //     type: 'post',
                //     data: {status: 1, trashed: false}
                // },
                // columns: [
                //     {data: 'id', name: 'convenio.id'},
                //     {data: 'first_name', name: 'convenio.nro_resol'},
                //     {data: 'last_name', name: '{{config('access.users_table')}}.last_name'},
                //     {data: 'email', name: '{{config('access.users_table')}}.email'},
                //     {data: 'confirmed', name: '{{config('access.users_table')}}.confirmed'}
                // ],
                // order: [[0, "asc"]],
                // searchDelay: 500
            });
        });
    </script>
@stop
