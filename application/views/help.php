



<body>	
	<section>
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Help Center</h2>
				
			<?php
				foreach($view as $view){
				$id= $view['help_id'];
				$title= $view['help_title'];
				$subtitle= $view['help_subtitle'];
				$message= $view['help_message'];
			?>
			<div class="step-one">
				<h2 class="heading"><?php echo $title;?></h2>
			</div>
			<div class="checkout-options">
				<!--<h3>Title</h3>-->
				<p><?php echo $message;?></p>
			</div><!--/checkout-options-->	

			<?php
			}
			?>						
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
</body>