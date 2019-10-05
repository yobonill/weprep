//Add products to cart
    $(".btn-product").on("click", function() {
        //Get name from button text and assign it to variable
        var nombre = $.trim($(this).text());

        //Get price from hidden input created with each product button
        var precio = $("#"+nombre).val();

        //Check if table row for a specific button is already created, this can be done because when creating the first td, it has a class assigned with the product name. 
        if($("."+nombre).length) {
            //If it exist select the values in the price input and sum the price to it, and sum 1 to the quantity input
            $("."+precio).text(parseInt($("."+precio).text(), 10) + parseInt(precio, 10));
            $("."+nombre+"cantidad").val(parseInt($("."+nombre+"cantidad").val(), 10) + 1);
        } else {
            //If it does not exist, create the td with the below info
            $('#cartTable tr:last').after('<tr><td class="'+nombre+'">'+nombre+'</td><td class="'+precio+'">'+precio+'</td><td><input type="number" name="'+nombre+'" class="form-control '+nombre+'cantidad test" value="1"><td class="'+nombre+'total">'+precio * 1+'</td><td><input type="number" name="'+nombre+'comentario" class="form-control '+nombre+'comentario" value=""></td></tr>');
        }
    });
//Add products to cart

//Add datatable functionalities to Cart Table
    $(document).ready(function () {
        $('#inputdate').datepicker({
            multidate: true,
            daysOfWeekDisabled: [0, 6],
            clearBtn: true,
            todayHighlight: true,
            daysOfWeekHighlighted: [1, 2, 3, 4, 5]
        });
    });
//Add datatable functionalities to Cart Table

