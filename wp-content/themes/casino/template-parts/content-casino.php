<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package casino
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if ( is_singular() ) :
//            the_title( '<h1 class="entry-title">', '</h1>' );
//            echo '<div class="num">', the_field( 'num'), '</div>';
            echo '<div class="rating">', the_field( 'rating'), '</div>';
            echo '<div class="cnum">', the_field( 'cnum'), '</div>';
            if (get_field('undertitle')):
                echo '<div class="undertitle">', the_field( 'undertitle'), '</div>';
            endif;
            echo '<div class="vote">', the_field( 'vote'), '</div>';
            echo '<div class="price">', the_field( 'price'), '</div>';
            ?>

            <div class="play"><a href='<?php the_field( 'l-button') ?>'>Play Now</a></div>
        <?php
        else :
//            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            echo '<div class="undertitle">', the_field( 'undertitle'), '</div>' ? '' : 's';
        endif;

        if ( 'post' === get_post_type() ) :
            ?>
            <div class="entry-meta">
                <?php
                casino_posted_on();
                casino_posted_by();
                ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <?php casino_post_thumbnail(); ?>

    <div class="entry-content">
        <?php
        the_content(
            sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'casino' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post( get_the_title() )
            )
        );

        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'casino' ),
                'after'  => '</div>',
            )
        );
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php casino_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
