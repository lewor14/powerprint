

<body>
	<section id="cart_items">
		<div class="container">
		

			
			<?php
			$status_for_delivery='';
				foreach($view as $view){
					$id= $view['user_id'];
					$fname= $view['user_fname'];
					$lname= $view['user_lname'];
					$house= $view['user_house'];
					$street= $view['user_street'];
					$barangay= $view['user_barangay'];
					$city= $view['user_city'];
					$region= $view['user_region'];
					
					$village= $view['user_village'];
					
					if($fname==''||$lname==''||$house==''||$street==''||$barangay==''||$city==''||$region==''){
						$status_for_delivery='not okay';
					}
					else{
						$status_for_delivery='okay';
					}
				}
				
				if($status_for_delivery == 'not okay'){
					
				?>
						<div class="shopper-info">
							<div class="status alert alert-danger">Please complete your billing information!</div>
								<a href="<?php echo base_url() ?>member/billing" class="btn btn-primary">Add Shipping Address</a>
							
						</div>
				<?php
				}
				else{
				?>
				
					<div class="shopper-info">
							<div class="status alert alert-success">
							Delivery to:
								<ul>
									<li><i>Name: </i><?php echo $fname." ".$lname;?></li>
									<li><i>House: </i><?php echo $house; ?></li>
									<li><i>Street: </i><?php echo $street; ?></li>
									<li><i>Barangay: </i><?php echo $barangay; ?></li>
									<li><i>City: </i><?php echo $city; ?></li>
									<li><i>Region: </i><?php echo $region; ?></li>
									<li><i>Village: </i><?php echo $village; ?></li>
								</ul>
							</div>
								
							
						</div>			
								
				
				<?php
				
				}
			?>
			
			
			<div class="review-payment">
				<h2>Payment Option</h2>
				&nbsp;
			</div>
			<?php 
				echo form_open_multipart("member/cart_out_valid"); 
			?>	
				<input type="hidden" name="id" value="<?php echo $id;?>">
				<input type="hidden" name="fname" value="<?php echo $fname;?>">
				<input type="hidden" name="lname" value="<?php echo $lname;?>">
				<input type="hidden" name="house" value="<?php echo $house;?>">
				<input type="hidden" name="street" value="<?php echo $street;?>">
				<input type="hidden" name="barangay" value="<?php echo $barangay;?>">
				<input type="hidden" name="city" value="<?php echo $city;?>">
				<input type="hidden" name="region" value="<?php echo $region;?>">
				<input type="hidden" name="village" value="<?php echo $village;?>">
				
						<?php 
							$notif=validation_errors('<p class="error">');
							if($notif!=""){
								echo "<div class=\"alert alert-danger\" role=\"alert\">";
								echo $notif;
								echo "</div>"; 
							}
						?>	
			<div class="payment-options">
					<span>
						<label>Deposit</label>
						<select name ="deposit">
								
									<option value="BDO">BDO</option>
									<option value="BPI">BPI</option>
									<option value="COD">Cash on Delivery</option>
								</select>
					</span>
					<br>
					<br>
					<br>
					<br>
					<span>
						<label>Delivery Option</label>
						<select name="delivery">
								
									<option value="Shipping">Shipping</option>
									<option value="Pick Up">Pick Up</option>
								</select>
					</span>
					
				<div class="register-req">
					<p>Kindly wait for an email for the account number.</p>
				</div>	
				
				<?php
				$set='';
					foreach($view2 as $view){
						if($view['cart_user_id']==$id&&$view['cart_status_checkout']!='1'){
							
							$set='okay';
						}
					}
				?>
				<?php
				if($status_for_delivery == 'not okay'||$set!='okay'){
				?>
					<input type="submit" name="submit" class="btn btn-primary pull-right" value="Pay Now" disabled>
				<?php
				}else{
				?>
					<input type="submit" name="submit" class="btn btn-primary pull-right" value="Pay Now">
				<?php
				}
				?>		
			</div>
			
		</form>
			
			
		</div>
	</section> <!--/#cart_items-->
</body>