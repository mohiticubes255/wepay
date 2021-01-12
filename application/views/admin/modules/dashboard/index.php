<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Employees </div>
                                        <div class="cricle-box"><?php echo count($employees); ?></div>
                  
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url().'admin/manage-employees';?>">More Info</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total Prizes</div>
                                        <div class="cricle-box"><?php echo count($gifts); ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url().'admin/manage-gifts';?>">More Info</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Unused Tickets</div>
                                        <div class="cricle-box"><?php echo count($unused_tickets);//count($tickets); ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url().'admin/manage-tickets';?>">More Info</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
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
                </main>