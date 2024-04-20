<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем сообщение из POST-запроса
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);
    $message = $data['message'];
    
    // Добавляем сообщение в файл (наивный пример)
    $file = 'messages.txt';
    $current = file_get_contents($file);
    $current .= $message . "<br>";
    file_put_contents($file, $current);
    
    echo "Message sent successfully!";
} else {
    // Вывод сообщений из файла (наивный пример)
    $file = 'messages.txt';
    $messages = file_get_contents($file);
    echo $messages;
}
?>
