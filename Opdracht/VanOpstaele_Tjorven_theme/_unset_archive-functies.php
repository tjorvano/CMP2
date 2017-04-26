<?php get_header(); ?>


    <!-- ******ABOUT****** --> 
    <section id="about" class="about section">
        <div class="container">
            <h2 class="title text-center">What is devAid?</h2>
            <p class="intro text-center">Explain your project in detail. Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
            <div class="row">

                <?php while ( have_posts()) : the_post(); ?>

                <div class="item col-md-4 col-sm-6 col-xs-12">
                    <div class="icon-holder">
                        <i class="<?php echo get_post_meta(get_the_ID(), '_icon', true); ?>"></i>
                    </div>
                    <div class="content">
                        <h3 class="sub-title"><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                    </div><!--//content-->
                </div><!--//item-->

                 <?php endwhile; ?>
                   
            </div><!--//row-->            
        </div><!--//container-->
    </section><!--//about-->

<?php get_footer(); ?>