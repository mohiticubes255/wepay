<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>WePay Admin Login</title>
        <link href="<?php echo base_url(); ?>assets/admin/css/styles.css" rel="stylesheet" />
        </head>
    <body style="background:#f8a71a;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Login</h3>
                                        <div class="show_error"></div>
                                    </div>

                                    <div class="card-body">
                                        <form id="admin_login" method="POST">
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Username</label><input class="form-control py-4" name="username" id="inputEmailAddress" type="text" placeholder="Enter username" /></div>
                                            <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" name="password" id="inputPassword" type="password" placeholder="Enter password" /></div>
                                            <!-- <div class="form-group">
                                                <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Remember password</label></div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="password.html">Forgot Password?</a> -->
                                                <button class="btn btn-primary" type="submit">Login</button></div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
         
        </div>
       
    </body>
    <div class="ajax_modal" style="display: none; z-index: 7777777777777777;">
      <div class="center">
          <img alt="" src="<?php echo base_url();?>assets/loader.gif" />
      </div>
</div>

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
  
        <script type="text/javascript">
            var BASE_URL = "<?php echo base_url(); ?>";
            $('#admin_login').validate({
    rules: {
            username: "required",
            password: "required"
            // email: {
            //     required: true,
            //     email: true
            // },
            // phone: {
            //     required: true,
            //     number: true,
            //     minlength: 9,
            //     maxlength: 9
            // }//,
            // message: {
            //  required: true,
            //  minlength:10
            // }
            
        },
      messages: {
            username: "Please enter your Username!",
            password: "Please enter your Password!",
            // name: "Escribe tu nombre",
            // surnames: "POR FAVOR INGRESE SUS APELLIDOS",
            // email: "Escribe un correo válido",
            // phone: {
            //     required: "Este número de teléfono no es válido",
            //     number: "Please enter only numeric value",
            //     minlength: "Your phone must be 9 characters long",
            //     maxlength: "Your phone must be 9 characters long"
            // }//,
            // message : 'Por favor, escribe tu mensaje'
            
          },
    submitHandler: function(a, e) {
      //a is form object and e is event
      // e.preventDefault(); // avoid submitting the form here
      var formData = $("#admin_login").serialize();
      $.ajax({
        url: BASE_URL+'admin/auth/is_valid_login',
        type: "POST",
        data: formData,
        dataType:'json',
        // crossDomain: true,
        // async: false,
        beforeSend: function () {
        $(".ajax_modal").show();
        },
        complete: function () {
            $(".ajax_modal").hide();
        },
        success: function(data) {
          if(data.status == 'true'){
            // $('#contact_form')[0].reset();
            // $(".show_success").show();
            // $(".show_success").html(data.message);
            window.location = BASE_URL+'admin/dashboard';
          }
          else
          {
            // $('.show_error').show();
            $('.show_error').html(data.message);
          }
          
        },
        error: function(err) {
          console.log(err)
        }
      });
    }
  });
 </script>
</html>
