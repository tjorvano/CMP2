

<?php get_header(); ?>

<p> template index.php </p>

<?php 
    if(have_posts()) 
    {
        while(have_posts())
        {
            the_post();
            //GEEF DE TITEL EN DE CONTENT VAN DE POST WEER
            //GET TITLE TEMPLATE PART
            get_template_part('partials/title');

            //GET TITLE TEMPLATE PART WITH IMG
            get_template_part('partials/title','img');

            //GET TITLE TEMPLATE PART DAT NIET BESTAAT
            get_template_part('partials/title','test');


            the_content();
        }
    }
    else
    {   //INDIEN ER GEEN POST / CONTENT IS ECHO ...
        echo 'No content available';
        
    }
?>

<?php get_footer(); ?>