<!-- register.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // 将新用户信息保存到数据库中，这里假设使用一个数组(users)来保存用户信息
    $users = [
        ["username" => "user1", "password" => "password1"],
        ["username" => "user2", "password" => "password2"],
    ];

    // 检查是否已经存在相同的用户名
    foreach ($users as $user) {
        if ($user["username"] == $username) {
            echo "Username already exists.";
            exit;
        }
    }

    // 添加新用户
    $users[] = ["username" => $username, "password" => $password];

    // 将更新后的用户信息保存回数据库

    echo "Registration successful. <a href='login.html'>Login</a>";
}
?>
