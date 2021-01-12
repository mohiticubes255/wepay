<div id="wrapper">
    <div class="bg-one bg-one-mobile">
        <div class="container">
           <div class="row">
                <div class="col-md-8 welcome-note">
                    <h1><?php echo $content['heading']; ?></h1>
                    <p class="jar-text"><?php echo $content['para']; ?></p>
                    <p class="date-text"> <?php echo $content['para1']; ?></p>
                    <p class="bottom-text"><?php echo $content['para2']; ?></p>
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
    <div class="col-md-12 text-center mt-20 show-giftNsubmit" style="display:none;">
      <?php
      if($this->session->userdata['SESSION_EMPLOYEE_ID'])
      {
        ?>
        <a href="<?php echo base_url().'ticket-list';?>"><button class="main-btn1">Click Here to check tickets</button></a>
        <?php
      }
      else
      {
        ?>
          <button class="main-btn1" data-toggle="modal" data-target="#email-verfication">Click Here to Submit Your Raffle Tickets</button>
        <?php
      }
      ?>
    </div>
	
	  <!-- <div class="col-md-12 text-center mt-20">
	  <?php 
	  if($winners)
	  {
		  ?>
		  <!-- <a href="<?php //echo base_url().'winners';?>"><button class="main-btn1">Click Here to check winners</button></a> -->
		  <?php
	  }
	  ?>
    <!-- </div> -->
	
</div>
    </div>
</div>
<?php
if(!empty($products))
{
?>
<section class="raffle-prize-div-main">
    <div class="tour-operation">
        <div class="container">
            <div class="tour-head text-center">
                <div class="tour-head-title">
                    <h1>Available Raffle Prizes</h1>
                </div>
            </div>
            <div class="row">
              <?php
              if(!empty($products))
              {
                foreach ($products as $product) {
                  ?>
                  <div class="col-md-4 slider-button gift-detail-section" data-gift="<?php echo $product['GIFTID']; ?>">
                      <div class="prize-card">
                         <p class="prize-title"><?php echo ucfirst($product['gift_name']); ?></p>
                         <img src="<?php echo base_url().'uploads/products/'.$product['gift_image'];?>">
                         <p>Total Submitted Tickets - <?php echo $product['TotalTickets']; ?></p>
                      </div>
                  </div>
                  <?php
                }
              }
              ?>
                 <div >

            </div>
        </div>
    </div>
</section>
<?php
}elseif($winners){
	?>
	<section class="raffle-prize-div-main">
    <div class="tour-operation">
        <div class="container">
            <div class="tour-head text-center">
                <div class="tour-head-title">
                    <h1>Our Winners</h1>
                </div>
            </div>
            <div class="row">
                <?php 
                if(!empty($winners))
				{ 
				  foreach ($winners as $winner) 
				  {  
					echo "<br>";
					?>
					  <div class="col-md-4">
						<div class="prize-card">
						   <p class="prize-title"><?php echo ucfirst($winner['gift_name']); ?></p>
						   <p class="winner-tag">Winner</p>
						   <img src="<?php echo base_url().'uploads/products/'.$winner["gift_image"];?>">
						   <p class="prize-winner"><span class="winner-id">#<?php echo $winner['EMPLOYEEID'];?></span> <?php echo $winner['employee_fullname'];?></p>
						   
						   <span class="winner-id"><strong>Ticket No. : </strong><?php echo $winner['ticket_number'];?></span>
						</div>
					  </div>
					<?php
				  }
				}
                ?>
                
                
            </div>
        </div>
    </div>
</section>
	<?php
}
else{
?>
<section class="raffle-prize-div-main">
    <div class="tour-operation">
        <div class="container">
            <div class="tour-head text-center">
                <div class="tour-head-title">
                    <h1>No Raffle Prizes Open Yet!</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}
?>