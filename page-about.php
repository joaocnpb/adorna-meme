<?php
/**
 * Template Name: Sobre 
 *
 * */

get_header(); ?>

<main>
    <div class="row">
        <div class="columns large-offset-3 large-5">
           <div id="about-bio">
                  <p><?php the_field('about_bio');?></p>
            </div>
        </div>
        <div class="columns large-3">
            <div id="address">
                <h1 class="mtop20"><?php the_field('about_address_title');?></h1>
                <p><?php the_field('about_address');?></p>
                <div class="text-link" id="gmaps"> <a>View on Google Maps</a> </div>
            </div>
            <div id="contact">
                <h1 class="mtop20"><?php the_field('about_contacts_title');?></h1>
                <p><?php the_field('about_contacts');?></p>
            </div>
        </div>
    </div>
        <div class="row">
        <div class="about columns large-offset-7 large-6"> <?php the_custom_logo();?>
        </div>
    </div>    
</main>

<?php
get_footer(); ?>