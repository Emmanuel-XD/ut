$(document).ready( function () {
    $('#table_id').DataTable({
        language: {
            processing:     "Tratamiento en curso...",
            search:         "Buscar:" ,
            lengthMenu:    "Mostrando _MENU_ registros",
            info:           "Mostrando del registro _START_ al _END_ de un total de _TOTAL_ registro",
            infoEmpty:      "No existen registros",
            infoFiltered:   "(mostrando _MAX_ registros en total)",
            infoPostFix:    "",
            loadingRecords: "Cargando elementos...",
            zeroRecords:    "No se encontraron los datos de tu busqueda..",
            emptyTable:     "No hay ningun registro en la tabla",
            paginate: {
                first:      "Primero",
                previous:   "Anterior",
                next:       "Siguiente",
                last:       "Ultimo"
            },
            aria: {
                sortAscending:  ": Active para odernar en modo ascendente",
                sortDescending: ": Active para ordenar en modo descendente  ",
            }
}
    } );
} );
