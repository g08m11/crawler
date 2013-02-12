<?php
// GETパラメーターの取得
$term = str_replace( ‘テイラー ‘, ”, $_GET['kw'] );
$entity = $_GET['entity'];

// リクエスト URL の組み立て
$baseurl        = ‘http://itunes.apple.com/search?’;
$country        = ‘jp’;
$url     = $baseurl.’term=’.$term.’&country=’.$country.’&entity=’.$entity;

// REST リクエストの発行 & レスポンスの取得
$json   = file_get_contents( $url ); 

//連想配列に格納する
$data = json_decode( $json , true );
?>
