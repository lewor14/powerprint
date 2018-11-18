

<body>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Design Consultation</h2>    			    				    				
				</div>			 		
			</div>    	
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12">
						<div class="shopper-info">
							<p>Set an Appointment</p>
							<?php 
								echo form_open_multipart("Member/consult_valid"); 
							?>	
						<?php 
							$notif=validation_errors('<p class="error">');
							if($notif!=""){
								echo "<div class=\"alert alert-danger\" role=\"alert\">";
								echo $notif;
								echo "</div>"; 
							}
						?>	
								<?php						
							$id=$this->session->userdata('user_id');
							
							?>
							<input type="hidden" name="id" placeholder="id" value="<?php echo $id; ?>">	
							
							<label>First Name</label>
							<input type="text" name="first_name" placeholder="First Name" value="<?php echo set_value('first_name'); ?>">	
							
							<label>Last Name</label>
							<input type="text" name="last_name" placeholder="Last Name" value="<?php echo set_value('last_name'); ?>">	
							
							<label>E-mail Address</label>
							<input type="text" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
							
							<label>Date</label>
							<input type="date" name="date" placeholder="Date" value="<?php echo set_value('date'); ?>">
							
							<label>Time</label>
							<input type="time" name="time" placeholder="Time" value="<?php echo set_value('time'); ?>">
							
							<label>Notes</label>
							<textarea name="notes" id="notes" rows="8" placeholder="Message"><?php echo set_value('notes');?></textarea>
							

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

