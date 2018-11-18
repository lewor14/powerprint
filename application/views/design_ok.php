



<body>	
	<section>
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Uploaded Design</h2>

	
			
	    		<div class="col-sm-12">
				
					<div class="step-one">
							
					</div>
			
	    			<div class="contact-form">
							<?php 
							echo form_open_multipart("admin/about_valid"); 
						?>	
						<?php 
							$notif=validation_errors('<p class="error">');
							if($notif!=""){
								echo "<div class=\"alert alert-danger\" role=\"alert\">";
								echo $notif;
								echo "</div>"; 
							}
						?>
						<div class="status alert alert-success">Successfully uploaded design. An e-mail notification will be sent withing 24 hours for the approval</div>
				                                  
				            <div class="form-group col-md-12">
				               <a href="<?php echo base_url() ?>member/" class="btn btn-primary">Home</a>
				            </div>
				        </form>
	    			</div>
	    		</div>		
									
						
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
</body>