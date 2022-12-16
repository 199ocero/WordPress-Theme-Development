<?php get_header();?>

<!-- Dynamic Area -->
<div id="id"
    class="site-content">
    <div id="primary"
        class="content-area">
        <main id="main"
            class="site-main">
            <div class="container">
                <div class="page-item">
                    <?php 
                        while ( have_posts() ) :
                            the_post(); ?>

                    <article>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </article>

                    <?php 
                    endwhile;
                ?>
                </div>
            </div>
        </main>
    </div>
</div>
<?php get_footer();?>