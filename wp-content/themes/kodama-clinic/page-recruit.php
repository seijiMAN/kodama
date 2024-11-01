<?php
/* Template Name: リクルート */
?>

<?php get_header(); ?>

<main class="recruit inner">

    <div class="recruit-top-txt">
        <div class="ttl">
            <h2>求人募集</h2>
        </div>

        <p><?php the_field('about'); ?></p>
    </div>

    <div class="recruit-about">
        <?php if( have_rows('loop') ): ?>
        <dl>
            <?php while( have_rows('loop') ): the_row(); ?>
            <dt><?php the_sub_field('ttl'); ?></dt>
            <dd><?php the_sub_field('txt'); ?></dd>
            <?php endwhile; ?>
        </dl>
        <?php endif; ?>

        <!-- <dl>
            <dt>勤務形態</dt>
            <dd>パート</dd>

            <dt>看護師</dt>
            <dd>受付スタッフ</dd>

            <dt>応募資格</dt>
            <dd>看護師のサポートをお願いします。資格は不要です。未経験者でも可能です。</dd>

            <dt>待遇</dt>
            <dd>
                正社員<br>
                　雇用保険完備、制服支給、交通費支給、週休3日程度<br>
                パート<br>
                　シフト制、制服支給、交通費支給
            </dd>
            <dt>住所</dt>
            <dd>〒656-0101　兵庫県洲本市納215-1</dd>
            <dt>勤務形態</dt>
            <dd>パート</dd>
            <dt>応募方法</dt>
            <dd>下記のフォームからご応募下さい</dd>
        </dl> -->
    </div>

    <h3>応募フォーム</h3>
    <div class="recruit-form">
        <?php echo do_shortcode('[contact-form-7 id="8292914" title="求人募集"]'); ?>
    </div>

</main>

<?php get_footer();