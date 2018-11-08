<html>
	<head>
		<?php
			$title = "Авторизация";
			require_once "blocks/head.php";
		?>
	</head>
	<body>
        <?php
	        $login = $_GET['login'];
	        $password = $_GET['password'];
	        if (($login == 'Turekulov') && ($password == '12345')) {
		        echo "<p class='dobro'>Здравствуйте,<br />2456</p>";
		
		        echo("<script>function func() {
				    location.href='konkurs.php'
		        }
			    setTimeout(func,200)</script>");
            }
            
            /*echo("<script>function func() {
                location.href='http://10.16.48.99/konkurs.php'
            }
            setTimeout(func,2000)</script>");*/
?>
    </body>
</html>