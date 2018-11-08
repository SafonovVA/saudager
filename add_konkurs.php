<html>
	<head>
		<?php
			$title = "Внесение данных по конкурсу";
			require_once "blocks/head.php";
		?>
	</head>
	<body>
		<form method="get" action="konkurs.php">	
			<h3>Внесение данных по конкурсу</h3>
			<input type="text" placeholder="№ п/п" name="nomer_konkurs"><br />
			<input type="text" placeholder="Наименование организатора" name="naimenovanie_podrazd"><br />
            <input type="text" placeholder="Наименование заказчика" name="naimenovanie_zakazchik"><br />
			<input type="text" placeholder="Наименование закупаемых товаров, работ, услуг (наименование конкурса)" name="naimenovanie_konkurs"><br />
            <input type="text" placeholder="Выделенный лимит по плану финансирования (тыс. тенге)" name="vydelennyi_limit"><br />
			<input type="text" placeholder="Предусмотренная сумма по плану государственных закупок без учета НДС (тыс. тенге)" name="predusmotr_summ"><br />
            <input type="text" placeholder="Дата объявления по план графику" name="plan_data_objavl"><br />
			<input type="text" placeholder="Дата проведения по план графику" name="plan_data_prov"><br />
            <input type="text" placeholder="Фактическая дата объявления" name="fact_data_objavl"><br />
			<input type="text" placeholder="Фактическая дата проведения" name="fact_data_prov"><br />
            <input type="text" placeholder="Дата подведения итогов" name="data_itog"><br />
			<input type="text" placeholder="Сумма по состоявшимся лотам без учета НДС (тенге)" name="summ_sost_lot"><br />
            <input type="text" placeholder="Сумма по не состоявшимся лотам без учета НДС (тенге)" name="summ_nesost_lot"><br />
			<input type="text" placeholder="Экономия по состоявшимся лотам без учета НДС (тенге)" name="econom_sost_lot"><br />
            <input type="text" placeholder="Способом из одного источника по несостоявшимся лотам без учета НДС" name="sposob_odin_ist"><br />
			<input type="text" placeholder="Сумма на повторный конкурс по несостоявшимся лотам без учета НДС (тенге)" name="summ_povtor"><br />
            <input type="text" placeholder="Примечание" name="prim"><br />
			<input type="submit" value="Подтвердить" name="vvod_konkurs">
		</form>
        
	</body>
</html>