<?php
foreach($view as $view){
$product_id= $view['product_id'];
$product_name= $view['product_name'];
$product_price= $view['product_price'];
$product_category= $view['product_category'];
}
?>

<body>

	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Update Samples</h2>    			    				    				
				</div>			 		
			</div>    	
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12">
						<div class="shopper-info">
							<p>Samples Information</p>
							<?php 
								echo form_open_multipart("admin/updateproduct_valid"); 
							?>	
						<?php 
							$notif=validation_errors('<p class="error">');
							if($notif!=""){
								echo "<div class=\"alert alert-danger\" role=\"alert\">";
								echo $notif;
								echo "</div>"; 
							}
						?>	

<?php if (isset($error)) {
							echo "<div class=\"alert alert-danger\" role=\"alert\">";
									echo $error;
									echo "</div>"; 
						}
						?>						
							
								
								<input type="hidden" name="id" value="<?php echo $product_id; ?>">
								<input type="text" name="product_name" placeholder="Product Name" value="<?php echo set_value('product_name'); ?>">
								<input type="text" name="product_price" placeholder="Product Price" value="<?php echo set_value('product_price'); ?>">
								
								<select name="product_type" value="<?php echo $product_category; ?>">
								
									<?php
									$product_category=set_value('product_type');
									if($product_category=='General'){
									?>
										<option value="">-- Sample Type --</option>
										<option  value="General" selected>General</option>
										<option  value="T-Shirt">T-Shirt</option>
										<option  value="Collared Shirt">Collared Shirt</option>
										<option  value="Jackets">Jackets</option>
										<option  value="Logos">Logos</option>
									<?php
									}elseif($product_category=='T-Shirt'){
									?>
										<option value="">-- Sample Type --</option>
										<option  value="General">General</option>
										<option  value="T-Shirt" selected>T-Shirt</option>
										<option  value="Collared Shirt">Collared Shirt</option>
										<option  value="Jackets">Jackets</option>
										<option  value="Logos">Logos</option>
									<?php	
									}elseif($product_category=='Collared Shirt'){
									?>
										<option value="">-- Sample Type --</option>
										<option  value="General">General</option>
										<option  value="T-Shirt">T-Shirt</option>
										<option  value="Collared Shirt" selected>Collared Shirt</option>
										<option  value="Jackets">Jackets</option>
										<option  value="Logos">Logos</option>
									<?php			
									}elseif($product_category=='Jackets'){
									?>
										<option value="">-- Sample Type --</option>
										<option  value="General">General</option>
										<option  value="T-Shirt">T-Shirt</option>
										<option  value="Collared Shirt">Collared Shirt</option>
										<option  value="Jackets" selected>Jackets</option>
										<option  value="Logos">Logos</option>	
									<?php			
									}elseif($product_category=='Logos'){
									?>
										<option value="">-- Sample Type --</option>
										<option  value="General">General</option>
										<option  value="T-Shirt">T-Shirt</option>
										<option  value="Collared Shirt">Collared Shirt</option>
										<option  value="Jackets">Jackets</option>
										<option  value="Logos" selected>Logos</option>	
									<?php			
									}else{
									?>
										<option value="" selected>-- Sample Type --</option>
										<option  value="General">General</option>
										<option  value="T-Shirt">T-Shirt</option>
										<option  value="Collared Shirt">Collared Shirt</option>
										<option  value="Jackets">Jackets</option>
										<option  value="Logos">Logos</option>	
									<?php			
									}
									?>

								</select>
								<br>
								<br>								

								<input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">		
							</form>
						</div>
					</div>
							
					</div>
					
											
				</div>
			</div> 
    	</div>	
    </div><!--/#register-page-->
</body>