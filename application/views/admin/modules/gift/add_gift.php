<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Add Prize</h1>
                        
                        <a href="<?php echo base_url().'admin/dashboard';?>" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
                        <form method="post" action="<?php echo base_url().'admin/gifts/save_gift';?>" id="giftform" enctype="multipart/form-data">
                        <div class="member-table">
                        <div class="form-box">
                        <div class="row">

                        <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="gift_name" required>
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
								 <option value="<?php echo $date['GDID']; ?>" <?php if($n == 1){echo "selected"; } ?>><?php echo $date['gift_date_title']; ?></option>
								<?php
								$n++;
							}
						}
						else
						{
							?>
							<option value="" disabled selected>--Please update the upcoming date first!--</option>
							<?php
						}
						?>
						</select>
                        </div>
                        </div>

                        <!--<div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Opening Date</label>
                        <input type="text" class="form-control datetimepicker" name="gift_open_date" autocomplete="off"  required>
                        </div>
                        </div>
						
						<div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Closing Date</label>
                        <input type="text" class="form-control datetimepicker" name="gift_close_date" autocomplete="off" required>
                        </div>
                        </div>
						
						<div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Winner Announcement Date</label>
                        <input type="text" class="form-control datetimepicker" name="gift_winner_announce_date" autocomplete="off" required>
                        </div>
                        </div>-->
						
						<div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Banner Image</label>
                        <input type="file" class="form-control" name="gift_image" accept="image/*" required >
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
                        <label>Features</label>
                        <textarea class="form-control" name="gift_features" required></textarea>
                        </div>
                        </div>
						
						<input type="hidden" name="gift_ticket_limit" value="0">
						<!--<div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Tickets Limit</label>
                        <input type="number"  class="form-control" name="gift_ticket_limit" required>
                        </div>
                        </div>-->
						
						
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