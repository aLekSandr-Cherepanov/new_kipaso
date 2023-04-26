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

//заполнение таблицы oc_product
$model = $data["categories"][0]["items"][0]["products"][0]["sku"];
$productid = $data["categories"][0]["items"][0]["products"][0]["prices"][0]["izd_code"];
$sku = $data["categories"][0]["items"][0]["products"][0]["sku"];
$price = $data["categories"][0]["items"][0]["products"][0]["prices"][0]["price"];
$image = $data["categories"][0]["items"][0]["products"][0]["image"];
$manufacturer_id = 6;

//заполнение таблицы oc_product_description
$name = $data["categories"][0]["items"][0]["products"][0]["name"];
$productid = $data["categories"][0]["items"][0]["products"][0]["prices"][0]["izd_code"];
$metatitle = $data["categories"][0]["items"][0]["products"][0]["name"];
$language_id = 2;
$descriptionDesk = $data["categories"][0]["items"][0]["products"][0]["desc"];
$descriptionSpecs = $data["categories"][0]["items"][0]["products"][0]["specs"];
$descSpecs = $descriptionDesk . " " . $descriptionSpecs;
print_r($test);

//заполнение таблицы oc_product_to_category
$productid = $data["categories"][0]["items"][0]["products"][0]["prices"][0]["izd_code"];
$productcategorytest = 63;

// Подключитесь к базе данных MySQL
$host = 'localhost';
$user = 'u0037735_ocart32';
$password = '8o7(-p2hS2';
$db_name = 'u0037735_ocart32';
$mysqli = new mysqli($host, $user, $password, $db_name);
$mysqli->set_charset('utf8');

// Проверьте успешность подключения к базе данных
if ($mysqli->connect_error) {
    die('Ошибка подключения (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Обращение к таблице oc_product и добавление данных
$table = 'oc_product';
$sql = "INSERT INTO $table (model, product_id, sku, price, manufacturer_id, image) VALUES ('".$model."', '".$productid."', '".$sku."', '".$price."', '".$manufacturer_id."', '".$image."')";
if ($mysqli->query($sql) === TRUE) {
    echo "Данные успешно добавлены в таблицу.";
} else {
    echo "Ошибка: " . $mysqli->error;
}

// Обращение к таблице oc_product_description и добавление данных
$table = 'oc_product_description';
$sql = "INSERT INTO $table (name, product_id, description, meta_title, language_id) VALUES ('".$name."', '".$productid."', '".$descSpecs."', '".$metatitle."', '".$language_id."')";

if ($mysqli->query($sql) === TRUE) {
    echo "Данные успешно добавлены в таблицу.";
} else {
    echo "Ошибка: " . $mysqli->error;
}

// Обращение к таблице oc_product_to_category и добавление данных
$table = 'oc_product_to_category';
$sql = "INSERT INTO $table (product_id, category_id, main_category) VALUES ('107653', '63', '0')";
if ($mysqli->query($sql) === TRUE) {
    echo "Данные успешно добавлены в таблицу.";
} else {
    echo "Ошибка: " . $mysqli->error;
}

// Закройте соединение с базой данных
$mysqli->close();



?>