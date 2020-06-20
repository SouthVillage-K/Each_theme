    <!-- フッターエリア -->
    <footer class="page-footer">
        <div class="wrapper">
            <div class="sns-list">
                <ul>
                    <li>
                        <a href="https://twitter.com/intent/tweet?text=「ツイート本文」&url=「シェアするページのURL」&related=「ツイッターアカウント名」" target="_blank" rel="nofollow"><i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://line.me/R/msg/text/?「シェア本文」「シェアするページのURL」" target="_blank" rel="nofollow"><i class="fab fa-line"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.facebook.com/share.php?u=「シェアするページのURL」&t=「シェア本文」" target="_blank" rel="nofollow"><i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://getpocket.com/edit?url=「シェアするページのURL」" target="_blank" rel="nofollow"><i class="fab fa-get-pocket"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <nav class="footer-nav">
                <ul>
                    <li><a href="<?php bloginfo( 'url' ); ?>/otoiawase">お問い合わせ</a></li>
                    <li><a href="<?php bloginfo( 'url' ); ?>/privacy-policy">プライバシーポリシー</a></li>
                    <li><a href="<?php bloginfo( 'url' ); ?>/site-map">サイトマップ</a></li>
                </ul>
            </nav>
        </div>
        <small>&copy Copyright  Eat Search</small>
    </footer>


    <!-- フッター追跡トップ戻るボタン -->
    <p id="pageTop"><a href="#"><i class="fas fa-arrow-circle-up"></i></a></p>


    <!-- フッター追従グロナビ -->
    <footer class="l-footer fixed">
        <nav class="controllerFooter wrapper">
            <ul>
                <li>
                    <a href="<?php bloginfo( 'url' ); ?>">
                        <i class="fas fa-home"></i>
                        <p>ホーム</p>
                    </a>
                </li>
                <li class="footer-share">
                    <a href="#シェア">
                        <i class="fas fa-share-alt"></i>
                        <p>シェア</p>
                    </a>
                </li>
                <li class="footer-location">
                    <a href="#周辺検索">
                        <i class="fas fa-street-view"></i>
                        <p>周辺検索</p>
                    </a>
                </li>
                <li class="footer-freeword">
                    <a href="#検索">
                        <i class="fas fa-search"></i>
                        <p>検索</p>
                    </a>
                </li>
                <li class="footer-menu">
                    <a href="#メニュー">
                        <i class="fas fa-bars"></i>
                        <p>メニュー</p>
                    </a>
                </li>
            </ul>
        </nav>
    </footer>
    <!-- フッター追従グロナビメニュー -->
    <!-- snsシェアボタン -->
    <div class="footer-share-list">
        <ul>
            <li>
                <a href="https://twitter.com/intent/tweet?text=「ツイート本文」&url=「シェアするページのURL」&related=「ツイッターアカウント名」" target="_blank" rel="nofollow"><i class="fab fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="http://line.me/R/msg/text/?「シェア本文」「シェアするページのURL」" target="_blank" rel="nofollow"><i class="fab fa-line"></i>
                </a>
            </li>
            <li>
                <a href="http://www.facebook.com/share.php?u=「シェアするページのURL」&t=「シェア本文」" target="_blank" rel="nofollow"><i class="fab fa-facebook-square"></i>
                </a>
            </li>
            <li>
                <a href="https://getpocket.com/edit?url=「シェアするページのURL」" target="_blank" rel="nofollow"><i class="fab fa-get-pocket"></i>
                </a>
            </li>
        </ul>
        <a href="#close" class="footer-share-list-close">Close</a>
    </div>
    <!-- フリーワード検索ボタン -->
    <div class="footer-freeword-list">
        <ul>
            <li>
                <?php get_search_form(); ?>
            </li>
        </ul>
        <a href="#close" class="footer-freeword-list-close">Close</a>
    </div>
    <!-- 周辺検索ボタン -->
    <div class="footer-location-list">
        <ul>
            <li>
                <a href="#周辺検索ボタン">周辺検索ボタンを作成中です</a>
            </li>
        </ul>
        <a href="#close" class="footer-location-list-close">Close</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <?php wp_footer(); ?>
</body>
</html>