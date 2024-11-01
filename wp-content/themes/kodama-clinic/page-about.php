<?php
	/* Template Name: 院長あいさつ　*/
?>

<?php get_header(); ?>

<main class="about inner">

    <!-- サムネイル -->
    <figure class="thumbnail">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide_1.png" alt="">
    </figure>


    <?php if( have_rows('about') ): ?>
    <?php while( have_rows('about') ): the_row(); ?>
    <div class="ttl">
        <h2><?php the_sub_field('ttl'); ?></h2>
    </div>
    <p><?php the_sub_field('cont'); ?></p>
    <?php endwhile; ?>
    <?php endif; ?>

    <!-- <p class="name">医院長　児玉 和也</p> -->

</main>

<?php get_footer();