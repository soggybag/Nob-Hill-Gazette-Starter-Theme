<!-- single.php -->

<?php get_header(); ?>

	<!-- This begins displaying posts and comments. -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<div class="category-thumbnail">
			<?php the_post_thumbnail("banner"); ?>
		</div>
		
		<h1>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h1>
		
		<small class="byline">by <?php the_author(); ?></small>
	
		<div class="post-date"><?php the_time(); ?></div>
		
		<!-- Display the contents of the post -->
		<?php the_content(); ?>
		
		<div class="post-meta"></div>
		
		<div>
			<?php get_images_in_current_post(); ?>
		</div>
		
	<?php endwhile; else: ?>
   
		<!-- If there are no posts display the message below -->
		<h3>Woops...</h3>
		<p>Sorry, no posts were found.</p>
	<?php endif; ?>    

	<!-- Display the Next and Prev post links -->
	<p><?php posts_nav_link(); ?></p>

<?php get_footer(); ?>








