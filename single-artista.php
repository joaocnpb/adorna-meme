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
       <h3><?php the_field('artist_bio_h1', 'options'); ?></h3>
       <?php the_field('artist_text'); ?>
        </div>
        <?php
        $series = get_field('artist_series');

        if( $series ) :
        ?>
        <div class="columns medium-4">
            <h3 class="mb14"><?php the_field('artist_series_h1', 'options' ); ?></h3>
             <?php
                 foreach ($series as $post) {
                   setup_postdata($post);
                 ?>
             <div class="series-module mb28" onclick="location.href='<?php the_permalink(); ?>'">
                   <h2><?php the_title(); ?></h2>
                   <p><?php the_field('series_year'); ?></p>
             </div>
           <?php }
           wp_reset_postdata();
         endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="columns medium-offset-3 large-5">
            <h3><?php the_field('artist_photo_h1', 'options'); ?> <?php the_title(); ?></h3>
             <?php $image = get_field('artist_photo');
            if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            <?php endif; ?>
        </div>
    </div>
</main>

<?php
get_footer(); ?>
