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
            toastr.success(response.msg, {
                duration: 3000,
                position: 'bottom-right'
              });
              window.location.href = "<?php echo base_url('DisplayContant/index');?>";
        }
    },
    error: function (xhr, status, error) {
        console.log(xhr.responseText);
        console.log(status);
        console.log(error);
    }
});

   
    
  });

});

    </script>