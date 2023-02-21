<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Palmo</title>
</head>
<body>

<?php
	require_once('vendor/autoload.php');

	use ReportClasses\ReportWeek;

	$objWeek = new ReportWeek(new \ReportClasses\Organization("Organization Name", 3664069397, 770201001, "Ivanovka str.", "Borysenko Artemiy Evgeniyovich"), 4, "Name Week", 2, 2023, "report {latest} text {org_name}", "Nikola Tesla Ivanov");

	echo $objWeek->getAuthorFullName() . "<br>";
	echo $objWeek->getWeek() . "<br>";
	echo $objWeek->getHeaderUpperCase() . "<br>";
	$objWeek->render(["org_name" => "Palmo", "latest" => "Test"]) . "<br>";
	echo $objWeek->getInfo();

	?>
</body>
</html>
