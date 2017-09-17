@extends('backend.layouts.app')

@section('after-styles')
    {{ Html::style("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.css") }}
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Tipo Convenio</div>
                    <div class="panel-body">

                        <a href="{{ url('/tipo/convenio/create') }}" class="btn btn-primary btn-xs" title="Add New Resolucion"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                    </div>
                      <div class="box-body">
                        <div class="table-responsive">
                            <table id="users-table" class="table table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>ID</th>
                                        <th> Nombre </th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($tipoConv as $item)
                                    <tr>
                                        <td class="btn btn-info details-control" style="cursor:pointer">+</td>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nomb_tipo_conv1 }}</td>

                                        <td>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $tipoConv->render() !!} </div>
                          </div><!--table-responsive-->
                      </div><!-- /.box-body -->

                </div>
            </div>
        </div>
    </div>
@endsection
@section('after-scripts')
    {{ Html::script('plugins/listjs/list.min.js') }}
    {{ Html::script("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.js") }}
    <script>
        $(function () {
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
              //     {data: 'id', name: '{{config('access.users_table')}}.id'},
              //     {data: 'first_name', name: '{{config('access.users_table')}}.first_name'},
              //     {data: 'last_name', name: '{{config('access.users_table')}}.last_name'},
              //     {data: 'email', name: '{{config('access.users_table')}}.email'},
              //     {data: 'confirmed', name: '{{config('access.users_table')}}.confirmed'},
              //     {data: 'roles', name: '{{config('access.roles_table')}}.name', sortable: false},
              //     {data: 'created_at', name: '{{config('access.users_table')}}.created_at'},
              //     {data: 'updated_at', name: '{{config('access.users_table')}}.updated_at'},
              //     {data: 'actions', name: 'actions', searchable: false, sortable: false}
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


            $('#users_table').on('click', '.details-control', function () {
                alert("asd")
                var tr = $(this).closest('tr').next().toggle('fast');
                var row = table.row( tr );

                if ( row.child.isShown() ) {
                    // This row is already open - close it
                    row.child.hide();
                }
                else {
                    // Open this row
                    alert("asdas");
                    format(row.child);

                }
            } );
        });
    </script>
@stop
