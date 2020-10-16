<?php
//Page Template

get_header(); ?>

<?php
//start loop
while ( have_posts() ) :
				the_post(); ?>
<main class="content">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</article>
</main>
<?php endwhile; //end loop ?>

<?php get_footer(); ?>