<?php 

function get_CURL($url){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);
    
    return json_decode($result, 1);
}

$urlIG = 'https://graph.facebook.com/v3.2/17841437554502638?fields=biography%2Cid%2Cusername%2Cwebsite%2Cmedia_count%2Cfollowers_count%2Cmedia%2Cprofile_picture_url&access_token=EAAFluZABc3AEBAC4dGCRJizG6R0neyKXdvmsz70Xs6LYMfLhJ1zHvJ4ZAdyVKRJMWrqWno7KHFMfd7raIIV1oPOZCUW6ZBWNkD0xxttlFZBjRRljy58UhjTrDnd8kiaql833OEZCH0twqTmvUbMt6oOqQahQvAbmK8EJ8ZCYKAppq560bXXu0YpuR2AB4ZABAT6WiBhHxRGdvwZDZD';
$result = get_CURL($urlIG);

$followers = $result['followers_count'];
$foto = $result['profile_picture_url'];
$username = $result['username'];
$posts = $result['media']['data'];
// var_dump($posts);
// var_dump($foto);

foreach ($posts as $post) {
    $resultPosts[] = get_CURL('https://graph.facebook.com/v8.0/'.$post['id'].'?fields=media_url&access_token=EAAFluZABc3AEBAC4dGCRJizG6R0neyKXdvmsz70Xs6LYMfLhJ1zHvJ4ZAdyVKRJMWrqWno7KHFMfd7raIIV1oPOZCUW6ZBWNkD0xxttlFZBjRRljy58UhjTrDnd8kiaql833OEZCH0twqTmvUbMt6oOqQahQvAbmK8EJ8ZCYKAppq560bXXu0YpuR2AB4ZABAT6WiBhHxRGdvwZDZD');
}
// var_dump($resultPosts[0]['media_url']);

?>