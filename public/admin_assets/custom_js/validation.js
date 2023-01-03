//donnors validation
$(document).on("click","#submit",function(){
    var name = $('#name').val();
    var email = $('#email').val();
    var email_check = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var mobile_number = $('#mobile_number').val();
    var address = $('#address').val();
    var city = $('#city').val();
    var pin_code = $('#pin_code').val();
    var pan_number = $('#pan_number').val();
    if(name == '')
    {
        $("#name_error").html("* The Field is required.")
        setTimeout(function(){
            $("#name_error").html("")
        }, 3000);
    }
    else if(email == '')
    {
        $("#email_error").html("* Please Valid Email.")
        setTimeout(function(){
            $("#email_error").html("")
        }, 3000);
    }
    else if(email_check.test(email) == false)
	{
        $("#email_error").html("* Please Valid Email.")
        setTimeout(function(){
            $("#email_error").html("")
        }, 3000);
    }
    else if(mobile_number == '')
    {
        $("#mobile_error").html("*Please Enter Mobile Number")
        setTimeout(function(){
            $("#mobile_error").html("")
         } , 3000);
    }
    else if(mobile_number.length != 10)
    {
        $("#mobile_error").html("*Please Valid Mobile Number")
        setTimeout(function(){
            $("#mobile_error").html("")
         }   , 3000);
    }
    else if(address == '')
    {
        $("#address_error").html("* The Field is required.")
        setTimeout(function(){
            $("#address_error").html("")
        }, 3000);
    }
    else if(city == '')
    {
        $('#city_error').html("* The Field is required")
        setTimeout(function(){
            $("#city_error").html("")
        }, 3000);
    }
    else if(pin_code == '')
    {
        $('#pincode_error').html("* The Field is required")
        setTimeout(function(){
            $("#pincode_error").html("")
        }, 3000);
    }
    else if(pin_code.length != 6)
    {
        $('#pincode_error').html("* Please Currect Pin Code")
        setTimeout(function(){
            $("#pincode_error").html("")
        }, 3000);
    }
    else if(pan_number == '')
    {
        $('#pannumber_error').html("* The Field is required")
        setTimeout(function(){
            $("#pannumber_error").html("")
        }, 3000);
    }

});

// edit donnors
$(document).on("click","#submit",function(){
    var name = $('#edit_name').val();
    var email = $('#edit_email').val();
    var email_check = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var mobile_number = $('#edit_mobile_number').val();
    var address = $('#edit_address').val();
    var city = $('#edit_city').val();
    var pin_code = $('#edit_pin_code').val();
    var pan_number = $('#edit_pan_number').val();
    if(name == '')
    {
        $("#edit_name_error").html("* The Field is required.")
        setTimeout(function(){
            $("#edit_name_error").html("")
        }, 3000);
    }
    else if(email == '')
    {
        $("#edit_email_error").html("* Please Valid Email.")
        setTimeout(function(){
            $("#edit_email_error").html("")
        }, 3000);
    }
    else if(email_check.test(email) == false)
	{
        $("#edit_email_error").html("* Please Valid Email.")
        setTimeout(function(){
            $("#edit_email_error").html("")
        }, 3000);
    }
    else if(mobile_number == '')
    {
        $("#edit_mobile_error").html("*Please Enter Mobile Number")
        setTimeout(function(){
            $("#edit_mobile_error").html("")
         } , 3000);
    }
    else if(mobile_number.length != 10)
    {
        $("#edit_mobile_error").html("*Please Valid Mobile Number")
        setTimeout(function(){
            $("#edit_mobile_error").html("")
         }   , 3000);
    }
    else if(address == '')
    {
        $("#edit_address_error").html("* The Field is required.")
        setTimeout(function(){
            $("#edit_address_error").html("")
        }, 3000);
    }
    else if(city == '')
    {
        $('#edit_city_error').html("* The Field is required")
        setTimeout(function(){
            $("#edit_city_error").html("")
        }, 3000);
    }
    else if(pin_code == '')
    {
        $('#edit_pincode_error').html("* The Field is required")
        setTimeout(function(){
            $("#edit_pincode_error").html("")
        }, 3000);
    }
    else if(pin_code.length != 6)
    {
        $('#edit_pincode_error').html("* Please Currect Pin Code")
        setTimeout(function(){
            $("#edit_pincode_error").html("")
        }, 3000);
    }
    else if(pan_number == '')
    {
        $('#edit_pannumber_error').html("* The Field is required")
        setTimeout(function(){
            $("#edit_pannumber_error").html("")
        }, 3000);
    }

});

//subscription validation
$(document).on("click","#submit",function(){
    var donners = $('#donners').val();
    var amount = $('#amount').val();
    var duration_number = $('#duration_number').val();
    var duration = $('#duration').val();
    var emi = $('#emi').val();
    if(donners == '')
    {
        $("#donnor_error").html("* The Donnor's Field is required.")
        setTimeout(function(){
            $("#donnor_error").html("")
        }, 3000);
    }
    else if(amount == '')
    {
        $("#amount_error").html("* The Amount Field is required.")
        setTimeout(function(){
            $("#amount_error").html("")
        }, 3000);
    }
    else if(duration_number == '')
    {
        $("#dur_error").html("* The Field is required.")
        setTimeout(function(){
            $("#dur_error").html("")
        }, 3000);
    }
    else if(duration == '')
    {
        $("#duration_error").html("* The Field is required.")
        setTimeout(function(){
            $("#duration_error").html("")
        }, 3000);
    }
    else if(emi == '')
    {
        $('#emi_error').html("* The Installment Field is required")
        setTimeout(function(){
            $("#emi_error").html("")
        }, 3000);
    }
});

// slider error
$(document).on("click","#submit",function(){
    var title = $('#title').val();
    var image = $('#image').val();
    if(title == '')
    {
        $('#title_error').html("* The Field is required")
        setTimeout(function(){
            $("#title_error").html("")
        }, 3000);
    }
    else if(image == '')
    {
        $('#image_error').html("* The Field is required")
        setTimeout(function(){
            $("#image_error").html("")
        }, 3000);
    }
    var edit_title = $('#edit_title').val();
    var edit_image = $('#edit_image').val();
    if(edit_title == '')
    {
        $('#edit_title_error').html("* The Field is required")
        setTimeout(function(){
            $("#edit_title_error").html("")
        }, 3000);
    }
    else if(edit_image == '')
    {
        $('#edit_image_error').html("* The Field is required")
        setTimeout(function(){
            $("#edit_image_error").html("")
        }, 3000);
    }
});
