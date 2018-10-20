<?php
  session_start();

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