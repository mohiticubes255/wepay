<div id="wrapper">
    <div class="bg-one bg-one-mobile" style="align-items: center;background-image: url(<?php echo base_url().'assets/';?>images/banner2.jpg);">
        <div class="container">
           <div class="row">
               <div class="col-md-10 offset-md-1 mt-40">
                    <div class="icon-div">
                        <!--<img src="<?php echo base_url().'assets/';?>images/logo1.png">-->
                        <div class="row mt-40">
                          <div class="col-md-4">
                            <div class="icon-cont">
                              <img src="<?php echo base_url().'assets/';?>images/money.png">
                              <p>Earn tickets</p>
                            </div>
                          </div>
                          <div class="col-md-4" style="position: relative;">
                            <div class="icon-cont-first"><img src="<?php echo base_url().'assets/';?>images/line.png"></div>
                            <div class="icon-cont">
                               <img src="<?php echo base_url().'assets/';?>images/pot.png">
                              <p>Submit tickets<br> for raffle prizes</p>
                            </div>
                            <div class="icon-cont-second"><img src="<?php echo base_url().'assets/';?>images/line.png"></div>
                          </div>
                          <div class="col-md-4">
                            <div class="icon-cont">
                               <img src="<?php echo base_url().'assets/';?>images/jump.png">
                              <p>Winners drawn<br><?php echo date('M d' , strtotime($dates['gift_date_winner_announce'])); ?> </p>
                            </div>
                          </div>
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
          <?php 
		  
          // if(!empty($submitedTickets))
          // {
          ?>
              <div class="row">
			  <div class="col-md-12 mt-40 text-center">
                  <p class="mt-20"><b>Your Total Unused <?php echo count($tickets);?> Tickets</b> | <b>Your Total Used <?php echo count($submitedTickets);?> Tickets</b></p>
               </div>
                <table class="table ticket-list">
                  <thead>
                    <tr>
                      <th style="width: 40%" align="center"><h4>My tickets</h4></th>
                      <th style="width: 40%" align="center"><h4>Prize Name</h4></th>
                      <th style="width: 20%" align="center"><h4>My Prizes</h4></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
					  $tn = 0;
                      foreach ($submitedTickets as $sTickets) {
                        ?>
                        <tr>
						
						  <td align="center">
						  
                            <div class="ticket-main">
                              <h4 class="serial-num"><?php echo ++$tn; ?></h4>
                            <div class="ticket-first"></div>
                            <div class="ticket-div">
                              <p>Ticket No.</p>
                              <span><?php echo $sTickets['ticket_number']; ?></span>
                            </div>
                            <div class="ticket-second"></div>
                          </div>
                          </td>
                          <td align="center">
                            <select class="form-control new-select" disabled >
                              <option class="show-list" value="" selected disabled><?php echo $sTickets['gift_name']; ?></option>
                              
                            </select>
                          </td>
                          <td align="center">
                             <div class="prize-card">
                             <img  src="<?php echo base_url().'uploads/products/'.$sTickets['gift_image'];?>">
                          </div>
                          </td>
                        </tr>
                        <?php
                      }

                    ?>
					
					<?php 
		  
          if(!empty($tickets))
          {
          ?>

          <form method="post" id="submit-gift" action="<?php echo base_url().'ticket_list/submit_gift'; ?>">
                
                    <?php 
                    if(!empty($tickets))
                    {
					  $tn = $tn;
                      foreach ($tickets as $ticket) {
                        ?>
                        <input type="hidden" name="tickets[]" value="<?php echo $ticket['ticket_number']; ?>">
                        <input type="hidden" name="gift_tickets[]" id="gift_tickets-<?php echo $ticket['TICKETID']; ?>">
                        <tr>
						
						  <td align="center">
						  
                            <div class="ticket-main">
                              <h4 class="serial-num"><?php echo ++$tn; ?></h4>
                            <div class="ticket-first"></div>
                            <div class="ticket-div">
                              <p>Ticket No.</p>
                              <span><?php echo $ticket['ticket_number']; ?></span>
                            </div>
                            <div class="ticket-second"></div>
                          </div>
                          </td>
                          <td align="center">
                            <select class="form-control new-select set-gift-ticket ticket-<?php echo $ticket['TICKETID']; ?>" data-ticket="<?php echo $ticket['TICKETID']; ?>" data-ticket_no="<?php echo $ticket['ticket_number']; ?>" name="giftids[]" >
                              <option class="show-list" value="" selected disabled>--SELECT PRIZE--</option>
                              <?php
                              if(!empty($products))
                              {
                                foreach ($products as $product) {
                                  ?>
                                  <option class="show-list" value="<?php echo $product['GIFTID']; ?>"><?php echo ucfirst($product['gift_name']); ?></option>
                                  <?php
                                }
                              }
                              ?>
                            </select>
                          </td>
                          <td align="center">
                             <div class="prize-card">
                             <img id="giftImage-<?php echo $ticket['TICKETID']; ?>" src="<?php echo base_url().'assets/';?>images/question_mark.png">
                          </div>
                          </td>
                        </tr>
                        <?php
                      }
                    }
                    ?>
                    

                  </tbody>
                </table>
                <div class="col-md-12 mt-40 text-center">
                  <button class="main-btn" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <?php
      }
	  ?>
                    

                  </tbody>
                </table>
                
        </div>
        <?php
      // }
      // else
      // {
        ?>
        
        <?php
      // }
      ?>
    </div>

</section>