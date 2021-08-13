<?php /* Loop Name: Programmes */ ?>
<?php
$args = array(
    'post_type' => 'casinos',
    'publish' => true,
    'paged' => get_query_var('paged'),
);
query_posts($args);
if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="gallery-item aligncenter">
<!--            --><?php //get_template_part( 'template-parts/content-casino', get_post_type() ); ?>
            <div class="csimage"><?php the_post_thumbnail(); ?></div>
            <?php
            if (get_field('undertitle')):
                echo '<div class="undertitle"><span>', the_field( 'undertitle'), '</span></div>';
            endif;
            ?>
            <div class="rating"><?php the_field('rating'); ?></div>
            <div class="vote"><?php the_field('vote'); ?></div>
            <div class="upto">Up To:</div>
            <div class="price"><?php the_field('price'); ?></div>
            <div class="medal"><img src="<?php the_field('medal'); ?>"></div>
            <div class="cscontent"><?php the_content(); ?></div>
            <div class="button"> <a href="<?php the_field('l-button'); ?>">PLAY NOW</a></div>



<!--            <div>-->
<!--                <a class="link_blue" href="--><?php //echo get_permalink(); ?><!--">Подробнее</a>-->
<!--                <a request-fancybox class="request link_blue link_red" href="#contact_form_pop1" data-program="--><?php //the_title(); ?><!--" data-code="--><?php //echo get_post_meta($post->ID, 'code', true); ?><!--">Заполнить заявку</a>-->
<!--            </div>-->
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry.', 'wp_test' ); ?></p>
<?php endif; ?>
