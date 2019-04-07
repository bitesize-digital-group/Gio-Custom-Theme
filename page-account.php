<?php 
/*
	Template Name: Account Template
*/

get_header(); 

?>

<div class="container main-content-cont">
	<div class="d-flex flex-row flex-sm-column flex-md-row flex-lg-row">
		<div class="myside-bar"><?php dynamic_sidebar('sidebar-1') ?></div>
		<div class="pr-4 pl-4">	
		<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
		  	
			get_template_part( 'content', get_post_format() );
		  
			endwhile; endif; 
		?>
		</div>
	</div>

</div>

<?php get_footer(); ?>