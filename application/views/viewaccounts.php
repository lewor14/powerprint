<body>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">View Accounts</h2>    			    				    				
				</div>			 		
			</div>    	
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12">
						<div class="shopper-info">
							
						
							<table class="table table-hover">
								<tr>
									<th>Email</th>
									<th>Username</th>
									<th>Name</th>
									<th>Status</th>
									<th>Action</th>
								
								</tr>
								<?php
									foreach($view as $view){
									
										$id= $view['user_id'];
										$email= $view['user_email'];
										$username= $view['user_username'];
										$fname= $view['user_fname'];
										$lname= $view['user_lname'];
										$mname= $view['user_mname'];
										$status= $view['user_stat'];
										$class= $view['user_class'];
										$status_lbl='';
										$class_lbl='';
										if($status==1){
											$status_lbl='Active';
										}
										else{
											$status_lbl='Deactive';
										}
										
										if($class==1){
											$class_lbl='Administrator';
										}
										else{
											$class_lbl='Customer';
										}
										
										echo "<tr>";
										echo "<td>".$email."</td>";
										echo "<td>".$username."</td>";
										echo "<td>".$lname.", ".$fname." ".$mname."</td>";
										echo "<td>";
										?>
											<ul>
												<li><?php echo "<i>"."Status: "."</i>".$status_lbl?></li>
												<li><?php echo "<i>"."Class: "."</i>".$class_lbl?></li>
												
											</ul>
										<?php
										echo "</td>";
										echo "<td>";
										
										?>
											<ul>
												<li>ACTIONS</li>
												<li>
									<?php			
										if($status==1){
									?>	
											<i>Change Status to <br><br></i> <a href="<?php echo base_url() ?>admin/user_account_to_deactivate/<?php echo $id?>" class="btn btn-danger btn-xs" role="button">Deactivate</a>
											 
									<?php		
										}
										else{
									?>
											<i>Change Status to <br></i> <a href="<?php echo base_url() ?>admin/user_account_to_activate/<?php echo $id?>" class="btn btn-primary btn-xs" role="button">Activate</a>
											
									<?php		
										}
										
									?>
												</li>
												<li>
									<?php
										if($class==1){
									?>	
											<i><br>Change Role to <br></i> <a href="<?php echo base_url() ?>admin/user_account_to_customer/<?php echo $id?>" class="btn btn-warning btn-xs" role="button">Customer</a>
									<?php		
										}
										else{
									?>
											<i><br>Change Role to <br></i> <a href="<?php echo base_url() ?>admin/user_account_to_admin/<?php echo $id?>" class="btn btn-primary btn-xs" role="button">Administrator</a>
											
									<?php		
										}	
									?>		
												</li>
												
											</ul>
										<?php
										echo "</td>";
										echo "</tr>";
									}
									
								?>
								
							</table>
						</div>
					</div>
							
					</div>
					
											
				</div>
			</div> 
    	</div>	
    </div><!--/#register-page-->
</body>