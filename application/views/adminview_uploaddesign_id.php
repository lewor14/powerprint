<body>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">View Customize Design of Customer</h2>    			    				    				
				</div>			 		
			</div>    	
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
					</div>
					<div class="col-sm-6">
						<div class="shopper-info">
								<center>
							 <a href="<?php echo base_url() ?>admin/view_customize" class="btn btn-primary">View Customize Shirts</a>
								</center>
							 <br>
							 <br>
							 <br>
							<?php
									foreach($view as $view){
										$id=$view['cutomize_id'];
										$timestamp=strtotime($view['customize_date_received']);
										$month=date('M', $timestamp);
										$day=date('d', $timestamp);
										$year=date('Y', $timestamp);
										$hour=date('G', $timestamp);
										$minute=date('i', $timestamp);
										$ap=date('a', $timestamp);
										
										$garment=$view['customize_garment'];
										$fabric=$view['customize_fabric'];
										$template=$view['customize_template'];
										$colora=$view['customize_color1'];
										$colorb=$view['customize_color2'];
										$colorc=$view['customize_color3'];
										$image=$view['customize_image'];
										$fname=$view['customize_first_name'];
										$lname=$view['customize_last_name'];
										$email=$view['customize_email_address'];
										$notes=$view['customize_notes'];
										
										$timestamp2=strtotime($view['customize_dead_line']);
										$month2=date('M', $timestamp2);
										$day2=date('d', $timestamp2);
										$year2=date('Y', $timestamp2);
										}
									?>
							<table class="table table-hover">
								<tr>
									<td>Garment
									</td>
									<td>
										<?php echo $garment;?>
									</td>
								</tr>
								<tr>
									<td>Fabric
									</td>
									<td>
										<?php 
										foreach($fabricview as $fabricview){
											$fabricview_id=$fabricview['fabric_id'];
											if($fabric==$fabricview_id){
												$fabric_name=$fabricview['fabric_name'];
												$fabric_img=$fabricview['fabric_img'];
											}
										}
										echo $fabric_name;
										?>
										<br>
										<img src="<?php echo base_url() ?>uploads/<?php echo $fabric_img;?>" width="150" height="150">
									</td>
								</tr>
								<tr>
									<td>Template
									</td>
									<td>
										<?php echo $template;?>
										<?php
										foreach($templateview as $templateview){
											$templateview_id=$templateview['template_id'];
											if($template==$templateview_id){
												$template_name=$templateview['template_name'];
												$template_img=$templateview['template_img'];
											}
										}
										echo $template_name;
										?>
										<br>
										<img src="<?php echo base_url() ?>uploads/<?php echo $template_img;?>" width="150" height="150">
									</td>
								</tr>
								<tr>
									<td>Color A
									</td>
									<td>
										
										<?php
										foreach($colorview as $colorview){
											$colorview_id=$colorview['color_id'];
											if($colora==$colorview_id){
												$color_name=$colorview['color_name'];
												$color_img=$colorview['color_img'];
											}
										}
										echo $color_name;
										?>
										<br>
										<img src="<?php echo base_url() ?>uploads/<?php echo $color_img;?>" width="150" height="150">
										
									</td>
								</tr>
								<tr>
									<td>Color B
									</td>
									<td>
										
										<?php
										if($colorb){?>
										
										<?php
										foreach($colorview2 as $colorview2){
											$colorview_id2=$colorview2['color_id'];
											if($colorb==$colorview_id2){
												$color_name2=$colorview2['color_name'];
												$color_img2=$colorview2['color_img'];
											}
										}
										echo $color_name2;
										?>
										<br>
										<img src="<?php echo base_url() ?>uploads/<?php echo $color_img2;?>" width="150" height="150">
										<?php
										}
										?>
									</td>
								</tr>
								<tr>
									<td>Color C
									</td>
									<td>
										<?php
										if($colorc){?>
										
										<?php
										foreach($colorview3 as $colorview3){
											$colorview_id3=$colorview3['color_id'];
											if($colorc==$colorview_id3){
												$color_name3=$colorview3['color_name'];
												$color_img3=$colorview3['color_img'];
											}
										}
										echo $color_name3;
										?>
										<br>
										<img src="<?php echo base_url() ?>uploads/<?php echo $color_img3;?>" width="150" height="150">
										<?php
										}
										?>
									</td>
								</tr>
								<tr>
									<td>Image
									</td>
									<td>
										
										<?php
										if($image){
										?>
										<img src="<?php echo base_url() ?>uploads/<?php echo $image;?>" width="150" height="150">
										<?php
										}
										?>
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
									<td>Email Address
									</td>
									<td>
										<?php echo $email;?>
									</td>
								</tr>
								<tr>
									<td>Dead Line
									</td>
									<td>
										<?php echo $month2."-".$day2."-".$year2; ?>
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
									<td>Date Received
									</td>
									<td>
										<?php echo $month."-".$day."-".$year.""." , ".$hour.":".$minute." ".$ap; ?>
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