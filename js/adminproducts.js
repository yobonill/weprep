//triggered when modal is about to be shown
$('#editProduct').on('show.bs.modal', function(e) {

    //get data attribute of the clicked element
    var id = $(e.relatedTarget).data('id');
    var name = $(e.relatedTarget).data('name');
    var price = $(e.relatedTarget).data('price');

    //populate the textbox
    $(e.currentTarget).find('input[name="id"]').val(id);
    $(e.currentTarget).find('input[name="productName"]').val(name);
    $(e.currentTarget).find('input[name="productPrice"]').val(price);
});

//Turn table into a datatable
    $(document).ready(function() {
        $("#tableProducts").DataTable({
            dom: 'lBfrtip',
            fixedHeader: true,
            responsive: true
        });
    });
//Turn table into a datatable