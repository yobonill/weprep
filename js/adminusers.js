//triggered when modal is about to be shown
$('#editUser').on('show.bs.modal', function(e) {

    //get data attribute of the clicked element
    var id = $(e.relatedTarget).data('id');
    var name = $(e.relatedTarget).data('name');
    var lastName = $(e.relatedTarget).data('last');
    var user = $(e.relatedTarget).data('user');
    var pass = $(e.relatedTarget).data('pass');
    var type = $(e.relatedTarget).data('type');

    //populate the textbox
    $(e.currentTarget).find('input[name="id"]').val(id);
    $(e.currentTarget).find('input[name="lastName"]').val(lastName);
    $(e.currentTarget).find('input[name="name"]').val(name);
    $(e.currentTarget).find('input[name="user"]').val(user);
    $(e.currentTarget).find('input[name="pass"]').val(pass);
    $(e.currentTarget).find('select[name="type"]').val(type);
    $(e.currentTarget).find('input[name="pass"]').val(pass);
});