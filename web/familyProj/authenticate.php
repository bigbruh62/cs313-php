<!DOCTYPE html>
<?php

  $user = $_POST['username'];
  $pswd = $_POST['password'];

    try
    {
      $dbUrl = getenv('DATABASE_URL');

      $dbOpts = parse_url($dbUrl);

      $dbHost = $dbOpts["host"];
      $dbPort = $dbOpts["port"];
      $dbUser = $dbOpts["user"];
      $dbPassword = $dbOpts["pass"];
      $dbName = ltrim($dbOpts["path"],'/');

      $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $ex)
    {
      echo 'Error!: ' . $ex->getMessage();
      die();
    }

  $stmnt = $db->prepare("SELECT id, username, family_id FROM users WHERE username = ? AND pswdhash = ?");
  $stmnt->execute([$user, $pswd]);
  $stmnt = $stmnt->fetch(PDO::FETCH_ASSOC);



  if ($stmnt) {
    printf("inside the results if statement");
    session_start();
    $_SESSION['user'] = $stmnt['id'];
    $_SESSION['auth'] = TRUE;
    $_SESSION['family_id'] = $stmnt['family_id'];
    header('Location: home.php');
  }
?>
<html>
<head>
  <meta charset="utf-8"/>
  <title>authentication</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
  <div>
    <?php
      echo '<p>Username or password incorrect.</p>';
      echo '</br>';
    ?>
  </div>
</div>

</body>
</html>