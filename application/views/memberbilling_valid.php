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
						<?php 
							$notif=validation_errors('<p class="error">');
							if($notif!=""){
								echo "<div class=\"alert alert-danger\" role=\"alert\">";
								echo $notif;
								echo "</div>"; 
							}
						?>
								<input type="text" name="house" placeholder="House/Building/Unit Number *" value="<?php echo set_value('house'); ?>">
								<input type="text" name="street" placeholder="Street" value="<?php echo set_value('street'); ?>">
								<input type="text" name="village" placeholder="Village/Subdivision" value="<?php echo set_value('village'); ?>">	
								<input type="text" name="barangay" placeholder="Barangay * " value="<?php echo set_value('barangay'); ?>">	
								<input type="text" name="city" placeholder="City * " value="<?php echo set_value('city'); ?>">	
								<input type="text" name="region" placeholder="Region * " value="<?php echo set_value('region'); ?>">	
							
							</div>
						</div>
					</div>
					
					<div class="col-sm-12">
						<div class="order-message">
							<p>Shipping Order</p>
							<textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"><?php echo set_value('message'); ?></textarea>
						</div>	
					</div>
							  <input type="submit" name="submit" class="btn btn-primary pull-right" value="Save">
</form>
				</div>
			</div> 
    	</div>	
    </div><!--/#register-page-->
</body>