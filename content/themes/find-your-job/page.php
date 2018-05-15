<?php get_header();?>

<div class="page_php">

<?php get_header();?>
    <?php
    while(have_posts()): the_post();
        echo the_content();
    endwhile;
    ?>

<?php get_footer();?>

</div>
