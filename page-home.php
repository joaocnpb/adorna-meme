<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package adornacoracoes
 */

get_header(); ?>

<main>
      <div class="row mt80 mb56">
           <?php
                $args = array(
                'post_type' => 'exposicao',
                'posts_per_page' => 1,
                'meta_key' => 'data_inicio',
                'orderby' => 'meta_value_num',
                'meta_type' => 'DATE',
                'order' => 'DESC'
                );
                query_posts($args);
            ?>
            <?php
                while (have_posts()) : the_post();
                $image = get_field('exhibition_thumb');
                $url = $image['url'];
                $alt = $image['alt'];
            ?>
        <div class="hide-for-small-only columns medium-offset-3 medium-9">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </div>
    </div>
    <div class="row hide-for-medium">
        <div class="mt24 columns lol">
            <h1><?php the_title(); ?></h1>
                <?php $post_object = get_field('exhibition_author');
                    if( $post_object ):
                    $post = $post_object;
                    setup_postdata( $post );?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
            <h2 class="mb24"><?php the_field('data_inicio'); ?>  &#8212;&nbsp; <?php the_field('data_fim'); ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="mb12 columns medium-3 medium-push-9">
          <div class="home-thumbs" data-open="exampleModal1">
            <?php
                $images = get_field('exhibition_gallery');
                $size = 'full';
                  if( $images ): ?>
                    <?php foreach( $images as $image ): ?>
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    <?php
                    endforeach; ?>
                  <?php endif; ?>
          </div>
        </div>
        <div class="columns medium-5 medium-pull-4">
            <div class="hide-for-small-only" style="border-bottom: 2px solid #eee;"><h1><?php the_title(); ?></h1>
                <?php $post_object = get_field('exhibition_author');
                    if( $post_object ):
                    $post = $post_object;
                    setup_postdata( $post );?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <h2 style="padding-bottom:14px;"><?php the_field('data_inicio'); ?>  &#8212;&nbsp;<?php the_field('data_fim'); ?></h2>
            </div>
            <h3 class="margin-top: 14px!important;">Resumo</h3>
                <?php the_field('exhibition_text');?>
            </div>
                <?php endwhile; ?>
    </div>
    <div class="row">
        <div class="full reveal" id="exampleModal1" data-reveal>
            <?php
                $images = get_field('exhibition_gallery');
                if( $images ): ?>
                    <div class="home-slides">
                        <button class="close-button" data-close aria-label="Close modal" type="button">
                          Close<span aria-hidden="true"></span>
                        </button>
                            <div class="home-slides-container">
                                <?php foreach( $images as $image ): ?>
                                    <div>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <div class="controls">
				<button type="button" class="arrow-left slick-prev"><span>Previous</span></button>
							<span class="pagingInfo"></span>
							<button type="button" data-role="none" class="arrow-right slick-next slick-arrow" aria-label="Next" role="button"><span>Next</span></button>
						</div>
                    </div>
                <?php endif; ?>
        </div>
        <?php wp_reset_query(); ?>
    </div>
</main>

<?php
get_footer();
