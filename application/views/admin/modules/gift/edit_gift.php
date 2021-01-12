<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Edit Prize</h1>
                        <a href="<?php echo base_url().'admin/dashboard';?>" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
                        <form method="post" action="<?php echo base_url().'admin/gifts/update_gift';?>" id="giftform" enctype="multipart/form-data">
                        <input type="hidden" name="gift_id" value="<?php echo $gift['GIFTID'] ;?>">
                        <input type="hidden" name="old_gift_image" value="<?php echo $gift['gift_image'] ;?>">
                        <div class="member-table">
                        <div class="form-box">
                        <div class="row">

                        <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="gift_name" value="<?php echo $gift['gift_name'] ;?>" required>
                        </div>
                        </div>
						<div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Date Title</label>
                        <select class="form-control" name="date_id" required>
						<?php
						if($dates)
						{
							$n= 1;
							foreach($dates AS $date)
							{
								?>
								 <option value="<?php echo $date['GDID']; ?>" <?php if($gift['dateID'] == $date['GDID']){echo "selected"; } ?>><?php echo $date['gift_date_title']; ?></option>
								<?php
								$n++;
							}
						}
						else
						{
							?>
							<option value="" disabled selected>--No Prize Dates added Please add it First!--</option>
							<?php
						}
						?>
						</select>
                        </div>
                        </div>
						<!--
                        <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Opening Date</label>
                        <input type="text" class="form-control datetimepicker" name="gift_open_date" value="<?php echo date('d/m/Y H:i:s',strtotime($gift['gift_open_date'])) ;?>" id="" autocomplete="off" required>
                        </div>
                        </div>
						
						<div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Closing Date</label>
                        <input type="text" class="form-control datetimepicker" name="gift_close_date" value="<?php echo date('d/m/Y H:i:s',strtotime($gift['gift_close_date'])) ;?>" id="" autocomplete="off" required>
                        </div>
                        </div>
						
						<div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Winner Announcement Date</label>
                        <input type="text" class="form-control datetimepicker" name="gift_winner_announce_date" value="<?php echo date('d/m/Y H:i:s',strtotime($gift['gift_winner_announce_date'])) ;?>" id="" autocomplete="off" required>
                        </div>
                        </div>	
						-->
						
                        <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                        <label>Features</label>
                        <textarea class="form-control" name="gift_features" required><?php echo $gift['gift_features'] ;?></textarea>
                        </div>
                        </div>
						<input type="hidden" name="gift_ticket_limit" value="0">
						<!--<div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Tickets Limit</label>
                        <input type="number"  class="form-control" name="gift_ticket_limit" value="<?php echo $gift['gift_ticket_limit'] ;?>">
                        </div>
                        </div>-->
						
						<div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Banner Image</label>
                        <input type="file" class="form-control" name="gift_image" accept="image/*">
                        </div>
                        </div>
						
						<div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Slider Images</label>
                        <input type="file"  class="form-control" name="files[]" accept="image/*" multiple/>
                        </div>
                        </div>
						
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
							<label>Slider Images</label>
								<div class="addimg">
								<ul>
								<?php
								foreach($images AS $image)
								{
									?>
									<li id="slide-img-<?php echo $image['GIMGID'];?>">
										<button type="button" class="removeImage" value="<?php echo $image['GIMGID'];?>"><i class="fas fa-window-close"></i></button>
										<img src="<?php echo base_url().'uploads/products/'.$image['gift_image'];?>" alt="">
									</li>
									<?php
								}
								?>
								</ul>
								</div>
							</div>
                        </div>

                        </div>
                        </div>

                        <div class="col-md-12 text-right mb-4">
                        <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                        
                        
                        
                        </div>
                        </form>
                        </div>
                       </div>
                       
                        
                    </div>
                </main>
				<style>
				
.addimg ul {
    margin: 0px;
    padding: 0;
    display: table;
    width: 100%;
}

.addimg ul li {
    display: inline-block;
    position: relative;
    width: 150px;
    float: left;
}

.addimg ul li button {
    padding: 0px;
    background: transparent;
    border: 0px;
    position: absolute;
    right: 0px;
    color: #ffffff;
    font-size: 36px;
    top: 0;
    line-height: 18px;
	outline:none;
}

.addimg ul li img {
    width: 100%;
}
				</style>