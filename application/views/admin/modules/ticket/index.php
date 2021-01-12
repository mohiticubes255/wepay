<main>
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <h1 class="mt-4">Manage Tickets</h1>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <button data-target="#give-tickets-modal" data-toggle="modal" class="btn-success btn-sm text-center float-right">Add Tickets</button>
                            </div>
                        </div>
                       
                        <div class="member-table">
                        <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th style="white-space: nowrap;">#Employee ID</th>
                                                <th style="white-space: nowrap;">Employee Name</th>
                                                <th style="white-space: nowrap;">Employee E-Mail</th>
												<th style="white-space: nowrap;">Employee Total Tickets</th> 
												<th style="white-space: nowrap;">Employee Un-used Tickets</th>
                                                <th style="white-space: nowrap;">Employee Used Tickets</th>
                                                <!--<th style="white-space: nowrap;">Action</th>-->
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                            <?php
                                            foreach ($tickets as $ticket) {
                                                // var_dump($ticket);
                                                ?>
                                                <tr>
                                                    <td><?php echo $ticket['EMPLOYEEID']; ?></td>
                                                    <td><?php echo $ticket['employee_fullname']; ?></td>
                                                    <td><?php echo $ticket['employee_email']; ?></td>
													<td><?php echo $ticket['TotalTickes']; ?></td>
													<td><a href="<?php echo base_url('admin/edit-employee-unused-tickets/' . $ticket['EMPLOYEEID']); ?>" class="btn-primary btn-sm text-center"><?php echo $ticket['TotalUnusedTickes']; ?></a></td>
                                                    <td><a href="<?php echo base_url('admin/edit-employee-tickets/' . $ticket['EMPLOYEEID']); ?>" class="btn-primary btn-sm text-center"><?php echo $ticket['TotalUsedTickes']; ?></a></td>
                                                    <!--<td><a href="<?php echo base_url('admin/edit-employee-tickets/' . $ticket['EMPLOYEEID']); ?>" class="btn-primary btn-sm text-center"><i class="fas fa-pencil-alt"></i></a></td></td>-->
                                                </tr>
                                                <?php
                                            }
                                            ?>

                                        </tbody>
                                        
                                        
                                    </table>
                                </div>
                       </div>
                       
                        
                    </div>
                </main>

<!-- Give Ticket Modal Start-->
<div id="give-tickets-modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Add Tickest</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form method="post" id="ticket-form">
        <div class="row">
    
    <div class="col-md-6">
<div class="form-group">
<label>Select Employee</label>

<select class="form-control" name="employeeId">
    <option value="" selected="" disabled="">--Select Employee--</option>
    <?php
    foreach ($employees as $employee)
    {
       ?>
        <option value="<?php echo $employee['EMPLOYEEID'];?>"><?php echo ucfirst($employee['employee_fullname'])." (".$employee['employee_email'].")";?></option>
       <?php
    }
    ?>
</select>


</div>
</div>


<div class="col-md-6">
<div class="form-group">
<label>Tickets</label>

<input type="number" class="form-control" name="tickets" />


</div>
</div>
    
    
            
          
            
    <div class="col-md-12 text-right">
    <button class="btn btn-primary" type="submit">Save</button>
    </div>

    </div>
    </form>
      </div>
      
    </div>

  </div>
</div>
<!-- Give Ticket Modal End-->


