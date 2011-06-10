<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	    
        <div class="grid_8">
    		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
    			<h1 class="entry-title"><?php the_title(); ?></h1>

    			<div class="entry-content">
    			    
    			    <?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
				
    				<?php the_content(); ?>

    				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
    				<?php // the_tags( 'Tags: ', ', ', ''); ?>

    			</div>
			
    			<?php edit_post_link('Edit this entry','','.'); ?>
			
    		</article>

	        <?php comments_template(); ?>
	    </div>
            
	<?php endwhile; endif; ?>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>