<style>
  label.error {
    width: 100%;
    color: red;
    font-style: italic;
    margin-left: 120px;
    margin-bottom: 5px;
    text-align: justify;
}
</style>
<div class="we-pay-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        
		<?php
		if($module == 'home')
		{
		?>
		<!--<div class="xyz">
         <div class="footer_logo">
            <img src="<?php echo base_url();?>assets/images/<?php echo $setting['site_logo']; ?>">
          </div>
        </div>-->
		<?php
		}
		?>
      </div>
      <div class="offset-md-2 col-md-7 gmail-text">
        <h4 class="text-right"><?php echo $content['heading2']; ?></h4>
        <h4 class="text-right"><?php echo $setting['site_mail']; ?></h4>
        
      </div>
      <!------------------------Mobile view----------->
     
    </div>
  </div>
</div>
<!--------------------Modal--------------------->
<div class="modal book-now-modal" id="email-verfication">
  <div class="modal-dialog">
    <div class="modal-content show-popup">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Verify your Email</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form id="loginform" method="post">
        <div class="row">
          <div class="col-md-12">
             <div class="col-md-12" id="loginformMSG"> </div>
            <div class="form-group">
              <label for="name">Email*</label>
              <input type="Email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
            </div>
            
          </div>
          <div class="col-md-12 text-center">
            <button class="main-btn" type="submit">Send OTP</button>
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
<!--------------------Modal Ends----------------->
  <!--------------------Modal--------------------->
    <div class="modal book-now-modal" id="otp-popup">
    <div class="modal-dialog">
      <div class="modal-content show-popup">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Enter OTP</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
           <div class="row">
                <div class="col-md-12">
                  <div id="otpMSG"></div>
                   <div id="wrapper-otp">
                   <div id="dialog">
    <!-- <button class="close">×</button> -->
    <h3 class="verfiy-note">Please enter the 4-digit verification code we have sent <span id="toemail">Your Email.</span></h3>
    <form id="check-otp-form" method="post">
      <div id="form">
        <input type="hidden" name="email" id="otpEmail">
        <input type="text" class="otp-input" name="otp[]" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" autocomplete="off" required="" />
        <input type="text" class="otp-input" name="otp[]" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" autocomplete="off" required="" />
        <input type="text" class="otp-input" name="otp[]" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" autocomplete="off" required="" />
        <input type="text" class="otp-input" name="otp[]" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" autocomplete="off" required="" />
        <button class="main-btn mt-20" id="otp-verify" type="submit">Verify</button>
      </div>
    </form>
    
    <div class="otp-valid mt-20">
      <!--Didn't receive the code?<br />
      <a href="#">Send code again</a><br />-->
      <a href="<?php echo base_url();?>">Go Back</a>
    </div>
  </div>
</div>
                  
                </div>
              </div>
        </div>
      </div>
    </div>
  </div>
 
   <!--------------------Modal Ends----------------->
  <!--------------------GIft modal popup--------------------->
<div class="modal book-now-modal" id="gift-detail">
  <div class="modal-dialog modal-lg">
    <div class="modal-content show-popup">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Prize Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
           <table style="width: 100%;">
             <tr>
               <td><b>Name:</b></td>
               <td id="giftName">NA</td>
             </tr>
             <tr>
               <td><b>Features</b></td>
               <td id="giftFeatures">NA</td>
             </tr>
           </table>
          </div>
           <div class="col-md-10 offset-md-1 mt-20">
           <div class="slick-slider image_slider">
            

           </div>
          </div>
          <div class="col-md-12 text-center">
            <button class="main-btn" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--------------------Gift Modal Ends----------------->
<!-- Loder Moder START-->
    <div class="ajax_modal" style="display: none; z-index: 7777777777777777;">
        <div class="center">
            <img alt="" src="<?php echo base_url();?>assets/loader.gif" />
        </div>
    </div>
<!-- Loder Moder START-->

