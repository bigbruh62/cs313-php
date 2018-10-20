<!DOCTYPE html>
<?php
  include("..\dbCredentials.php");

  $user = $_POST['username'];
  $pswd = $_POST['password'];
  
  //$qry = $db -> prepare('SELECT id, username FROM users WHERE username=user1 AND pswdhash = pass');
  //$qry -> execute(['user' => $user, 'pswd' => $pswd]);
  //$results = $qry -> fetchAll(PDO::FETCH_ASSOC);
  $results = $db->query('SELECT id, username FROM users WHERE username=user1 AND pswdhash=pass');

  if ($results) {
    alert("inside the results if statement");
    session_start();
    $_SESSION['user'] = $results[0]['id'];
    $_SESSION['auth'] = TRUE;
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
  In the body
  <div>
    <?php
      echo '<p>Username or password incorrect.</p>';
      echo '</br>';
    ?>
  </div>
</div>

</body>
</html>