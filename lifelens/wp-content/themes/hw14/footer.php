
 <!--Footer-->
 <footer>
  <div class="footer">
  	<div class="container">
   
    	<div class="footer-wrap">

    		<div class="footer-menu-wrap">

    			<div class="footer-menu1">
    				<h5>LEARN</h5>
    				<div class="footer-nav-menu1">
    					<?php 
			            wp_nav_menu( array(
			              'menu_class'=>'menu',
			              'theme_location'=>'bottom1',
			              'container'=>''
			          ));
			          ?>	
    				</div>		
    			</div>

	    	<div class="footer-menu2">
	    		<h5>CONNECT</h5>
	    			<div class="footer-nav-menu2">
		    			<?php 
				            wp_nav_menu( array(
				              'menu_class'=>'menu',
				              'theme_location'=>'bottom2',
				              'container'=>''
				          ));
				          ?>
			          </div>	
	    	</div>
    		
    		

	    	<div class="footer-join-wrap">
	    		<h5>JOIN</h5>

	    		<div class="footer-submit-wrap">

	    			<div class="contact_email">
	    				<input type="text" name="contact_email" placeholder="Join our email list to receive LifeLens news, tips, and Webinar info.">
	    			</div>

	    			<div class="sign-button">
	    				<input type="submit" name="sign-button" value="Join Now">
	    			</div>	    				   		
	    		</div>

	    				<div class="footer-join-text">
	    					<input type="checkbox" name="join_check" id="join_check">
	    					<label for="join_check"><span>By submitting this form, you confirm that you have reviewed and agree with our Privacy Policy. </span>
	    					</label>
	    				</div>

	    					<div class="footer-social">
	    						<a target="_blank" class="facebook" href="https://www.facebook.com">
	    							<i class="fab fa-facebook-f"></i>
	    						</a>
	    						<a target="_blank" class="vimeo" href="https://www.vimeo.com">
	    							<i class="fab fa-vimeo-v"></i>
	    						</a>
	    						<a target="_blank" class="linkedin" href="https://www.linkedin.com">
	    							<i class="fab fa-linkedin-in"></i>
	    						</a>
	    						<a target="_blank" class="tvitter" href="https://www.tvitter.com">
	    							<i class="fab fa-twitter"></i>
	    						</a>
					    	</div>

	    					
	    	</div>

    	</div>
    	
    	
    </div>
  </div>

  	<div class="footer-bottom">
  		<div class="footer-wrap bottom-wrap">
  			<div class="copirate">
  				<span> © <?php echo date("Y"); ?>
			     LifeLens Financial</span>
  				<span class="separator"></span>
  			</div>

  				<div class="term-info">
  					<a href="">Terms of Service</a>
  					<span class="separator"></span>
  				</div>
	  				<div class="policy-info">
	  					<a href="">Privacy Policy</a>
	  				</div>	
  			
  		</div>
  	</div>
  		
</div>


<?php wp_footer(); ?>
</footer>