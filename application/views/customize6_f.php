

<body>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Customize</h2>    			    				    				
				</div>			 		
			</div>    	
			<div class="shopper-informations">
				<div class="row">
				
					<div class="col-sm-4">
					
					<?php 
	
	
						$step1= $this->input->post('step1');
						$step2= $this->input->post('step2');
						$step3= $this->input->post('step3');
						if($this->input->post('step4-1')!=''){
						$step4_1= $this->input->post('step4-1');}
						if($this->input->post('step4-2')){
						if($this->input->post('step4-2')!=''){
						$step4_2= $this->input->post('step4-2');}
						}
						else{
						$step4_2='';
						}
						if($this->input->post('step4-3')){
						if($this->input->post('step4-3')!=''){
						$step4_3= $this->input->post('step4-3');}
						}
						else{
						$step4_3='';
						}
						$step5=$this->input->post('step5');

?>
							
							<table>
							
							<tr>
								<td>Garment</td>
								<td>
								<?php if($step1=='T-Shirt'){?>
									 <img src="<?php echo base_url() ?>uploads/tshirt1.png" width="150" height="150">
								<?php }?>
								<?php if($step1=='Collared'){?>			
									 <img src="<?php echo base_url() ?>uploads/collared1.png" width="150" height="150">
								<?php }?>
								<?php if($step1=='Jacket'){?>
									 <img src="<?php echo base_url() ?>uploads/jacket1.png" width="150" height="150">
								<?php }?>
								</td>
								<td>name</td>
							</tr>
							<tr>
								<?php 
									foreach($fabric as $view){
										if($step2==$view['fabric_id']){
										$image=$view['fabric_img'];
										$name=$view['fabric_name'];
										}
									}
								?>
								<td>Fabric</td>
								<td>
									<img src="<?php echo base_url() ?>uploads/<?php echo $image;?>" width="150" height="150">
								
								</td>
								<td><?php echo $name; ?></td>
							</tr>
							<tr>
								<?php 
									foreach($template as $view){
										if($step3==$view['template_id']){
										$image=$view['template_img'];
										$name=$view['template_name'];
										}
									}
								?>
								<td>Template</td>
								<td><img src="<?php echo base_url() ?>uploads/<?php echo $image;?>" width="150" height="150"></td>
								<td><?php echo $name; ?></td>
							</tr>
							<tr>
								<?php 
									foreach($color as $view){
										if($step4_1==$view['color_id']){
										$image=$view['color_img'];
										$name=$view['color_name'];
										}
									}
								?>
								<td>Color 1</td>
								<td><img src="<?php echo base_url() ?>uploads/<?php echo $image;?>" width="150" height="150"></td>
								<td><?php echo $name; ?></td>
							</tr>
							<?php
							if($this->input->post('step4-2')){
							?>
							<tr>
								<?php 
									foreach($color as $view){
										if($step4_2==$view['color_id']){
										$image=$view['color_img'];
										$name=$view['color_name'];
										}
									}
								?>
								<td>Color 2</td>
								<td><img src="<?php echo base_url() ?>uploads/<?php echo $image;?>" width="150" height="150"></td>
								<td><?php echo $name; ?></td>
							</tr>
							<?php } ?>
							<?php
							if($this->input->post('step4-3')){
							?>
							<tr>
								<?php 
									foreach($color as $view){
										if($step4_3==$view['color_id']){
										$image=$view['color_img'];
										$name=$view['color_name'];
										}
									}
								?>
								<td>Color 3</td>
								<td><img src="<?php echo base_url() ?>uploads/<?php echo $image;?>" width="150" height="150"></td>
								<td><?php echo $name; ?></td>
							</tr>
							<?php } ?>
							<?php 
							if($step1=='Collared'){
							?>
							<tr>
								<td>Logo</td>
								<td>
								<?php if($image!=''){?>
								<img src="<?php echo base_url() ?>uploads/<?php echo $step5;?>" width="100" height="100">
								<?php }?>
								</td>
								<td>Color</td>
							</tr>
							<?php } ?>
							</table>
					</div>
					<div class="col-sm-8">
						<div class="shopper-info">
							<p>Add additional information</p><?php 
								echo form_open_multipart("member/customize_final"); 
							?>	
						<?php 
							$notif=validation_errors('<p class="error">');
							if($notif!=""){
								echo "<div class=\"alert alert-danger\" role=\"alert\">";
								echo $notif;
								echo "</div>"; 
							}
						?>							
							
								
								<input type="hidden" name="step1" value="<?php echo $step1;?>" />
								<input type="hidden" name="step2" value="<?php echo $step2;?>" />
								<input type="hidden" name="step3" value="<?php echo $step3;?>" />
								<input type="hidden" name="step4-1" value="<?php echo $step4_1;?>" />
								<input type="hidden" name="step4-2" value="<?php echo $step4_2;?>" />
								<input type="hidden" name="step4-3" value="<?php echo $step4_3;?>" />
								<input type="hidden" name="step5" value="<?php echo $step5;?>" />
								
								<label>First Name</label>
								<input type="text" name="first_name" value="<?php echo set_value('first_name'); ?>" placeholder="First Name"/>
								
								<label>Last Name</label>
								<input type="text" name="last_name" value="<?php echo set_value('last_name'); ?>" placeholder="Last Name"/>
								
								<label>E-mail Address</label>
								<input type="text" name="email_address" value="<?php echo set_value('email_address'); ?>" placeholder="Email Address"/>
								
								<label>Date Needed</label>
								<input type="date" name="dead_line" value="<?php echo set_value('dead_line'); ?>" />
								
								<label>Notes</label>
								<textarea name="notes" id="notes" rows="8" placeholder="Notes"><?php echo set_value('notes');?></textarea>
								
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
							