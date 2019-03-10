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
			
			$fo = fopen('login.txt', 'w+');   #Добавление текстового файла
			$test = fwrite($fo, $login);      #для авторизации подразделения

	        $password = $_GET['password'];
	        if (($login == '2456') && ($password == '1')) {
		        echo "<p class='dobro'>Здравствуйте,<br />2456</p>";
		
		        echo("<script>function func() {
				    location.href='konkurs.php'
		        }
			    setTimeout(func,500)</script>");
			}
			
			if (($login == '2040') && ($password == '1')) {
		        echo "<p class='dobro'>Здравствуйте,<br />2040</p>";
		
		        echo("<script>function func() {
				    location.href='konkurs.php'
		        }
			    setTimeout(func,50)</script>");
            }
			
			if (($login == '2021') && ($password == '1')) {
		        echo "<p class='dobro'>Здравствуйте,<br />2021</p>";
		
		        echo("<script>function func() {
				    location.href='konkurs.php'
		        }
			    setTimeout(func,50)</script>");
            }
            
            /*echo("<script>function func() {
                location.href='http://10.16.48.99/konkurs.php'
            }
            setTimeout(func,2000)</script>");*/
?>
    </body>
</html>