<!--------------------Gift Modal Ends----------------->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  -->
<script src="<?php echo base_url().'assets/';?>js/jquery.min.js"></script>
<script src="<?php echo base_url().'assets/';?>js/popper.min.js"></script>
<script src="<?php echo base_url().'assets/';?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url().'assets/';?>js/slick.js"></script>
<!-- <script src="js/slick.js"></script> -->
<script src="<?php echo base_url().'assets/';?>js/jquery.flagstrap.js"></script>
<script src="<?php echo base_url().'assets/';?>js/range-slider.js"></script>
<script src="<?php echo base_url().'assets/';?>js/select2.min.js"></script>
<script src="<?php echo base_url().'assets/';?>js/jquery.noisy.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script src="<?php echo base_url(); ?>assets/notification/notifIt.js"></script>
<script type="text/javascript">
  // $(".slider-button").click(function () {
   // $('.slick-slider').slick({
  // centerMode: true,
  // slidesToShow: 3,
  // dots: false,
  // arrows: true,
  // swipe: true,
 // //infinite: true,
  // swipeToSlide: true,
 // // adaptiveHeight: true,
// });

// });
</script>
<script type="text/javascript">
  // Get Items To Set CountDown

 $( document ).ready(function() {
	 setInterval(function(){ 
	$.ajax({
	url: BASE_URL + 'home/giftopenTill',
	type: "POST",
	dataType:'json',
	// crossDomain: true,
	// async: false,
	beforeSend: function () {
	// $(".ajax_modal").show();
	},
	complete: function () {
		// $(".ajax_modal").hide();
	},
	success: function(datedata) {
		// console.log(datedata);
		// if(datedata.giftOpen == true){
		  // $('.show-giftNsubmit').show();
		// }
	  if(datedata.status == true){
		  $('.show-giftNsubmit').show();
		 let daysItem = document.querySelector("#days");
		let hoursItem = document.querySelector("#hours");
		let minItem = document.querySelector("#min");
		let secItem = document.querySelector("#sec");


		// function to countdown

		let countDown = () => {
		  let futureDate = new Date(datedata.giftopenTill);
		  let currentDate = new Date(Date.parse(datedata.current));
		  
		  let myDate = futureDate - currentDate;
		  // console.log(futureDate);
		  let days = Math.floor(myDate / 1000 / 60 / 60 / 24);
		  
		  let hours = Math.floor(myDate / 1000 / 60 / 60 ) % 24;
		  
		  let min = Math.floor(myDate / 1000 / 60  ) % 60;
		  
		  let sec = Math.floor(myDate / 1000 ) % 60;
			
		  daysItem.innerHTML = days;
		  
		  hoursItem.innerHTML = hours;

		  minItem.innerHTML = min;

		  secItem.innerHTML = sec;

		 }

		countDown()

		// setInterval(countDown, 1000)
	  }
	  if(datedata.status == false)
	  {
		  $('#days').html('0');
		  $('#hours').html('0');
		  $('#min').html('0');
		  $('#sec').html('0');
	  }
	},
	error: function(err) {
	  // console.log(err)
	}
});

}, 1000);
});


 $( document ).ready(function() {
	 setInterval(function(){ 
	$.ajax({
	url: BASE_URL + 'home/giftNextWinnerDate',
	type: "POST",
	dataType:'json',
	// crossDomain: true,
	// async: false,
	beforeSend: function () {
	// $(".ajax_modal").show();
	},
	complete: function () {
		// $(".ajax_modal").hide();
	},
	success: function(datedata) {
		// console.log(datedata);
		
	  if(datedata.status == true){
		  
		
		let daysItem1 = document.querySelector("#days1");
		let hoursItem1 = document.querySelector("#hours1");
		let minItem1 = document.querySelector("#min1");
		let secItem1 = document.querySelector("#sec1");


		//function to countdown

		let countDown2 = () => {
		  let futureDate = new Date(datedata.giftoWinnerAno);
		  let currentDate = new Date(Date.parse(datedata.current));
		  
		  let myDate1 = futureDate - currentDate;
		  let days1 = Math.floor(myDate1 / 1000 / 60 / 60 / 24);
		  
		  let hours1 = Math.floor(myDate1 / 1000 / 60 / 60 ) % 24;
		  
		  let min1 = Math.floor(myDate1 / 1000 / 60  ) % 60;
		  
		  let sec1 = Math.floor(myDate1 / 1000 ) % 60;
			
		  daysItem1.innerHTML = days1;
		  
		  hoursItem1.innerHTML = hours1;

		  minItem1.innerHTML = min1;

		  secItem1.innerHTML = sec1;

		 }

		countDown2()

		// setInterval(countDown2, 1000)
	  }
	  if(datedata.status == false)
	  {
		  $('#days1').html('0');
		  $('#hours1').html('0');
		  $('#min1').html('0');
		  $('#sec1').html('0');
	  }
	},
	error: function(err) {
	  // console.log(err)
	}
});

},1000);

});

