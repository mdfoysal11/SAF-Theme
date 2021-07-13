<?php get_header( ); ?>
<body<?php body_class();?>>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="tagline"><?php bloginfo("description"); ?></h3>
                <h1 class="align-self-center display-1 text-center heading"><?php bloginfo("name");?></h1>
            </div>
        </div>
    </div>
</div>
<div class="posts">
    <?php
    if (have_posts()) {
        while (have_posts()){
            the_post();?>

    <div class="post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="post-title"><?php the_title( );?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong><?php the_author(  ); ?></strong><br/>
                        <?php echo get_the_date("jS M, Y");?>
                    </p>
                    <ul class="list-unstyled">
                        <li>dhaka</li>
                    </ul>
                </div>
                <div class="col-md-8">
                   
                    <?php the_post_thumbnail("learg", array("class" => "img-fluid")); ?>
                    <?php the_excerpt(  ); ?>
                 
                </div>
            </div>

        </div>
    </div>
    
    <?php  

      }
    }
?>
<?php get_template_part( "theme-parts/pagination") ?>
    <?php get_footer( );?>