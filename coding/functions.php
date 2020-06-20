<?php
//記事本文の最初の画像を取得
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
//記事本文に画像がない場合
if(empty($first_img)){
        $first_img = "http://nanson.xsrv.jp/wp-content/uploads/2020/05/noimage.jpg";
    }
    return $first_img;
}


//Advanced Custom FieldのGoogle MapへAPI Key
// function my_acf_google_map_api( $api ){
//     $api['key'] = 'GOOGLE_MAP_API_KEY';
//     return $api;
// }
// add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// function nr_load_scripts() {
//     wp_register_script('googlemaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAR9guU_mR_4h_3v-VGrRZpnKOXZB981kA',null,null,true);
//     wp_enqueue_script('googlemaps');
// }
// add_action('wp_enqueue_scripts', 'nr_load_scripts');

function add_googlemap_script() {
    wp_enqueue_script( 'googlemap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAR9guU_mR_4h_3v-VGrRZpnKOXZB981kA', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'add_googlemap_script' );

function my_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyAR9guU_mR_4h_3v-VGrRZpnKOXZB981kA';
	return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');



?>