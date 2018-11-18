<body>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">View Orders</h2>    			    				    				
				</div>			 		
			</div>    	
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12">
						<div class="shopper-info">
							
						
							<table class="table table-hover">
								
								<th>Name</th>
								<th>Date</th>
								<th>View</th>
								<th></th>
							
							
							<?php 
							
								foreach($view as $view){
								
									$prod_id=$view['cart_product_id'];
									$id=$view['cart_id'];
									
									$prod_fname=$view['cart_checkout_fname'];
									$prod_lname=$view['cart_checkout_lname'];
									
									$timestamp=strtotime($view['cart_date']);
									$month=date('M', $timestamp);
									$day=date('d', $timestamp);
									$year=date('Y', $timestamp);
									$hour=date('G', $timestamp);
									$minute=date('i', $timestamp);
									$ap=date('a', $timestamp);
									
									echo "<tr>";
										
										echo "<td>".$prod_fname." ".$prod_lname."</td>";
										echo "<td>";
											echo $month." ".$day.", ".$year." | ".$hour." : ".$minute." : ".$ap;
											
										echo "</td>";
										echo "<td>";
										?>
											
											<a href="<?php echo base_url() ?>admin/vieworder_info/<?php echo $id?>">View Order Details</a>
										<?php
										echo "</td>";
										echo "<td>";
										?>
											<a class="cart_quantity_delete" href="<?php echo base_url() ?>admin/delete_order/<?php echo $id?>"><i class="fa fa-times"></i></a>
										<?php
										echo "</td>";
									echo "</tr>";
									
								}
							?>
							</table>
						</div>
					</div>
							
					</div>
					
											
				</div>
			</div> 
    	</div>	
    </div><!--/#register-page-->
</body>