<footer>
    <div class="inner">
        <div class="ft-logo">
            <figure>
                <a href="<?php echo home_url(); ?>"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"
                        alt="こだまクリニック｜洲本市の内科,病院"></a>
            </figure>
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
        <div class="ft-content">
            <div class="area1">
                <?php
                    $post_id = 2; // トップページの投稿ID
                    $tenpo = get_field('tenpo', $post_id);
                    if ($tenpo) :
                    ?>
                <a href="tel:0799243030">
                    <i class="fa-solid fa-phone"></i>
                    <p><?php echo esc_html($tenpo['tel']); ?></p>
                </a>
                <p>
                    <?php echo esc_html($tenpo['address']); ?>
                </p>
                <?php endif; ?>
            </div>

            <ul class="area2">
                <a href="<?php echo home_url(); ?>">
                    <li>トップ</li>
                </a>
                <a href="<?php echo home_url("info"); ?>">
                    <li>クリニックについて</li>
                </a>
                <a href="<?php echo home_url("#access"); ?>">
                    <li>診療のご案内</li>
                </a>
                <a href="<?php echo home_url("#access"); ?>">
                    <li>アクセス</li>
                </a>
                <a href="<?php echo home_url("recruit"); ?>">
                    <li>求人案内</li>
                </a>
            </ul>

            <div class="area3">
                <div class="timetable">
                    <!-- タイトル -->
                    <ul class="time-table-ttl">
                        <li>診療時間</li>
                        <li>月</li>
                        <li>火</li>
                        <li>水</li>
                        <li>木</li>
                        <li>金</li>
                        <li>土</li>
                        <li>日</li>
                    </ul>
                    <!-- 午前 -->
                    <ul class="time-table-ttl">
                        <?php
                        $post_id = 2; // トップページの投稿ID
                        if (have_rows('time-table-am', $post_id)) :
                            while (have_rows('time-table-am', $post_id)) : the_row();
                                if (have_rows('column', $post_id)) :
                                    while (have_rows('column', $post_id)) : the_row(); ?>
                        <li>
                            <p><?php echo esc_html(get_sub_field('am')); ?></p>
                            <span>最終受付 <?php echo esc_html(get_sub_field('am-last')); ?></span>
                        </li>
                        <?php endwhile;
                        endif; ?>
                        <li>
                            <?php 
                        $week1 = get_sub_field('week1');
                        if ($week1 === '◯') {
                            echo '<i class="fa-regular fa-circle"></i>';
                        } elseif ($week1 === '×') {
                            echo '<i class="fa-solid fa-xmark"></i>';
                        } else {
                            echo esc_html($week1);
                        }
                        ?>
                            <!-- <i class="fa-regular fa-circle"></i> -->
                        </li>
                        <li>
                            <?php 
                        $week2 = get_sub_field('week2');
                        if ($week2 === '◯') {
                            echo '<i class="fa-regular fa-circle"></i>';
                        } elseif ($week2 === '×') {
                            echo '<i class="fa-solid fa-xmark"></i>';
                        } else {
                            echo esc_html($week2);
                        }
                        ?>
                            <!-- <i class="fa-regular fa-circle"></i> -->
                        </li>
                        <li>
                            <?php 
                        $week3 = get_sub_field('week3');
                        if ($week3 === '◯') {
                            echo '<i class="fa-regular fa-circle"></i>';
                        } elseif ($week3 === '×') {
                            echo '<i class="fa-solid fa-xmark"></i>';
                        } else {
                            echo esc_html($week3);
                        }
                        ?>
                            <!-- <i class="fa-regular fa-circle"></i> -->
                        </li>
                        <li>
                            <?php 
                        $week4 = get_sub_field('week4');
                        if ($week4 === '◯') {
                            echo '<i class="fa-regular fa-circle"></i>';
                        } elseif ($week4 === '×') {
                            echo '<i class="fa-solid fa-xmark"></i>';
                        } else {
                            echo esc_html($week4);
                        }
                        ?>
                            <!-- <i class="fa-regular fa-circle"></i> -->
                        </li>
                        <li>
                            <?php 
                        $week5 = get_sub_field('week5');
                        if ($week5 === '◯') {
                            echo '<i class="fa-regular fa-circle"></i>';
                        } elseif ($week5 === '×') {
                            echo '<i class="fa-solid fa-xmark"></i>';
                        } else {
                            echo esc_html($week5);
                        }
                        ?>
                            <!-- <i class="fa-regular fa-circle"></i> -->
                        </li>
                        <li>
                            <?php 
                        $week6 = get_sub_field('week6');
                        if ($week6 === '◯') {
                            echo '<i class="fa-regular fa-circle"></i>';
                        } elseif ($week6 === '×') {
                            echo '<i class="fa-solid fa-xmark"></i>';
                        } else {
                            echo esc_html($week6);
                        }
                        ?>
                            <!-- <i class="fa-regular fa-circle"></i> -->
                        </li>
                        <li>
                            <?php 
                        $week7 = get_sub_field('week7');
                        if ($week7 === '◯') {
                            echo '<i class="fa-regular fa-circle"></i>';
                        } elseif ($week7 === '×') {
                            echo '<i class="fa-solid fa-xmark"></i>';
                        } else {
                            echo esc_html($week7);
                        }
                        ?>
                            <!-- <i class="fa-regular fa-circle"></i> -->
                        </li>
                        <?php endwhile;
                        endif; ?>
                    </ul>
                    <!-- 午後 -->
                    <ul class="time-table-ttl">
                        <?php
                        $post_id = 2; // トップページの投稿ID
                        if (have_rows('time-table-pm', $post_id)) :
                            while (have_rows('time-table-pm', $post_id)) : the_row();
                                if (have_rows('column', $post_id)) :
                                    while (have_rows('column', $post_id)) : the_row(); ?>
                        <li>
                            <p><?php echo esc_html(get_sub_field('pm')); ?></p>
                            <span class="bikou">最終受付 <?php echo esc_html(get_sub_field('pm-last')); ?>
                            </span>
                        </li>
                        <?php endwhile;
                        endif; ?>
                        <li>
                            <?php 
                        $week1 = get_sub_field('week1');
                        if ($week1 === '◯') {
                            echo '<i class="fa-regular fa-circle"></i>';
                        } elseif ($week1 === '×') {
                            echo '<i class="fa-solid fa-xmark"></i>';
                        } else {
                            echo esc_html($week1);
                        }
                        ?>
                            <!-- <i class="fa-regular fa-circle"></i> -->
                        </li>
                        <li>
                            <?php 
                        $week2 = get_sub_field('week2');
                        if ($week2 === '◯') {
                            echo '<i class="fa-regular fa-circle"></i>';
                        } elseif ($week2 === '×') {
                            echo '<i class="fa-solid fa-xmark"></i>';
                        } else {
                            echo esc_html($week2);
                        }
                        ?>
                            <!-- <i class="fa-regular fa-circle"></i> -->
                        </li>
                        <li>
                            <?php 
                        $week3 = get_sub_field('week3');
                        if ($week3 === '◯') {
                            echo '<i class="fa-regular fa-circle"></i>';
                        } elseif ($week3 === '×') {
                            echo '<i class="fa-solid fa-xmark"></i>';
                        } else {
                            echo esc_html($week3);
                        }
                        ?>
                            <!-- <i class="fa-regular fa-circle"></i> -->
                        </li>
                        <li>
                            <?php 
                        $week4 = get_sub_field('week4');
                        if ($week4 === '◯') {
                            echo '<i class="fa-regular fa-circle"></i>';
                        } elseif ($week4 === '×') {
                            echo '<i class="fa-solid fa-xmark"></i>';
                        } else {
                            echo esc_html($week4);
                        }
                        ?>
                            <!-- <i class="fa-regular fa-circle"></i> -->
                        </li>
                        <li>
                            <?php 
                        $week5 = get_sub_field('week5');
                        if ($week5 === '◯') {
                            echo '<i class="fa-regular fa-circle"></i>';
                        } elseif ($week5 === '×') {
                            echo '<i class="fa-solid fa-xmark"></i>';
                        } else {
                            echo esc_html($week5);
                        }
                        ?>
                            <!-- <i class="fa-regular fa-circle"></i> -->
                        </li>
                        <li>
                            <?php 
                        $week6 = get_sub_field('week6');
                        if ($week6 === '◯') {
                            echo '<i class="fa-regular fa-circle"></i>';
                        } elseif ($week6 === '×') {
                            echo '<i class="fa-solid fa-xmark"></i>';
                        } else {
                            echo esc_html($week6);
                        }
                        ?>
                            <!-- <i class="fa-regular fa-circle"></i> -->
                        </li>
                        <li>
                            <?php 
                        $week7 = get_sub_field('week7');
                        if ($week7 === '◯') {
                            echo '<i class="fa-regular fa-circle"></i>';
                        } elseif ($week7 === '×') {
                            echo '<i class="fa-solid fa-xmark"></i>';
                        } else {
                            echo esc_html($week7);
                        }
                        ?>
                            <!-- <i class="fa-regular fa-circle"></i> -->
                        </li>
                        <?php endwhile;
                        endif; ?>
                    </ul>
                </div>
                <div class="bikow-wrap">
                    <p><?php echo get_field('timetbl_message', 2); ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script>
