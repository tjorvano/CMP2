<!DOCTYPE html>
<head>
    <title>Bootstrap Theme for Developers - Home</title>
    <!-- Meta -->
    <meta charset="utf-8">
       
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
   
    <!-- HOOK VOOR CSS -->
    <!-- NET VOOR DE HEAD-CLOSING TAG -->
    <?php wp_head(); ?>

</head> 

<body data-spy="scroll">
    
    <!-- ******HEADER****** --> 
    <header id="header" class="header">  
        <div class="container">            
            <h1 class="logo pull-left">
                <a class="scrollto" href="#promo">
                     <span class="logo-title">devAid</span>
                </a>
            </h1><!--//logo--> 
            <nav id="main-nav" class="main-nav navbar-right" role="navigation">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->            
                <div class="navbar-collapse collapse" id="navbar-collapse">
            
                        <?php  wp_nav_menu( array( 
                       'theme_location' => 'primary-menu', 
                       'menu_class' => 'nav navbar-nav', 
                       'container_class' => 'navbar-collapse collapse', 
                       'container-id' => 'navbar-collapse' ) ); ?>
                      
                       
                  
                </div><!--//navabr-collapse-->
    </nav><!—//main-nav-->   
        </div>
    </header><!--//header-->

        
    <!-- ******PROMO****** -->
    <section id="promo" class="promo section offset-header">
        <div class="container text-center">
            <h2 class="title">dev<span class="highlight">Aid</span></h2>
            <p class="intro">A free mobile-friendly Bootstrap theme designed to help developers
promote their personal projects</p>
            <div class="btns">
                <a class="btn btn-cta-secondary" href="http://themes.3rdwavemedia.com/" target="_blank">Demo</a>
                <a class="btn btn-cta-primary" href="http://themes.3rdwavemedia.com/website-templates/devaid-free-bootstrap-theme-developers/" target="_blank">Download</a>
            </div>
        </div><!--//container-->
        <div class="social-media">
        
        </div>
    </section><!--//promo-->
