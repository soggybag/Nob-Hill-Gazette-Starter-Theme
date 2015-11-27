<!-- home-page.php -->
<?php /* Template Name: Custom Home */ ?>

<?php get_header(); ?>

	<!-- This begins displaying posts and comments. -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<div class="cover-image">
			<?php the_post_thumbnail(); ?>
		</div>
		
		<!-- Display the contents of the post -->
		<?php the_content(); ?>
		
	<?php endwhile; else: ?>
   
		<!-- If there are no posts display the message below -->
		<h3>Woops...</h3>
		<p>Sorry, no posts were found.</p>
	<?php endif; ?>    

	<!-- Display the Next and Prev post links -->
	<p><?php posts_nav_link(); ?></p>

<?php get_footer(); ?>








