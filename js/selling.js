//Add products to cart
    var $counter = $('#cart-list-ul li').length;
    $('#counter').attr('value', $counter);
    $(".btn-product").on("click", function() {
        //Get name from button text and assign it to variable
        var nombre = $.trim($(this).text());
        //Get price from hidden input created with each product button
        var precio = $("#"+nombre).val();

        //Check if table row for a specific button is already created, this can be done because when creating the first td, it has a class assigned with the product name. 
        if($("."+nombre).length) {
            alert("works");
            //If it exist select the values in the price input and sum the price to it, and sum 1 to the quantity input
            $("."+precio).text(parseInt($("."+precio).text(), 10) + parseInt(precio, 10));
            $("."+nombre+"cantidad").val(parseInt($("."+nombre+"cantidad").val(), 10) + 1);
        } else {
            //If it does not exist, create the td with the below info
            $('#cartTable tr:last').after('<tr><td class="'+nombre+'">'+nombre+'</td><td class="'+precio+'">'+precio+'</td><td><input type="number" name="'+nombre+'" class="form-control '+nombre+'cantidad test" value="1"><td class="'+nombre+'total">'+precio * 1+'</td><td><input type="number" name="'+nombre+'comentario" class="form-control '+nombre+'comentario" value=""></td></tr>');
        }

        //Count Amount of items in the cart
            $counter = $counter + 1;
            $('#counter').attr('value', $counter);
        //Count Amount of items in the cart
    });
//Add products to cart

//Add datatable functionalities to Cart Table
    $(document).ready(function () {
        $('#inputdate').datepicker({
            multidate: true,
            format: 'yyyy-mm-dd',
            daysOfWeekDisabled: [0, 6],
            clearBtn: true,
            todayHighlight: true,
            startDate: new Date(),
            daysOfWeekHighlighted: [1, 2, 3, 4, 5]
        });
    });
//Add datatable functionalities to Cart Table

//Validate data in shopping cart is complete before submit
    $('#shoppingForm').validate({
        rules: {	
            inputdate: 'required',
            clientName: 'required'
        },
        messages: {
            inputdate: 'Campo Requerido',
            clientName: 'Campo Requerido'
        }
    });
//Validate data in shopping cart is complete before submit

//Prevent multiple press to checkout Button
    $(function(){
        $('#shoppingForm').submit(function(){
            if($("#shoppingForm").valid()) {
                $("button[type='submit']", this)
                .val("Please Wait...")
                .attr('disabled', 'disabled');
                return true;
            }
        });
    });
//Prevent multiple press to checkout Button