<?php
/**
 * Template Name: Exposições
 *
 * */

get_header(); ?>
<main>
    <div class="row mt120">
      <div class="columns push20px medium-push-2 large-push-3 medium-5 large-4">       
          <?php
            $args = array(
            'post_type' => 'exhibition',
            'post_per_page' => -1,
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
            <?php if ($wp_query->current_post % 2 == 0): ?>
                <div class="exhibition-module">
                    <h1><?php the_title(); ?></h1>
                    <h2><?php the_field('exhibitions_artist_h1', 'option'); ?></h2>
                        <?php $post_object = get_field('exhibition_author');
                        if( $post_object ):
                        $post = $post_object;
                        setup_postdata( $post );?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>     
                    <h2 class="mb24"><?php the_field('data_inicio'); ?> - <?php the_field('data_fim'); ?></h2>
                    <h2>Resumo</h2>
                    <p><?php the_field('exhibition_short_text'); ?></p>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
             <?php endif ?>
<?php endwhile ?>                       
<?php wp_reset_query(); ?>  
      </div>
        <div class="columns push-20px medium-push-2 large-push-3 medium-5 large-4">       
          <?php
            $args = array(
            'post_type' => 'exhibition',
            'post_per_page' => -1,
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
            <?php if ($wp_query->current_post % 2 != 0): ?>
                <div class="exhibition-module">
                    <h1><?php the_title(); ?></h1>
                    <h2><?php the_field('exhibitions_artist_h1', 'option'); ?></h2>
                        <?php $post_object = get_field('exhibition_author');
                        if( $post_object ):
                        $post = $post_object;
                        setup_postdata( $post );?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>     
                    <h2 class="mb24"><?php the_field('data_inicio'); ?> - <?php the_field('data_fim'); ?></h2>
                    <h2>Resumo</h2>
                    <p><?php the_field('exhibition_short_text'); ?></p>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
             <?php endif ?>
<?php endwhile ?>                       
<?php wp_reset_query(); ?>  
      </div>
        <div class="mt48 hide-for-medium columns medium-offset-3">
              <div class="modules">
                   <?php
                       $args = array(
                       'post_type' => 'exhibition',
                       'meta_value' => true,
                          'order' => 'date'
                       );
                    query_posts($args);
                        ?>
                        <?php
                        while (have_posts()) : the_post();
                        $image = get_field('exhibition_thumb');
                        $url = $image['url'];
                        $alt = $image['alt'];
                        ?> 
                <div class="exhibition-module">
                    <h1><?php the_title(); ?></h1>
                    <h2><?php the_field('exhibitions_artist_h1', 'option'); ?></h2>
                        <?php $post_object = get_field('exhibition_author');
                        if( $post_object ):
                        $post = $post_object;
                        setup_postdata( $post );?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>     
                    <h2 class="mb24"><?php the_field('data_inicio'); ?> - <?php the_field('data_fim'); ?></h2>
                    <h2>Resumo</h2>
                    <p><?php the_field('exhibition_short_text'); ?></p>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
                <?php endwhile;?>
                <?php wp_reset_query(); ?>  
            </div>
        </div>
   </div>
</main>
<?php 
get_footer(); ?>