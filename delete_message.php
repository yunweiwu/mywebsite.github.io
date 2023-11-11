<!-- delete_message.php -->
<?php
session_start();

if (isset($_GET["message"])) {
    $message = $_GET["message"];

    // 从数据库中删除指定的留言
    $username = $_SESSION["username"];
    $messages = [
        "user1" => ["Message 1", "Message 2"],
        "user2" => ["Message 3"],
    ];

    if (($key = array_search($message, $messages[$username])) !== false) {
        unset($messages[$username][$key]);
    }

    // 将更新后的留言信息保存回数据库

    header("Location: message.php");
    exit;
}
?>
