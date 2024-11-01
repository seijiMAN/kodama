<?php
	/* Template Name: トップページ　*/
?>

<?php get_header(); ?>

<main class="top">

    <!-- スライド -->
    <ul class="slide">
        <li><img src="<?php the_field('img1'); ?>" alt=""></li>
        <!-- <li><img src="./img/slide_2.png" alt=""></li>
    <li><img src="./img/slide_3.jpg" alt=""></li>
    <li><img src="./img/slide_4.jpg" alt=""></li> -->
    </ul>

    <!--  アーカイブ -->
    <ul class="archive inner">
        <?php
        $args = array(
            'posts_per_page' => 3 // 最新の投稿を3件取得
        );
        $latest_posts = get_posts($args);
        foreach ($latest_posts as $post) : setup_postdata($post); ?>
        <a href="<?php the_permalink(); ?>">
            <li>
                <date><?php the_time('Y.m.d'); ?></date>
                <h3><?php the_title(); ?></h3>
                <i class="fa-thin fa-plus"></i>
            </li>
        </a>
        <?php endforeach; wp_reset_postdata(); ?>
    </ul>


    <div id="access" class="access-wrap inner">
        <h2 class="inner">診療時間・アクセス</h2>
        <!-- ご来院される患者様へ -->
        <div class="area1">
            <?php
            $access_group = get_field('access-group');
            if ($access_group) :
            ?>
            <h3><?php echo $access_group['ttl']; ?></h3>
            <p><?php echo $access_group['textarea']; ?></p>
            <?php endif; ?>
        </div>
        <!-- 営業時間 -->
        <div class="area3">
            <!-- タイムテーブル -->
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
            <!--  -->
            <div class="bikow-wrap">
                <p><?php echo get_field('timetbl_message', 2); ?></p>
            </div>
        </div>
        <!-- 住所 マップ -->
        <div class="map">
            <div class="map-inner">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3294.5938461017854!2d134.8401985887759!3d34.33536153325554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3554a55bcca0fa15%3A0xe40cfbe18ac92474!2z44GT44Gg44G-44Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1720527650895!5m2!1sja!2sjp"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <ul>
                    <?php
                    $tenpo = get_field('tenpo');
                    if ($tenpo) :
                    ?>
                    <li><i class="fa-sharp fa-solid fa-location-dot"></i>
                        <p><?php echo esc_html($tenpo['address']); ?></p>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <p><?php echo esc_html($tenpo['tel']); ?></p>
                    </li>
                    <li><i class="fa-solid fa-fax"></i>
                        <p><?php echo esc_html($tenpo['fax']); ?></p>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>

</main>

<?php get_footer();