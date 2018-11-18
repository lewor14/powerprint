<body>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Registration Form</h2>    			    				    				
				</div>			 		
			</div>    	
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12">
						<div class="shopper-info">
							<p>Shopper's Information</p>
							<?php 
								echo form_open_multipart("home/register_valid"); 
							?>	
						<?php 
							$notif=validation_errors('<p class="error">');
							if($notif!=""){
								echo "<div class=\"alert alert-danger\" role=\"alert\">";
								echo $notif;
								echo "</div>"; 
							}
						?>							
							
								<label>First Name</label>
								<input type="text" name="first_name" placeholder="First Name" value="<?php echo set_value('first_name'); ?>">
								
								<label>Middle Name</label>
								<input type="text" name="middle_name" placeholder="Middle Name" value="<?php echo set_value('middle_name'); ?>">
								
								<label>Last Name</label>
								<input type="text" name="last_name" placeholder="Last Name" value="<?php echo set_value('last_name'); ?>">
								
								<label>Username</label>
								<input type="text" name="user_name" placeholder="User Name" value="<?php echo set_value('user_name'); ?>">
								
								<label>E-mail Address</label>
								<input type="text" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
								
								<label>Telephone</label>
								<input type="text" name="phone" placeholder="Phone" value="<?php echo set_value('phone'); ?>">
								
								<label>Mobile Phone</label>
								<input type="text" name="mobile_phone" placeholder="Mobile Phone" value="<?php echo set_value('mobile_phone'); ?>">
								
								<label>Gender</label>
								<select name="gender" value="<?php echo set_value('gender'); ?>">
									<option value="">-- Gender --</option>
									<option  value="female">Female</option>
									<option value="male">Male</option>
								</select>
								<br>
								<br>								
								
								<label>Password</label>
								<input type="password" name="password" placeholder="Password" >
								
								<label>Confirm Password</label>
								<input type="password" name="confirm_password" placeholder="Confirm password">

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