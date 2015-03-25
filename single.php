<?php get_header(); ?>
	<main>
		<?php if(have_posts()): ?>
		<?php while(have_posts()): the_post(); ?>
			<article <?php post_class(); ?>>
				<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <time><?php the_time("y.m.d"); ?></time></h1>
				<p><span class="subtitle">Posted by <?php the_author_link(); ?> in <?php the_category(', '); ?></span> <span class="comment-num"><?php comments_number('No comment', 'One comment', '% comments'); ?></span></p>
				<?php if(has_post_thumbnail()): ?>
				<div class="post-thumb">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
				<?php endif; ?>
				<?php the_content("Read more"); ?>
				<?php if(has_tag()): ?>
				<p><?php the_tags('Tags: #',', #',''); ?></p>
				<?php endif; ?>
			</article>
			<?php comments_template(); ?>
		<?php endwhile; ?>
		<p class="next-post-links"><?php next_post_link('Older'); previous_post_link('Newer'); ?></p>
		<?php else: ?>
			<article>
				<h1>Nothing found</h1>
				<p>We couldn't find anything. Sorry.</p>
				<p><a href="<?php echo get_option('home'); ?>" class="more-link">Back</a></p>
			</article>
		<?php endif; ?>
	</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
