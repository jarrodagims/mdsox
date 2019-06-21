<?php get_header(); ?>
<?php if(!is_cart() && !is_checkout() && !is_woocommerce()) : before_page(); endif;?>
<main id="content">
    <header class="header">
        <h1 class="entry-title"><?php single_term_title(); ?></h1>
        <div class="archive-meta">
            <?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?></div>
    </header>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'entry' ); ?>
    <?php endwhile; endif; ?>
    <?php get_template_part( 'nav', 'below' ); ?>
</main>
<?php if(!is_cart() && !is_checkout() && !is_woocommerce()) :  after_page(); endif;?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>