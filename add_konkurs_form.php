<html>
	<head>
		<?php
			$title = "Внесение данных по конкурсу";
			require_once "blocks/head.php";
			require_once "blocks/header.php";
		?>
	</head>
	<body>
		<a href="konkurs.php">Назад</a>
		<form method="get" action="add_konkurs_base.php" class="konkurs_form"><br />
			<h3 style="text-align: center">Внесение данных по конкурсу</h3>
			<div class="label"><label>№ п/п</label></div><br />
			<div class="input"><input type="text" name="nomer_konkurs"></div><br />
			<div class="label"><label>Наименование организатора</label></div><br />
			<div class="input"><input type="text" name="naimenovanie_podrazd"></div><br />
			<div class="label"><label>Наименование заказчика</label></div><br />
			<div class="input"><input type="text" name="naimenovanie_zakazchik"></div><br />
			<div class="label"><label>Наименование закупаемых товаров, работ, услуг (наименование конкурса)</label></div><br />
			<div class="input"><input type="text" name="naimenovanie_konkurs"></div><br />
			<div class="label"><label>Выделенный лимит по плану финансирования (тыс. тенге)</label></div><br />
			<div class="input"><input type="text" name="vydelennyi_limit"></div><br />
			<div class="label"><label>Предусмотренная сумма по плану государственных закупок без учета НДС (тыс. тенге)</label></div><br />
			<div class="input"><input type="text" name="predusmotr_summ"></div><br />
			<div class="label"><label>Дата объявления по план графику</label></div><br />
			<div class="input"><input type="text" name="plan_data_objavl"></div><br />
			<div class="label"><label>Дата проведения по план графику</label></div><br />
			<div class="input"><input type="text" name="plan_data_prov"></div><br />
			<div class="label"><label>Фактическая дата объявления</label></div><br />
			<div class="input"><input type="text" name="fact_data_objavl"></div><br />
			<div class="label"><label>Фактическая дата проведения</label></div><br />
			<div class="input"><input type="text" name="fact_data_prov"></div><br />
			<div class="label"><label>Дата подведения итогов</label></div><br />
			<div class="input"><input type="text" name="data_itog"></div><br />
			<div class="label"><label>Сумма по состоявшимся лотам без учета НДС (тенге)</label></div><br />
			<div class="input"><input type="text" name="summ_sost_lot"></div><br />
			<div class="label"><label>Сумма по не состоявшимся лотам без учета НДС (тенге)</label></div><br />
			<div class="input"><input type="text" name="summ_nesost_lot"></div><br />
			<div class="label"><label>Экономия по состоявшимся лотам без учета НДС (тенге)</label></div><br />
			<div class="input"><input type="text" name="econom_sost_lot"></div><br />
			<div class="label"><label>Способом из одного источника по несостоявшимся лотам без учета НДС</label></div><br />
			<div class="input"><input type="text" name="sposob_odin_ist"></div><br />
			<div class="label"><label>Сумма на повторный конкурс по несостоявшимся лотам без учета НДС (тенге)</label></div><br />
			<div class="input"><input type="text" name="summ_povtor"></div><br />
			<!-- <label>Примечание</label><br />
			<div class="input"><input type="text" name="prim"></div><br /> -->
			<input type="submit" value="Внести данные" name="vvod_konkurs" class="logot">
		</form>
        <?php require_once "blocks/footer.php"?>
	</body>
</html>