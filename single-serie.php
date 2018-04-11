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
                    $photoref = get_sub_field('referencia');
                    $phototype = get_sub_field('tipologia');
                    $photosizes = get_sub_field('medidas');
                    ?>
                <a data-open="exampleModal<?php echo $i; ?>">
                    <img src="<?php echo $photo; ?>" alt="<?php echo $phototitle; ?>">
                    </a>
                <div class="full reveal" id="exampleModal<?php echo $i; ?>" data-reveal>
                 <img src="<?php echo $photo; ?>" alt="<?php echo $phototitle; ?>">
                 <button class="close-button" data-close aria-label="Close modal" type="button">
                   <!--Close--><span aria-hidden="true"></span>
                 </button>
                  <div class="">
                    <?php if( $phototitle ): ?>
                          <h2>"<?php echo $phototitle; ?>"</h2>
                    <?php endif; ?>
                    <?php $post_object = get_field('series_artist');
                      if( $post_object ):
                        $post = $post_object;
                          setup_postdata( $post );?>
                  <h2><?php the_title(); ?></h2>
                      <?php endif; ?>
                          <?php wp_reset_postdata(); ?>
                    <h2><?php the_field('series_year'); ?></h2>
                    <?php if( $phototype ): ?>
                          <h2 class="mt14"><?php echo $phototype; ?></h2>
                        <?php endif; ?>
                        <?php if( $photosizes ): ?>
                              <h2><?php echo $photosizes; ?></h2>
                            <?php endif; ?>
                            <a href="mailto:estefania@gmail.com?subject=ORDER REF: <?php echo $photoref ?>&body=ORDER REF: <?php echo $photoref ?>">order</a>
                        </div>
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
