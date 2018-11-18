



<body>	
	<section>
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">About Us</h2>

			<div class="step-one">
				<h2 class="heading">Print IT & Go</h2>
			</div>
			
			<div class="checkout-options">
				<?php
				foreach($view as $view){
					$description=$view['about_description'];
					echo $view['about_description'];
				}
				?>
				
				<br>
				<br>
				<br>
				<br>
			</div><!--/checkout-options-->
			
			
	    		<div class="col-sm-12">
				
					<div class="step-one">
							<h2 class="heading">UPDATE</h2>
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
						
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" class="form-control" rows="8" placeholder=""><?php echo $description; ?></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
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