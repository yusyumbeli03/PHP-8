<?php
// Вывод данных на экран
echo 'Данные были сохранены! Вот что хранится в файле: <br />';
$fileContent = file($_SERVER['DOCUMENT_ROOT'] . '/views/components/messages.txt');
foreach ($fileContent as $line) {
    echo $line . "<br />";
}