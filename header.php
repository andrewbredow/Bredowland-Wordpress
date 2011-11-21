<?php get_head() ?>
<body <?php body_class(); ?>>

    <header>
        <div>
    		<h1><a href="<?php echo get_option('home'); ?>/" class="nostyle">adventures in <span>Bredowland</span></a></h1>
    	</div>
    	<div class="images">
    	    <?php
    	        $images = array(
    	            /* mixed */
    	            /*'both_bw.jpg',
    		        'ellery.jpg',
    		        'all_bw.jpg',
    		        'alexis.jpg'*/
    		        /* all color */
    		        'both_color.jpg',
    		        'ellery.jpg',
    		        'both_color_2.jpg',
    		        'alexis.jpg'
    	        )
    	    ?>
    	    <?php foreach ($images as $image) : ?>
    		    <div class="image">
    		        <img src="<?php echo get_bloginfo('template_directory') . '/_/img/family/' . $image ?>" width="238" alt="Image"/>
    		    </div>
    	    <?php endforeach ?>
    	</div>
    	<div class="grid_12">
    	    <span class="description"><?php bloginfo('description'); ?></span>
    	</div>
    </header>

