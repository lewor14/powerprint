<body>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Add Samples</h2>    			    				    				
				</div>			 		
			</div>    	
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12">
						<div class="shopper-info">
							<p>Samples Information</p>
							<?php 
								echo form_open_multipart("admin/addproduct_valid"); 
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
						<div class="status alert alert-success">Successfully Added Samples</div>	
							
								<input type="text" name="product_name" placeholder="Product Name" >
								<input type="text" name="product_price" placeholder="Product Price" >
								<input type="text" name="product_code" placeholder="Product Code" >
								
								
								<select name="product_type" >
									<option value="">-- Sample Type --</option>
									<option  value="General">General</option>
									<option  value="T-Shirt">T-shirt</option>
									<option  value="Collared Shirt">Collared Shirt</option>
									<option  value="Jackets">Jackets</option>
									<option  value="Logos">Logos</option>

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