<style>
    .modal.fade.hairstyles-pop.in {
    opacity: 1;
}
.member_delete_confirmation_modal-box {
    background: rgba(0, 0, 0, 0.7);
}
.member-table img {
    width: 100px;
    height: auto;
}
.member_delete_confirmation_modal-box h4 {
    font-size: 18px;
}
</style>

   <div class="ajax_modal" style="display: none; z-index: 7777777777777777;">
      <div class="center">
          <img alt="" src="<?php echo base_url();?>assets/loader.gif" />
      </div>
   </div>

<!-- User Delete Member content Start-->
        <div class="modal fade member_delete_confirmation_modal-box hairstyles-pop" id="employee_delete_confirmation_modal" style="display: none;">
            <div class="modal-dialog" style="margin-top: 260.5px;">
                  <div class="modal-content">
                <div class="modal-header">
                 
                  <h4 class="modal-title">Do you really want to delete this Employee?</h4>
                   <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <form role="form" method="post" action="<?php echo base_url();?>admin/employees/delete_employee">
                  <input type="hidden" name="delete_employee_id" id="delete_employee_id" value="0">
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Yes</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                  </div>
                </form>
              </div>

            </div>
          </div>
<!-- User Delete Member content End-->

<!-- User Delete Member content Start-->
        <div class="modal fade member_delete_confirmation_modal-box hairstyles-pop" id="gift_delete_confirmation_modal" style="display: none;">
            <div class="modal-dialog" style="margin-top: 260.5px;">
                  <div class="modal-content">
                <div class="modal-header">
                 
                  <h4 class="modal-title">Do you really want to delete this Prize?</h4>
                   <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <form role="form" method="post" action="<?php echo base_url();?>admin/gifts/delete_gift">
                  <input type="hidden" name="delete_gift_id" id="delete_gift_id" value="0">
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Yes</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                  </div>
                </form>
              </div>

            </div>
          </div>
<!-- User Delete Member content End-->

<!-- User Delete Ticket content Start-->
        <div class="modal fade member_delete_confirmation_modal-box hairstyles-pop" id="delete_unusedticket_confirmation_modal" style="display: none;">
            <div class="modal-dialog" style="margin-top: 260.5px;">
                  <div class="modal-content">
                <div class="modal-header">
                 
                  <h4 class="modal-title">Do you really want to delete this Ticket?</h4>
                   <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <form role="form" method="post" action="<?php echo base_url();?>admin/tickets/delete_ticket">
                  <input type="hidden" name="delete_unusedticket_id" id="delete_unusedticket_id" value="0">
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Yes</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                  </div>
                </form>
              </div>

            </div>
          </div>
<!-- User Delete Ticket content End-->
<!--<footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>-->
            </div>
        </div>
        <script src="<?php echo base_url(); ?>/assets/admin/js/jquery-3.4.1.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/admin/js/bootstrap.bundle.min.js" ></script>
    <!-- <script src='https://cdn.jsdelivr.net/npm/timepicker@1.11.12/jquery.timepicker.js'></script> -->
        <script src="<?php echo base_url(); ?>/assets/admin/js/scripts.js"></script>
    

		<script src="<?php echo base_url(); ?>/assets/admin/js/bootstrap-multiselect.js"></script>
    <script src="<?php echo base_url(); ?>/assets/admin/js/datatables-demo.js"></script>
 <script>

      function selectedInput() {

          $('.timeSlotTableList td').on('click', function() {
       
              var self = $(this);
              $('.active').removeClass('active');
              self.addClass('active');
          });
      }
      selectedInput();
  </script>

    <script>
	
	jQuery('#membertime').multiselect({
          includeSelectAllOption: true,
        });
    $(function() {
  // $('#timepicker').timepicker({
  //   timeFormat: 'h:mm p',
  //   dynamic: false,
  //   dropdown: true,
  //   scrollbar: true
  // });
  
  // $('#timepicker1').timepicker({
  //   timeFormat: 'h:mm p',
  //   dynamic: false,
  //   dropdown: true,
  //   scrollbar: true
  // });


});
    
    $(document).ready(function () {
    $('#selectall').click(function () {
        $('.selectedId').prop('checked', this.checked);
    });

    $('.selectedId').change(function () {
        var check = ($('.selectedId').filter(":checked").length == $('.selectedId').length);
        $('#selectall').prop("checked", check);
    });
});
    </script>

        <!-- load jQuery and jQuery UI -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> -->
    <script src="<?php echo base_url(); ?>/assets/admin/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/admin/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/admin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/admin/js/jquery.dataTables.min.js" ></script>
    <script src="<?php echo base_url(); ?>/assets/admin/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/notification/notifIt.js"></script>
    <script>
      $(function() {
       $('#datefromtoday1').datepicker({ minDate: 0 , dateFormat: 'dd-mm-yy'});
       $('#datefromtoday2').datepicker({ minDate: 0 , dateFormat: 'dd-mm-yy'});
       $('#datefromtoday3').datepicker({ minDate: 0 , dateFormat: 'dd-mm-yy'});
      });
      $(function() {
       $('#joindate').datepicker({  
        dateFormat: 'dd-mm-yy',
        changeMonth: true,
        changeYear: true,
        minDate: "-50Y",
        maxDate: "-0Y",
        yearRange: "c-50:c-0"
        });
      });
    </script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js"></script>

