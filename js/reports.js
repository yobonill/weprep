//Reports View
$("#tableInventory").DataTable({
    dom: 'lBfrtip',
    fixedHeader: true,
    colReorder: true,
    responsive: true,
    buttons: [
        {
            extend: 'excelHtml5',
            title: $('.reportTitle').text(),
        },
        {
            extend: 'pdfHtml5',
            title: $('.reportTitle').text()
        }
    ]
});
//Reports View