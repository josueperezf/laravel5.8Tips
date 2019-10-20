@extends('template.app')
@section('contenido')
<a class='btn btn-info' href="{{route('pdf.users')}}" >Descargar PDF usuarios</a>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
</table>
@endsection()
@section('script')
<script >
$('#example').DataTable( {
    "processing": true,
    "serverSide": true,
    ajax: {
        url: '/laravel5.8Tips/public/api/datatable/indexAjax',
        type: 'POST',
    },
    columns: [
            {data: 'id'},
            {data: 'name'},
            {data: 'email'},
            {data: 'btn'}
        ],
        "language": {
                        "info": "_TOTAL_ registros",
                        "search": "Buscar",
                        "paginate": {
                            "next": "Siguiente",
                            "previous": "Anterior",
                        },
                        "lengthMenu": 'Mostrar <select >'+
                                    '<option value="10">10</option>'+
                                    '<option value="30">30</option>'+
                                    '<option value="-1">Todos</option>'+
                                    '</select> registros',
                        "loadingRecords": "Cargando...",
                        "processing": "Procesando...",
                        "emptyTable": "No hay datos",
                        "zeroRecords": "No hay coincidencias", 
                        "infoEmpty": "",
                        "infoFiltered": ""
                    }
} );
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">


@endsection()
