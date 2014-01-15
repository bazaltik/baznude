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
        <?php // the author(); Uncomment this and it will display the post author ?>
      </p>
      <div class="post-content">
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
      </div>
      <div class="post-meta">
        <div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); // Display the tags this post has, as links separated by spaces and pipes ?></div>
        <div class="category"><?php echo get_the_category_list(); // Display the categories this post belongs to, as links ?></div>            
      </div>
      <div class="post-comments">
        <?php
          // If comments are open or we have at least one comment, load up the default comment template provided by Wordpress
        if ( comments_open() || '0' != get_comments_number() )
          comments_template( '', true );
        ?>
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