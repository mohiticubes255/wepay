<?php
// var_dump($hairstylelists);
?>
<main>
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <h1 class="mt-4">Manage Content</h1>
                            </div>
                        </div>
                       
                        <?php  if(@$this->session->flashdata("update_content_s")) { ?>
                        <div class="alert alert-success" >
                        <?php echo $this->session->flashdata("update_content_s"); ?>
                        </div>
                        <?php } ?>
                        <?php  if(@$this->session->flashdata("update_content_f")) { ?>
                        <div class="alert alert-warning" >
                        <?php echo $this->session->flashdata("update_content_f"); ?>
                        </div>
                        <?php } ?>
                        
                        <div class="member-table">
                        <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            
                                                
                                                <th>#</th>
                                                <th style="white-space: nowrap;">Heading</th>
                                                <th style="white-space: nowrap;">Para</th>
                                                <th style="white-space: nowrap;">Para1</th>
                                                <th style="white-space: nowrap;">Para2</th>
                                                <th style="white-space: nowrap;">Heading2</th>
                                                <th>Action</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                            <?php
                                            foreach ($content as $row) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['id']; ?></td>
                                                    <td><?php echo $row['heading']; ?></td>
                                                    <td><?php echo $row['para']; ?></td>
                                                    <td><?php echo $row['para1']; ?></td>
                                                    <td><?php echo $row['para2']; ?></td>
                                                    <td><?php echo $row['heading2']; ?></td>
                                                    <td> <a href="<?php echo base_url().'admin/manage_content/edit_content/'.$row['id'];?>" class="btn-primary btn-sm text-center"><i class="fas fa-pencil-alt"></i>Edit</a></td>
                                                    
                                    
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