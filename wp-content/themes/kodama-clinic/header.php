<!DOCTYPE html>
<html lang="ja" <?php language_attributes(); ?>>

<head>
    <?php wp_head(); ?>


    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    wp_enqueue_style('reset-css', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('common-css', get_template_directory_uri() . '/assets/css/common.css');
    wp_enqueue_style('index-css', get_template_directory_uri() . '/assets/css/index.css');
    ?>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- jquery & iScroll -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>

    <!-- splide cdn -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css">
    <script
        src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js">
    </script>

    <!--  -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-74KBDYRJLS"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-74KBDYRJLS');
    </script>

    <?php
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/fontawesome/css/fontawesome.css');
    wp_enqueue_style('brands-css', get_template_directory_uri() . '/fontawesome/css/brands.css');
    wp_enqueue_style('solid-css', get_template_directory_uri() . '/fontawesome/css/solid.css');
    wp_enqueue_style('thin-css', get_template_directory_uri() . '/fontawesome/css/thin.css');
    wp_enqueue_style('sharp-solid-css', get_template_directory_uri() . '/fontawesome/css/sharp-solid.css');
    ?>

    <!-- typescript -->
    <script type="text/javascript"
        src="//typesquare.com/3/tsst/script/ja/typesquare.js?663af2d3b01c4908800e4690ac1e02e5" charset="utf-8"></script>

    <!-- スムーススクロール -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const links = document.querySelectorAll('a[href^="#"]');
        for (const link of links) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        }
    });
    </script>

    <meta name="description"
        content="こだまクリニックは、兵庫県洲本市にある内科、呼吸器内科、リウマチ科、アレルギー科を専門とするクリニックです。発熱外来、各種予防接種、健康診断も行っております。院長は高血圧症、脂質異常症、糖尿病などの生活習慣病の治療に力を入れ、関節リウマチや難治性の咳嗽の診療にも注力しています。患者さま一人ひとりに丁寧で親身な医療を提供し、健康で豊かな生活をサポートします。お気軽にご相談ください。">
</head>

<body>

    <header>
        <!-- トップアイコン -->
        <ul class="hd-menu">
            <a class="tel" href="tel:0799243030">
                <li>
                    <i class="fa-solid fa-phone"></i>
                    <p>0799-24-3030</p>
                </li>
            </a>
            <a href="">
                <li>
                    <!-- アクセス -->
                    <i class="fa-solid fa-location-dot"></i>
                    <p>アクセス</p>
                </li>
            </a>
            <a href="">
                <li>
                    <!-- 営業時間 -->
                    <i class="fa-solid fa-clock"></i>
                    <p>営業時間</p>
                </li>
            </a>

        </ul>

        <!-- グローバルメニュー -->
        <div class="gmenu">
            <!-- トップロゴ -->
            <div class="pc-logo">
                <!--  -->
                <h1>
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"
                            alt="こだまクリニック｜洲本市の内科,病院">
                    </a>
                </h1>
                <!--  -->
                <ul class="genre">
                    <?php
                    $post_id = 2;
                    if( have_rows('genre', $post_id) ): ?>
                    <?php while( have_rows('genre', $post_id) ): the_row(); ?>
                    <li><?php the_sub_field('name'); ?></li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>

            <!-- トップメニュー -->
            <ul class="g-menu">
                <a href="<?php echo home_url(); ?>">
                    <li>トップ</li>
                </a>
                <a href="<?php echo home_url('/info'); ?>">
                    <li>クリニックについて</li>
                </a>
                <?php if (is_front_page()) : ?>
                <a href="#access">
                    <?php else : ?>
                    <a href="<?php echo home_url('#access'); ?>">
                        <?php endif; ?>
                        <li>診療のご案内</li>
                    </a>
                    <?php if (is_front_page()) : ?>
                    <a href="#access">
                        <?php else : ?>
                        <a href="<?php echo home_url('#access'); ?>">
                            <?php endif; ?>
                            <li>アクセス</li>
                        </a>
                        <a href="<?php echo home_url('/recruit'); ?>">
                            <li>求人案内</li>
                        </a>
            </ul>
        </div>

    </header>

    <!-- スマホ用 -->
    <button class="smh menu-btn open">
        <i class="open-btn fa-sharp fa-light fa-bars"></i>
        <i class="close-btn fa-sharp fa-thin fa-circle-xmark"></i>
    </button>

    <figure class="smh smh-logo">
        <!--  -->
        <ul class="genre">
            <?php
                    $post_id = 2;
                    if( have_rows('genre', $post_id) ): ?>
            <?php while( have_rows('genre', $post_id) ): the_row(); ?>
            <li><?php the_sub_field('name'); ?></li>
            <?php endwhile; ?>
            <?php endif; ?>
        </ul>
        <h1>
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="こだまクリニック｜洲本市の内科,病院">
            </a>
        </h1>
    </figure>