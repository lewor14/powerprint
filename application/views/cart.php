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
						if($checkout_stat!=1){
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
											$product_desc7= $view['product_information'];
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
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?php echo base_url() ?>member/cart_product_delete/<?php echo $main_id;?>"><i class="fa fa-times"></i></a>
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
				<h3>What would you like to do next?</h3>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span><?php echo $super_total;?></span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span><?php echo $super_total;?></span></li>
						</ul>
						<!--
							<a class="btn btn-default update" href="">Update</a>
						-->
							<a class="btn btn-default check_out" href="<?php echo base_url() ?>/member/checkout">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
</body>