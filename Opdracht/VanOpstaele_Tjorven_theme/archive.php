
<?php get_header(); ?>
<p> archive template </p>
<section id="archive" class="archive">

            <!-- LOOP -->
               <?php while ( have_posts()) : the_post(); ?>
               
               <?php
               get_template_part('partials/title', get_post_type());
               ?>
                 <?php the_title(); ?> <br>
                <?php endwhile; ?>
                
    </section><!--//features-->



<?php get_footer(); ?>