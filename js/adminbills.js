//triggered when modal is about to be shown
    $('#editClient').on('show.bs.modal', function(e) {

        //get data attribute of the clicked element
        var id = $(e.relatedTarget).data('id');
        var name = $(e.relatedTarget).data('name');
        var lastName = $(e.relatedTarget).data('last');
        var address = $(e.relatedTarget).data('address');
        var zone = $(e.relatedTarget).data('zone');
        var phone = $(e.relatedTarget).data('phone');
    
        //populate the textbox
        $(e.currentTarget).find('input[name="id"]').val(id);
        $(e.currentTarget).find('input[name="lastName"]').val(lastName);
        $(e.currentTarget).find('input[name="name"]').val(name);
        $(e.currentTarget).find('input[name="address"]').val(address);
        $(e.currentTarget).find('input[name="zone"]').val(zone);
        $(e.currentTarget).find('input[name="phone"]').val(phone);
    });
//triggered when modal is about to be shown

//Turn table into a datatable
    $(document).ready(function() {
        var collapsedGroups = {};
        var table = $("#tableBills").DataTable({
            dom: 'lBfrtip',
            fixedHeader: true,
            responsive: true,
            pageLength: 25,
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
            order:[[0,'desc']],
            rowGroup: {
                dataSrc: 0,
                startRender:  function ( rows, group ) {
                    var collapsed = !!collapsedGroups[group];
                    rows.nodes().each(function (r) {
                        r.style.display = collapsed ? 'none' : '';
                    });    
                    
                    var toggleClass = collapsed ? 'fa fa-plus-square' : 'fa fa-minus-square';
                    
                    // Add category name to the <tr>.
                    return $('<tr/>')
                        .append('<td colspan="'+rows.columns()[0].length+'" class="lightcolor">' + '<span class="fa fa-fw ' + toggleClass + ' toggler"/> ' + "Factura: " + group + ' (' + rows.count() + ' articulo/s) ' + ' <a href="core/controllers/deletebill.controller.php?id='+group+'"><i class="fa fa-trash" aria-hidden="true"></i></a>' + " " + ' <a href="?view=selling&id='+group+'" target="blank"><i class="fa fa-pencil" aria-hidden="true"></i></a> </td>')
                        .attr('data-name', group)
                        .toggleClass('collapsed', collapsed);
                },
                endRender: null
                
            }
        });

        $('#tableBills tbody').on('click', 'tr.dtrg-start', function () {
            var name = $(this).data('name');
            collapsedGroups[name] = !collapsedGroups[name];
            table.draw(false);
        });
    });
//Turn table into a datatable