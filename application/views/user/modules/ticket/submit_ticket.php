<div id="wrapper">
    <div class="bg-one bg-one-mobile" style="align-items: center;background-image: url(<?php echo base_url().'assets/';?>images/banner2.jpg);">
        <div class="container">
           <div class="row">
               <div class="col-md-10 offset-md-1 mt-40">
                    <div class="icon-div" style="height:auto !important;">
                        <!--<img src="<?php echo base_url().'assets/';?>images/logo1.png">-->
                        <div class="row mt-40">
                          <div class="col-md-12 text-center">
						  <h4>Thank You</h4>
							  <?php  if(@$this->session->flashdata("ticket_submit_s")) { ?>
							 <div class="alert alert-success" >
							 <?php echo $this->session->flashdata("ticket_submit_s"); ?>
							 </div>
							 <?php } ?>
							 <?php  if(@$this->session->flashdata("update_site_f")) { ?>
							 <div class="alert alert-warning" >
							 <?php echo $this->session->flashdata("update_site_f"); ?>
							 </div><br>
							 <?php } ?>
							 
							 <?php  if(@$this->session->flashdata("submited_tickets")) { ?>
							 <div class="alert alert-success" >
							 <?php echo $this->session->flashdata("submited_tickets"); ?>
							 </div>
							 <?php } ?>
							 <?php  if(@$this->session->flashdata("unsubmited_tickets")) { ?>
							 <div class="alert alert-warning" >
							 <?php echo $this->session->flashdata("unsubmited_tickets"); ?>
							 </div>
							 <?php } ?>
                              <!--<h5 class="mt-40">Result Announce In</h5>-->
                          </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
</div>
<div class="timer-div-bg">
    <div class="container">
        <div class="row">
        <div class="col-md-8 offset-md-2">
        <div class="timing-line">
            <div class="timing-icon">
                <img src="<?php echo base_url().'assets/';?>images/timer.png">
            </div>
            <div class="timing-text">
                <p>Time to Raffle Close</p>
            </div>
              <div class="countdown-container">
                  <div class="days-up">
                    <p id="days" class="big-text">0</p>
                    <span>Days</span>
                  </div>
                    <div class="hours-up">
                    <p id="hours" class="big-text">0</p>
                    <span>Hours</span>
                  </div>
                    <div class="min-up">
                    <p id="min" class="big-text">0</p>
                    <span>Min</span>
                  </div>
                    <div class="sec-up">
                    <p id="sec" class="big-text">0</p>
                    <span>Sec</span>
                  </div>
              </div>
        </div>
        <div class="timing-line">
            <div class="timing-icon">
                <img src="<?php echo base_url().'assets/';?>images/leafe.png">
            </div>
            <div class="timing-text">
                <p>Time to Winner Selection</p>
            </div>
              <div class="countdown-container">
                  <div class="days-up">
                    <p id="days1" class="big-text">0</p>
                    <span>Days</span>
                  </div>
                    <div class="hours-up">
                    <p id="hours1" class="big-text">0</p>
                    <span>Hours</span>
                  </div>
                    <div class="min-up">
                    <p id="min1" class="big-text">0</p>
                    <span>Min</span>
                  </div>
                    <div class="sec-up">
                    <p id="sec1" class="big-text">0</p>
                    <span>Sec</span>
                  </div>
              </div>
        </div>
    </div>
    <div class="col-md-12 text-center mt-20">
        <a href="<?php echo base_url();?>"><button class="main-btn1" >Click here to return to the main page</button></a>
    </div>
</div>
    </div>
</div>