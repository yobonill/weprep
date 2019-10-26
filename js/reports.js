$(document).ready(function() {
    //Selling and Delivery Table
        var collapsedGroups = {};
        var table = $("#tableReports").DataTable({
            dom: 'lBfrtip',
            fixedHeader: true,
            pageLength: 25,
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
            responsive: true,
            order:[[1,'asc']],
            rowGroup: {
                dataSrc: 1,
                startRender:  function ( rows, group ) {
                    var collapsed = !!collapsedGroups[group];
                    rows.nodes().each(function (r) {
                        r.style.display = collapsed ? 'none' : '';
                    });    

                    var toggleClass = collapsed ? 'fa fa-plus-square' : 'fa fa-minus-square';

                    // Add category name to the <tr>.
                    return $('<tr/>')
                        .append('<td colspan="'+rows.columns()[0].length+'" class="lightcolor">' + '<span class="fa fa-fw ' + toggleClass + ' toggler"/> ' + group + ' (' + rows.count() + ' articulo/s )</td>')
                        .attr('data-name', group)
                        .toggleClass('collapsed', collapsed);
                },
                endRender: null
                
            }
        });

        $('#tableReports tbody').on('click', 'tr.dtrg-start', function () {
            var name = $(this).data('name');
            collapsedGroups[name] = !collapsedGroups[name];
            table.draw(false);
        });
    //Selling and Delivery Table

    //By Products Table
        var table = $("#tableReports2").DataTable({
            dom: 'lBfrtip',
            fixedHeader: true,
            pageLength: 25,
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
            responsive: true
        });
    //By Products Table
});
