<?php
// Проверяем наличие данных в $_POST
if(isset($_POST['start'])) {
    // Сохранение данных в файл
    $data = [
        'name' => $_POST['name'] ?? "",
        'age' => $_POST['age'] ?? "",
        'email' => $_POST['email'] ?? "",
        'message' => $_POST['message'] ?? "",
    ];

    $file = fopen($_SERVER['DOCUMENT_ROOT'] . '../views/components/messages.txt', 'a') or die("Недоступный файл!");
    foreach ($data as $field => $value) {
        fwrite($file, "$field: $value\n");
    }
    fwrite($file, "\n");
    fclose($file);
    // Если данные  были отправлены, перенаправляем comments.php
    header("Location: /../views/components/comments.php");
    exit;
}


