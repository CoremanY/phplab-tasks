<?php

session_start();
require_once("classes/Request.php");
$request = new Request();
$session = $request->session();
$cookies = $request->cookies();


?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	
</head>
<style>
table, th, td {
  border: 1px solid black;
}
table {
  border-collapse: collapse;
}
</style>

<body>
	<main>
		
		<?php include("resources/page_markup.php") ?>
		
	</main>


</body>

</html>