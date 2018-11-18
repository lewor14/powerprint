<?php
foreach($view as $view){
$id= $view['product_id'];
$mem_id= $this->session->userdata('user_id');
$img= $view['product_img'];
$name= $view['product_name'];
$category= $view['product_category'];
$price= $view['product_price'];
$code= $view['product_code'];
$information= $view['product_information'];




}

?>
<body>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Add to cart</h2>    			    				    				
				</div>			 		
			</div>    	
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-8">
						<div class="shopper-info">
							<p>Add to cart</p>
							<?php if (isset($error)) {
								echo "<div class=\"alert alert-danger\" role=\"alert\">";
								echo $error;
								echo "</div>"; 
							}
						
						?>
						
							<?php 
							
						
						
						echo form_open_multipart('member/add_to_cart_product/');
							?>
							
							

					<div class="form-group">
					
						<input type="hidden" name="product_id" value="<?php echo $id;?>" />
						<input type="hidden" name="member_id" value="<?php echo $mem_id;?>" />
						
						
						
						
					
                
					</div>
					<div class="form-group">
							<div>	
							Quantity
					<select name="product_quan" value="">
									
									<option  value="1">1</option>
									<option  value="2">2</option>
									<option  value="3">3</option>
									<option  value="4">4</option>
									<option  value="5">5</option>
									

								</select>
							
                </div>
				<br>
				<div>
				Size
								<select name="product_size" value="<?php echo set_value('type'); ?>">
									
									<option  value="S">S</option>
									<option  value="M">M</option>
									<option  value="L">L</option>

								</select>
                </div>
						<input type="submit" value="Add to cart" class="btn btn-primary">
					 </div>
					 
					 
					  <?php echo form_close(); ?>
					  
						</div>
					</div>
					<div class="col-sm-4">
						<div class="shopper-info">
							<p>Product Information</p>
							<?php
								if($img!=''){
							?>
								<img src="<?php echo base_url() ?>uploads/<?php echo $img;?>" width="150" height="150">
							<?php
								}
								if($img==''){
							?>
							<img src="<?php echo base_url() ?>uploads/logo.png" width="150" height="150">
							<?php
							}
							?>
							<br>
							<br>
							<br>
							<table class="table table-hover">
							
							<?php
							
								echo "<tr><td>Name: ".$name."</td></tr>";
								echo "<tr><td>Category: ".$category."</td></tr>";
								echo "<tr><td>Price: ".$price."</td></tr>";
								echo "<tr><td>Code: ".$code."</td></tr>";
								
															
							
							?>
							</table>
					
						
							
					
                     
                
					</div>
					
					 
					 
					  <?php echo form_close(); ?>
					  
						</div>
					</div>							
					</div>
					
											
				</div>
			</div> 
    	</div>	
    </div><!--/#register-page-->
</body>



