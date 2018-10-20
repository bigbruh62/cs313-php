<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8"/>
  <title>authentication</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
  In the body
  <?php
  require '..\dbCredentials.php'

  $user = $_POST['username'];
  $pswd = $_POST['password'];
  
  $qry = $db -> prepare("SELECT users.id, users.username FROM users WHERE username=:user AND pswdhash = :pswd");
  $qry -> execute([':user' => $user, ':pswd' => $pswd]);
  $results = $qry -> fetchAll(PDO::FETCH_ASSOC);

  if ($results) {
    alert("inside the results if statement");
    session_start();
    $_SESSION['user'] = $results[0]['id'];
    $_SESSION['auth'] = TRUE;
    header('Location: home.php');
  }
?>
  <div>
    <?php
      echo '<p>Username or password incorrect.</p>';
      echo '</br>';
    ?>
  </div>
</div>

</body>
</html>