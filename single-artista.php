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
       <h3><!--<?php the_field('artist_bio_h1', 'option-pt'); ?>-->Biografia</h3>
       <?php the_field('artist_text'); ?>
        </div>
        <div class="columns medium-4">
            <h3 class="mb14"><!--<?php the_field('artist_series_h1', 'option-pt' ); ?>-->Séries disponíveis</h3>
            <?php
                 $args = array(
                 'post_type' => 'serie',
                 'meta_key' => 'series_year',
                 'orderby' => 'meta_value_num',
                 'meta_type' => 'DATE',
                 'order' => 'DESC'
                 );
                 query_posts($args);
             ?>
             <?php
                 while (have_posts()) : the_post(); ?>
             <div class="series-module mb28" onclick="location.href='<?php the_permalink(); ?>'">
                   <h2><?php the_title(); ?></h2>
                   <p><?php the_field('series_year'); ?></p>
             </div>
             <?php endwhile; ?>
        </div>
    </div>
    <div class="row">
        <div class="columns medium-offset-3 large-5">
            <h3><!--<?php the_field('artist_photo_h1', 'option'); ?>-->Fotografia</h3>
             <?php $image = get_field('artist_photo');
            if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            <?php endif; ?>
        </div>
    </div>
</main>

<?php
get_footer(); ?>
