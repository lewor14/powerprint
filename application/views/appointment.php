<?php $number_app=0;?>

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
					<div class="col-sm-12">
						<div class="shopper-info">
							<table class="table table-hover">
							<?php
							
								foreach($view as $view){
									$superid=$view['appointment_id']; 
									$id=$view['appointment_account_id']; 
									$fname=$view['appointment_fname']; 
									$lname=$view['appointment_lname']; 
									$email=$view['appointment_email']; 
									$notes=$view['appointment_notes']; 
									$datesched=$view['appointment_date']; 
									$time=$view['appointment_time']; 
									$stat=$view['appointment_stat']; 
									
									$timestamp=strtotime($view['appointment_datereceived']);
									$month=date('M', $timestamp);
									$day=date('d', $timestamp);
									$year=date('Y', $timestamp);
									$hour=date('G', $timestamp);
									$minute=date('i', $timestamp);
									$ap=date('a', $timestamp);
									
									$timestamp2=strtotime($view['appointment_date']);
									$month2=date('M', $timestamp2);
									$day2=date('d', $timestamp2);
									$year2=date('Y', $timestamp2);
									
									$timestamp3=strtotime($view['appointment_datereceived']);
									$hour3=date('G', $timestamp3);
									$minute3=date('i', $timestamp3);
									
									//
									$timestamp11=strtotime($view['appointment_resched_date']);
									$month11=date('M', $timestamp11);
									$day11=date('d', $timestamp11);
									$year11=date('Y', $timestamp11);
									
									$timestamp22=strtotime($view['appointment_resched_time']);
									$hour22=date('G', $timestamp22);
									$minute22=date('i', $timestamp22);
							
								?>	
								
								<?php
								if($fname){
									$number_app=$number_app+1;
								}
								?>	
								<tr>
									<td> Appointment <b><?php echo $number_app;?></b>
									</td>
									<td> 
									<a href="<?php echo base_url() ?>member/delete_app_id/<?php echo $superid;?>" >Delete Appointment</a>
									</td>
								</tr>		
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
									<td>Message
									</td>
									<td><?php echo $notes;?>
									</td>
								</tr>
								<tr>
									<td>Schedule
									</td>
									<td><?php echo $month2." ".$day2.", ".$year2;?>
									<br>
									<?php echo $hour3.":".$minute3;?>
									</td>
								</tr>
								<tr>
									<td>Date Send
									</td>
									<td><?php echo $month." ".$day.", ".$year." | ".$hour." : ".$minute." : ".$ap;?>
									</td>
								</tr>
								<tr>
									<td>Status
									</td>
									
									<td><?php echo $stat;?>
									<?php
									if($stat){

									}
									if($stat=='Reschedule'){
									echo "<br>";
										echo "Reschedule Date:";
										echo "<br>";
										echo $month11." ".$day11.", ".$year11;
										echo "<br>";
										echo $hour22.":".$minute22;
									}?>
									</td>
								</tr>
								
								<?php }?>
							</table>
						</div>
					</div>
							
					</div>
					
											
				</div>
			</div> 
    	</div>	
    </div><!--/#register-page-->
</body>