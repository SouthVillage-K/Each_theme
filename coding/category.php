<?php get_header(); ?>

<?php
  $category = get_the_category();
  $cat = $category[0];
  $cat_slug = $cat->slug;
?>

    <!-- パンくず -->
    <div class="breadcrumb">
        <ol class="wrapper">
            <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
            <li><?php echo $cat_slug; ?></li>
            <li></li>
        </ol>
    </div>

    <!-- 親カテゴリー -->
    <?php if( is_category( array('7','8','9','10','11','12','13','14','15','16') ) ) : ?>
        <?php $cat_id = get_queried_object()->cat_ID; $post_id = 'category_'.$cat_id; ?>
        <section class="main wrapper-bottom">
            <div class="slider">
                <div>
                    <img src="<?php the_field('slideimg1',$post_id); ?>" alt="各国のトップのスライド画像">
                </div>
                <div>
                    <img src="<?php the_field('slideimg2',$post_id); ?>" alt="各国のトップのスライド画像">
                </div>
                <div>
                    <img src="<?php the_field('slideimg3',$post_id); ?>" alt="各国のトップのスライド画像">
                </div>
            </div>
            <div class="country-hero-name">
                <p class="gf"><?php echo $cat_slug; ?></p>
            </div>
        </section>
        <?php include('parts-recommend.php'); ?>
        <?php include('parts-area-tag-cloud.php'); ?>
    <?php else: ?>
        <!-- 子カテゴリー（親カテゴリー以外） -->
        <?php
        global $wp_query;
        $total_results = $wp_query->found_posts;
        $search_query = get_search_query();
        ?>

        <section class="search-results wrapper wrapper-bottom">
            <h2>
                <?php
                $category = get_the_category();
                echo $category[1]->cat_name;
                ?>
                （<?php echo $total_results; ?>件）
            </h2>
            <ul class="news-area">
                <?php if ( !have_posts()) : ?>
                <li>この国/地域では店舗登録がありません。</li>
                <li><a href="<?php echo home_url(); ?>">ホームに戻る</a></li>
                <div class="searchbox">
                    <?php get_search_form(); ?>
                </div>
                <?php endif; ?>
                <?php while( have_posts()):the_post(); ?>
                <li>
                    <div class="box">
                        <div class="img-box">
                            <div class="img">
                                <img src="<?php the_field('big-img'); ?>" alt="<?php the_title(); ?>">
                            </div>
                        </div>
                        <a href="<?php the_permalink(); ?>">
                            <p><span><?php echo get_the_date('Y年n月j日'); ?></span></p>
                            <p><?php the_title(); ?></p>
                        </a>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>
        </section>

    <?php endif; ?>

    <?php include('parts-top3.php'); ?>
    <?php include('parts-new-reviews.php'); ?>

    <?php get_footer(); ?>