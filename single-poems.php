<?php
/**
 * The Template for displaying scene single posts.
 *
 * 
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>


	<ul class="flex-container">
	  <li class="flex-item" id="origin"><?php 

	  $originText = explode(' ', get_the_content()); 
	  $length = count($originText);
	  $i = 0;
	  while ($i < $length) {
	  	echo ' <button id="btn'. $i .'" class="buttonProps " onclick="blackOut(blackout'. $i .');highLight(btn'. $i .')">' . $originText[$i] .'</button>';
	  	$i++;
	  }

	  ?></li>
	  <li class="flex-item" id="blackout">
	  <?php 

	  $originText = explode(' ', get_the_content()); 
	  $length = count($originText);
	  $i = 0;
	  while ($i < $length) {
	  	echo ' <div class="black" id="blackout'. $i .'">' . $originText[$i] . '</div>';
	  	$i++;
	  }

	  ?></li>	  
	</ul>

	<script>
	
		function blackOut(div) {
			  var className = div.getAttribute("class");
			  if(className=="black") {
			    div.className = "white";
			  }
			  else{
			    div.className = "black";
			  }
			}	 
		
		function highLight(div) {
			  var className = div.getAttribute("class");
			  if(className=="black") {
			    div.className = "white";
			  }
			  else{
			    div.className = "black";
			  }
			}		
	</script>

				
		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>
	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>