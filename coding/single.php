<?php get_header(); ?>
<?php
$review_query="SELECT round(AVG(meta_value),1) AS review_avg,count(meta_value) AS review_cnt FROM wp_postmeta WHERE post_id IN (SELECT post_id FROM wp_postmeta WHERE meta_value=". get_the_ID() ." and meta_key='wpcr3_review_post') AND meta_key='wpcr3_review_rating'";

$myreview = $wpdb->get_row($review_query);
?>

    <!-- パンくず -->
    <div class="breadcrumb">
        <ol class="wrapper">
            <?php
            $cat = get_the_category();
            echo '<a href="'. home_url() .'/" title="'. get_bloginfo('name', 'raw') .'">ホーム</a> ＞'. get_category_parents($cat[0]->term_id, TRUE, ' ＞ ');
            ?>
        </ol>
    </div>

    <!-- 店舗情報トップ -->
    <div class="store-head wrapper">
        <section class="store-title">
            <h3><?php the_title(); ?></h3>
            <div class="rating">
                <p class="rating-star">
                    <?php
                    $score = $myreview->review_avg;
                    if($score == 5){
                    echo '★★★★★';
                    }elseif($score >= 4){
                    echo '★★★★☆';
                    }elseif($score >= 3){
                    echo '★★★☆☆';
                    }elseif($score >= 2){
                    echo '★★☆☆☆';
                    }elseif($score >= 1){
                    echo '★☆☆☆☆';
                    }elseif($score == 0){
                    echo '☆☆☆☆☆';
                    }
                    ?>
                </p>
                <p class="rating-val"><?php echo $myreview->review_avg; ?>(<?php echo $myreview->review_cnt; ?>)</p>
            </div>
            <p class="section-lead">
                <?php the_field('catchphrase'); ?>
            </p>
        </section>
    </div>

    <!-- ヘッダー追従グロナビ -->
    <div class="l-header">
        <nav class="controllerHeader wrapper">
            <ul>
                <li>
                    <a href="#店舗トップ" class="gnav01">店舗トップ</a>
                </li>
                <li>
                    <a href="#写真" class="gnav02">写真</a>
                </li>
                <li>
                    <a href="#口コミ" class="gnav03">口コミ</a>
                </li>
                <li>
                    <a href="#地図" class="gnav04">地図</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- 切り替え01 -->
    <div class="store-top01 active">
        <!-- 店舗情報トップ写真 -->
        <div class="store-top-photo wrapper">
            <div class="box">
                <div class="img-box">
                    <div class="img big-box">
                        <a href="<?php echo $row[the_field('big-img')]; ?>" data-featherlight="image">
                            <img src="<?php echo $row[the_field('big-img')]; ?>" alt="大きめの写真">
                        </a>
                    </div>
                    <div class="img">
                        <a href="<?php echo $row[the_field('img01')]; ?>" data-featherlight="image">
                            <img src="<?php echo $row[the_field('img01')]; ?>" alt="小さめの写真">
                        </a>
                    </div>
                    <div class="img">
                        <a href="<?php echo $row[the_field('img02')]; ?>" data-featherlight="image">
                            <img src="<?php echo $row[the_field('img02')]; ?>" alt="小さめの写真">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 店舗情報テーブル -->
        <div class="store-info wrapper wrapper-bottom">
            <table class="info-table">
                <tbody>
                    <tr>
                        <td colspan="2">店舗情報</td>
                    </tr>
                    <tr>
                        <td class="contents">FreeWiFiの有無</td>
                        <td><?php the_field('freewifi'); ?></td>
                    </tr>
                    <tr>
                        <td class="contents">クレジットカード支払い可否</td>
                        <td><?php the_field('credit'); ?></td>
                    </tr>
                    <tr>
                        <td class="contents">備考</td>
                        <td><?php the_field('other'); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- 口コミ投稿エリア -->
        <div class="wrapper wrapper-bottom">
            <?php echo do_shortcode('[WPCR_SHOW POSTID="'.get_the_ID().'" NUM="5" ]'); ?>
        </div>

        <!-- 高評価の口コミエリア -->
        <section class="new-reviews wrapper wrapper-bottom">
            <div class="section-head">
                <h2 class="gf">High rating</h2>
                <p>高評価口コミ</p>
            </div>

            <div class="new-reviews-box">
                <div class="reviewer">
                    <div class="img">
                        <img src="http://nanson.xsrv.jp/wp-content/uploads/2020/05/philippines_1-scaled.jpg" alt="投稿者の写真">
                    </div>
                    <p>Bangkok大好きさんBangkok大好きさん</p>
                </div>
                <div class="balloon"><!-- 吹き出し -->
                    <dl>
                        <dt>2020.1.1</dt>
                    </dl>
                    <div class="path">
                        <ol>
                            <li><a href="#タイトップへ">タイ</a></li>
                            <li>バンコク</li>
                        </ol>
                    </div>
                    <div class="rating">
                        <p class="rating-star">★★★★☆</p>
                        <p class="rating-val">4.1</p>
                    </div>
                    <h3>パッタイが美味しいお店</h3>
                    <p>
                        口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。
                    </p>
                </div>
            </div>
            <div class="new-reviews-box">
                <div class="reviewer">
                    <div class="img">
                        <img src="http://nanson.xsrv.jp/wp-content/uploads/2020/05/philippines_1-scaled.jpg" alt="投稿者の写真">
                    </div>
                    <p>Bangkok大好きさんBangkok大好きさん</p>
                </div>
                <div class="balloon"><!-- 吹き出し -->
                    <dl>
                        <dt>2020.1.1</dt>
                    </dl>
                    <div class="path">
                        <ol>
                            <li><a href="#タイトップへ">タイ</a></li>
                            <li>バンコク</li>
                        </ol>
                    </div>
                    <div class="rating">
                        <p class="rating-star">★★★★☆</p>
                        <p class="rating-val">4.1</p>
                    </div>
                    <h3>パッタイが美味しいお店</h3>
                    <p>
                        口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。
                    </p>
                </div>
            </div>
            <div class="new-reviews-box">
                <div class="reviewer">
                    <div class="img">
                        <img src="http://nanson.xsrv.jp/wp-content/uploads/2020/05/philippines_1-scaled.jpg" alt="投稿者の写真">
                    </div>
                    <p>Bangkok大好きさんBangkok大好きさん</p>
                </div>
                <div class="balloon"><!-- 吹き出し -->
                    <dl>
                        <dt>2020.1.1</dt>
                    </dl>
                    <div class="path">
                        <ol>
                            <li><a href="#タイトップへ">タイ</a></li>
                            <li>バンコク</li>
                        </ol>
                    </div>
                    <div class="rating">
                        <p class="rating-star">★★★★☆</p>
                        <p class="rating-val">4.1</p>
                    </div>
                    <h3>パッタイが美味しいお店</h3>
                    <p>
                        口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。
                    </p>
                </div>
            </div>
        </section>


        <!-- 低評価の口コミエリア -->
        <section class="new-reviews wrapper">
            <div class="section-head">
                <h2 class="gf">Low rating</h2>
                <p>低評価口コミ</p>
            </div>

            <div class="new-reviews-box">
                <div class="reviewer">
                    <div class="img">
                        <img src="http://nanson.xsrv.jp/wp-content/uploads/2020/05/philippines_1-scaled.jpg" alt="投稿者の写真">
                    </div>
                    <p>Bangkok大好きさんBangkok大好きさん</p>
                </div>
                <div class="balloon"><!-- 吹き出し -->
                    <dl>
                        <dt>2020.1.1</dt>
                    </dl>
                    <div class="path">
                        <ol>
                            <li><a href="#タイトップへ">タイ</a></li>
                            <li>バンコク</li>
                        </ol>
                    </div>
                    <div class="rating">
                        <p class="rating-star">★★☆☆☆</p>
                        <p class="rating-val">2.1</p>
                    </div>
                    <h3>パッタイが美味しいお店</h3>
                    <p>
                        口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。
                    </p>
                </div>
            </div>
            <div class="new-reviews-box">
                <div class="reviewer">
                    <div class="img">
                        <img src="http://nanson.xsrv.jp/wp-content/uploads/2020/05/philippines_1-scaled.jpg" alt="投稿者の写真">
                    </div>
                    <p>Bangkok大好きさんBangkok大好きさん</p>
                </div>
                <div class="balloon"><!-- 吹き出し -->
                    <dl>
                        <dt>2020.1.1</dt>
                    </dl>
                    <div class="path">
                        <ol>
                            <li><a href="#タイトップへ">タイ</a></li>
                            <li>バンコク</li>
                        </ol>
                    </div>
                    <div class="rating">
                        <p class="rating-star">★★☆☆☆</p>
                        <p class="rating-val">2.1</p>
                    </div>
                    <h3>パッタイが美味しいお店</h3>
                    <p>
                        口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。
                    </p>
                </div>
            </div>
            <div class="new-reviews-box">
                <div class="reviewer">
                    <div class="img">
                        <img src="http://nanson.xsrv.jp/wp-content/uploads/2020/05/philippines_1-scaled.jpg" alt="投稿者の写真">
                    </div>
                    <p>Bangkok大好きさんBangkok大好きさん</p>
                </div>
                <div class="balloon"><!-- 吹き出し -->
                    <dl>
                        <dt>2020.1.1</dt>
                    </dl>
                    <div class="path">
                        <ol>
                            <li><a href="#タイトップへ">タイ</a></li>
                            <li>バンコク</li>
                        </ol>
                    </div>
                    <div class="rating">
                        <p class="rating-star">★★☆☆☆</p>
                        <p class="rating-val">2.1</p>
                    </div>
                    <h3>パッタイが美味しいお店</h3>
                    <p>
                        口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。口コミの内容抜粋がここに入ります。
                    </p>
                </div>
            </div>
        </section>

        <!-- ↓　View allボタン -->
        <div class="view-all">
            <a href="store-reviews.html">View all</a>
        </div>
    </div>

    <!-- 切り替え02~04 -->
    <div class="wrapper">
        <!-- 切り替え02（店舗写真一覧） -->
        <div class="store-top02">
            <div class="store-gallery">

                <?php
                $loop = CFS()->get( 'gallery-roop' );
                if (is_null($loop)) {
                    echo 'まだ写真投稿がありません。';
                } else {
                    // echo 'NULLじゃありません。';
                    foreach ( $loop as $row ){
                // $loop = CFS()->get( 'gallery-roop' );
                // foreach ( $loop as $row ):
                ?>

                <div class="img-box">
                    <a href="<?php echo $row['gallery-img']; ?>" data-featherlight="image">
                        <img src="<?php echo $row['gallery-img']; ?>" alt="店舗写真一覧">
                    </a>
                </div>

                <?php }} ?>
            </div>
        </div>

        <!-- 切り替え03（口コミ一覧） -->
        <div class="store-top03">
            <div class="wrapper wrapper-bottom">
                <?php echo do_shortcode('[WPCR_SHOW POSTID="'.get_the_ID().'" NUM="10" ]'); ?>
            </div>
        </div>

        <!-- 切り替え04（地図） -->
        <div class="store-top04">
            <table class="info-table">
                <tbody>
                    <tr>
                        <td class="contents">地図</td>
                        <td class="table-map">
                            <div class="ggmap">
                                <?php echo GeoMashup::map('map_content=single'); ?>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <?php get_footer(); ?>