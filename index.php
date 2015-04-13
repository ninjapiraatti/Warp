<?php get_header(); ?>
		<div class="main-section header-hero" style="background-image: url(<?php the_field('options-header-image', 'options') ?>);">
			<div class="wrap">
				<?php if ( get_field( 'options-index-heading', 'options' ) ): ?>

					<h1 class="page-title light" itemprop="headline"><?php the_field('options-index-heading', 'options'); ?></h1>

				<?php else: ?>

				<?php endif; ?>

				<?php if ( get_field( 'options-index-description', 'options' ) ): ?>

					<p class="page-excerpt light"><?php the_field('options-index-description', 'options'); ?></p>

				<?php else: ?>

				<?php endif; ?>
			</div>
		</div>

		<div id="container">

			<section class="main-section">

				<div class="content wrap cf masonry">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php if (get_field('options-index-format', 'options') == 1) : ?>

							<?php get_template_part( 'post-formats/format-index-card', get_post_format() ); ?>

						<?php else : ?>

							<?php get_template_part( 'post-formats/format-index-default', get_post_format() ); ?>

						<?php endif; ?>

						<?php endwhile; ?>

							<?php bones_page_navi(); ?>

					<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
								</footer>
							</article>

					<?php endif; ?>

					<?php /* get_sidebar();  Warp doesn't use sidebars in page templates. Uncomment to use. */?>

				</div>

			</section>

			<?php /* We use Advanced Custom Fields here and its addons Repeater and Options. To use, import plugins and uncomment the next lines. */ ?>

			<?php if( have_rows('section') ): ?>
					

				<?php while ( have_rows('section') ) : the_row(); ?>

					<section class="cf main-section <?php the_sub_field('section-style'); ?>" id="<?php the_sub_field('section-id'); ?>">
						<div class="content wrap">
							div><?php the_sub_field('section-content'); ?></div>
							</div>
					</section>


				<?php endwhile; ?>

			<?php else : ?>
								
									
			<?php endif; ?>

		


<?php get_footer(); ?>
