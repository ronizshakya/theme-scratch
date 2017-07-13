<?php get_header();?>
<div class="row">
	<div class="col-xs-12">
		<?php /*to display ur recent post on home page*/
			$lastBlog = new WP_Query('type=post&posts_per_page=1');
			if( $lastBlog->have_posts() ):
	  			while($lastBlog->have_posts()): $lastBlog->the_post(); ?>
	  		
	  		<?php get_template_part('content',get_post_format()); ?>
	  			
	  		<?php endwhile;
	    endif;
	    wp_reset_postdata(); /*to reset the query post to zero so that we dont affect the future query post*/
		?>
	</div>
	<div class="col-xs-12 col-sm-8">
	  	<?php 
	  	if( have_posts() ):
	  			while(have_posts()): the_post(); ?>
	  		<!-- <?php echo 'THIS IS THE FORMAT:'.get_post_format(); ?> to know what format is the post after it has been set -->
	  		
	  	
	  		<?php get_template_part('content',get_post_format()); ?><!-- content ko satta aru ni lekhe hunxa.. -->
	  			

	  		<?php endwhile;
	    endif;
	    //PRINT OTHER TWO POSTS NOT THE FIRST ONE
	    $args = array(
	    	'type' => 'post',
	    	'posts_per_page' => 2,
	    	'offset' => 1,
	    	);
		$lastBlog = new WP_Query('$args');//offset skips the last blog post..u can also use the args variable*/
		if( $lastBlog->have_posts() ):
	  			while($lastBlog->have_posts()): $lastBlog->the_post(); ?>
	  		
	  			<?php get_template_part('content',get_post_format()); ?>
	  			
	  		<?php endwhile;
	    endif;
	    wp_reset_postdata();
		?>
		<hr>
		<?php
		//print only a particular category//
		$lastBlog = new WP_Query('type=post&posts_per_page=-1&category_name=news');/*or u can use cat='id'of the category..to print the post of particular category*/
		if( $lastBlog->have_posts() ):
	  			while($lastBlog->have_posts()): $lastBlog->the_post(); ?>
	  		
	  			<?php get_template_part('content',get_post_format()); ?>
	  			
	  		<?php endwhile;
	    endif;
	    wp_reset_postdata();
		?>

		

	</div>
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
</div>



<?php get_footer();?>