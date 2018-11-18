<style media="screen" type="text/css">
label > input{ /* HIDE RADIO */
  visibility: hidden; /* Makes input not-clickable */
  position: absolute; /* Remove input from document flow */
}
label > input + img{ /* IMAGE STYLES */
  cursor:pointer;
  border:2px solid transparent;
}
label > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
  border:2px solid #f00;
}
</style>

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
					<div class="col-sm-12">
						<div class="shopper-info">
							<p>Choose template</p>
							<?php 
								echo form_open_multipart("member/customize4"); 
							?>	
						<?php 
							$notif=validation_errors('<p class="error">');
							if($notif!=""){
								echo "<div class=\"alert alert-danger\" role=\"alert\">";
								echo $notif;
								echo "</div>"; 
							}
						?>	

<?php if (isset($error)) {
							echo "<div class=\"alert alert-danger\" role=\"alert\">";
									echo $error;
									echo "</div>"; 
						}
						?>						
							<?php
						$step1= $this->input->post('step1');
						$step2= $this->input->post('step2');
						?>

							<input type="hidden" name="step1" value="<?php echo $step1;?>" />
							<input type="hidden" name="step2" value="<?php echo $step2;?>" />
							<center>
							
							<?php
								foreach($view as $view){
									if($view['template_category']==$step1){
									$id=$view['template_id'];
									$name= $view['template_name'];
									$image= $view['template_img'];
									
							?>
							
							<label>
								<center><?php echo $name;?></center>
								  <br>
								  <input type="radio" name="step3" value="<?php echo $id;?>" checked/>
								  
								  <img src="<?php echo base_url() ?>uploads/<?php echo $image;?>" width="150" height="150">

							</label>
							
							
							
							
							<?php
								}	
								
								}
							?>
							</center>
								<br>
								<br>								

								<input type="submit" name="submit" class="btn btn-primary pull-right" value="Next">		
							</form>
							
						</div>
					</div>
							
					</div>
					
											
				</div>
			</div> 
    	</div>	
    </div><!--/#register-page-->
</body>