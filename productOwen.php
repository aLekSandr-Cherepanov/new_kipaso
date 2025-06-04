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
if ($response === false) {
    die('Failed to fetch data from API');
}
$data = json_decode($response, true);
if ($data === null) {
    die('Invalid JSON received from API');
}

//получение вложенных элементов в json

//заполнение таблицы oc_product
$model = $data["categories"][0]["items"][0]["products"][0]["sku"];
$productid = $data["categories"][0]["items"][0]["products"][0]["prices"][0]["izd_code"];
$sku = $data["categories"][0]["items"][0]["products"][0]["sku"];
$price = $data["categories"][0]["items"][0]["products"][0]["prices"][0]["price"];
//$image = $data["categories"][0]["items"][0]["products"][0]["image"];
$manufacturer_id = 6;
$statusproduct = 1;
//заполнение таблицы oc_product_description
$name = $data["categories"][0]["items"][0]["products"][0]["name"];
$productid = $data["categories"][0]["items"][0]["products"][0]["prices"][0]["izd_code"];
$metatitle = $data["categories"][0]["items"][0]["products"][0]["name"];
$language_id = 2;
$descriptionDesk = $data["categories"][0]["items"][0]["products"][0]["desc"];
$descriptionSpecs = $data["categories"][0]["items"][0]["products"][0]["specs"];
$descSpecs = $descriptionDesk . " " . $descriptionSpecs;
//print_r($test);

//заполнение таблицы oc_product_to_category
$productid = $data["categories"][0]["items"][0]["products"][0]["prices"][0]["izd_code"];
$category_id = 63;

//заполнение таблицы oc_product_image
$product_id = $data["categories"][0]["items"][0]["products"][0]["prices"][0]["izd_code"];
$productImage = $data["categories"][0]["items"][0]["products"][0]["image"];
//$product_imageId = 3213;

// Подключитесь к базе данных MySQL, используя настройки OpenCart
require_once __DIR__ . '/config.php';
$mysqli = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$mysqli->set_charset('utf8');

// Проверьте успешность подключения к базе данных
if ($mysqli->connect_error) {
    die('Ошибка подключения (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Экранируем данные перед выполнением SQL-запросов
$model = $mysqli->real_escape_string($model);
$productid = $mysqli->real_escape_string($productid);
$sku = $mysqli->real_escape_string($sku);
$price = $mysqli->real_escape_string($price);
$name = $mysqli->real_escape_string($name);
$metatitle = $mysqli->real_escape_string($metatitle);
$descSpecs = $mysqli->real_escape_string($descSpecs);
$productImage = $mysqli->real_escape_string($productImage);
$category_id = $mysqli->real_escape_string($category_id);
$product_id = $mysqli->real_escape_string($product_id);

// Обращение к таблице oc_product и добавление данных
$table = 'oc_product';
$sql = "INSERT INTO $table (model, product_id, sku, price, manufacturer_id, status) VALUES ('".$model."', '".$productid."', '".$sku."', '".$price."', '".$manufacturer_id."', '".$statusproduct."')";
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
$sql = "INSERT INTO $table (product_id, category_id, main_category) VALUES ('".$productid."', '".$category_id."', '0')";
if ($mysqli->query($sql) === TRUE) {
    echo "Данные успешно добавлены в таблицу.";
} else {
    echo "Ошибка: " . $mysqli->error;
}

// Обращение к таблице oc_product_image и добавление данных
$table = 'oc_product_image';
$sql = "INSERT INTO $table (product_id, image) VALUES ('".$product_id."', '".$productImage."')";
if ($mysqli->query($sql) === TRUE) {
    echo "Данные успешно добавлены в таблицу.";
} else {
    echo "Ошибка: " . $mysqli->error;
}

// Закройте соединение с базой данных
$mysqli->close();



?>

