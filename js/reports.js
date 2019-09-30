//Reports View
    $(document).ready(function() {
        var collapsedGroups = {};
        $("#tableReports").DataTable({
            dom: 'lBfrtip',
            fixedHeader: true,
            responsive: true,
            order:[[0,'asc']],
            rowGroup: {
                dataSrc: 0,
                startRender:  function ( rows, group ) {
                    var collapsed = !!collapsedGroups[group];

                    rows.nodes().each(function (r) {
                        r.style.display = collapsed ? 'none' : '';
                    });    

                    var toggleClass = collapsed ? 'fa-plus-square' : 'fa-minus-square';

                    // Add category name to the <tr>.
                    return $('<tr/>')
                        .append('<td colspan="'+rows.columns()[0].length+'">' + group + ' (' + rows.count() + ')</td>')
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
    });
//Reports View