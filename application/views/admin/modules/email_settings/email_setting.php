<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Edit Email Setting</h1>
                        <a href="<?php echo base_url().'admin/dashboard';?>" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
						
						<?php  if(@$this->session->flashdata("update_email_s")) { ?>
                        <div class="alert alert-success" >
                        <?php echo $this->session->flashdata("update_email_s"); ?>
                        </div>
                        <?php } ?>
                        <?php  if(@$this->session->flashdata("update_email_f")) { ?>
                        <div class="alert alert-warning" >
                        <?php echo $this->session->flashdata("update_email_f"); ?>
                        </div>
                        <?php } ?>
						
						
                        <form method="post" action="<?php echo base_url().'admin/email_setting/update_email';?>" id="emailform" enctype="multipart/form-data">
						
                        <input type="hidden" name="emailid" value="<?php echo $email['GSID'] ;?>">
                       
                        <div class="member-table">
                        <div class="form-box">
                        <div class="row">

                        <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Smtp host</label>
                        <input type="text" class="form-control" name="smtp_host" value="<?php echo $email['smtp_host'] ;?>" required>
                        </div>
                        </div>
						 <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Smtp user</label>
                        <input type="text" class="form-control" name="smtp_user" value="<?php echo $email['smtp_user'] ;?>" required>
                        </div>
                        </div>
						 <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Smtp password</label>
                        <input type="text" class="form-control" name="smtp_pass" value="<?php echo $email['smtp_pass'] ;?>" required>
                        </div>
                        </div>
						<div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Smtp port</label>
                        <input type="text" class="form-control" name="smtp_port" value="<?php echo $email['smtp_port'] ;?>" required>
                        </div>
                        </div>
						<div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Smtp crypto</label>
                        <input type="text" class="form-control" name="smtp_crypto" value="<?php echo $email['smtp_crypto'] ;?>" required>
                        </div>
                        </div>
						<div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Charset</label>
                        <input type="text" class="form-control" name="charset" value="<?php echo $email['charset'] ;?>" required>
                        </div>
                        </div>
						<div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Send from</label>
                        <input type="text" class="form-control" name="send_from" value="<?php echo $email['send_from'] ;?>" required>
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