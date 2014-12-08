<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all t-all d-all cf" role="main">


<section id="top-index" class="m-all t-all d-all cf">
    <ul>
        <?php
        $newslist = get_posts( array(
        'posts_per_page' => 8
        )); 
        foreach( $newslist as $post ): 
            setup_postdata( $post );
        ?>

        <li class="m-1of3 t-1of3 d-1of3">
          <a href="<?php the_permalink(); ?>" class="home-article">
            <div class="postThumbnail"><?php the_post_thumbnail( 'bones-thumb-600' ); ?></div>
            <h2><?php the_title(); ?></h2>
          </a>
          <p class="byline author vcard"><time class="byline updated" datetime="<?php echo get_the_time('c'); ?>" pubdate><i class="fa fa-clock-o"></i> <?php echo sprintf(__('%s', 'roots'), get_the_date()) ?></time>
          <i class="fa fa-pencil"></i> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></p>

        </li>
        <?php
        endforeach;
        wp_reset_postdata();
        ?>
     </ul>
</section>

						</div>


				</div>

			</div>


<?php get_footer(); ?>
