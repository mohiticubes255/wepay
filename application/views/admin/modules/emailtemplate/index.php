<main>        <div class="container-fluid">
            <div class="row">				<div class="col-md-6 col-sm-12">                    <h1 class="mt-4">Email template</h1>                </div>
                          
            </div>
            <?php if($this->session->userdata('message')) {  ?>
            <?php echo $this->session->userdata('message');?>
            <?php } ?> 
            <div class="panel">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Template ID</th>
                                    <th>Email Title</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody >
                                <?php                                
                                
                                if (!empty($list)) {
                                    $sno = 1;
                                    foreach ($list as $row) {                          
                                   ?>
                                            <tr>
                                                <td><?php echo $row['template_type'] ?></td>  
                                                <td> <?php echo $row['template_title'] ?></td>                                                
                                                <td class="text-right">
                                                    <a href="<?php echo base_url('admin/edit-manage-email-template/' . $row['template_id']); ?>" class="btn-primary btn-sm text-center"><i class="fas fa-pencil-alt"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                        
                                   $sno = $sno +1;
                                        }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="11"><p class="text-danger text-center m-b-0">No Records Found</p></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>					</div></main>
