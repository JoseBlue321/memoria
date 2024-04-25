<script>
    $(document).ready(function () {
    $('#proyectos').DataTable({
        "language": {
        "lengthMenu": "Mostrar _MENU_ registros por página",
        "zeroRecords": "No se encontraron registros - disculpa",
        "info": "Mostrando la pagina _PAGE_ de _PAGES_",
        "infoEmpty": "No records available",
        "infoFiltered": "(filtrado de _MAX_ registros totales)",
        "search": "Buscar:",
        'paginate': {
            'next': 'Siguiente',
            'previous' : 'Anterior'
        }
    },
    "pageLength": 6
});

});
</script>