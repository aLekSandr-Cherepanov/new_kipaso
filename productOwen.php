<?php
// Запрос в API
$url = 'https://owen.ru/export/catalog.json?host=test.kipaso.ru&key=Tl3RqJTP1X9UZXjNYELQQ3dgNfqjDksl';
$options = array(
    'http' => array(
        'header'  => "Content-Type: application/json\r\n",
        'method'  => 'GET'
    )
);

$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);
$data = json_decode($response, true);

//получение вложенных элементов в json
$test = $data["categories"][0]["items"][0]["name"];

print_r($test);


?>