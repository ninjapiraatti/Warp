

            <article id="post-<?php the_ID(); ?>" <?php post_class('cf card'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
              <a href="<?php the_permalink(); ?>" class="wrap-link">
                <?php the_post_thumbnail('large'); ?>
                <header class="article-header">

                  <h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>

                  <p class="byline vcard">
                    <?php printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
                  </p>

                </header> <?php // end article header ?>
              </a>

              <section class="entry-content cf" itemprop="articleBody">
                <?php echo wp_trim_words( get_the_content(), 30, '...' ); ?>


              </section> <?php // end article section ?>

              <footer class="article-footer">

                <?php printf( __( '%1$s', 'bonestheme' ), get_the_category_list(', ') ); ?><?php the_tags( ', ', ', ', '<br />' ); ?>

              </footer> <?php // end article footer ?>

              <?php comments_template(); ?>


            </article>
