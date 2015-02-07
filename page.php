<?php get_header(); ?>

		<div class="main-section <?php the_field('header-type') ?>" id="hero" style="background-image: url(<?php the_field('header-image') ?>);">
			
			<?php /* If you're not using ACF, you can just remove the div below entirely */ ?>
			<div class="wrap <?php the_field('header-colors'); ?>">
				<?php if ( get_field( 'header-heading' ) ): ?>

					<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

				<?php else: ?>

				<?php endif; ?>

				<?php if ( get_field( 'header-excerpt' ) ): ?>

					<p class="page-excerpt"><?php the_field('header-description'); ?></p>

				<?php else: ?>

				<?php endif; ?>
			</div>			
			
		</div>

		<div id="container">

			<section class="main-section">

				<div class="content wrap cf">

					<!--<svg viewBox="0 0 128 128" class="icon">
		  				<use xlink:href="#icon-twitter"></use>
					</svg>-->


					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<section class="entry-content cf" itemprop="articleBody">
							<?php
								// the content (pretty self explanatory huh)
								the_content();

								/*
								 * Link Pages is used in case you have posts that are set to break into
								 * multiple pages. You can remove this if you don't plan on doing that.
								 *
								 * Also, breaking content up into multiple pages is a horrible experience,
								 * so don't do it. While there are SOME edge cases where this is useful, it's
								 * mostly used for people to get more ad views. It's up to you but if you want
								 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
								 *
								 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
								 *
								*/
								wp_link_pages( array(
									'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
									'after'       => '</div>',
									'link_before' => '<span>',
									'link_after'  => '</span>',
								) );
							?>
						</section> <?php // end article section ?>

						<footer class="article-footer cf">

						</footer>

						<?php /* comments_template(); Comments are removed in page template. Uncomment to enable. */?>

					</article>

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
							<div><?php the_sub_field('section-content'); ?></div>
							</div>
					</section>


				<?php endwhile; ?>

			<?php else : ?>
								
									
			<?php endif; ?>

		</div>

<?php get_footer(); ?>
