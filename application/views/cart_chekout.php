<?php $super_total=0;?>

<body>
	<section id="cart_items">
		<div class="container">
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Items</td>
							<td class="description">Description</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td class="delivery_information">Delivery Information</td>
							<td class="cart_delete"></td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php
						foreach($view as $view){
							$main_id= $view['cart_id'];
							$id= $view['cart_user_id'];
							$product= $view['cart_product_id'];
							$size= $view['cart_product_size'];
							$quantity= $view['cart_product_quantity'];
							//important
							$checkout_stat=$view['cart_status_checkout'];
							
							//$id=$this->input->post('id');
							$fname=$view['cart_checkout_fname'];
							$lname=$view['cart_checkout_lname'];
							$house=$view['cart_checkout_house'];
							$street=$view['cart_checkout_street'];
							$barangay=$view['cart_checkout_barangay'];
							$city=$view['cart_checkout_city'];
							$region=$view['cart_checkout_region'];
									
							$village=$view['cart_checkout_village'];
							$deposit=$view['cart_checkout_payment_mode'];
							$delivery=$view['cart_checkout_delivery'];
							$tracking=$view['cart_status_tracking'];
							
						if($checkout_stat==1){
							?>
						<tr>
						<?php
							
										
										
										
										foreach($view_prod as $view){
											$product_desc1= $view['product_id'];
											$product_desc2= $view['product_img'];
											$product_desc3= $view['product_name'];
											$product_desc4= $view['product_category'];
											$product_desc5= $view['product_price'];
											$product_desc6= $view['product_code'];
											
											if($product==$product_desc1){
											?>
						
							<td class="cart_product">
							<?php
								if($product_desc2!=''){
											?>
											
											<img src="<?php echo base_url() ?>uploads/<?php echo $product_desc2;?>"  width="150" height="150" /></img>
											<?php
												}
												else{
												?>
												<img src="<?php echo base_url() ?>uploads/logo.png"  width="150" height="150" /></img>
												<?php
												
												}
							?>
								
								
							</td>
							<td class="cart_description">
							
							<?php
											echo "Size: ".$size;
										
												
												
												echo "<br>";
												echo "Name: ".$product_desc3;
												echo "<br>";
												echo "Code: ".$product_desc6;
												echo "<br>";
												echo "Category: ".$product_desc4."</b";
												
											
												
										?>
								<h4></h4>
								<!--<p>Web ID: 1089772</p>-->
							</td>
							<td class="cart_price">
								<p><?php echo $product_desc5;?></p>
							</td>
							<td class="cart_quantity">
								<p><?php echo $quantity;?></p>
							
							<!--
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
								-->
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php
								
								$total=$product_desc5*$quantity;
								$super_total=$super_total+$total;
								echo $total;
								echo "<br>";
								
								?></p>
							</td>
							<td class="delivery_information">
								<p>
									<ul>
									<li><i>Name: </i><?php echo $fname." ".$lname;?></li>
									<li><i>House: </i><?php echo $house; ?></li>
									<li><i>Street: </i><?php echo $street; ?></li>
									<li><i>Barangay: </i><?php echo $barangay; ?></li>
									<li><i>City: </i><?php echo $city; ?></li>
									<li><i>Region: </i><?php echo $region; ?></li>
									<li><i>Village: </i><?php echo $village; ?></li>
									<li><i>Deposit: </i><?php echo $deposit; ?></li>
									<li><i>Delivery: </i><?php echo $delivery; ?></li>
									<li><i>Track: </i><?php echo $tracking; ?></li>
								</ul>
								
								</p>
								
							</td>
							
							<td class="cart_delete">
							<?php
							if($tracking==''){
							?>
								<a class="cart_quantity_delete" href="<?php echo base_url() ?>member/cart_order_delete/<?php echo $main_id;?>"><i class="fa fa-times"></i></a>
							<?php	
							}elseif($tracking=='Pending'){
							?>
								<a class="cart_quantity_delete" href="<?php echo base_url() ?>member/cart_order_delete/<?php echo $main_id;?>"><i class="fa fa-times"></i></a>
							<?php
							
							}else{
							?>
								<a class="cart_quantity_delete"><i class="fa fa-times"></i></a>
							<?php
							}
							?>		
							</td>
						
							<?php
								}
							?>
							
							<?php		
											
											}
							?>
							
		
										
										
							<?php
							
							}
								
							?>
							
							
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
	
	
	<section id="do_action">
		<div class="container">
			<div class="heading">
				
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span><?php echo $super_total;?></span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span><?php echo $super_total;?></span></li>
						</ul>
						
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
</body>