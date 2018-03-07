<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package adornacoracoes
 */

get_header(); ?>

<main>
  <div class="row mt80">
    <div class="columns medium-offset-3 medium-5">
      <h1><?php echo get_the_title(); ?></h1>
            <?php $post_object = get_field('series_artist');
              if( $post_object ):
                $post = $post_object;
                  setup_postdata( $post );?>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <?php endif; ?>
                  <?php wp_reset_postdata(); ?>
          <p><?php the_field('series_year'); ?></p>
          <h3>resumo da série</h3>
          <p><?php the_field('series_text'); ?></p>
    </div>
    </div>
    <div class="row">
        <div class="columns medium-offset-3 medium-9">
            <div class="series-thumbs">
                <?php if( have_rows('series_photos') ):
                $i=1;
                ?>
                    <?php while( have_rows('series_photos') ): the_row();
                    $photo = get_sub_field('fotografia');
                    $phototitle = get_sub_field('titulo_fotografia');
                    $phototechnical = get_sub_field('ficha_tecnica');
                    ?>
                <a data-open="exampleModal<?php echo $i; ?>">
                    <img src="<?php echo $photo; ?>" alt="<?php echo $phototitle; ?>">
                    </a>
                <div class="full reveal" id="exampleModal<?php echo $i; ?>" data-reveal>
                 <img src="<?php echo $photo; ?>" alt="<?php echo $phototitle; ?>">
                    <?php if( $phototitle ): ?>
                        <div style="position:relative;">
                          <h1><?php echo $phototitle; ?></h1>
                    <?php endif; ?>
                    <?php if( $phototechnical ): ?>
                          <p><?php echo $phototechnical; ?></p>
                      </div>
                    <?php endif; ?>
                    <button class="close-button" data-close aria-label="Close modal" type="button">
                        <span aria-hidden="true">&times;</span></button>
                        </div>
                <?php $i++;?>
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
        </div>
    </div>
</main>
<?php
get_footer(); ?>
