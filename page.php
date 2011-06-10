<?php get_header(); ?>
   	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
   	    <div class="grid_8">
			
       		<article class="post" id="post-<?php the_ID(); ?>">

       			<h2><?php the_title(); ?></h2>

       			<?php // DISABLE META INFORAMTION ON ARTICLES // include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

       			<div class="entry">

       				<?php the_content(); ?>

       				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

       			</div>

       			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

       		</article>
		
       		<?php // DISABLE COMMENTS ON ARTICLES // comments_template(); ?>
		
   		</div>

   		<?php endwhile; endif; ?>

   <?php get_sidebar(); ?>

<?php get_footer(); ?>