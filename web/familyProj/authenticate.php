<!DOCTYPE html>
<?php
  session_start();

  require '..\dbCredentials.php'

  $user = $_POST['username'];
  $pswd = $_POST['password'];
  $statement = $db->prepare("SELECT * FROM users WHERE username=:user AND pswdhash=:pswd");
  $statement->execute(arra(':user' => $user, ':pswdhash' => $pswd));
  $results = $statement -> fetchAll(PDO::FETCH_ASSOC);
  if ($results) {
    session_start();
    $_SESSION['user'] = $results[0]['id'];
    $_SESSION['auth'] = TRUE;
    header('Location: home.php');
  }
?>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="login.css"/>
  <script src="login.js"></script>
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