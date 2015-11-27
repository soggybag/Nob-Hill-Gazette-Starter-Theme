<?php get_header(); ?>

	<!-- This begins displaying posts and comments. -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- Diplay the title of a post. Use the_permalink() to get the URL to that post. Use the_title() to get the title of the post -->
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<!-- Display the contents of the post -->
		<?php the_content(); ?>
		<!-- Diplsay the date and category for a post. Note the parameters shown here format the date and time. -->
		<p><?php the_time('F jS Y'); ?> at <?php the_time('g:i a'); ?> | <?php the_category(', '); ?> | <?php comments_number('No comment', '1 comment', '% comments'); ?></p>
		<div id="post-comments">
			<?php comments_template(); ?>
		</div>
	<?php endwhile; else: ?>
   
		<!-- If there are no posts display the message below -->
		<h3>Woops...</h3>
		<p>Sorry, no posts were found.</p>
	<?php endif; ?>    

	<!-- Display the Next and Prev post links -->
	<p><?php posts_nav_link(); ?></p>

<?php get_footer(); ?>








