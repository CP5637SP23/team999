<div class="clear"></div>

		</div>
		<!-- /wrapper -->

			<!-- footer -->
			<footer class="footer clear" role="contentinfo">
				<div class="wrapper">
                    <nav class="social-menu">
                        <?php wp_nav_menu (array('theme_location'=>'social')); ?>

                    </nav><!-- .social-menu -->					
				</div> <!-- .wrapper -->		
                
				<div class="clear"></div>
				<div class="copyright">
					<?php
                    if(is_active_sidebar('cpfooter')){
                        dynamic_sidebar('cpfooter');
                    }
                    ?>
                    
<!--                    <p>All rights Reserved - Team999 <?php echo date('Y'); ?></p>-->
				</div>
			</footer>
			<!-- /footer -->






<!-- /footer -->



<?php wp_footer(); ?>


</body>
</html>
