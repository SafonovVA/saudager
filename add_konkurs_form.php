<html>
	<head>
		<?php
			$title = "Внесение данных по конкурсу";
			require_once "blocks/head.php";
		?>
	</head>
	<body>
		<form method="get" action="add_konkurs_base.php">	
			<h3>Внесение данных по конкурсу</h3>
			<label>№ п/п</label><br /><input type="text" placeholder="№ п/п" name="nomer_konkurs"><br />
			<label>Наименование организатора</label><br /><input type="text" placeholder="Наименование организатора" name="naimenovanie_podrazd"><br />
            <label>Наименование заказчика</label><br /><input type="text" placeholder="Наименование заказчика" name="naimenovanie_zakazchik"><br />
			<label>Наименование закупаемых товаров, работ, услуг (наименование конкурса)</label><br /><input type="text" placeholder="Наименование закупаемых товаров, работ, услуг (наименование конкурса)" name="naimenovanie_konkurs"><br />
            <label>Выделенный лимит по плану финансирования (тыс. тенге)</label><br /><input type="text" placeholder="Выделенный лимит по плану финансирования (тыс. тенге)" name="vydelennyi_limit"><br />
			<label>Предусмотренная сумма по плану государственных закупок без учета НДС (тыс. тенге)</label><br /><input type="text" placeholder="Предусмотренная сумма по плану государственных закупок без учета НДС (тыс. тенге)" name="predusmotr_summ"><br />
            <label>Дата объявления по план графику</label><br /><input type="text" placeholder="Дата объявления по план графику" name="plan_data_objavl"><br />
			<label>Дата проведения по план графику</label><br /><input type="text" placeholder="Дата проведения по план графику" name="plan_data_prov"><br />
            <label>Фактическая дата объявления</label><br /><input type="text" placeholder="Фактическая дата объявления" name="fact_data_objavl"><br />
			<label>Фактическая дата проведения</label><br /><input type="text" placeholder="Фактическая дата проведения" name="fact_data_prov"><br />
            <label>Дата подведения итогов</label><br /><input type="text" placeholder="Дата подведения итогов" name="data_itog"><br />
			<label>Сумма по состоявшимся лотам без учета НДС (тенге)</label><br /><input type="text" placeholder="Сумма по состоявшимся лотам без учета НДС (тенге)" name="summ_sost_lot"><br />
            <label>Сумма по не состоявшимся лотам без учета НДС (тенге)</label><br /><input type="text" placeholder="Сумма по не состоявшимся лотам без учета НДС (тенге)" name="summ_nesost_lot"><br />
			<label>Экономия по состоявшимся лотам без учета НДС (тенге)</label><br /><input type="text" placeholder="Экономия по состоявшимся лотам без учета НДС (тенге)" name="econom_sost_lot"><br />
            <label>Способом из одного источника по несостоявшимся лотам без учета НДС</label><br /><input type="text" placeholder="Способом из одного источника по несостоявшимся лотам без учета НДС" name="sposob_odin_ist"><br />
			<label>Сумма на повторный конкурс по несостоявшимся лотам без учета НДС (тенге)</label><br /><input type="text" placeholder="Сумма на повторный конкурс по несостоявшимся лотам без учета НДС (тенге)" name="summ_povtor"><br />
            <label>Примечание</label><br /><input type="text" placeholder="Примечание" name="prim"><br />
			<label>Подтвердить</label><br /><input type="submit" value="Внести данные" name="vvod_konkurs">
		</form>
        
	</body>
</html>