$(document).ready(function() {
    function checkWindowSize() {
        if ($(window).width() <= 768) {
            $('header').addClass('smh-view');
        } else {
            $('header').removeClass('smh-view');
        }
    }

    // Initial check
    checkWindowSize();

    // Monitor window resize
    $(window).resize(function() {
        checkWindowSize();
    });

    // Handle button click
    $('.menu-btn').click(function() {
        if ($(this).hasClass('open')) {
            $(this).removeClass('open').addClass('close');
            $('header.smh-view').addClass('on');
        } else {
            $(this).removeClass('close').addClass('open');
            $('header.smh-view').removeClass('on');
        }
    });

    $(document).click(function(event) {
        if ($('header').hasClass('smh-view on') && !$(event.target).closest('.gmenu, .menu-btn')
            .length) {
            $('.menu-btn').removeClass('close').addClass('open');
            $('header.smh-view').removeClass('on');
        }
    });
});


//splide
// new Splide( '.splide' ).mount()

const options = {
    // メディアクエリの設定
    mediaQuery: "min",
    // 固定幅の設定
    fixedWidth: "15rem",
    // 高さの比率
    heightRatio: 0.4,
    // 要素間の隙間
    gap: 16,
    // スライドのタイプ
    type: "loop",
    // 矢印の表示設定
    arrows: false,
    // ドラッグの設定
    drag: "free",
    // フリックの強さ
    flickPower: 100,
    // ページネーションの表示設定
    pagination: false,

    // 自動スクロールの設定
    autoScroll: {
        // スクロール速度
        speed: 0.25,
        // ホバー時の一時停止設定
        pauseOnHover: false,
        // フォーカス時の一時停止設定
        pauseOnFocus: true,
    },
    // ブレークポイントの設定
    breakpoints: {
        1025: {
            // ブレークポイント時の隙間
            gap: 5,
            // ブレークポイント時の固定幅
            fixedWidth: "20rem",
            // 高さの比率
            heightRatio: 0.15,
        },
    },
};

const splide = new Splide(".splide", options);

splide.mount(window.splide.Extensions);
</script>
</body>

</html>