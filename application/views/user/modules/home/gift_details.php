

<div class="row">
          <div class="col-md-12">
           <table style="width: 100%;">
             <tr>
               <td><b>Name:</b></td>
               <td><?php echo $gift["gift_name"];?></td>
             </tr>
             <tr>
               <td><b>Smart Features:</b></td>
               <td><?php echo $gift["gift_features"];?></td>
             </tr>
           </table>
          </div>
           <div class="col-md-10 offset-md-1 mt-40">
            <h5 class="text-center">Other Photos</h5>
           <div class="slick-slider">
            <img src="<?php echo base_url().'uploads/products/'.$gift["gift_image"];?>">
            <img src="<?php echo base_url().'uploads/products/'.$gift["gift_image"];?>">
            <img src="<?php echo base_url().'uploads/products/'.$gift["gift_image"];?>">
           </div>

          </div>
          <div class="col-md-12 text-center">
            <button class="main-btn" data-dismiss="modal">Close</button>
          </div>
        </div>
		
		