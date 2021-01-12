<main>
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <h1 class="mt-4">Manage Tickets</h1>
                            </div>
                        </div>
                       <h1 class="mt-4">Unused Tickets</h1>
                        
					    <?php  if(@$this->session->flashdata("delete_ticket_s")) { ?>
                        <div class="alert alert-success" >
                        <?php echo $this->session->flashdata("delete_ticket_s"); ?>
                        </div>
                        <?php } ?>
                        <?php  if(@$this->session->flashdata("delete_ticket_f")) { ?>
                        <div class="alert alert-warning" >
                        <?php echo $this->session->flashdata("delete_ticket_f"); ?>
                        </div>
                        <?php } ?>
						
                        <div class="member-table">
                        <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th style="white-space: nowrap;">#Ticket ID</th>
                                                <th style="white-space: nowrap;">Ticket Number</th>
                                                <th style="white-space: nowrap;">Action</th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                            <?php
											$n=0;
                                            foreach ($unusedtickets as $unusedticket) {
                                                // var_dump($usedticket);
                                                ?>
                                                <tr>
                                                    <td><?php echo ++$n; //$usedticket['TICKETID']; ?></td>
                                                    <td><?php echo $unusedticket['ticket_number']; ?></td>
                                                    <td><button style="font-size: 11px;" class="btn-danger btn-sm text-center delete_unusedticket" value="<?php echo $unusedticket['TICKETID']; ?>"><i class="fa fa-trash"></i></button></td>
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




