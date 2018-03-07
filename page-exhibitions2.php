<?php
/**
 * Template Name: Exposições
 *
 * */

get_header(); ?>
<main>
    <div class="row">
        <div class="hide-for-small-only columns exhibition-container medium-push-3 medium-9">
          <div class="module-left-container">
          <?php
            $args = array(
            'post_type' => 'exposicao',
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
               <div class="exhibition-module" onclick="location.href='<?php the_permalink(); ?>'">
                        <h1><?php the_title(); ?></h1>
                            <?php $post_object = get_field('exhibition_author');
                            if( $post_object ):
                            $post = $post_object;
                            setup_postdata( $post );?>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>
                        <h2 class="mb14"><?php the_field('data_inicio'); ?> &#8212;&nbsp;<?php the_field('data_fim'); ?></h2>
                        <h3>Resumo</h3>
                        <p><?php the_field('exhibition_short_text'); ?></p>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </div>
             <?php endif ?>
<?php endwhile ?>
<?php wp_reset_query(); ?>
      </div>
         <div class="module-right-container">
          <?php
            $args = array(
            'post_type' => 'exposicao',
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
                <div class="exhibition-module module-right" onclick="location.href='<?php the_permalink(); ?>'">
                    <h1><?php the_title(); ?></h1>
                    <h2><?php the_field('exhibitions_artist_h1', 'option'); ?></h2>
                        <?php $post_object = get_field('exhibition_author');
                        if( $post_object ):
                        $post = $post_object;
                        setup_postdata( $post );?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    <h2 class="mb14"><?php the_field('data_inicio'); ?> &#8212;&nbsp;<?php the_field('data_fim'); ?></h2>
                    <h3>Resumo</h3>
                    <p><?php the_field('exhibition_short_text'); ?></p>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
             <?php endif ?>
<?php endwhile ?>
<?php wp_reset_query(); ?>
      </div>
    </div>
        <div class="columns medium-offset-3 hide-for-medium">
              <div class="">
                   <?php
                       $args = array(
                       'post_type' => 'exposicao',
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
                <div class="exhibition-module" onclick="location.href='<?php the_permalink(); ?>'">
                    <h1><?php the_title(); ?></h1>
                    <h2><?php the_field('exhibitions_artist_h1', 'option'); ?></h2>
                        <?php $post_object = get_field('exhibition_author');
                        if( $post_object ):
                        $post = $post_object;
                        setup_postdata( $post );?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    <h2 class="mb14"><?php the_field('data_inicio'); ?> &#8212;&nbsp;<?php the_field('data_fim'); ?></h2>
                    <h3>Resumo</h3>
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
