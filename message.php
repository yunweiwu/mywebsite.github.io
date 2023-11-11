<!-- message.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Message</title>
</head>
<body>
  <h2>Welcome, <?php echo $_SESSION["username"]; ?></h2>
  <h3>Leave a message:</h3>
  <form action="post_message.php" method="post">
    <textarea name="message" rows="4" cols="50" required></textarea> <br>
    <input type="submit" value="Post">
  </form>
  <br>
  <h3>Your Messages:</h3>
  <?php
  // 根据每个用户在数据库中保存的留言信息显示
  $messages = [
    "user1" => ["Message 1", "Message 2"],
    "user2" => ["Message 3"],
  ];

  if (isset($messages[$_SESSION["username"]])) {
    foreach ($messages[$_SESSION["username"]] as $message) {
      echo "<p>$message <a href='delete_message.php?message=$message'>Delete</a></p>";
    }
  }
  ?>
  <br>
  <a href="logout.php">Logout</a>
</body>
</html>
