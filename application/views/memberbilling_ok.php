<body>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center"> Add Billing/Shipping Address</h2>    			    				    				
				</div>			 		
			</div>    	
			<div class="shopper-informations">
				<div class="row">
							
					<div class="col-sm-12">
						<div class="shopper-info">
							<p>Billing/Shipping Address</p>
							
							<?php
								foreach($view as $view){
									$user_id= $view['user_id'];
									$user_house= $view['user_house'];
									$user_street= $view['user_street'];
									$user_village= $view['user_village'];
									$user_barangay= $view['user_barangay'];
									$user_city= $view['user_city'];
									$user_region= $view['user_region'];
									$user_ship_notes= $view['user_ship_notes'];
								}
							?>
							<?php 
							echo form_open_multipart("member/bill_valid/$user_id"); 
						?>	
							<div class="status alert alert-success">Successfully Added</div>
								<input type="text" name="house" placeholder="House/Building/Unit Number *" value="<?php echo $user_house;?>">
								<input type="text" name="street" placeholder="Street" value="<?php echo $user_street;?>">
								<input type="text" name="village" placeholder="Village/Subdivision" value="<?php echo $user_village;?>">	
								<input type="text" name="barangay" placeholder="Barangay * " value="<?php echo $user_barangay;?>">	
								<input type="text" name="city" placeholder="City * " value="<?php echo $user_city;?>">	
								<input type="text" name="region" placeholder="Region * " value="<?php echo $user_region;?>">	
							
							</div>
						</div>
					</div>
					
					<div class="col-sm-12">
						<div class="order-message">
							<p>Shipping Order</p>
							<textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"><?php echo $user_ship_notes;?></textarea>
						</div>	
					</div>
							  <input type="submit" name="submit" class="btn btn-primary pull-right" value="Save">
</form>
				</div>
			</div> 
    	</div>	
    </div><!--/#register-page-->
</body>