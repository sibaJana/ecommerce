<script src="<?php echo base_url('assets/admin/assets/js/vendor/jquery-2.1.4.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/admin/assets/js/popper.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/admin/assets/js/plugins.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/admin/assets/js/main.js') ?>" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $('.xyz').hide();
    $(document).ready(function(){
        display();
    setTimeout(function() {
    $('.x').fadeOut();
    $('.xyz').show();
  }, 3000);
        
    $('#login_admin').click(function(e){
        e.preventDefault();
    var login_email=$('#email_admin').val();
    var login_password=$('#password_admin').val(); 
    if (login_email=='') {
    toastr.error('Please enter your registered email.', {
    duration: 3000,
    position: 'bottom-right'
    }); 
    return false;
    }
    if (login_password=='') {

    toastr.error('Please enter your password.', {
    duration: 3000,
    position: 'bottom-right'
    }); 
    return false;
    }
    $.ajax({
    type: "post",
    url: '<?php echo base_url("Admin_controller/login"); ?>',
    data: {login_email:login_email,login_password:login_password},
    dataType: "json",
    success: function (response) {
        // handle success response
        // console.log(response.status);
        if(response.status==0){
            toastr.info(response.msg, {
                duration: 3000,
                position: 'bottom-right'
              });  
        }
        else if(response.status==1){
            setTimeout(function() {
        window.location.href = "<?php echo base_url('Admin_controller/index');?>";
        },200); // wait for 3 seconds before redirecting
        toastr.success(response.msg, {
        duration: 5000,
        position: 'bottom-right'
        });
        }
        else if(response.status==2){
            toastr.error(response.msg, {
                duration: 3000,
                position: 'bottom-right'
              });
        }
        else if(response.status==3){
            toastr.error(response.msg, {
                duration: 3000,
                position: 'bottom-right'
              });
        }
        else if(response.status==4){
            


        }
    }
    ,
    error: function (xhr, status, error) {
        console.log(xhr.responseText);
        console.log(status);
        console.log(error);
    }

    });


    });

    // caregory code

    $('#payment_button').click(function(e){
        e.preventDefault();
        var category=$('#category').val();
        var category_desc=$('#category_desc').val();
        if (category=='') {
    toastr.error('Please enter Category Name.', {
    duration: 3000,
    position: 'bottom-right'
    }); 
    return false;
    }
    if (category_desc=='') {

    toastr.error('Please enter Category Description.', {
    duration: 3000,
    position: 'bottom-right'
    }); 
    return false;
    }
        $.ajax({
            type: "post",
    url: '<?php echo base_url("Admin_controller/caregory"); ?>',
    data: {category:category,category_desc:category_desc},
    dataType: "json",
    success:function(response){
        if(response.status==1){
            toastr.info(response.msg, {
                duration: 3000,
                position: 'bottom-right'
              });  
        }else if(response.status==2){
            toastr.success(response.msg, {
                duration: 3000,
                position: 'bottom-right'
              }); 
        } 
        else if(response.status==3){
            toastr.error(response.msg, {
                duration: 3000,
                position: 'bottom-right'
              }); 
        } 
    }       
        });
    });

    /* product inventory */

    $('#Inventory').click(function(e){
        e.preventDefault();
        var quentity=$('#quentity').val();
        // var category_desc=$('#category_desc').val();
        if (quentity=='') {
    toastr.error('Please enter quentity.', {
    duration: 3000,
    position: 'bottom-right'
    }); 
    return false;
    }
  
        $.ajax({
            type: "post",
    url: '<?php echo base_url("Admin_controller/inventory"); ?>',
    data: {quentity:quentity},
    dataType: "json",
    success:function(response){
        if(response.status==1){
            toastr.success(response.msg, {
                duration: 3000,
                position: 'bottom-right'
              });  
        }else if(response.status==2){
            toastr.error(response.msg, {
                duration: 3000,
                position: 'bottom-right'
              }); 
        } 
        
    }       
        });
    });

/*  disount  */
$('#payment_button').click(function(e){
        e.preventDefault();
        var discount_name=$('#discount_name').val();
        var discount_Percent=$('#discount_Percent').val();
        var discount_desc=$('#discount_desc').val();
        if (discount_name=='') {
    toastr.error('Please enter discount Name.', {
    duration: 3000,
    position: 'bottom-right'
    }); 
    return false;
    }
    if (discount_Percent=='') {

    toastr.error('Please enter discount percentage.', {
    duration: 3000,
    position: 'bottom-right'
    }); 
    return false;
    }
    if (discount_desc=='') {

toastr.error('Please enter discount Description.', {
duration: 3000,
position: 'bottom-right'
}); 
return false;
}
        $.ajax({
            type: "post",
    url: '<?php echo base_url("Admin_controller/discount"); ?>',
    data: {discount_name:discount_name,discount_Percent:discount_Percent,discount_desc:discount_desc},
    dataType: "json",
    success:function(response){
        if(response.status==1){
            toastr.info(response.msg, {
                duration: 3000,
                position: 'bottom-right'
              });  
        }else if(response.status==2){
            toastr.success(response.msg, {
                duration: 3000,
                position: 'bottom-right'
              }); 
        } 
        else if(response.status==3){
            toastr.error(response.msg, {
                duration: 3000,
                position: 'bottom-right'
              }); 
        } 
    }       
        });
    });

    /* ajax category code */
   
/*     $.ajax({
  type: "post",
  url: '<?php //echo base_url("Admin_controller/display_category"); ?>',
  dataType: "json",
  success: function(response) {
    // console.log(response); // Add this line to check the response data
    var options = '';
    options += '<option value="">' +'please select one' + '</option>';
    $.each(response, function(index, category) {
  options += '<option value="' + category[0].id + '">' + category[0].category_name + '</option>';
});

    $('#product_category').html(options);
  },
  error: function(xhr, textStatus, errorThrown) {
    console.log('Error in AJAX request');
  }
});
 */

/* product page */
/* $('#product_button').click(function(e){
        e.preventDefault();
        var product_name=$('#product_name').val();
        var product_prise=$('#product_prise').val();
        var product_category=$('#product_category').val();
        var product_quentity=$('#product_quentity').val();
        var product_discount=$('#product_discount').val();
        var product_desc=$('#product_desc').val();
        var product_image =$('#product_image').val();
        if (product_name=='') {
    toastr.error('Please enter product Name.', {
    duration: 3000,
    position: 'bottom-right'
    }); 
    return false;
    }
    if (product_discount=='') {
    toastr.error('Select Product Discount.', {
    duration: 3000,
    position: 'bottom-right'
    }); 
    return false;
    }
    if (product_prise=='') {

    toastr.error('Please enter product price.', {
    duration: 3000,
    position: 'bottom-right'
    }); 
    return false;
    }
    if (product_category=='') {

toastr.error('Please select product category.', {
duration: 3000,
position: 'bottom-right'
}); 
return false;
}
if (product_quentity=='') {

toastr.error('Please select a product inventory.', {
duration: 3000,
position: 'bottom-right'
}); 
return false;
}
if (product_desc=='') {

toastr.error('Please add product Description', {
duration: 3000,
position: 'bottom-right'
}); 
return false;
}
var product_image = $('#product_image')[0].files[0];
var formData = new FormData();
formData.append('product_name', product_name);
formData.append('product_prise', product_prise);
formData.append('product_category', product_category);
formData.append('product_quentity', product_quentity);
formData.append('product_discount', product_discount);
formData.append('product_desc', product_desc);
formData.append('product_image', product_image);

        $.ajax({
            type: "post",
    url: '<?php //echo base_url("Admin_controller/product"); ?>',
    data: {product_name:product_name,product_prise:product_prise,product_category:product_category,product_quentity:product_quentity,product_discount:product_discount,product_image:product_image,product_desc:product_desc},
    dataType: "json",
    success:function(response){
        if(response.status==1){
            toastr.info(response.msg, {
                duration: 3000,
                position: 'bottom-right'
              });  
        }else if(response.status==2){
            toastr.success(response.msg, {
                duration: 3000,
                position: 'bottom-right'
              }); 
        } 
        else if(response.status==3){
            toastr.error(response.msg, {
                duration: 3000,
                position: 'bottom-right'
              }); 
        } 
    }       
        });
    });


 */
$('#product_button').click(function(e) {
    e.preventDefault();
    var product_name = $('#product_name').val();
    var product_prise = $('#product_prise').val();
    var product_category = $('#product_category').val();
    var product_quentity = $('#product_quentity').val();
    var product_discount = $('#product_discount').val();
    var product_desc = $('#product_desc').val();
    var product_image = $('#product_image')[0].files[0];

    if (product_name === '') {
        toastr.error('Please enter product Name.', {
            duration: 3000,
            position: 'bottom-right'
        });
        return false;
    }
    if (product_discount === '') {
        toastr.error('Select Product Discount.', {
            duration: 3000,
            position: 'bottom-right'
        });
        return false;
    }
    if (product_prise === '') {
        toastr.error('Please enter product price.', {
            duration: 3000,
            position: 'bottom-right'
        });
        return false;
    }
    if (product_category === '') {
        toastr.error('Please select product category.', {
            duration: 3000,
            position: 'bottom-right'
        });
        return false;
    }
    if (product_quentity === '') {
        toastr.error('Please select a product inventory.', {
            duration: 3000,
            position: 'bottom-right'
        });
        return false;
    }
    if (product_desc === '') {
        toastr.error('Please add product Description', {
            duration: 3000,
            position: 'bottom-right'
        });
        return false;
    }

    var formData = new FormData();
    formData.append('product_name', product_name);
    formData.append('product_prise', product_prise);
    formData.append('product_category', product_category);
    formData.append('product_quentity', product_quentity);
    formData.append('product_discount', product_discount);
    formData.append('product_desc', product_desc);
    formData.append('product_image', product_image);

    $.ajax({
        type: "post",
        url: '<?php echo base_url("Admin_controller/product"); ?>',
        data: formData,
        dataType: "json",
        contentType: false,
        processData: false,
        success: function(response) {
            if (response.status == 1) {
                toastr.info(response.msg, {
                    duration: 3000,
                    position: 'bottom-right'
                });
            } else if (response.status == 2) {
                toastr.success(response.msg, {
                    duration: 3000,
                    position: 'bottom-right'
                });
            } else if (response.status == 3) {
                toastr.error(response.msg, {
                    duration: 3000,
                    position: 'bottom-right'
                });
            }
        }
    });
});








});
    

function display(){
    $.ajax({
            type: "post",
    url: '<?php echo base_url("Admin_controller/display"); ?>',
    dataType: "json",
    success:function(response){
      console.log(response);  
        
    }       
        }); 
}





</script>