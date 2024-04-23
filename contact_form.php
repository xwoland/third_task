<?php
session_start();
$db_name = 'onepage_site.db';
if (file_exists($db_name)) {
    $db = new SQLite3($db_name);
} else {
    $db = new SQLite3($db_name);
    $db->exec("CREATE TABLE contacts(
        id INTEGER PRIMARY KEY,
        name TEXT,
        email TEXT,
        text TEXT
    )");
}
$params = $_REQUEST;
if (!empty($params['name'])
    && !empty($params['email'])
    && filter_var($params['email'], FILTER_VALIDATE_EMAIL)
    && !empty($params['text'])
) {
    $stm = $db->prepare("INSERT INTO contacts(name, email, text) VALUES(?, ?, ?)");
    $stm->bindParam(1, $name);
    $stm->bindParam(2, $email);
    $stm->bindParam(3, $text);

    $name = $params['name'];
    $email = $params['email'];
    $text = $params['text'];
    $stm->execute();

    $_SESSION['result'] = 'success';

    header("Location: /index.php#contact");
    exit;
} else {
    $_SESSION['result'] = 'fail';

    header("Location: /index.php#contact");
    exit;
}