<?php 
	
	

?>


<body>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Upload Design</h2>    			    				    				
				</div>			 		
			</div>    	
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12">
						<div class="shopper-info">
							<p>Upload Own Design Information</p>
							<?php 
								echo form_open_multipart("Member/design_valid"); 
							?>	
							<img src="<?php echo base_url() ?>uploads/<?php echo $image;?>" width="100" height="100">
							<br>
							<br>
							<br>
							<input type="hidden" name="image" placeholder="Image" value="<?php echo $image; ?>">	
							<input type="text" name="first_name" placeholder="First Name" value="<?php echo set_value('first_name'); ?>">	
							<input type="text" name="last_name" placeholder="Last Name" value="<?php echo set_value('first_name'); ?>">	
							<input type="text" name="email" placeholder="Email" value="<?php echo set_value('first_name'); ?>">
							<textarea name="notes" id="notes" rows="8" placeholder="Notes"><?php echo set_value('notes');?></textarea>
							

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

