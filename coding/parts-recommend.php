    <!-- 国ごと料理おすすめエリア -->
    <section class="sec-food wrapper wrapper-bottom">
        <div class="section-head">
            <h2 class="gf">Recommend</h2>
            <p>おすすめ料理メニュー</p>
        </div>
        <div class="sec-box">
            <div class="sec-food-img">
                <img src="<?php the_field('recommendimg',$post_id); ?>" alt="おすすめ料理写真">
            </div>
            <div class="container">
                <div class="sec-food-txt">
                    <h3><?php the_field('recommendmenu',$post_id); ?></h3>
                    <p><?php the_field('recommendtext',$post_id); ?></p>
                </div>
            </div>
        </div>
    </section>