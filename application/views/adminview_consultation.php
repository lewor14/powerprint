<body>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">View Appointments</h2>    			    				    				
				</div>			 		
			</div>    	
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
					</div>
					<div class="col-sm-6">
						<div class="shopper-info">
							
						
							<table class="table table-hover">
								<tr>
									
									<th>
										Date Received
									</th>
									<th>Status
									</th>
									
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
										$stat=$view['appointment_stat'];
										if($stat==''){
											$stat="Pending";
										}
									?>
									<tr>
										<td> <a href="<?php echo base_url() ?>admin/view_appointment_id/<?php echo $id?>">
										<?php echo $month."-".$day."-".$year.""." , ".$hour.":".$minute." ".$ap; ?></a>
										</td>
										<td><?php echo $stat;?></td>
										
									</tr>
									<?php 
									
									}
									?>
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