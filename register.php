<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // 获取用户输入的账号和密码
  $username = $_POST['username'];
  $password = $_POST['password'];

  // 将用户输入的账号密码保存到数据库中
  // 这里可以使用数据库操作语句（如INSERT INTO）将数据插入到数据库表中
}
?>
