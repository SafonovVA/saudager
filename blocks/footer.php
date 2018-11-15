<footer>
	<div id="social">
		<?php 
			$login = file_get_contents('login.txt');
			echo $login;
		?>
	</div>
	<div id="rights">
		Все права защищены &copy; <?=date ('d.m.Y')?>
	</div>
</footer>