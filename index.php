<html>
	<head>
		<?php
			$title = "Авторизация";
			require_once "blocks/head.php";
		?>
	</head>
	<body>
		<form method="get" action="index1.php">	
			<h3>АВТОРИЗАЦИЯ</h3>
			<input type="text" placeholder="Логин" name="login"><br />
			<input type="password" placeholder="Пароль" name="password"><br />
			<input type="submit" value="Подтвердить" class="podtv">
		</form>
	</body>
</html>