<!-- post_message.php -->
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"];
  
    // 将用户的留言信息保存到数据库中，这里假设使用一个数组(messages)来保存每个用户的留言
    $messages = [
        "user1" => ["Message 1", "Message 2"],
        "user2" => ["Message 3"],
    ];
  
    // 将新留言添加到用户的留言数组中
    $username = $_SESSION["username"];
    $messages[$username][] = $message;
  
    // 将更新后的留言信息保存回数据库

    header("Location: message.php");
    exit;
}
?>
