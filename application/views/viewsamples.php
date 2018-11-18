<body>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">View Samples</h2>    			    				    				
				</div>			 		
			</div>    	
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12">
						<div class="shopper-info">
							<?php 
								echo form_open_multipart("admin/product_search"); 
							?>	
							<select name="product_type">
									<option value="*">All</option>
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
							
							<?php 
								echo form_open_multipart("admin/"); 
							?>	
						
							<table class="table table-hover">
								<tr>
									<th>Product Image</th>
									<th>Product Name</th>
									<th>Product Code</th>
									<th>Product Price</th>
									<th>Product Category</th>
									<th>Manage</th>
								</tr>
								<?php
								foreach($view as $view){
									echo "<tr>";
									$id= $view['product_id'];
									echo "<td>";
									if($view['product_img']!=''){
									?>
									
									<img src="<?php echo base_url() ?>uploads/<?php echo $view['product_img'];?>" width="150" height="150">
									
									<?php
									}
									else{
									?>
									
									<img src="<?php echo base_url() ?>uploads/logo.png" width="150" height="150">
									<?php
									}
									echo "</td>";
									echo "<td>".$view['product_name']."</td>";
									echo "<td>".$view['product_code']."</td>";
									echo "<td>".$view['product_price']."</td>";
									echo "<td>".$view['product_category']."</td>";
									?>
									<td>
										<ul>
										<li><a href="<?php echo base_url() ?>admin/upload_pic/<?php echo $id?>">Upload Product Picture</a></li>
										<li><a href="<?php echo base_url() ?>admin/updatesamples/<?php echo $id?>">Update Product Information</a></li>
										<li><a href="<?php echo base_url() ?>admin/delete_product/<?php echo $id?>">Delete Product</a></li>
										</ul>
									</td>
									
									<?php
									echo "</tr>";
								}
								?>
							</table>
						</div>
					</div>
							
					</div>
					
											
				</div>
			</div> 
    	</div>	
    </div><!--/#register-page-->
</body>