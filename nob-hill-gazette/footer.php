</div><!-- end content -->

    <!-- footer -->
    <div id='footer'><!-- footer -->
        <!-- Include whatever footer info you like here -->  
        <p>Template design by <a href="http://www.webdevils.com">webdevils.com</a>  
        <!-- Get the date and name of the site -->  
        &copy; <?php the_time('Y'); ?> <?php bloginfo('name'); ?> 
        <!-- Add alink to the RSS feed for this site -->
        <a href="<?php bloginfo('rss2_url'); ?>">RSS2</a></p>
	</div><!-- end Footer -->
	
	<?php wp_footer(); ?>
</body>
</html>
