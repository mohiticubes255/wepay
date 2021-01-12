<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Add Employee</h1>
                        
                        <a href="<?php echo base_url().'admin/dashboard';?>" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
                        <form method="post" action="<?php echo base_url().'admin/employees/save_employee';?>" id="employeform" enctype="multipart/form-data">
                        <div class="member-table">
                        <div class="form-box">
                        <div class="row">

                        <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" name="employee_fullname" required>
                        </div>
                        </div>


                        <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="employee_email" required>
                        </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                        <label>Join Date</label>
                        <input type="date" class="form-control" name="employee_join_date" required max="<?php echo date('Y-m-d');?>">
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