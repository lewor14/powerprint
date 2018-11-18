
<body>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Picture</h2>    			    				    				
				</div>			 		
			</div>    	
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-8">
						<div class="shopper-info">
							<p>Add Picture for Product</p>
							<?php if (isset($error)) {
								echo "<div class=\"alert alert-danger\" role=\"alert\">";
								echo $error;
								echo "</div>"; 
							}
						
						?>
						
							<?php 
							
						
						
						echo form_open_multipart('uploadfile/upload/');
							?>
							
							

					<div class="form-group">
						<input type="hidden" name="id" value="<?php echo $id?>" />
						<input type="hidden" name="product_name" value="<?php echo $product_name?>" />
						<input type="hidden" name="product_img" value="<?php echo $product_img?>" />
						<input type="hidden" name="product_category" value="<?php echo $product_category?>" />
						<input type="hidden" name="product_price" value="<?php echo $product_price?>" />
						<input type="hidden" name="product_information" value="<?php echo $product_information?>" />
                        <input type="file" name="filename" size="20" />
                     
                
					</div>
					<div class="form-group">
                
						<input type="submit" value="Upload Profile Picture" class="btn btn-primary">
					 </div>
					 
					 
					  <?php echo form_close(); ?>
					  
						</div>
					</div>
					<div class="col-sm-4">
						<div class="shopper-info">
							<p>Product Information</p>
							<?php
								if($product_img!=''){
							?>
								<img src="<?php echo base_url() ?>uploads/<?php echo $product_img;?>" width="150" height="150">
							<?php
								}
								if($product_img==''){
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
							
								echo "<tr><td>".$product_name."</td></tr>";
								echo "<tr><td>".$product_category."</td></tr>";
								echo "<tr><td>".$product_price."</td></tr>";
								echo "<tr><td>".$product_information."</td></tr>";
															
							
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




