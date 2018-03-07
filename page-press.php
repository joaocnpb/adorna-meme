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
            'post_per_page' => 2,
            'orderby' => 'date'
            );
            query_posts($args);
            ?>
            <?php
            while (have_posts()) : the_post();?>
            <?php if ($wp_query->current_post % 2 == 0): ?>
               <div class="exhibition-module">
                        <h1><?php the_title(); ?></h1>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <h2>Resumo</h2>
                        <p><?php the_field('article_text'); ?></p>
                    </div>
      </div>
            <?php endif ?>
             <?php endwhile ?>                      
            <?php wp_reset_query(); ?>
        <div class="module-right-container">       
          <?php
            $args = array(
            'post_type' => 'artigos',
            'post_per_page' => 2,
            'orderby' => 'date'
            );
            query_posts($args);
            ?>
            <?php
            while (have_posts()) : the_post();?>
            <?php if ($wp_query->current_post % 2 != 0): ?>
               <div class="exhibition-module">
                        <h1><?php the_title(); ?></h1>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <h2>Resumo</h2>
                        <p><?php the_field('article_text'); ?></p>
                    </div>
      </div>
            <?php endif ?>
             <?php endwhile ?>                      
<?php wp_reset_query(); ?>
   </div>
</main>

<?php
get_footer(); ?>  