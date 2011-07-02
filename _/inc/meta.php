<footer class="meta">
	<time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('F jS, Y') ?></time>
	<span class="byline author vcard">
		<i>by</i> <strong class="fn"><?php the_author() ?></strong>
	</span>
	<?php // DISABLE COMMENTS INDICATOR FOR NOW // comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?>
</footer>