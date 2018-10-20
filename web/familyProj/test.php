<?php

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
  print_r($stmnt);

  if ($stmnt) {
    printf("inside the results if statement");
    session_start();
    $_SESSION['user'] = $results[0]['id'];
    $_SESSION['auth'] = TRUE;
    header('Location: home.php');
  }
?>