<?php
if(isset($_POST['message']) && !empty($_POST['message'])) {
    $message = $_POST['message'];
    
    $file = 'messages.txt';
    $current = file_get_contents($file);
    $current .= date('Y-m-d H:i:s') . ' - ' . $message . "\n";
    file_put_contents($file, $current);
    
    header('Location: index.php');
} else {
    echo 'Пожалуйста, введите сообщение.';
}
?>
