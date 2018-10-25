<?
	session_start();

	$first = $_POST['first'];
	$last = $_POST['last'];
	$birthday = $_POST['date'];

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

	$stmnt = $db->prepare("INSERT INTO family (first_name, last_name, birthday, family_id) VALUES (?, ?, ?, ?)");
	$stmnt->execute([$first, $last, $birthday, $_SESSION['family_id']]);

	header('Location: home.php');
?>