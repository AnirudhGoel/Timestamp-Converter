<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Project">
		<meta name="keywords" content="HTML,CSS">
		<meta name="author" content="Anirudh Goel">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="Timestamp.css">
		<link href='https://fonts.googleapis.com/css?family=Signika+Negative' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
		<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>
		
		<title>Time Stamp Converter</title>
		
		<link rel="shortcut icon" href="Icon.ico">
	</head>
	<body>
		<form action='index.php' method='POST'>
			<div class='text-center'>
				<div class='row'>
					<div class='col-sm-0'></div>
					<div class='jumbotron'>
						<div class='col-sm-12'>
							<br>
							<h1>Enter the Timestamp<br></h1>
						</div>
					<div class='col-sm-0'></div>
				<div class='row'>
					<div class='col-sm-3'></div>
					<div class='col-sm-6'>
						<h1><small>To get the Time &amp; Date in IST Format</small></h1>
					</div>
				</div>
				</div>
					<div class='col-sm-3'></div>
				</div>
				<div class='row'>
					<div class='col-sm-3'></div>
					<div class='col-sm-6'>
						<input type = 'text' name = 'timestamp' class='input-lg' value="<?php 
						if(isset($_POST['timestamp'])&&!empty($_POST['timestamp']))
						{
							echo $_POST['timestamp'];
						}
						?>">
						<br>
						<br>
						<input type = 'Submit' value = 'Convert' class='btn btn-warning btn-lg'>
						<br>
						<br>
					</div>
					<div class='col-sm-3'></div>
				</div>

			<?php
				date_default_timezone_set('Asia/Calcutta');
				if(isset($_POST['timestamp'])&&!empty($_POST['timestamp']))
				{
			?>
			<div class='jumbotron'>
				<div class='row'>
					<div class='col-sm-0'></div>
					<div class='col-sm-12'>
						<h1>
			<?php
					echo 'The Date is '.date('d M Y', $_POST['timestamp'])."<br>";
					echo 'The Time is '.date('g:i:s A', $_POST['timestamp']);
				}
			?>
						</h1>
					</div>
					<div class='col-sm-0'></div>
				</div>
			</div>
			</div>
		</form>
	</body>
</html>