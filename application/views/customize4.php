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
							<p>Choose Color/s</p>
							<?php 
								echo form_open_multipart("member/customize5"); 
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
						$step3= $this->input->post('step3');
						?>

							<input type="hidden" name="step1" value="<?php echo $step1;?>" />
							<input type="hidden" name="step2" value="<?php echo $step2;?>" />
							<input type="hidden" name="step3" value="<?php echo $step3;?>" />
								<center>
							<?php
							if($step1=='T-Shirt'||$step1=='Jacket'){
								foreach($view as $view){
									
									$id=$view['color_id'];
									$name= $view['color_name'];
									$image= $view['color_img'];
									
							?>
						
							<label>
								<center><?php echo $name;?></center>
								  <br>
								  <input type="radio" name="step4-1" value="<?php echo $id;?>" checked/>
								  
								  <img src="<?php echo base_url() ?>uploads/<?php echo $image;?>" width="150" height="150">

							</label>
							
							
							
							
							<?php
								
								}
								}
								else{
								
									?>
									
									<label><h4>Color 1</h4></label>
									<br>
								<?php
									foreach($view as $view){
									
									
									?>
									
									<label>
											<center><?php echo $view['color_name'];?></center>
											  <br>
											  <input type="radio" name="step4-1" value="<?php echo $view['color_id'];?>" checked/>
											  
											  <img src="<?php echo base_url() ?>uploads/<?php echo  $view['color_img'];?>" width="150" height="150">

										</label>
							
									
									<?php
									}									
									?>
									<hr>
									
									<label><h4>Color 2</h4></label>
									<br>
									<?php
									
									foreach($view2 as $view){
									
									
									?>
									
									<label>
											<center><?php echo $view['color_name'];?></center>
											  <br>
											  <input type="radio" name="step4-2" value="<?php echo $view['color_id'];?>" checked/>
											  
											  <img src="<?php echo base_url() ?>uploads/<?php echo  $view['color_img'];?>" width="150" height="150">

										</label>
							
									
									<?php
									}									
									?>
									<hr>
									<br>
									<label><h4>Color 3</h4> (Optional)</label>
									<br>
									
									</label>
									<?php
									
									foreach($view3 as $view){
									
									
									?>
									
									<label>
											<center><?php echo $view['color_name'];?></center>
											  <br>
											  <input type="radio" name="step4-3" value="<?php echo $view['color_id'];?>" checked/>
											  
											  <img src="<?php echo base_url() ?>uploads/<?php echo  $view['color_img'];?>" width="150" height="150">

										</label>
							
									
									<?php
									}									
									?>
									<?php
								}
								
							
							?>
							</center>
								<br>
								<br>								

								<input type="submit" name="submit" class="btn btn-primary pull-right" value="Next">		
							</form>
								</center>
						</div>
					</div>
							
					</div>
					
											
				</div>
			</div> 
    	</div>	
    </div><!--/#register-page-->
</body>


<script type="text/javascript">
        var allRadios = document.getElementsByName('step4-3');
        var booRadio;
        var x = 0;
        for(x = 0; x < allRadios.length; x++){

            allRadios[x].onclick = function() {
                if(booRadio == this){
                    this.checked = false;
                    booRadio = null;
                }else{
                    booRadio = this;
                }
            };
        }
    </script>