// let daysItem = document.querySelector("#days");
// let hoursItem = document.querySelector("#hours");
// let minItem = document.querySelector("#min");
// let secItem = document.querySelector("#sec");


// function to countdown

// let countDown = () => {
  // let futureDate = new Date("1 Jan 2021");
  // let currentDate = new Date();
  
  // let myDate = futureDate - currentDate;
  
  // let days = Math.floor(myDate / 1000 / 60 / 60 / 24);
  
  // let hours = Math.floor(myDate / 1000 / 60 / 60 ) % 24;
  
  // let min = Math.floor(myDate / 1000 / 60  ) % 60;
  
  // let sec = Math.floor(myDate / 1000 ) % 60;
    
  // daysItem.innerHTML = days;
  
  // hoursItem.innerHTML = hours;

  // minItem.innerHTML = min;

  // secItem.innerHTML = sec;

 // }

// countDown()

// setInterval(countDown, 1000)

  // Get Items To Set CountDown

// let daysItem = document.querySelector("#days1");
// let hoursItem = document.querySelector("#hours1");
// let minItem = document.querySelector("#min1");
// let secItem = document.querySelector("#sec1");


// function to countdown

// let countDown1 = () => {
  // let futureDate = new Date("1 Jan 2021");
  // let currentDate = new Date();
  
  // let myDate = futureDate - currentDate;
  
  // let days = Math.floor(myDate / 1000 / 60 / 60 / 24);
  
  // let hours = Math.floor(myDate / 1000 / 60 / 60 ) % 24;
  
  // let min = Math.floor(myDate / 1000 / 60  ) % 60;
  
  // let sec = Math.floor(myDate / 1000 ) % 60;
    
  // daysItem.innerHTML = days;
  
  // hoursItem.innerHTML = hours1;

  // minItem.innerHTML = min1;

  // secItem.innerHTML = sec1;

 // }

// countDown1()

