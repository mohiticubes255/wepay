<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Edit Site Setting</h1>
                        <a href="<?php echo base_url().'admin/dashboard';?>" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
                        <form method="post" action="<?php echo base_url().'admin/site_setting/update_setting';?>" id="giftform" enctype="multipart/form-data">
						
                        <input type="hidden" name="site_id" value="<?php echo $site['SSID'] ;?>">
                        <input type="hidden" name="old_site_image" value="<?php echo $site['site_logo'] ;?>">
                        <div class="member-table">
                        <div class="form-box">
                        <div class="row">

                        <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Site Name</label>
                        <input type="text" class="form-control" name="site_name" value="<?php echo $site['site_name'] ;?>" required>
                        </div>
                        </div>


                        <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Site Address</label>
                        <input type="text" class="form-control" name="site_address" value="<?php echo $site['site_address'] ;?>" required>
                        </div>
                        </div>
						
						<div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Site Mail</label>
                        <input type="mail" class="form-control" name="site_mail" value="<?php echo $site['site_mail'] ;?>" required>
                        </div>
                        </div>
						
						<div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Site Contact</label>
                        <input type="text" class="form-control" name="site_contact" value="<?php echo $site['site_contact'] ;?>" required>
                        </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="site_image" accept="image/*">
                        </div>
                        </div>

                        

                        

                        </div>
                        </div>

                        <div class="col-md-12 text-right mb-4">
                        <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                        
                        
                        
                        </div>
                        </form>
                        </div>
                       </div>
                       
                        
                    </div>
                </main>