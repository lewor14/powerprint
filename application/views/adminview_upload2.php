<body>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">View Uploaded Designs</h2>    			    				    				
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
									<th>
										<a href="<?php echo base_url() ?>admin/delete_upload/" >Delete All</a>
									</th>
										<?php
											
									foreach($view as $view){
										$superid=$view['upload_id'];
										$id=$view['upload_id'];
										$timestamp=strtotime($view['upload_date']);
										$month=date('M', $timestamp);
										$day=date('d', $timestamp);
										$year=date('Y', $timestamp);
										$hour=date('G', $timestamp);
										$minute=date('i', $timestamp);
										$ap=date('a', $timestamp);
									?>
									<tr>
										<td> <a href="<?php echo base_url() ?>admin/view_uploaddesign_id/<?php echo $id?>">
										<?php echo $month."-".$day."-".$year.""." , ".$hour.":".$minute." ".$ap; ?></a>
										</td>
										<td> <a href="<?php echo base_url() ?>admin/delete_upload_id/<?php echo $superid;?>" >Delete</a>
										</td>
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