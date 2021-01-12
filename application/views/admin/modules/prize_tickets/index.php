<?php
// var_dump($hairstylelists);
?>
<main>
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <h1 class="mt-4">Prize Tickets</h1>
                            </div>
                        </div>
                        
                        <div class="member-table">
                        <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th style="white-space: nowrap;">Gift Id</th>
                                                <th style="white-space: nowrap;">Gift Image</th>
                                                <th style="white-space: nowrap;">Gift Name</th>
                                                <th style="white-space: nowrap;">Ticket Number</th>
                                                <th style="white-space: nowrap;">Employee Email</th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                            <?php
                                            foreach ($prizes as $prize) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $prize["GIFTID"]; ?></td>
                                                    <td><img src="<?php echo base_url().'uploads/products/'.$prize['gift_image']; ?>" alt=""/></td>
                                                    <td><?php echo $prize['gift_name']; ?></td>
                                                    <td><?php echo $prize['ticket_number']; ?></td>
                                                    <td><?php echo $prize['employee_email']; ?></td>
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