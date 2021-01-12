<main>
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <h1 class="mt-4">Manage Prizes Dates</h1>
                            </div>
                            <!--<div class="col-md-6 col-sm-12">							
								<a href="<?php echo base_url().'admin/add-date';?>" class="btn-success btn-sm text-center float-right">Add Date</a>
                            </div>-->
                        </div>
                        <?php  if(@$this->session->flashdata("add_date_s")) { ?>
							<div class="alert alert-success" >
							<?php echo $this->session->flashdata("add_date_s"); ?>
							</div>
							<?php } ?>
							<?php  if(@$this->session->flashdata("add_gift_f")) { ?>
							<div class="alert alert-warning" >
							<?php echo $this->session->flashdata("add_gift_f"); ?>
							</div>
							<?php } ?>
							<?php  if(@$this->session->flashdata("add_date_w")) { ?>
							<div class="alert alert-warning" >
							<?php echo $this->session->flashdata("add_date_w"); ?>
							</div>
							<?php } ?>
							<?php  if(@$this->session->flashdata("update_date_s")) { ?>
							<div class="alert alert-success" >
							<?php echo $this->session->flashdata("update_date_s"); ?>
							</div>
							<?php } ?>
							<?php  if(@$this->session->flashdata("update_date_f")) { ?>
							<div class="alert alert-warning" >
							<?php echo $this->session->flashdata("update_date_f"); ?>
							</div>
							<?php } ?>
							<?php  if(@$this->session->flashdata("delete_date_s")) { ?>
							<div class="alert alert-success" >
							<?php echo $this->session->flashdata("delete_date_s"); ?>
							</div>
							<?php } ?>
							<?php  if(@$this->session->flashdata("delete_date_f")) { ?>
							<div class="alert alert-danger" >
							<?php echo $this->session->flashdata("delete_date_f"); ?>
							</div>
							<?php } ?>
                        <div class="member-table">
                        <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
												<!--<th><input type="checkbox" id="selectall" /></th>-->
                                                <th>#</th>
                                                <th style="white-space: nowrap;">Title</th>
                                                <th style="white-space: nowrap;">Open Date</th>
                                                <th style="white-space: nowrap;">Close Date</th>
                                                <th style="white-space: nowrap;">Winner Announcement Date</th>
                                                <!--<th style="white-space: nowrap;">Status</th>-->
                                                <th style="white-space: nowrap;">Action</th>
                                                <!--<th>Status</th>-->
                                                
                                                
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                            <?php
                                            foreach ($dates as $date) {
                                                ?>
                                                <tr>
                                                    <!--<td><input type="checkbox" class="selectedId" name="selectedId" value="<?php echo $date['GDID']; ?>" /></td>-->
                                                    <td><?php echo $date['GDID']; ?></td>
                                                    <td><?php echo $date['gift_date_title']; ?></td>            
													<td><?php echo date('d-m-Y h:i A',strtotime($date['gift_date_start'])); ?></td>
                                                    <td><?php echo date('d-m-Y h:i A',strtotime($date['gift_date_close'])); ?></td>
                                                    <td><?php echo date('d-m-Y h:i A',strtotime($date['gift_date_winner_announce'])); ?></td>
                                                    <!--<td><div id="date-status-<?php echo $date['GDID']; ?>"><?php if($date['gift_date_status'] == 0){ ?><a href="#" class="btn-success btn-sm btn-block text-center" id="gift-status-<?php echo $gift['GDID']; ?>">Active</a> <?php }else{ ?> <a href="#" class="btn-danger btn-sm btn-block text-center" >Inactive</a> <?php } ?>
                                                    </div>
                                                    </td>-->
                                                    <td>
                                                    <a href="<?php echo base_url().'admin/edit-date/'.$date['GDID'];?>" class="btn-primary btn-sm text-center"><i class="fas fa-pencil-alt"></i></a>
                                        <!--<button style="font-size: 11px;" class="btn-danger btn-sm text-center delete_date" value="<?php echo $date['GDID']; ?>"><i class="fa fa-trash"></i></button>-->
                                    </td>
                                    <!--<td>
                                        <div class="dropdown">
                                          <button class="btn btn-success btn-sm dropdown-toggle btn-block text-center" type="button" data-toggle="dropdown">Change
                                          <span class="caret"></span></button>
                                          <ul class="dropdown-menu status-btn">
                                            <li><a href="#" class="date_status_active" data-status="0" data-date="<?php echo $date['GDID']; ?>">Active</a></li>
                                            <li><a href="#" class="date_status_inactive" data-status="1" data-date="<?php echo $date['GDID']; ?>">Inactive</a></li>
                                          </ul>
                                        </div>
                                    </td>-->
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