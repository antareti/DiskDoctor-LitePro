<?php
// Путь к файлу Pro-версии
$file = 'files/DiskDoctor_LitePro.exe';

// Проверка существования файла
if(file_exists($file)){
    // Устанавливаем заголовки для скачивания
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));

    // Отправляем файл пользователю
    readfile($file);
    exit;
} else {
    echo "Файл не найден. Свяжитесь с поддержкой.";
}
?>
