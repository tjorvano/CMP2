
<?php get_header(); ?>

<section id="features" class="features section">
        <div class="container text-center">
            <h2 class="title">Features</h2>
            <ul class="feature-list list-unstyled">

            <!-- LOOP -->
               <?php while ( have_posts()) : the_post(); ?>
                    <li><i class="fa fa-check"></i> <?php the_title(); ?> </li>
                <?php endwhile; ?>
                
            </ul>
        </div><!--//container-->
    </section><!--//features-->



<?php get_footer(); ?>