<?php get_header(); ?>
<?php before_page(); ?>
<main id="content">
    <article id="post-0" class="post not-found">
        <header class="header">
            <h1 class="entry-title"><?php esc_html_e( 'Not Found', 'blankslate' ); ?></h1>
        </header>
        <div class="entry-content">
            <p><?php esc_html_e( 'Nothing found for the requested page. Go back to the homepage?', 'blankslate' ); ?>
            </p>

            <a href="<?php echo get_site_url(); ?>">Go Back</a>
        </div>
    </article>
</main>
<?php after_page(); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>