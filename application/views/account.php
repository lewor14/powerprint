



<body>	
	<section>
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">My Account</h2>				
						
						<div class="row">
                    <div class="col-lg-4 text-center">
                        
                            <div class="panel-body">
                               
                            </div>
                        
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
							Customer's Profile
                                <table class="table table-hover">
						
						<?php
						foreach($view as $view){
							
							
							echo "<tr>"."<td> <strong>First Name:</strong> ".$view['user_fname']."</td>"."</tr>";
							echo "<tr>"."<td> <strong>Middle Name:</strong> ".$view['user_lname']."</td>"."</tr>";
							echo "<tr>"."<td> <strong>Last Name:</strong> ".$view['user_mname']."</td>"."</tr>";
							echo "<tr>"."<td> <strong>User Name:</strong> ".$view['user_username']."</td>"."</tr>";
							echo "<tr>"."<td> <strong>Email:</strong> ".$view['user_email']."</td>"."</tr>";
							echo "<tr>"."<td> <strong>Phone:</strong> ".$view['user_phone']."</td>"."</tr>";
							echo "<tr>"."<td> <strong>Mobile Phone:</strong> ".$view['user_mobile_phone']."</td>"."</tr>";
							echo "<tr>"."<td> <strong>Gender:</strong> ".$view['user_gender']."</td>"."</tr>";
						
							
							
						}
						
						?>
						</table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        
                            <div class="panel-body">
                                
                            </div>
                        
                    </div>
                </div>
						
					</div><!--features_items-->
				</div>
				
				<div class="col-sm-12 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Billing/Shipping Address</h2>				
						<center>VIEW OF BILLING/SHIPPING ADDRESS<center>
						<center><a href="<?php echo base_url() ?>/member/billing">Add Billing/Shipping Address</a></center>
					</div><!--features_items-->
				</div>
				
			</div>
		</div>
	</section>
</body>