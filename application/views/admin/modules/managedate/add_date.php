<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Add Date</h1>
                        
                        <a href="<?php echo base_url().'admin/dashboard';?>" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
                        <form method="post" action="<?php echo base_url().'admin/managedate/save_date';?>" id="giftform" enctype="multipart/form-data">
                        <div class="member-table">
                        <div class="form-box">
                        <div class="row">

                        <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="gift_date_title" required>
                        </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Opening Date</label>
                        <input type="text" class="form-control datetimepicker" name="gift_date_start" autocomplete="off"  required>
                        </div>
                        </div>
						
						<div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Closing Date</label>
                        <input type="text" class="form-control datetimepicker" name="gift_date_close" autocomplete="off" required>
                        </div>
                        </div>
						
						<div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Winner Announcement Date</label>
                        <input type="text" class="form-control datetimepicker" name="gift_date_winner_announce" autocomplete="off" required>
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