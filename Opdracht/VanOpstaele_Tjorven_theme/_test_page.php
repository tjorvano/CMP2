

<?php get_header(); ?>
<h1> Mijn index-template</h1>
<p> template page.php </p>

<?php 
    if(have_posts()) 
    {
        while(have_posts())
        {
            the_post();
            //GEEF DE TITEL EN DE CONTENT VAN DE POST WEER
            the_title();
            the_content();
        }
    }
    else
    {   //INDIEN ER GEEN POST / CONTENT IS ECHO ...
        echo 'No content available';
        
    }
?>

<?php get_footer(); ?>