


<body>	
	<section>
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Logos</h2>						
						
						<?php
							foreach($view as $view){
								$id= $view['product_id'];
								$name= $view['product_name'];
								$img= $view['product_img'];
								$price= $view['product_price'];?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
						
										<?php
										if($img!=''){
										?>
										<img src="<?php echo base_url() ?>uploads/<?php echo $img;?>" alt="" width="300" height="300"/>
										<?php
										}else{
										?>
										<img src="<?php echo base_url() ?>uploads/logo.png" alt="" width="300" height="300"/>
										<?php
										}
										?>
										<h2><?php echo $price;?></h2>
										<p><?php echo $name;?></p>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2><?php echo $price;?></h2>
											<p><?php echo $name;?></p>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<?php
							}
						?>
						
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
</body>