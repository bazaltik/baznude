<?php get_header(); ?>
<div class="grid-container">
	<div class="main single grid-80 mobile-grid-100">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<article class="post">
			<header>
				<h1 class="post-title"><?php the_title(); ?></h1>
			</header>
			<p class="post-info">
				<time pubdate datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('m.d.Y'); // Display the time it was published ?></time>
				<?php if( comments_open() ) : // If we have comments open on this post, display a link and count of them ?>
				<span class="comments-link">
					<?php comments_popup_link( __( 'Comment', 'break' ), __( '1 Comment', 'break' ), __( '% Comments', 'break' ) ); 
					?>
				</span>
			<?php endif; ?>
		</p>
		<div class="post-content">
			<?php the_content( 'Continue...' ); ?>
			<?php wp_link_pages(); ?>
		</div>
		<div class="post-meta">
			<div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); // Display the tags this post has, as links separated by spaces and pipes ?></div>
			<div class="category"><?php echo get_the_category_list(); // Display the categories this post belongs to, as links ?></div>            
		</div>
	</article>
<?php endwhile; ?>
<?php else : // If there are no posts to display ?>
	<article class="post error">
		<h1 class="404">Nothing has been posted like that yet</h1>
	</article>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>