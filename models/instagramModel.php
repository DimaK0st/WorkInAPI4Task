<?php
$access = 'укажите ваш токен';
$metka = 'wordpress'; // ваш хэштег
$result = instagram_api_podkluchenie("https://api.instagram.com/v1/tags/" . $metka . "/media/recent?access_token=" . $access);

//print_r( $result );
foreach ($result->data as $post) {
    echo '<a id="insta-' . $post->id . '" href="' . $post->images->standard_resolution->url . '" class="fancybox ' . $post->filter . '"><img src="' . $post->images->thumbnail->url . '" /></a>';
}