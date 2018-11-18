<body>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Login</h2>    			    				    				
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
					
					<div class="alert alert-success" role="alert">
						<a href="#" class="alert-link">You have succesfully registered!</a>
					</div>
					
	    			<div class="contact-form">
						<?php 
							echo form_open_multipart("home/user_login"); 
						?>	
						<?php 
							$notif=validation_errors('<p class="error">');
							if($notif!=""){
								echo "<div class=\"alert alert-danger\" role=\"alert\">";
								echo $notif;
								echo "</div>"; 
							}
						?>
	    				<div
				            <div class="form-group col-md-12">
				                <input type="text" name="email" class="form-control" placeholder="Email" value=<?php echo set_value('email'); ?>>
				            </div>  
				            <div class="form-group col-md-12">
				                <input type="password" name="password" class="form-control" placeholder="Password" value=<?php echo set_value('password'); ?>>
				            </div>							
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Login">
				            </div>
				        </form>
	    			</div>
	    		</div>   			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
