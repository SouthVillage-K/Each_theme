<?php get_header(); ?>
    <!-- ローディング画面 -->
    <div id="loading">
        <div class="spinner">
        <p>Now Loading...</p>
        </div>
    </div>

    <!-- メイン -->
    <section class="main">
        <div class="slider">
            <div><img src="<?php echo get_template_directory_uri(); ?>/img/thailand-bangkok-wat-pak-nam-4-1024x768.jpg" alt=""></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/img/shwedagon-pagoda13.jpg" alt=""></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/img/shwedagon-pagoda9.jpg" alt=""></div>
        </div>
        <!-- 現在地から検索 -->
        <div class="search-contents area_1 active">
            <div class="box-area_1">
                <?php echo GeoMashup::map('map_content=global'); ?>
                <!-- <?php echo GeoMashup::map('map_content=single'); ?> -->
                <!-- <?php echo GeoMashup::map('map_content=contextual'); ?> -->
            </div>
        </div>

        <div class="balloon area_1 active">
            <p>
                画面ををタップして現在地を取得する
            </p>
            <p class="cancel">×</p>
        </div>

        <!-- 地図で検索 -->
        <div class="search-contents area_2">
            <div class="box-area_2">
                <?php echo do_shortcode('[google_map_easy id="1"]')?>
            </div>
        </div>

        <div class="balloon area_2">
            <p>
                国ををタップして地域選択に進む
            </p>
            <p class="cancel">×</p>
        </div>

        <!-- 国地域で検索 -->
        <div class="search-contents area_3">
            <div class="country-name">
                <ul>
                    <li><a href="<?php bloginfo( 'url' ); ?>/indonesia/">インドネシア</a></li>
                    <li><a href="<?php bloginfo( 'url' ); ?>/cambodia/">カンボジア</a></li>
                    <li><a href="<?php bloginfo( 'url' ); ?>/singapore/">シンガポール</a></li>
                    <li><a href="<?php bloginfo( 'url' ); ?>/thailand/">タイ</a></li>
                    <li><a href="<?php bloginfo( 'url' ); ?>/philippines/">フィリピン</a></li>
                    <li><a href="<?php bloginfo( 'url' ); ?>/brunei/">ブルネイ</a></li>
                    <li><a href="<?php bloginfo( 'url' ); ?>/vietnam/">ベトナム</a></li>
                    <li><a href="<?php bloginfo( 'url' ); ?>/malaysia/">マレーシア</a></li>
                    <li><a href="<?php bloginfo( 'url' ); ?>/myanmar/">ミャンマー</a></li>
                    <li><a href="<?php bloginfo( 'url' ); ?>/laos/">ラオス</a></li>
                </ul>
            </div>
        </div>

        <!-- フリーワード検索 -->
        <div class="search-contents area_4">
            <div class="balloon-freeword">
                <?php get_search_form(); ?>
            </div>
        </div>
    </section>

    <?php include('parts-4serchbutton.php'); ?>
    <?php include('parts-top3.php'); ?>
    <?php include('parts-select-country.php'); ?>
    <?php include('parts-new-reviews.php'); ?>

    <?php get_footer(); ?>