

<body>

	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Order Details</h2>    			    				    				
				</div>			 		
			</div>    	
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-8">
						<div class="shopper-info">
							<p>Samples Information</p>
							<?php 
								foreach($view as $view){
									$id=$view['cart_id'];
								
									//customer info
									$fname=$view['cart_checkout_fname'];
									$lname=$view['cart_checkout_lname'];
									
									$user_id=$view['cart_user_id'];
									
									$house=$view['cart_checkout_house'];
									$street=$view['cart_checkout_street'];
									$barangay=$view['cart_checkout_barangay'];
									$city=$view['cart_checkout_city'];
									$region=$view['cart_checkout_region'];
									$village=$view['cart_checkout_village'];
									
									$data=$view['cart_date'];
									
									$product_id=$view['cart_product_id'];
									$size=$view['cart_product_size'];
									$quantity=$view['cart_product_quantity'];
									
									$deposit=$view['cart_checkout_payment_mode'];
									$delivery=$view['cart_checkout_delivery'];
									
									$timestamp=strtotime($view['cart_date']);
									$month=date('M', $timestamp);
									$day=date('d', $timestamp);
									$year=date('Y', $timestamp);
									$hour=date('G', $timestamp);
									$minute=date('i', $timestamp);
									$ap=date('a', $timestamp);
									
									$track_stat=$view['cart_status_tracking'];
								}
							
							?>
							<?php
							
								foreach($product as $product){
								
									if($product['product_id']==$product_id){
										$product_code=$product['product_code'];
										$product_img=$product['product_img'];
										$product_name=$product['product_name'];
										$product_price=$product['product_price'];
										$product_category=$product['product_category'];
									}
								}
							?>
							<table class="table table-hover">
								<th colspan="2">Product Information</th>
								<tr>
									<td>Product Code </td>
									<td><?php echo $product_code; ?></td>
								</tr>
								<tr>
									<td>Product Name</td>
									<td><?php echo $product_name; ?></td>
								</tr>
								<tr>
									<td>Product Image </td>
									<?php if ($product_img!=''){?>
									<td><img src="<?php echo base_url() ?>uploads/<?php echo $product_img;?>" width="90" height="90"></td>
									<?php }else{?>
									<td><img src="<?php echo base_url() ?>uploads/logo.png" width="90" height="90"></td>
									<?php }?>
									
								</tr>
								<tr>
									<td>Product Price </td>
									<td><?php echo $product_price; ?></td>
								</tr>
								<tr>
									<td>Product Category </td>
									<td><?php echo $product_category; ?></td>
								</tr>
								
							</table>
							<table class="table table-hover">
								<th colspan="2">Order Information</th>
								<tr>
									<td>Product Size</td>
									<td><?php echo $size; ?></td>
								</tr>
								<tr>
									<td>Product Quantity</td>
									<td><?php echo $quantity; ?></td>
								</tr>
							</table>
							<table class="table table-hover">
								<th colspan="2">Customer Information</th>
								<tr>
									<td>Name</td>
									<td><?php echo $fname." ".$lname; ?></td>
								</tr>
								<tr>
									<td>House</td>
									<td><?php echo $house; ?></td>
								</tr>
								<tr>
									<td>Street</td>
									<td><?php echo $street; ?></td>
								</tr>
								<tr>
									<td>Barangay</td>
									<td><?php echo $barangay; ?></td>
								</tr>
								<tr>
									<td>City</td>
									<td><?php echo $city; ?></td>
								</tr>
								<tr>
									<td>Region</td>
									<td><?php echo $region; ?></td>
								</tr>
								<tr>
									<td>Village</td>
									<td><?php echo $village; ?></td>
								</tr>
							</table>	
							<table class="table table-hover">
								<th colspan="2">Delivery Information</th>
								<tr>
									<td>Date Received</td>
									<td><?php echo $month." ".$day.", ".$year." | ".$hour." : ".$minute." : ".$ap; ?></td>
								</tr>
								<tr>
									<td>Payment Mode</td>
									<td><?php echo $deposit; ?></td>
								</tr>
								<tr>
									<td>Delivery Option</td>
									<td><?php echo $delivery; ?></td>
								</tr>
								<tr>
									<td>Order Track</td>
									<td>
										<label>
											<?php
											echo $track_stat;
											echo form_open_multipart("admin/order_track"); 
											?>
											
												<input type="hidden" name="id" value="<?php echo $id;?>" />
												<select name="track">
												<?php
												if($track_stat=='Delivered'){
												?>
													<option value="Delivered" selected>Delivered</option>
													<option value="Shipped">Shipped</option>
													<option value="Processing">Processing</option>
													<option value="Pending">Pending</option>
												<?php	
												}elseif($track_stat=='Shipped'){
												?>
													<option value="Delivered">Delivered</option>
													<option value="Shipped" selected>Shipped</option>
													<option value="Processing">Processing</option>
													<option value="Pending">Pending</option>
												<?php	
												}elseif($track_stat=='Processing'){
												?>
													<option value="Delivered">Delivered</option>
													<option value="Shipped">Shipped</option>
													<option value="Processing" selected>Processing</option>
													<option value="Pending">Pending</option>
												<?php	
												}
												elseif($track_stat=='Pending'||$track_stat==''){	
												?>
													<option value="Delivered">Delivered</option>
													<option value="Shipped">Shipped</option>
													<option value="Processing">Processing</option>
													<option value="Pending" selected>Pending</option>
												<?php	
												}	
												?>	
												</select>
												<input type="submit" name="submit" class="btn btn-primary pull-right" value="Update Tracking Status">
											</form>
									
									
										</label>
									</td>
								</tr>
								</table>
						</div>
					</div>
						<div class="col-sm-4">
						<div class="shopper-info">
							<p></p>
							
							
							
						</div>
					</div>	
					</div>
					
											
				</div>
			</div> 
    	</div>	
    </div><!--/#register-page-->
</body>