<div id="wrapper">
    <div class="bg-one bg-one-mobile">
        <div class="container">
           <div class="row">
               <div class="col-md-8 welcome-note">
                    <h1>Welcome WePayers and happy Holidays!</h1>
                    <p class="jar-text">Your have Points and raffle ticket in the grate virtual Wepay Scavenger Hunt  and now its's timeto win them! Click on the prizes below to submit your riffle tickets into that prize's virtual "jar", and one winner will be drawn fom eaach "jar" </p>
                    <p class="date-text">Be sure to have all of your ticket submitted by <b>26-08-2020</b> winners will be drawn on <b>21-09-2020</b></p>
                    <p class="bottom-text">Winners will be displayed on this page, and will receive an email directly.</p>
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
   
</div>
    </div>
</div>
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
                  $giftCheckerArr =array();
                  foreach ($winners as $winner) 
                  {  
                    echo "<br>";
                    if(!in_array($winner['GIFTID'],$giftCheckerArr))
                    {
                    ?>
                      <div class="col-md-4">
                        <div class="prize-card">
                           <p class="winner-tag">Winner</p>
                           <img src="<?php echo base_url().'uploads/products/'.$winner["gift_image"];?>">
                           <p class="prize-winner"><?php echo $winner['employee_fullname'];?></p>
                           <span class="winner-id">#<?php echo $winner['EMPLOYEEID'];?></span>
                        </div>
                      </div>
                    <?php
                    }
                  array_push($giftCheckerArr, $winner['GIFTID']);
                  }
                }
                ?>
                
                
            </div>
        </div>
    </div>
</section>