<?php
// var_dump($hairstylelists);
?>
<main>
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <h1 class="mt-4">Manage Employees</h1>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a href="<?php echo base_url().'admin/add-employee';?>" class="btn-success btn-sm text-center float-right">Add Employee</a>
								<button data-target="#add-bulk-employees" data-toggle="modal" class="btn-success btn-sm text-center float-right">Add Employee With .XLSX</button>
							</div>
                        </div>
                        <?php  if(@$this->session->flashdata("add_employee_s")) { ?>
                        <div class="alert alert-success" >
                        <?php echo $this->session->flashdata("add_employee_s"); ?>
                        </div>
                        <?php } ?>
                        <?php  if(@$this->session->flashdata("add_employee_f")) { ?>
                        <div class="alert alert-warning" >
                        <?php echo $this->session->flashdata("add_employee_f"); ?>
                        </div>
                        <?php } ?>
						
						<?php  if(@$this->session->flashdata("bulk_add_s")) { ?>
                        <div class="alert alert-success" >
                        <?php echo $this->session->flashdata("bulk_add_s"); ?>
                        </div>
                        <?php } ?>
                        <?php  if(@$this->session->flashdata("bulk_add_f")) { ?>
                        <div class="alert alert-warning" >
                        <?php echo $this->session->flashdata("bulk_add_f"); ?>
                        </div>
                        <?php } ?>
						
                        <?php  if(@$this->session->flashdata("update_employee_s")) { ?>
                        <div class="alert alert-success" >
                        <?php echo $this->session->flashdata("update_employee_s"); ?>
                        </div>
                        <?php } ?>
                        <?php  if(@$this->session->flashdata("update_employee_f")) { ?>
                        <div class="alert alert-warning" >
                        <?php echo $this->session->flashdata("update_employee_f"); ?>
                        </div>
                        <?php } ?>
                        <?php  if(@$this->session->flashdata("delete_employee_s")) { ?>
                        <div class="alert alert-success" >
                        <?php echo $this->session->flashdata("delete_employee_s"); ?>
                        </div>
                        <?php } ?>
                        <?php  if(@$this->session->flashdata("delete_employee_f")) { ?>
                        <div class="alert alert-danger" >
                        <?php echo $this->session->flashdata("delete_employee_f"); ?>
                        </div>
                        <?php } ?>
                        <div class="member-table">
                        <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th> 
                                                <input type="checkbox" id="selectall" /></th>
                                                <th>#</th>
                                                <th style="white-space: nowrap;">Fullname</th>
                                                <th style="white-space: nowrap;">Email</th>
                                                <th style="white-space: nowrap;">Staus</th>
                                                <th style="white-space: nowrap;">Action</th>
                                                <th>Status</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                            <?php
                                            foreach ($employees as $employee) {
                                                ?>
                                                <tr>
                                                    <td><input type="checkbox" class="selectedId" name="selectedId" value="<?php echo $employee['EMPLOYEEID']; ?>" /></td>
                                                    <td><?php echo $employee['EMPLOYEEID']; ?></td>
                                                    <td><?php echo $employee['employee_fullname']; ?></td>
                                                    <td><?php echo $employee['employee_email']; ?></td>
                                                    <td><div id="employee-status-<?php echo $employee['EMPLOYEEID']; ?>"><?php if($employee['employee_status'] == 0){ ?><a href="#" class="btn-success btn-sm btn-block text-center" id="employee-status-<?php echo $employee['EMPLOYEEID']; ?>">Active</a> <?php }else{ ?> <a href="#" class="btn-danger btn-sm btn-block text-center" >Inactive</a> <?php } ?>
                                                    </div>
                                                    </td>
                                                    <td>
                                                    <a href="<?php echo base_url().'admin/edit-employee/'.$employee['EMPLOYEEID'];?>" class="btn-primary btn-sm text-center"><i class="fas fa-pencil-alt"></i></a>
                                        <button style="font-size: 11px;" class="btn-danger btn-sm text-center delete_employee" value="<?php echo $employee['EMPLOYEEID']; ?>"><i class="fa fa-trash"></i></button>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                          <button class="btn btn-success btn-sm dropdown-toggle btn-block text-center" type="button" data-toggle="dropdown">Change
                                          <span class="caret"></span></button>
                                          <ul class="dropdown-menu status-btn">
                                            <li><a href="#" class="employee_status_active" data-status="0" data-employee="<?php echo $employee['EMPLOYEEID']; ?>">Active</a></li>
                                            <li><a href="#" class="employee_status_inactive" data-status="1" data-employee="<?php echo $employee['EMPLOYEEID']; ?>">Inactive</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                            
                                        <tfoot>
                                            <tr>
                                                <th colspan="6">All</th>
                                                <th>
                                                  <div class="dropdown">
                                                  <button class="btn btn-success btn-sm dropdown-toggle btn-block text-center" type="button" data-toggle="dropdown" aria-expanded="false">Change
                                                  <span class="caret"></span></button>
                                                  <ul class="dropdown-menu status-btn" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 31px, 0px);">
                                                    <li><a href="javascript:;" data-status="0" id="activeAllemployees">Active</a></li>
                                                    <li><a href="javascript:;" data-status="1" id="inactiveAllemployees">Inactive</a></li>
                                                    <li><a href="javascript:;" id="deleteAllemployees">Delete</a></li>
                                                  </ul>
                                                </div>
                                              </th>
                                            </tr>
                                        </tfoot>
                                        </tbody>
                                        
                                        
                                    </table>
                                </div>
                       </div>
                       
                        
                    </div>
                </main>
				
	
<!-- Add Bulk Employees-->
<div id="add-bulk-employees" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Add Tickest</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row">
    
    <div class="col-md-6">
<div class="form-group">
<label>Choose *.XLSX</label>

<form method="post" action="<?php echo base_url().'admin/employees/addBulkEmployees';?>" enctype="multipart/form-data">
<input type="file" class="form-control" name="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required>



</div>
</div>


<div class="col-md-6">
<div class="form-group">
<a href="<?php echo base_url().'uploads/employees.xlsx'; ?>" >Sample XLSX File.</a>
</div>
</div>
    
    
            
          
            
    <div class="col-md-12 text-right">
    <button class="btn btn-primary" type="submit">Add</button>
    </div>

    </div>
    </form>
      </div>
      
    </div>

  </div>
</div>
<!-- Give Ticket Modal End-->	