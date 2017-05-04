<?php get_header(); ?>

<div class="main-container">
    <div class="main wrapper clearfix">
        <h1 class="pagetitle_article"><?php the_title(); ?></h1>
        <article>
            <?php
            if(have_posts())
            {
                while(have_posts())
                {
                    the_post();
                    //Print the title and the content of the current post
                    the_title();
                    the_content();
                    comment_form();

                    
                    }
            }
            else
            {
                echo 'Er is geen inhoud gevonden';
            }
            ?>

        </article>


        <aside class="fixed">
            <?php dynamic_sidebar( 'primary-sidebar' ); ?>
        </aside>

    </div> <!-- #main -->
</div> <!-- #main-container -->
<?php get_footer(); ?>