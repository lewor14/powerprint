<body>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">View Appointment</h2>    			    				    				
				</div>			 		
			</div>    	
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
					</div>
					<div class="col-sm-6">
						<div class="shopper-info">
								<center>
							 <a href="<?php echo base_url() ?>admin/view_consultation" class="btn btn-primary">View Consultation </a>
								</center>
							 <br>
							 <br>
							 <br>
							<?php
								foreach($view as $view){
										$id=$view['appointment_id'];
										
										$timestamp=strtotime($view['appointment_datereceived']);
										$month=date('M', $timestamp);
										$day=date('d', $timestamp);
										$year=date('Y', $timestamp);
										$hour=date('G', $timestamp);
										$minute=date('i', $timestamp);
										$ap=date('a', $timestamp);
										
										$timestamp=strtotime($view['appointment_date']);
										$month2=date('M', $timestamp);
										$day2=date('d', $timestamp);
										$year2=date('Y', $timestamp);
										$timestamp=strtotime($view['appointment_time']);
										$hour2=date('G', $timestamp);
										$minute2=date('i', $timestamp);

										
										$fname=$view['appointment_fname'];
										$lname=$view['appointment_lname'];
										$email=$view['appointment_email'];
										$notes=$view['appointment_notes'];
										$time=$view['appointment_time'];
										$status=$view['appointment_stat'];
								}
							?>
							<table class="table table-hover">
									<tr>
										<td>First Name
										</td>
										<td><?php echo $fname;?>
										</td>
									</tr>
									<tr>
										<td>Last Name
										</td>
										<td><?php echo $lname;?>
										</td>
									</tr>
									<tr>
										<td>Email
										</td>
										<td><?php echo $email;?>
										</td>
									</tr>
									<tr>
										<td>Notes
										</td>
										<td><?php echo $notes;?>
										</td>
									</tr>
									<tr>
										<td>Scheduled Date
										</td>
										<td><?php echo $month2."-".$day2."-".$year2.""." , ".$hour2.":".$minute2; ?>
										</td>
									</tr>
									<tr>
									<?php
									echo form_open_multipart("admin/appointment_status"); 
											?>
										<td>Status
										</td>
										<td><?php echo $status;?>
										<input type="hidden" name="id" value="<?php echo $id;?>">
										<select name="status">
										<?php
											if($status=='Confirmed'){
										?>	
											<option value="Confirmed" selected>Confirm</option>
											<option value="Declined" disabled>Decline</option>
											<option value="Done">Done</option>
											<option value="Pending" disabled>Pending</option>
										<?php	
											}elseif($status=='Declined'){
										?>	
											<option value="Confirmed" disabled>Confirm</option>
											<option value="Declined" selected>Decline</option>
											<option value="Done" disabled>Done</option>
											<option value="Pending" disabled>Pending</option>
										<?php	
											}elseif($status=='Done'){
										?>	
											<option value="Confirmed" disabled>Confirm</option>
											<option value="Declined" disabled>Decline</option>
											<option value="Done" selected>Done</option>
											<option value="Pending" disabled>Pending</option>
										<?php	
											}else{
										?>	
											<option value="Confirmed">Confirm</option>
											<option value="Declined">Decline</option>
											<option value="Done">Done</option>
											<option value="Pending" selected>Pending</option>
										<?php	
											}
										?>	
										</select>
										<input type="submit" name="submit" class="btn btn-primary pull-right" value="Update Appoinment Status">
										</form>
										</td>
									</tr>
									<tr>
										<td>Date Received
										</td>
										<td><?php echo $month."-".$day."-".$year.""." , ".$hour.":".$minute." ".$ap; ?>
										</td>
									</tr>
									
							</table>
						</div>
						<div class="col-sm-3">
					</div>
					</div>
							
					</div>
					
											
				</div>
			</div> 
    	</div>	
    </div><!--/#register-page-->
</body>