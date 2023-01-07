
    <?php get_header(); ?> <!-- wordpress form of include -->


		<article class="content px-3 py-5 p-md-5">
            
            <?php 
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();   
/*                     the_content();  non dynamic content loaded */
                    get_template_part('template-parts/content', 'archive'); //in template-parts: looks for content-article.php if article is left out it looks for content
                } 
            }  ?>


<?php
the_posts_pagination();
?>

	    </article>

    
<?php get_footer(); ?> <!-- wordpress form of include -->