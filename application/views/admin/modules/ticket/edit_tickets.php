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
                       <h1 class="mt-4">Submited Tickets</h1>
                        <div class="member-table">
                        <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th style="white-space: nowrap;">#Ticket ID</th>
                                                <th style="white-space: nowrap;">Ticket Number</th>
                                                <th style="white-space: nowrap;">Prize Name</th>
												<th style="white-space: nowrap;">Prize Image</th> 
												<th style="white-space: nowrap;">Change Prize Jar</th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                            <?php
											$n=0;
                                            foreach ($usedtickets as $usedticket) {
                                                // var_dump($usedticket);
                                                ?>
                                                <tr>
                                                    <td><?php echo ++$n; //$usedticket['TICKETID']; ?></td>
                                                    <td><?php echo $usedticket['ticket_number']; ?></td>
                                                    <td><?php echo $usedticket['gift_name']; ?></td>
													<td><img id="jatImage-<?php echo $usedticket['TICKETID']; ?>" src="<?php echo base_url().'uploads/products/'.$usedticket['gift_image'];?>" alt=""></td>
													<td>
													<select class="form-control new-select jar-gift-ticket jar-ticket-<?php echo $usedticket['TICKETID']; ?>" data-gift="<?php echo $usedticket['GIFTID']; ?>" data-ticket="<?php echo $usedticket['TICKETID']; ?>" data-jar="<?php echo $usedticket['JARID']; ?>" data-ticket_no="<?php echo $usedticket['ticket_number']; ?>" name="jarticket" required >
													  <?php
													  if(!empty($gifts))
													  {
														foreach ($gifts as $gift) {
															if($gift[GIFTID] == $usedticket['jar_gift_id'])
															{
																$select = 'selected';
															}
															else
															{
																$select = '';
															}
														  ?>
														  <option class="show-list" value="<?php echo $gift['GIFTID']; ?>" <?php echo $select; ?>><?php echo ucfirst($gift['gift_name']); ?></option>
														  <?php
														}
													  }
													  ?>
													</select>
													</td>
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




