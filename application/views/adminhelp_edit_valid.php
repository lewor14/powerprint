<?php
foreach($view as $view){
$id= $view['help_id'];
$title= $view['help_title'];
$message= $view['help_message'];

}
?>





<body>	
	<section>
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Help Update</h2>


						<div class="step-one">
							<h2 class="heading"><?php echo $title;?></h2>
						</div>
						<div class="checkout-options">
							<?php
								echo $message;
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
							echo form_open_multipart("admin/help_valid"); 
						?>	
						<?php 
							$notif=validation_errors('<p class="error">');
							if($notif!=""){
								echo "<div class=\"alert alert-danger\" role=\"alert\">";
								echo $notif;
								echo "</div>"; 
							}
						?>
						<input type="hidden" name="id" value="<?php echo $id; ?>" >
				            <div class="form-group col-md-12">
							
				                <textarea name="message" id="message" class="form-control" rows="8" placeholder=""><?php echo set_value('message'); ?></textarea>
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