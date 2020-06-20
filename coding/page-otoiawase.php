<?php get_header(); ?>

    <!-- パンくず -->
    <div class="breadcrumb">
        <ol class="wrapper">
            <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
            <li><?php the_title(); ?></li>
        </ol>
    </div>

    <div class="page-contents wrapper">
        <h2 class="gf"><?php the_title(); ?></h2>
        <!-- <h2 class="page-title"><?php the_title(); ?></h2> -->
        <!-- ここからループ -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        <!-- ここまでループ -->
    </div>

    <?php get_footer(); ?>