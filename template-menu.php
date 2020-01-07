
<div class="tab-wrapper">
	<div id="ResponsiveTabs" class="tab-area">

		<?php 

			$title = "";
			$content = "";
			$count = 1;
			// check if the repeater field has rows of data
			if( have_rows('menu_content') ):

			 	// loop through the rows of data
			    while ( have_rows('menu_content') ) : the_row();

			        // display a sub field value
			        the_sub_field('sub_field_name');

			        $title .= '<li><a href="#tab-'.$count.'">'.get_sub_field('title').'</a></li>';

			        $content .= '<div id="tab-'.$count.'">'.get_sub_field('content').'</div>';

			        $count++;

			    endwhile;

			else :

			    // no rows found

			endif;

		?>
		
	    <ul class="tab-menu">
	        <?php echo $title; ?>
	    </ul>

	    <?php echo $content; ?>

	    
	</div>
</div>