// setInterval(countDown, 1000)
</script>
 <script>
  $(function() {
  'use strict';

  var body = $('body');

  function goToNextInput(e) {
    var key = e.which,
      t = $(e.target),
      sib = t.next('.otp-input');

    if (key != 9 && (key < 48 || key > 57)) {
      e.preventDefault();
      return false;
    }

    if (key === 9) {
      return true;
    }

    if (!sib || !sib.length) {
      sib = body.find('.otp-input').eq(0);
    }
    sib.select().focus();
  }

  function onKeyDown(e) {
    var key = e.which;

    if (key === 9 || (key >= 48 && key <= 57)) {
      return true;
    }

    e.preventDefault();
    return false;
  }
  
  function onFocus(e) {
    $(e.target).select();
  }

  body.on('keyup', '.otp-input', goToNextInput);
  body.on('keydown', '.otp-input', onKeyDown);
  body.on('click', '.otp-input', onFocus);

})
</script>
<script src="<?php echo base_url().'assets/';?>js/jquery.validate.min.js"></script>
<script type="text/javascript">
  var BASE_URL = '<?php echo base_url();?>';

      $('#loginform').validate({
        rules: {
            email: "required"
        },
      messages: {
            email: "Please enter your Email!"           
          },
        submitHandler: function(a, e) {
          //a is form object and e is event
          // e.preventDefault(); // avoid submitting the form here
          var formData = $("#loginform").serialize();
          $.ajax({
            url: BASE_URL + 'auth/checkEmployee',
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
              if(data.status == true){
                $('#email-verfication').modal().hide();
                $('#loginform').attr('style', 'text-align: center');
                $('#otp-popup').show();
                $("#toemail").html($("#email").val())
                $("#otpEmail").val($("#email").val())
              }
              $("#loginformMSG").html(data.message);
            },
            error: function(err) {
              // console.log(err)
            }
          });
        }
        });
		
		
		// $("#check-otp-form").on("invalid", function(event) {
		  // $('.otp-input').addClass('error');
		  // setTimeout(function() {
			// $('.otp-input').removeClass('error');
		  // }, 500);
		// });
		
		
      $('#submit-gift').validate({
         rules: {
             // "giftids[]": "required"
        },
      messages: {
            // "giftids[]": "Please map Atleast one Ticket!"           
          }
      });
	  
	  // $('#otp-verify').on('click', function() {
			// $("#form1").valid();
	  // });
	  
	  $('#check-otp-form').validate({
		  errorPlacement: function(error, element) {   },
        rules: {
            // otp: "required"
             // "otp[]": "required"
        },
      messages: {
            // otp: "Please enter OTP!"           
            // "otp[]": "Please enter OTP!"           
          },
        submitHandler: function(a, e) {

          //a is form object and e is event
          // e.preventDefault(); // avoid submitting the form here
          var formData = $("#check-otp-form").serialize();
          $.ajax({
            url: BASE_URL + 'auth/checkOTP',
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
              if(data.status == true){
                 window.location = BASE_URL+'ticket-list';
              }
              $("#otpMSG").html(data.message);
            },
            error: function(err) {
              // console.log(err)
            }
          });
        }
        });
	  
      $('#check-otp-form').validate({
        rules: {
            // otp: "required"
             // "otp[]": "required"
        },
      messages: {
            // otp: "Please enter OTP!"           
            // "otp[]": "Please enter OTP!"           
          },
        submitHandler: function(a, e) {

          //a is form object and e is event
          // e.preventDefault(); // avoid submitting the form here
          var formData = $("#check-otp-form").serialize();
          $.ajax({
            url: BASE_URL + 'auth/checkOTP',
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
              if(data.status == true){
                 window.location = BASE_URL+'ticket-list';
              }
              $("#otpMSG").html(data.message);
            },
            error: function(err) {
              // console.log(err)
            }
          });
        }
        });

      $(document).on('change',".set-gift-ticket",function(){
        var giftID = $(this).val();
        var ticketID = $(this).data('ticket');
        var ticketNo = $(this).data('ticket_no');
        // console.log(giftID);
        // console.log(ticketID);
        // console.log(ticketNo);
        $.ajax({
          type:'POST',
          dataType:'json',
          url: BASE_URL+'ticket_list/get_gift',
          data:{gift_id:giftID,ticketNo:ticketNo},
          beforeSend: function () {
          $(".ajax_modal").show();
          },
          complete: function () {
              $(".ajax_modal").hide();
          },
          success:function(responce)
          {
            notif({
              msg: responce.message,
              type: responce.type,
              position:"center"
             });
            if(responce.status == true)
            {
              $('#giftImage-'+ticketID).attr('src',responce.imageURL);
              $('#gift_tickets-'+ticketID).val(giftID+'-'+ticketID+'-'+ticketNo);
            }
			else
			{
				$('.set-gift-ticket').prop('selectedIndex',0);
			}
          }
        }); 
      });
	  	
	  $(document).on('click',".gift-detail-section",function(){
		  var gift_id = $(this).data('gift');
		  $.ajax({
          type:'POST',
          dataType:'json',
          url: BASE_URL+'home/giftDetails',
          data:{gift_id:gift_id},
          beforeSend: function () {
          $(".ajax_modal").show();
          },
          complete: function () {
              $(".ajax_modal").hide();
          },
          success:function(responce)
          {
			  if(responce.status == true)
			  {
				// $("#gift-detail .modal-body").empty();
				// $("#gift-detail .modal-body").html(responce);
				$("#gift-detail").modal();
				$("#giftName").html(responce.gift.gift_name);
				$("#giftFeatures").html(responce.gift.gift_features);
				
				$('.image_slider').removeClass("slick-initialized");
				
				$(".image_slider").html(responce.images);
				
				
				   $('.slick-slider').slick({
					 centerMode: true,
					 slidesToShow: 1,
					 dots: false,
					 arrows: true,
				  // swipe: true,
					 infinite: false,
				  // swipeToSlide: true,
				   adaptiveHeight: true,
				 });  
			  }
          }
        });
	  });
  </script>
</body>

</html>