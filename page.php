<?php

get_header();
?>

<div class="site--content">

	<?php 
	while ( have_posts() ) :
		the_post();

		the_content();

	endwhile; // End of the loop.
	?>

</div><!-- #main -->
	

<?php
get_footer();
