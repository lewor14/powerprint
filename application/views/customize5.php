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
								echo form_open_multipart("Upload/upload"); 
							?>	
						


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
						
						?>

							<input type="hidden" name="step1" value="<?php echo $step1;?>" />
							<input type="hidden" name="step2" value="<?php echo $step2;?>" />
							<input type="hidden" name="step3" value="<?php echo $step3;?>" />
							<input type="hidden" name="step4-1" value="<?php echo $step4_1;?>" />
							<input type="hidden" name="step4-2" value="<?php echo $step4_2;?>" />
							<input type="hidden" name="step4-3" value="<?php echo $step4_3;?>" />
							<?php 
								echo form_open_multipart("member/customize3"); 
							?>	


<?php if (isset($error)) {
							echo "<div class=\"alert alert-danger\" role=\"alert\">";
									echo $error;
									echo "</div>"; 
						}
						?>	
<input type="file" name="filename" size="20" />

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

