$(function () {
    $('.js-basic-example').DataTable({
        responsive: true,
        dom: 'Bfrtip',
        buttons: [
            'excel'
        ]
    });

    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});