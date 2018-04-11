<?php
/**
 * Template Name: Imprensa
  */
get_header(); ?>

<main>
    <div class="row mt120">
     <div class="hide-for-small-only exhibition-container medium-push-3 medium-9">
      <div class="module-left-container">
          <?php
            $args = array(
            'post_type' => 'artigos',
            'post_per_page' => -1,
            'orderby' => 'date'
            );
            query_posts($args);
            ?>
            <?php
            while (have_posts()) : the_post();?>
            <?php if ($wp_query->current_post % 2 == 0): ?>
              <?php
                $source = get_field("article_source");
                if ($source == "print") { ?>
               <a class="exhibition-module" href="<?php the_field('article_print'); ?>">
               <?php } elseif ($source == "online") { ?>
               <a class="exhibition-module" href="<?php the_field('article_online'); ?>">
              <?php } ?>
                <div>
                  <h1><?php the_title(); ?></h1>
                  <h2>Resumo</h2>
                  <p><?php the_field('article_text'); ?></p>
                </div>
                <?php if ($source == "print") { ?>
                 <p>Download</p>
               <?php } elseif ($source == "online") { ?>
                 <p>Ler</p>
                <?php } ?>
              </a>
            <?php endif ?>
             <?php endwhile ?>
            <?php wp_reset_query(); ?>
          </div>
        <div class="module-right-container">
          <?php
            $args = array(
            'post_type' => 'artigos',
            'post_per_page' => -1,
            'orderby' => 'date'
            );
            query_posts($args);
            ?>
            <?php
            while (have_posts()) : the_post();?>
            <?php if ($wp_query->current_post % 2 != 0): ?>
              <?php
                $source = get_field("article_source");
                if ($source == "print") { ?>
               <a class="exhibition-module" href="<?php the_field('article_print'); ?>">
               <?php } elseif ($source == "online") { ?>
               <a class="exhibition-module" href="<?php the_field('article_online'); ?>">
              <?php } ?>
                <div>
                  <h1><?php the_title(); ?></h1>
                  <h2>Resumo</h2>
                  <p><?php the_field('article_text'); ?></p>
                </div>
                <?php if ($source == "print") { ?>
                 <p>Download</p>
               <?php } elseif ($source == "online") { ?>
                 <p>Ler</p>
                <?php } ?>
              </a>
            <?php endif ?>
             <?php endwhile ?>
           </div>
<?php wp_reset_query(); ?>
   </div>
</main>

<?php
get_footer(); ?>
