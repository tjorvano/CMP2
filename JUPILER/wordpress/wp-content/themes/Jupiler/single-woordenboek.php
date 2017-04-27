<?php
get_header();
?>

<h1> Hoera het werkt fwa fnie</h1>



<?php while ( have_posts()) : the_post();  //Zolang we "have_posts" hebben, doe "the_post" ?>
<!-- http://www.gdm.gent/mod_cms/cheatsheet/ -->

<!-- Titel van de post oproepen -->
<h2> <?php the_title(); ?> </h2>

<!-- Content van de post oproepen -->
<p> <?php the_content(); ?> </p>

<!-- Posttype van de post oproepen -->
<p>Posttype: <?php echo get_post_type(); ?> </p>

<!-- Datum van de post oproepen -->
<p>Datum: <?php the_date(); ?> </p>

<!-- ID van de post oproepen -->
<p>Post-ID: <?php the_ID(); ?> </p>

<!-- Meta data van de post oproepen -->
<p>Meta data (afkorting): <?php echo get_post_meta( get_the_ID(), '_afkorting', true ) ?> </p>

<!--Taxonomy / categorie / studierichting ophalen-->
<p>Gelinkte studierichting: 
    <?php 
        $studierichtingen = get_the_terms(get_the_ID(), 'studierichting');
        /* var_dump($studierichtingen); */

        foreach($studierichtingen as $richting){
            echo $richting->name . ",(" . $richting->slug . "), ";
        }
    ?>
</p>

<?php endwhile; ?>
<?php
get_footer();
?>