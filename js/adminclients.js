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

//Turn table into a datatable
    $(document).ready(function() {
        $("#tableClients").DataTable({
            dom: 'lBfrtip',
            fixedHeader: true,
            responsive: true
        });
    });
//Turn table into a datatable