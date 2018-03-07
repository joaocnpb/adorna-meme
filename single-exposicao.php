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
     <div class="columns large-offset-3 small-5">
   <h1><?php the_title(); ?></h1>
       <?php $post_object = get_field('exhibition_author');
           if( $post_object ):
           $post = $post_object;
           setup_postdata( $post );?>
           <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
           <?php endif; ?>
           <?php wp_reset_postdata(); ?>
           <h2 class="mb14"><?php the_field('data_inicio'); ?>  &#8212;&nbsp; <?php the_field('data_fim'); ?></h2>
    </div>
  </div>
  <div class="row">
      <div class="mb12 columns medium-9 medium-push-3">
        <div class="exhibition-thumbs" data-open="exampleModal1">
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
  </div>
  <div class="row">
    <div class="columns medium-offset-3 medium-5">
      <h3 class="margin-top: 14px!important;">Resumo</h3>
          <?php the_field('exhibition_text');?>
    </div>
  </div>
</main>

<?php
get_footer();
