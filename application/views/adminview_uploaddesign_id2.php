<body>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">View Designs</h2>    			    				    				
				</div>			 		
			</div>    	
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
					</div>
					<div class="col-sm-6">
						<div class="shopper-info">
								<center>
							 <a href="<?php echo base_url() ?>admin/view_uploaddesign" class="btn btn-primary">View Uploaded Designs </a>
								</center>
							 <br>
							 <br>
							 <br>
							<?php
								foreach($view as $view){
										$id=$view['upload_id'];
										$timestamp=strtotime($view['upload_date']);
										$month=date('M', $timestamp);
										$day=date('d', $timestamp);
										$year=date('Y', $timestamp);
										$hour=date('G', $timestamp);
										$minute=date('i', $timestamp);
										$ap=date('a', $timestamp);
										
										$image=$view['upload_image'];
										$fname=$view['upload_first_name'];
										$lname=$view['upload_last_name'];
										$email=$view['upload_email'];
										$notes=$view['upload_notes'];
								}
							?>
							<table class="table table-hover">
									<tr>
										<td>Image
										</td>
										<td>
										<img src="<?php echo base_url() ?>uploads/<?php echo $image;?>" width="150" height="150">
										</td>
									</tr>
									<tr>
										<td>First Name
										</td>
										<td>
											<?php echo $fname;?>
										</td>
									</tr>
									<tr>
										<td>Last Name
										</td>
										<td>
											<?php echo $lname;?>
										</td>
									</tr>
									<tr>
										<td>Email
										</td>
										<td>
											<?php echo $email;?>
										</td>
									</tr>
									<tr>
										<td>Notes
										</td>
										<td>
											<?php echo $notes;?>
										</td>
									</tr>
									<tr>
										<td>Date
										</td>
										<td>
										<?php echo $month."-".$day."-".$year.""." , ".$hour.":".$minute." ".$ap; ?></a>
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