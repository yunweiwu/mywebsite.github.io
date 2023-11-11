<!-- login.php -->
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // 检查数据库中的用户名和密码是否匹配，这里假设已经有一个数据库表(users)保存了用户信息
    $users = [
        ["username" => "user1", "password" => "password1"],
        ["username" => "user2", "password" => "password2"],
    ];

    foreach ($users as $user) {
        if ($user["username"] == $username && $user["password"] == $password) {
            $_SESSION["username"] = $username;
            header("Location: message.php");
            exit;
        }
    }

    echo "Invalid username or password.";
}
?>
