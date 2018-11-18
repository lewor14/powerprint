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
							<label>E-mail</label>
				                <input type="text" name="email" class="form-control" placeholder="Email" value=<?php echo set_value('email'); ?>>
				            </div> 
							
				            <div class="form-group col-md-12">
							<label>Password</label>
				                <input type="password" name="password" class="form-control" placeholder="Password" value=<?php echo set_value('password'); ?>>
				            </div>	
							
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Login">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Not yet a member?</h2>
	    				<center><h1><a href="<?php echo base_url() ?>home/register">Register</a></h1></center>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
