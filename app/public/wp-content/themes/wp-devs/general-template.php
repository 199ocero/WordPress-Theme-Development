<?php 
/*
Template Name: General Template
*/
?>
<?php get_header();?>

<!-- Dynamic Area -->
<div id="id"
    class="site-content">
    <div id="primary"
        class="content-area">
        <main id="main"
            class="site-main">
            <div class="container">
                <div class="general-template">
                    <?php 
                    if ( have_posts() ) :
                        while ( have_posts() ) :
                            the_post(); ?>

                    <article>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </article>

                    <?php 
                    endwhile;
                    else:
                        ?>
                    <p>No posts yet.</p>
                    <?php
                    endif;
                ?>
                </div>
            </div>
        </main>
    </div>
</div>
<?php get_footer();?>