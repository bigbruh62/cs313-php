<!DOCTYPE html>
<?php
  //include("..\dbCredentials.php");

  //$user = $_POST['username'];
  //$pswd = $_POST['password'];
  
  //$qry = $db -> prepare('SELECT id, username FROM users WHERE username=user1 AND pswdhash = pass');
  //$qry -> execute(['user' => $user, 'pswd' => $pswd]);
  //$results = $qry -> fetchAll(PDO::FETCH_ASSOC);
  //$results = $db->query('SELECT id, username FROM users');

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

  $user = 'user1';
  $pswd = 'pass';

  $stmnt = $db->prepare("SELECT id, username FROM users WHERE username = ? AND pswdhash = ?");
  $stmnt->execute([$user, $pswd]);
  $stmnt = $stmnt->fetch(PDO::FETCH_ASSOC);


  if ($stmnt) {
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