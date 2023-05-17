<script src="<?php echo base_url('assets/js/vendor/jquery-3.2.1.min.js')  ?>"></script>
    <!-- Bootstrap framework js -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- All js plugins included in this file. -->
    <script src="<?php echo base_url('assets/js/plugins.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/slick.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <!-- Waypoints.min.js. -->
    <script src="<?php echo base_url('assets/js/waypoints.min.js') ?>"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="<?php echo base_url('assets/js/main.js') ?>"></script>
    <!-- toastr cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- custom design -->
    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>

    <script>

    $(document).ready(function(){  

/* *********** for login*********** */      
    $('#user_login').click(function(e){
    e.preventDefault();
    var login_email=$('#login_email').val();
    var login_password=$('#login_password').val();
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
    url: '<?php echo base_url("DisplayContant/login"); ?>',
    data: {login_email:login_email,login_password:login_password},
    dataType: "json",
    success: function (response) {
        // handle success response
        console.log(response.status);
        if(response.status==0){
            toastr.info(response.msg, {
                duration: 3000,
                position: 'bottom-right'
              });  
        }
        else if(response.status==1){
            toastr.error(response.msg, {
                duration: 3000,
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
            
            setTimeout(function() {
    window.location.href = "<?php echo base_url('DisplayContant/index');?>";
}, 200); // wait for 3 seconds before redirecting
toastr.success(response.msg, {
    duration: 5000,
    position: 'bottom-right'
});

        }
    },
    error: function (xhr, status, error) {
        console.log(xhr.responseText);
        console.log(status);
        console.log(error);
    }
});
/* *********** END*********** */ 

/* *********** for login and logout*********** */ 
   
    
  });

  $.ajax({
  type: 'post',
  url: '<?php echo base_url('DisplayContant/usernamechake') ?>',
  dataType: 'json',
  success: function(response) {
    // console.log(response);
    if (response== 1) {
      $('.header__account').html('<a href="<?php echo base_url('DisplayContant/logout') ?>"><i class="icon-logout icons"></i></a>');
    } else {
      $('.header__account').html('<a href="<?php echo base_url('DisplayContant/loginPage') ?>"><i class="icon-user icons"></i></a>');
    }
  }
});

/* *********** END *********** */ 

/* *********** REGISTRATION *********** */ 

$('#user_name').on('keypress', function(e) {
  var regex = new RegExp("^[a-zA-Z ]+$"); // Regular expression to match alphabets and spaces
  var str = String.fromCharCode(!e.charCode ? e.which : e.charCode); // Get the input character
  if (regex.test(str)) { // Check if the input matches the regular expression
    return true; // Allow the input
  }
  e.preventDefault(); // Block the input
  return false;
});
$('#Register').on('click',function(e){
e.preventDefault();

var user_name=$('#user_name').val();
var user_email=$('#user_email').val();
var user_phone=$('#user_phone').val();
var user_password=$('#user_password').val();





    if(!user_name || user_name.trim() === '') {
        toastr.warning('Please enter your name', {
            duration: 3000,
            position: 'bottom-right'
        });
        return;
    }
    if(!user_email || user_email.trim() === '') {
        toastr.warning('Please enter your valid email id', {
            duration: 3000,
            position: 'bottom-right'
        });
        return;
    }

    var regex = /^\d{10}$/;

// Check if the userPhone value matches the regular expression
if (!regex.test(user_phone)) {
  // If the input is not a 10-digit number, display an error message
  toastr.warning('Please enter a 10-digit mobile number', {
    duration: 3000,
    position: 'bottom-right'
  });
  return;
}

if(!user_password || user_password.trim() === '') {
    toastr.warning('Please enter your password', {
        duration: 3000,
        position: 'bottom-right'
    });
    return;
} else if (user_password.length < 6) {
    toastr.warning('Your password should be at least 6 characters long', {
        duration: 3000,
        position: 'bottom-right'
    });
    return;
}
$.ajax({

    type: 'post',
  url: '<?php echo base_url('DisplayContant/register') ?>',
  data:{user_name:user_name,user_email:user_email,user_phone:user_phone,user_password:user_password},
  dataType: 'json',
  success: function(response) {
    $('#user_name').val('');
    $('#user_email').val('');
    $('#user_phone').val('');
    $('#user_password').val('');
        if(response.status==1){
            toastr.error(response.msg, {
                duration: 3000,
                position: 'bottom-right'
              });
        }
        else if(response.status==2){
            toastr.success(response.msg, {
                duration: 3000,
                position: 'bottom-right'
              });
        }
        else if(response.status==2){
            toastr.error(response.msg, {
                duration: 3000,
                position: 'bottom-right'
              });
        }

  }

})






});


});

    </script>