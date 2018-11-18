

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
							<p>Upload a Picture</p>
							<?php 
								echo form_open_multipart("Upload/uploaddesign"); 
							?>	
							
							<input type="file" name="filename" size="20" />

								<input type="submit" name="submit" class="btn btn-primary pull-right" value="Next">		
							</form>						
						</div>
					</div>
							
					</div>
					
											
				</div>
			</div> 
    	</div>	
    </div><!--/#register-page-->
</body>

