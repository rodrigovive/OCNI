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
                            <!-- <div class="row">
                                <div class="col-md-4 pull-right">
                                    <input class="search form-control" placeholder="Filtrar Resultados" />
                                </div>
                            </div> -->

                            <table id="users-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>

                                        <th>Num. Resol</th>
                                        <th>Fecha Ini.</th>
                                        <th>Fecha Fin.</th>
                                        <th>Finalidad</th>
                                        <!-- <th>Tipo Resol.</th> -->
                                        <th>Instituto Conv.</th>
                                        <th>Fecha Resol.</th>
                                        <th>Tipo Resol.</th>

                                        <th>Programa</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody >
                                @foreach($convenios as $item)
                                    <tr>
                                        
                                        <td class="nro_resol">{{ $item->nro_resol }}</td>
                                        <td class="vigencia">{{ date('Y-m-d', strtotime($item->vigencia_fn)) }}</td>
                                        <td class="vigencia">{{ date('Y-m-d', strtotime($item->vigencia_in)) }}</td>
                                        <td class="finalidad">{{ $item->finalidad }}</td>
                                        <!-- <td class="tipo_resol">{{ $item->tipo_resol }}<</td> -->
                                        <td class="inst_conv">{{ $item->inst_conv }}</td>
                                        <td class="fecha_resol">{{ $item->fecha_resol }}</td>
                                        <td class="tipo_resol">{{ $item->nombr_tipo_resol}}</td>
                                        <td class="programa">{{ $item->programa }}</td>
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
            // $(".detalle").click(function() {
            //   $(this).closest("tr").next().toggle('fast');
            //   if($(this).text() == ' + ')
            //     $(this).text(' + ');
            //   else
            //     $(this).text(' + ');
            // });
             $('#users-table').DataTable({
               "language": {
                   "sProcessing":     "Procesando...",
                   "sLengthMenu":     "Mostrar _MENU_ registros",
                   "sZeroRecords":    "No se encontraron resultados",
                   "sEmptyTable":     "Ningún dato disponible en esta tabla",
                   "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                   "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                   "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                   "sInfoPostFix":    "",
                   "sSearch":         "Buscar:",
                   "sUrl":            "",
                   "sInfoThousands":  ",",
                   "sLoadingRecords": "Cargando...",
                   "oPaginate": {
                       "sFirst":    "Primero",
                       "sLast":     "Último",
                       "sNext":     "Siguiente",
                       "sPrevious": "Anterior"
                   },
                   "oAria": {
                       "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                       "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                   }
                 }
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

            function format ( d ) {
            // `d` is the original data object for the row
              return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
                  '<tr>'+
                      '<td>Full name:</td>'+
                      '<td>'+'d.name'+'</td>'+
                  '</tr>'+
                  '<tr>'+
                      '<td>Extension number:</td>'+
                      '<td>'+'d.extn'+'</td>'+
                  '</tr>'+
                  '<tr>'+
                      '<td>Extra info:</td>'+
                      '<td>And any further details here (images etc)...</td>'+
                  '</tr>'+
              '</table>';
            }

            // Add event listener for opening and closing details
            $('#users_table').on('click', 'td.detalle', function () {
                alert("ads")
                var tr = $(this).closest('tr');
                var row = table.row( tr );

                if ( row.child.isShown() ) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                }
                else {
                    // Open this row
                    row.child( format(row.data()) ).show();
                    tr.addClass('shown');
                }
            } );
        });


    </script>
@stop
