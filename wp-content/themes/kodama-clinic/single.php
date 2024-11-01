<?php get_header(); ?>

<main class="post inner">

    <div class="ttl">
        <date><?php the_time('Y.m.d'); ?></date>
        <h2 class="b"><?php the_title(); ?></h2>
    </div>

    <!-- サムネイル -->
    <!-- <figure class="thumbnail">
        <img src="./img/slide_1.png" alt="">
    </figure> -->

    <p>
        <?php the_content(); ?>
    </p>

</main>

<?php get_footer();