<?php
// var_dump($hairstylelists);
?>
<main>
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <h1 class="mt-4">Site Setting</h1>
                            </div>
                        </div>
                       
                        <?php  if(@$this->session->flashdata("update_site_s")) { ?>
                        <div class="alert alert-success" >
                        <?php echo $this->session->flashdata("update_site_s"); ?>
                        </div>
                        <?php } ?>
                        <?php  if(@$this->session->flashdata("update_site_f")) { ?>
                        <div class="alert alert-warning" >
                        <?php echo $this->session->flashdata("update_site_f"); ?>
                        </div>
                        <?php } ?>
                        
                        <div class="member-table">
                        <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            
                                                
                                                <th>#</th>
                                                <th style="white-space: nowrap;">Site Log</th>
                                                <th style="white-space: nowrap;">Site Name</th>
                                                <th style="white-space: nowrap;">Site Address</th>
                                                <th style="white-space: nowrap;">site Mail</th>
                                                <th style="white-space: nowrap;">Site Contact</th>
                                                <th>Action</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                            <?php
                                            foreach ($site as $row) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['SSID']; ?></td>
                                                    <td><img src="<?php echo base_url().'assets/images/'.$row['site_logo']; ?>" alt=""/></td>
                                                    <td><?php echo $row['site_name']; ?></td>
                                                    <td><?php echo $row['site_address']; ?></td>
                                                    <td><?php echo $row['site_mail']; ?></td>
                                                    <td><?php echo $row['site_contact']; ?></td>
                                                    <td> <a href="<?php echo base_url().'admin/site_setting/edit_setting/'.$row['SSID'];?>" class="btn-primary btn-sm text-center"><i class="fas fa-pencil-alt"></i>Edit</a></td>
                                                    
                                    
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