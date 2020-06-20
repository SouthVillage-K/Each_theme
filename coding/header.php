<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eat Search</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Swash:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css">
    <link href="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <?php wp_head(); ?>
</head>
<body>
    <header class="page-header">
        <div class="page-header-box wrapper">
            <div class="logo">
                <h1 class="gf"><a href="<?php bloginfo( 'url' ); ?>">Eat Search</a></h1>
                <p>東南アジア飲食店口コミサイト</p>
            </div>
            <nav class="header-gnav">
                <ul>
                    <li><a href="<?php bloginfo( 'url' ); ?>/add-new-store">新規店舗を追加</a></li>
                    <li><a href="<?php bloginfo( 'url' ); ?>/otoiawase">お問い合わせ</a></li>
                </ul>
            </nav>
            <div class="menu">
                <span class="border"></span>
                <span class="border"></span>
                <span class="border"></span>
            </div>
        </div>
    </header>