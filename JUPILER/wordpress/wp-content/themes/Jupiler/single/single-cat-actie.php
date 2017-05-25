
<?php
/*
 * Template Name: Actie
 * Template Post Type: post, page, product
 */
 
 get_header();  ?>
    <div class="main-container">
        <div class="main wrapper clearfix">
                <?php
                if(have_posts())
                {
                    while(have_posts())
                    {
                        the_post();
                        //Print the title and the content of the current post
                        echo '<article>';
                        the_content();
                        echo '<br>';
                        echo '<p>Geschreven door: </p>'; the_author();
                        echo '<br>';
                        echo '<a href="' . previous_post_link() . '"></a>';
                        comments_template();
                        echo get_post_meta(get_the_ID(), 'NAAM_CUSTOM_FIELD', true);
                        echo '</article>'; 
                        if( has_post_thumbnail() ):
                            echo get_the_post_thumbnail();
                        endif; 

                    }
                }
                else
                {
                    echo 'Er is geen inhoud gevonden';
                }
                wp_simple_pagination();
                ?>


            <aside class="fixed">
                <?php dynamic_sidebar( 'primary-sidebar' ); ?>
            </aside>

        </div> <!-- #main -->
    </div> <!-- #main-container -->
<?php get_footer(); ?>