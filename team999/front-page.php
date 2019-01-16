<?php get_header(); ?>

<section class="latest-posts">
		<h2><span>Latest Blog Post</span></h2>
		<?php
			$args = array(
				'post_type' => 'post',
				'order' => 'ASC',
				'posts_per_page' => 3
			);
		?>
		<ul>
			<?php $blogs = new WP_Query($args);  ?>
			<?php while($blogs->have_posts()): $blogs->the_post(); ?>

				<li class="grid1-3">
					<div class="image">
            <?php the_post_thumbnail('medium'); ?>
          </div>
          <div class="content-blogs">
            <h3> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h3>
          </div>
				</li>
			<?php endwhile; wp_reset_postdata(); ?>
		</ul>
</section>

<?php get_footer(); ?>
