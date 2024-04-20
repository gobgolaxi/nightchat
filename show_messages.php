<?php
$file = 'messages.txt';
if(file_exists($file)) {
    $messages = file($file);
    foreach(array_reverse($messages) as $msg) {
        echo $msg . '<br>';
    }
} else {
    echo 'Нет сообщений';
}
?>
