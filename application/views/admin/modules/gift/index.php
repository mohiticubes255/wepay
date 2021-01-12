<main>
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <h1 class="mt-4">Manage Prizes</h1>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a href="<?php echo base_url().'admin/add-gift';?>" class="btn-success btn-sm text-center float-right">Add Prize</a>
                            </div>
                        </div>
                        <?php  if(@$this->session->flashdata("add_gift_s")) { ?>
                        <div class="alert alert-success" >
                        <?php echo $this->session->flashdata("add_gift_s"); ?>
                        </div>
                        <?php } ?>
                        <?php  if(@$this->session->flashdata("add_gift_f")) { ?>
                        <div class="alert alert-warning" >
                        <?php echo $this->session->flashdata("add_gift_f"); ?>
                        </div>
                        <?php } ?>
                        <?php  if(@$this->session->flashdata("update_gift_s")) { ?>
                        <div class="alert alert-success" >
                        <?php echo $this->session->flashdata("update_gift_s"); ?>
                        </div>
                        <?php } ?>
                        <?php  if(@$this->session->flashdata("update_gift_f")) { ?>
                        <div class="alert alert-warning" >
                        <?php echo $this->session->flashdata("update_gift_f"); ?>
                        </div>
                        <?php } ?>
                        <?php  if(@$this->session->flashdata("delete_gift_s")) { ?>
                        <div class="alert alert-success" >
                        <?php echo $this->session->flashdata("delete_gift_s"); ?>
                        </div>
                        <?php } ?>
                        <?php  if(@$this->session->flashdata("delete_gift_f")) { ?>
                        <div class="alert alert-danger" >
                        <?php echo $this->session->flashdata("delete_gift_f"); ?>
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
                                                <th style="white-space: nowrap;">Image</th>
                                                <th style="white-space: nowrap;">Name</th>
                                                <th style="white-space: nowrap;">Features</th>
                                                <th style="white-space: nowrap;">Date Title</th>
                                                <th style="white-space: nowrap;">Status</th>
                                                <th style="white-space: nowrap;">Action</th>
                                                <th>Status</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                            <?php
                                            foreach ($gifts as $gift) {
                                                ?>
                                                <tr>
                                                    <td><input type="checkbox" class="selectedId" name="selectedId" value="<?php echo $gift['GIFTID']; ?>" /></td>
                                                    <td><?php echo $gift['GIFTID']; ?></td>
                                                    <td><img src="<?php echo base_url().'uploads/products/'.$gift['gift_image']; ?>" alt=""/></td>            <td><?php echo $gift['gift_name']; ?></td>
                                                    <td><?php echo $gift['gift_features']; ?></td>
                                                    <td><?php echo $gift['gift_date_title'];  ?></td>
                                                    <td><div id="employee-status-<?php echo $gift['GIFTID']; ?>"><?php if($gift['gift_status'] == 0){ ?><a href="#" class="btn-success btn-sm btn-block text-center" id="gift-status-<?php echo $gift['GIFTID']; ?>">Active</a> <?php }else{ ?> <a href="#" class="btn-danger btn-sm btn-block text-center" >Inactive</a> <?php } ?>
                                                    </div>
                                                    </td>
                                                    <td>
                                                    <a href="<?php echo base_url().'admin/edit-gift/'.$gift['GIFTID'];?>" class="btn-primary btn-sm text-center"><i class="fas fa-pencil-alt"></i></a>
                                        <button style="font-size: 11px;" class="btn-danger btn-sm text-center delete_gift" value="<?php echo $gift['GIFTID']; ?>"><i class="fa fa-trash"></i></button>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                          <button class="btn btn-success btn-sm dropdown-toggle btn-block text-center" type="button" data-toggle="dropdown">Change
                                          <span class="caret"></span></button>
                                          <ul class="dropdown-menu status-btn">
                                            <li><a href="#" class="gift_status_active" data-status="0" data-gift="<?php echo $gift['GIFTID']; ?>">Active</a></li>
                                            <li><a href="#" class="gift_status_inactive" data-status="1" data-gift="<?php echo $gift['GIFTID']; ?>">Inactive</a></li>
                                          </ul>
                                        </div>
                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                            
                                        <tfoot>
                                            <tr>
                                                <th colspan="8">All</th>
                                                <th>
                                                  <div class="dropdown">
                                                  <button class="btn btn-success btn-sm dropdown-toggle btn-block text-center" type="button" data-toggle="dropdown" aria-expanded="false">Change
                                                  <span class="caret"></span></button>
                                                  <ul class="dropdown-menu status-btn" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 31px, 0px);">
                                                    <li><a href="javascript:;" data-status="0" id="activeAllgifts">Active</a></li>
                                                    <li><a href="javascript:;" data-status="1" id="inactiveAllgifts">Inactive</a></li>
                                                    <li><a href="javascript:;" id="deleteAllgifts">Delete</a></li>
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