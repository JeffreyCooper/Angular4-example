<?php
if(session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--		 the base tag marks the root url of the project -->
		<base href="<?php echo dirname($_SERVER["PHP_SELF"]) . "/"; ?>" />

		<title>Angular 4 Service Example</title>
	</head>
	<body>
<!--		the following component is established in src/app/app.component.ts-->
		<angular4-example>Loading&hellip;</angular4-example>
	</body>
</html>