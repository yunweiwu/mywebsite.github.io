 
<?php
// 连接到数据库
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接是否成功
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 获取注册表单提交的数据
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// 将数据插入数据库中的用户表
$sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "注册成功！";
} else {
    echo "注册失败：" . $conn->error;
}

// 关闭数据库连接
$conn->close();
?>
