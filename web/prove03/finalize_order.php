<?php
  session_start();
  $_SESSION['name'] = htmlspecialchars($_POST['name']);
  $_SESSION['add1'] = htmlspecialchars($_POST['add1']);
  $_SESSION['add2'] = htmlspecialchars($_POST['add2']);
  $_SESSION['add3'] = htmlspecialchars($_POST['add3']);
  $_SESSION['city'] = htmlspecialchars($_POST['city']);
  $_SESSION['state'] = htmlspecialchars($_POST['state']);
  $_SESSION['zip'] = htmlspecialchars($_POST['zip']);
  foreach ($_SESSION['quantity'] as $key => $value)
    if($value > 0)
      $_SESSION['order'][$key]=$value;
    $_SESSION['cart'] = [
        'p1' => 0,
        'p2' => 0,
        'p3' => 0,
        'p4' => 0,
        'p5' => 0,
        'p6' => 0,
    ];
  header('Location: confirmation.php');