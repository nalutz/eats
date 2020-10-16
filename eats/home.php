<?php
//Blog Template

get_header(); ?>

<main class="content">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<?php //start loop
		while ( have_posts() ) : the_post(); ?>
		
			<div class="blog-listing">
				
				<img src="<?php the_post_thumbnail_url('largest'); ?>" class="post-thumbnail" />
				
				<div class="blog-details">
					<p class="blog-date"><?php the_date(); ?></p>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p class="blog-excerpt"><?php echo get_the_excerpt(); ?></p>
					<a class="read-more" href="<?php the_permalink(); ?>">Read More <img src="/wp-content/themes/eats/images/cheveron-right.svg" /></a>
				</div>
				
			</div>
		
		<?php endwhile; //end loop ?>
		
	</article>
</main>

<?php get_footer(); ?>