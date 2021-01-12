<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Edit Content</h1>
                        <a href="<?php echo base_url().'admin/dashboard';?>" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
                        <form method="post" action="<?php echo base_url().'admin/manage_content/update_content';?>" id="giftform" enctype="multipart/form-data">
						
                        <input type="hidden" name="id" value="<?php echo $content['id'] ;?>">
                       
                        <div class="member-table">
                        <div class="form-box">
                        <div class="row">

                        <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Heading</label>
                        <input type="text" class="form-control" name="heading" value="<?php echo $content['heading'] ;?>" required>
                        </div>
                        </div>


                        <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Para</label>
                        <textarea class="form-control" name="para" rows="3" required><?php echo $content['para'] ;?> </textarea>
                        </div>
                        </div>
						
						<div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Para1</label>
                        <textarea class="form-control" name="para1" rows="3" > <?php echo $content['para1'] ;?> </textarea>
                        </div>
                        </div>
						
						<div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Para2</label>
                        <textarea class="form-control" name="para2" rows="3" > <?php echo $content['para2'] ;?> </textarea>
                        </div>
                        </div>
						
						<div class="col-md-6 col-sm-12">
                        <div class="form-group">
                        <label>Heading2</label>
                        <input type="text" class="form-control" name="heading2" value="<?php echo $content['heading2'] ;?>" required>
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