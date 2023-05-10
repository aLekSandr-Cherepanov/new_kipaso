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

$host = 'localhost';
$user = 'u0037735_ocart32';
$password = '8o7(-p2hS2';
$db_name = 'u0037735_ocart32';
$mysqli = new mysqli($host, $user, $password, $db_name);
$mysqli->set_charset('utf8');

//получение вложенных элементов в json

foreach ($data as $record) {
    $model = mysqli_real_escape_string($mysqli, $record["categories"][0]["items"][0]["products"][0]["sku"]);
    $productid = mysqli_real_escape_string($conn, $record["categories"][0]["items"][0]["products"][0]["prices"][0]["izd_code"]);
    $sku = mysqli_real_escape_string($conn, $record["categories"][0]["items"][0]["products"][0]["sku"]);
    $price = mysqli_real_escape_string($conn, $record["categories"][0]["items"][0]["products"][0]["prices"][0]["price"]);
    $table = 'oc_product';
    $sql = "INSERT INTO oc_product (model, product_id, sku, price) VALUES ('$model', '$productid', '$sku', '$price')";

    if ($mysqli->query($sql) === TRUE) {
        echo "Данные успешно добавлены в таблицу.";
    } else {
        echo "Ошибка: " . $mysqli->error;
    }
    mysqli_query($mysqli, $sql);
}


// Закройте соединение с базой данных
$mysqli->close();



?>