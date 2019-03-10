<html>
	<head>
		<?php
			$title = "Внесение данных по договору";
			require_once "blocks/head.php";
		?>
	</head>
	<body>
		<a href="dogovor.php">Назад</a>
		<form method="get" action="add_dogovor_base.php" class="konkurs_form">	
			<h3 style="text-align: center">Внесение данных по договору</h3>
			<div class="label"><label>№ п/п</label></div><br />
			<div class="input"><input type="text" name="nomer_dogovor"></div><br />
			<div class="label"><label>Наименование конкурса</label></div><br />
			<div class="input"><input type="text" name="naimenovanie_konkurs"></div><br />
			<div class="label"><label>Заказчик</label></div><br />
            <div class="input"><input type="text" name="zakazchik"></div><br />
			<div class="label"><label>Поставщик</label></div><br />
			<div class="input"><input type="text" name="postavshik"></div><br />
			<div class="label"><label>№ и дата договора</label></div><br />
            <div class="input"><input type="text" name="nomer_data_dogovor"></div><br />
			<div class="label"><label>Предмет договора</label></div><br />
			<div class="input"><input type="text" name="predmet_dogovor"></div><br />
			<div class="label"><label>Сумма договора без учета НДС</label></div><br />
            <div class="input"><input type="text" name="summa_dogovor_bez_nds"></div><br />
			<div class="label"><label>Сумма договора с учетом НДС</label></div><br />
			<div class="input"><input type="text" name="summa_dogovor_s_nds"></div><br />
			<div class="label"><label>№ и дата внесения поставщиком обеспечения</label></div><br />
            <div class="input"><input type="text" name="nomer_data_postavsik"></div><br />
			<div class="label"><label>Сумма внесенного обеспечения (с учетом???)</label></div><br />
			<div class="input"><input type="text" name="summa_vnes_obesp"></div><br />
			<div class="label"><label>№ и дата заключения доп.</label></div><br />
            <div class="input"><input type="text" name="nomer_data_dop"></div><br />
			<div class="label"><label>Сумма дополнительного без учета НДС</label></div><br />
			<div class="input"><input type="text" name="summa_dop_bez_nds"></div><br />
			<div class="label"><label>Сумма дополнительного с учетом НДС</label></div><br />
            <div class="input"><input type="text" name="summa_dop_s_nds"></div><br />
			<div class="label"><label>Общая сумма договора без учета НДС</label></div><br />
			<div class="input"><input type="text" name="obw_summ_bez_nds"></div><br />
			<div class="label"><label>Общая сумма договора с учетом НДС</label></div><br />
            <div class="input"><input type="text" name="obw_summ_s_nds"></div><br />
			<div class="label"><label>Срок исполнения договора</label></div><br />
			<div class="input"><input type="text" name="srok_isp_dogovor"></div><br />
			<div class="label"><label>№ и дата акта исполнения договора</label></div><br />
            <div class="input"><input type="text" name="nomer_data_akt_isp"></div><br />
			<div class="label"><label>Сумма исполнения договора</label></div><br />
			<div class="input"><input type="text" name="summa_isp_dogovor"></div><br />
			<input type="submit" value="Подтвердить" name="vvod_konkurs" class="logot">
		</form>
        <?php require_once "blocks/footer.php"?>
	</body>
</html>