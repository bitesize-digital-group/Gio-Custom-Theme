
<footer class="footer">
  <img class="buyete-logo-footer" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/buyete-logo.png">
  <div class="d-flex flex-column contact-footer justify-content-center">
        <div class="d-flex flex-row justify-content-center">
        	<p class="m-2 d-block">Have any questions? 1-800-934-9479</p>
	        <div class="d-flex flex-row justify-content-center">
	            <span class="m-2">
					<i class="far fa-envelope"></i>
				</span>
				<span class="m-2">
					<i class="fab fa-twitter"></i>
				</span>
				<span class="m-2">
					<i class="fab fa-facebook-f"></i>
				</span>
				<span class="m-2">
					<i class="fab fa-linkedin"></i>
				</span>
	        </div>
        </div>
        <div class="d-flex copyright">
            <span>© 2018 ETE REMAN, ALL RIGHTS RESERVED</span>
        </div>
    </div>
</footer>

<!--Bootstrap JS -->
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/axios.min.js"></script>

<!--Custom JS-->
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/custom.js"></script>
<!--Design JS-->
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/design.js"></script>

<?php 
    $args = array(
    	"theme_location" => "footer",	
    );
    //wp_nav_menu($args); 
?>

<?php wp_footer(); ?>

</body>
</html>