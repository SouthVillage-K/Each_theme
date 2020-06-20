    <!--  地域タグ選択エリア -->
    <section class="area-search wrapper wrapper-bottom">
        <div class="section-head">
            <h2 class="gf">Area</h2>
            <p>地域を選択</p>
        </div>
        <section class="area-tag-cloud">
            <ul>
                <?php
                $categories = get_terms( 'category', array(
                'orderby' => 'count',
                'hide_empty' => 0,
                'parent' => get_query_var('cat'),
                ) );
                foreach($categories as $value):
                ?>
                <li>
                    <a href="<?php echo get_category_link($value->term_id); ?>"><?php echo $value->name;?></a>
                </li>
                <?php endforeach; ?>
            </ul>
            <p class="view-all">
                <a href="areasearch-thailand.html">View all</a>
            </p>
        </section>
    </section>