<script>
      $(document).ready(function() {
        	// $.datetimepicker.setLocale('pt-BR');
       	$('.datetimepicker').datetimepicker({ format:'d/m/Y H:m:s',minDate:new Date()});
      });
</script>

    <script>
    var BASE_URL = "<?php echo base_url(); ?>admin/";
    $(document).ready(function()
    {
        $(".delete_employee").click(function()
        {
            $("#delete_employee_id").val( $(this).val());
            $('#employee_delete_confirmation_modal').modal('show');
        });

        $(".delete_gift").click(function()
        {
			var giftid = $(this).val();
			$.ajax({
			url: BASE_URL+'gifts/check_gift_empty_stuts',
			type: "POST",
			data: {giftid:giftid},
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
					notif({

					  msg: data.message,

					  type: "warning",

					  position:"center"

					});
			  }
			  else
			  {
				$("#delete_gift_id").val(giftid);
				$('#gift_delete_confirmation_modal').modal('show');
			  }
			},
			error: function(err) {
			  console.log(err)
			}
		  });
			
           
        });
		
		$(".delete_unusedticket").click(function()
        {
            $("#delete_unusedticket_id").val( $(this).val());
            $('#delete_unusedticket_confirmation_modal').modal('show');
        });
    });
     </script>
     
     <script type="text/javascript">
       $(document).on('click','.employee_status_active',function(){
        var employee = $(this).data('employee');
        var status = $(this).data('status');
        $.ajax({
        url: BASE_URL+'employees/employee_status',
        type: "POST",
        data: {employee_id:employee,status:status},
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
                notif({

                  msg: data.message,

                  type: "warning",

                  position:"center"

                });
              $('#employee-status-'+employee).html(data.set);
          }
          else
          {
            notif({

                  msg: data.message,

                  type: "error",

                  position:"center"

                });
          }
        },
        error: function(err) {
          console.log(err)
        }
      });
       });

       $(document).on('click','.employee_status_inactive',function(){
        var employee = $(this).data('employee');
        var status = $(this).data('status');
        $.ajax({
        url: BASE_URL+'employees/employee_status',
        type: "POST",
        data: {employee_id:employee,status:status},
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
                notif({

                  msg: data.message,

                  type: "warning",

                  position:"center"

                });
              $('#employee-status-'+employee).html(data.set);
          }
          else
          {
            notif({

                  msg: data.message,

                  type: "error",

                  position:"center"

                });
          }
        },
        error: function(err) {
          console.log(err)
        }
      });
       });

       
       $(document).on('click','.gift_status_inactive',function(){
        var gift = $(this).data('gift');
        var status = $(this).data('status');
        $.ajax({
        url: BASE_URL+'gifts/gift_status',
        type: "POST",
        data: {gift_id:gift,status:status},
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
                notif({

                  msg: data.message,

                  type: "warning",

                  position:"center"

                });
              $('#gift-status-'+gift).html(data.set);
          }
          else
          {
            notif({

                  msg: data.message,

                  type: "error",

                  position:"center"

                });
          }
        },
        error: function(err) {
          console.log(err)
        }
      });
       });

       $(document).on('click','.gift_status_active',function(){
        var gift = $(this).data('gift');
        var status = $(this).data('status');
        $.ajax({
        url: BASE_URL+'gifts/gift_status',
        type: "POST",
        data: {gift_id:gift,status:status},
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
                notif({

                  msg: data.message,

                  type: "warning",

                  position:"center"

                });
              $('#gift-status-'+gift).html(data.set);
          }
          else
          {
            notif({

                  msg: data.message,

                  type: "error",

                  position:"center"

                });
          }
        },
        error: function(err) {
          console.log(err)
        }
      });
       });
       
      
     </script>
     


     <script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript">
      $('#employeform').validate({});
      $('#giftform').validate({});
    </script>
     <script type="text/javascript">
       $('#ticket-form').validate({
    rules: {
            employeeId: "required",
            tickets: "required"            
        },
      messages: {
            employeeId: "Please select Employee!",
            tickets: "Please Enter Numbers of Tickets!"
          },
        // });
    submitHandler: function(a, e) {
      // a is form object and e is event
      e.preventDefault(); // avoid submitting the form here

          var formData = $("#ticket-form").serialize();
        $.ajax({
        url: BASE_URL+'tickets/addtickets',
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
                notif({

                  msg: data.message,

                  type: "warning",

                  position:"center"

                });
                setTimeout("location.reload(true);", 1000);
          }
          else
          {
            notif({

                  msg: data.message,

                  type: "error",

                  position:"center"

                });
          }
          // location.reload();
        },
        error: function(err) {
          console.log(err)
        }
      });
    }
});
     </script>


     <script type="text/javascript">
       
       $('#activeAllemployees').click(function(){
        var checkbox = $('.selectedId:checked');
        var status = $(this).data('status');
        if(checkbox.length > 0)
        {
         var checkbox_value = [];
         $(checkbox).each(function(){
          checkbox_value.push($(this).val());
         });
         console.log(checkbox_value);
         $.ajax({
          url:BASE_URL+"employees/multiemployees_status_change",
          method:"POST",
          dataType:'json',
          data:{checkbox_value:checkbox_value,status:status},
          beforeSend: function () {
          $(".ajax_modal").show();
          },
          complete: function () {
              $(".ajax_modal").hide();
          },
          success:function(data)
          {
              if(data.status == true){
                notif({

                  msg: data.message,

                  type: "warning",

                  position:"center"

                });
                setTimeout("location.reload(true);", 1000);
          }
          else
          {
            notif({

                  msg: data.message,

                  type: "error",

                  position:"center"

                });
          }
          }
         })
        }
        else
        {
         alert('Select atleast one records');
        }
      });

       $('#activeAllgifts').click(function(){
        var checkbox = $('.selectedId:checked');
        var status = $(this).data('status');
        if(checkbox.length > 0)
        {
         var checkbox_value = [];
         $(checkbox).each(function(){
          checkbox_value.push($(this).val());
         });
         console.log(checkbox_value);
         $.ajax({
          url:BASE_URL+"gifts/multigift_status_change",
          method:"POST",
          dataType:'json',
          data:{checkbox_value:checkbox_value,status:status},
          beforeSend: function () {
          $(".ajax_modal").show();
          },
          complete: function () {
              $(".ajax_modal").hide();
          },
          success:function(data)
          {
              if(data.status == true){
                notif({

                  msg: data.message,

                  type: "warning",

                  position:"center"

                });
                setTimeout("location.reload(true);", 1000);
          }
          else
          {
            notif({

                  msg: data.message,

                  type: "error",

                  position:"center"

                });
          }
          }
         })
        }
        else
        {
         alert('Select atleast one records');
        }
      });

       $('#inactiveAllgifts').click(function(){
        var checkbox = $('.selectedId:checked');
        var status = $(this).data('status');
        if(checkbox.length > 0)
        {
         var checkbox_value = [];
         $(checkbox).each(function(){
          checkbox_value.push($(this).val());
         });
         console.log(checkbox_value);
         $.ajax({
          url:BASE_URL+"gifts/multigift_status_change",
          method:"POST",
          dataType:'json',
          data:{checkbox_value:checkbox_value,status:status},
          beforeSend: function () {
          $(".ajax_modal").show();
          },
          complete: function () {
              $(".ajax_modal").hide();
          },
          success:function(data)
          {
              if(data.status == true){
                notif({

                  msg: data.message,

                  type: "warning",

                  position:"center"

                });
                setTimeout("location.reload(true);", 1000);
          }
          else
          {
            notif({

                  msg: data.message,

                  type: "error",

                  position:"center"

                });
          }
          }
         })
        }
        else
        {
         alert('Select atleast one records');
        }
      });

       $('#inactiveAllemployees').click(function(){
        var checkbox = $('.selectedId:checked');
        var status = $(this).data('status');
        if(checkbox.length > 0)
        {
         var checkbox_value = [];
         $(checkbox).each(function(){
          checkbox_value.push($(this).val());
         });
         console.log(checkbox_value);
         $.ajax({
          url:BASE_URL+"employees/multiemployees_status_change",
          method:"POST",
          dataType:'json',
          data:{checkbox_value:checkbox_value,status:status},
          beforeSend: function () {
          $(".ajax_modal").show();
          },
          complete: function () {
              $(".ajax_modal").hide();
          },
          success:function(data)
          {
              if(data.status == true){
                notif({

                  msg: data.message,

                  type: "warning",

                  position:"center"

                });
                setTimeout("location.reload(true);", 1000);
          }
          else
          {
            notif({

                  msg: data.message,

                  type: "error",

                  position:"center"

                });
          }
          }
         })
        }
        else
        {
         alert('Select atleast one records');
        }
      });

       $('#deleteAllemployees').click(function(){
        var checkbox = $('.selectedId:checked');
        if(checkbox.length > 0)
        {
         var checkbox_value = [];
         $(checkbox).each(function(){
          checkbox_value.push($(this).val());
         });
         console.log(checkbox_value);
         $.ajax({
          url:BASE_URL+"employees/multiemployees_delete",
          method:"POST",
          dataType:'json',
          data:{checkbox_value:checkbox_value},
          beforeSend: function () {
          $(".ajax_modal").show();
          },
          complete: function () {
              $(".ajax_modal").hide();
          },
          success:function(data)
          {
              if(data.status == true){
                notif({

                  msg: data.message,

                  type: "warning",

                  position:"center"

                });
                setTimeout("location.reload(true);", 1000);
          }
          else
          {
            notif({

                  msg: data.message,

                  type: "error",

                  position:"center"

                });
          }
          }
         })
        }
        else
        {
         alert('Select atleast one records');
        }
      });

       $('#deleteAllgifts').click(function(){
        var checkbox = $('.selectedId:checked');
        if(checkbox.length > 0)
        {
         var checkbox_value = [];
         $(checkbox).each(function(){
          checkbox_value.push($(this).val());
         });
         console.log(checkbox_value);
         $.ajax({
          url:BASE_URL+"gifts/multigift_delete",
          method:"POST",
          dataType:'json',
          data:{checkbox_value:checkbox_value},
          beforeSend: function () {
          $(".ajax_modal").show();
          },
          complete: function () {
              $(".ajax_modal").hide();
          },
          success:function(data)
          {
              if(data.status == true){
                notif({

                  msg: data.message,

                  type: "warning",

                  position:"center"

                });
                setTimeout("location.reload(true);", 1000);
          }
          else
          {
            notif({

                  msg: data.message,

                  type: "error",

                  position:"center"

                });
          }
          }
         })
        }
        else
        {
         alert('Select atleast one records');
        }
      });
	  
	  $('.jar-gift-ticket').change(function () {
        var ticketID = $(this).data('ticket');
        var ticketNo = $(this).data('ticket_no');
        var jarID = $(this).data('jar');
        var giftID = $(this).val();
        $.ajax({
          type:'POST',
          dataType:'json',
          url: BASE_URL+'tickets/changeJar',
          data:{gift_id:giftID,ticket_id:ticketID,ticket_no:ticketNo,jar_id:jarID},
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
              $('#jatImage-'+ticketID).attr('src',responce.imageURL);
            }
          }
        }); 
	  });
	  
	  $(document).on('click','.removeImage',function(){
        var imageId = $(this).val();
        $.ajax({
        url: BASE_URL+'gifts/delete_gift_image',
        type: "POST",
        data: {image_id:imageId},
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
                notif({

                  msg: data.message,

                  type: "success",

                  position:"center"

                });
              $('#slide-img-'+imageId).hide();
          }
          else
          {
            notif({

                  msg: data.message,

                  type: "error",

                  position:"center"

                });
          }
        },
        error: function(err) {
          console.log(err)
        }
      });
     });
		
	  // $(document).on('click',".edit_ticket",function(){
		  // $("#edit-tickets-modal-id").modal()
	  // });
     </script>
    </body>
</html>