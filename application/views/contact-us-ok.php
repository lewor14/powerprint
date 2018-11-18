<body>
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
						<?php 
							echo form_open_multipart("home/contact_valid"); 
						?>	
						
	    				<div class="status alert alert-success">Message Sent</div>
				    	<!--
						<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						-->
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" placeholder="Name" >
				            </div>
				            <div class="form-group col-md-6">
				                <input type="text" name="email" class="form-control" placeholder="Email" >
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" placeholder="Subject" >
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>Print IT & Go</p>
							<p>Tarlac City</p>
							<p>Philippines</p>
							<p>Mobile: +639955334685</p>
							<p>Email: printitandgo@gmail.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
