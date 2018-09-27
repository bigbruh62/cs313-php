<head>
  <title>Hello World</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="hello.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript">
	var timestamp = '<?=time();?>';
	function updateTime(){
  		$('#time').html(Date(timestamp));
  		timestamp++;
	}
	$(function(){
  		setInterval(updateTime, 1000);
	});
</script>
<script type="text/javascript">
  $(function(){
    var pageURL = $(location).attr("href");
            alert(pageURL);
    if ($(location).attr("href").includes("hello.php")){
      $("#landing").show();
    } else {
      $("#landing").hide();
    }
  });
  </script>
</head>

<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Hello World!</h1>
  <p id="landing">A landing page for CS 313</p> 
  <p id="time"></p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="hello.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="assignments.php">Assignments</a>
      </li> 
    </ul>
  </div>  
</nav>

