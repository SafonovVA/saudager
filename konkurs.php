<html>
	<head>
		<?php
			$title = "конкурс";
            require_once "blocks/head.php";
            require_once "functions/functions.php";
            $num = num_rows ();
		?>
	</head>
	<body>
        <h3>Сведения о конкурсах по состоянию на <?=date('d.m.Y')?> года</h3>
        <table border="1" cellspacing="0">
            <tr>
                <th>№ п/п</th>
                <th>Наименование организатора</th>
                <th>Наименование заказчика</th>
                <th>Наименование закупаемых товаров, работ, услуг (наименование конкурса)</th>
                <th>Выделенный лимит по плану финансирования (тыс. тенге)</th>
                <th>Предусмотренная сумма по плану государственных закупок без учета НДС (тыс. тенге)</th>
                <th>Дата объявления по план графику</th>
                <th>Дата проведения по план графику</th>
                <th>Фактическая дата объявления</th>
                <th>Фактическая дата проведения</th>
                <th>Дата подведения итогов</th>
                <th>Сумма по состоявшимся лотам без учета НДС (тенге)</th>
                <th>Сумма по не состоявшимся лотам без учета НДС (тенге)</th>
                <th>Экономия по состоявшимся лотам без учета НДС (тенге)</th>
                <th>Способом из одного источника по несостоявшимся лотам без учета НДС</th>
                <th>Сумма на повторный конкурс по несостоявшимся лотам без учета НДС (тенге)</th>
                <th>Примечание</th>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
                <td>15</td>
                <td>16</td>
                <td>17</td>
            </tr>
            <tr>
                <td colspan="17">Конкурс свыше 4000 МРП</td>
            </tr>

            <?php
# ------------------------Код для таблицы превышения 40000 МРG
#------------------------------------------------------------------------------------
               for ($i = $num; $i >= 1; $i--) {
                    if (vydelennyi_limit_n($i) < 40000) {
                        continue;  
                    }
            ?>

            <tr>
                <td><?= nomer_konkurs($i); ?></td>
                <td><?= naimenovanie_podrazd($i); ?></td>
                <td><?= naimenovanie_zakazchik($i); ?></td>
                <td><?= naimenovanie_konkurs($i); ?></td>
                <td><?= vydelennyi_limit($i); ?></td>
                <td><?= predusmotr_summ($i); ?></td>
                <td><?= plan_data_objavl($i); ?></td>
                <td><?= plan_data_prov($i); ?></td>
                <td><?= fact_data_objavl($i); ?></td>
                <td><?= fact_data_prov($i); ?></td>
                <td><?= data_itog($i); ?></td>
                <td><?= summ_sost_lot($i); ?></td>
                <td><?= summ_nesost_lot($i); ?></td>
                <td><?= econom_sost_lot($i); ?></td>
                <td><?= sposob_odin_ist($i); ?></td>
                <td><?= summ_povtor($i); ?></td>
                <td><?= prim($i); ?></td>
            </tr>
            <?php
#_________________________________Закрытие скобок свыше 4000МРП
               }
            ?>
            <tr>
                <td colspan="17">Конкурс до 4000 МРП</td>
            </tr>
            
            <?php
# ------------------------Код для таблицы меньше 40000 МРG
#------------------------------------------------------------------------------------
               for ($i = $num; $i >= 1; $i--) {
                    if (vydelennyi_limit_n($i) >= 40000) {
                        continue;  
                    }
            ?>

            <tr>
                <td><?= nomer_konkurs($i); ?></td>
                <td><?= naimenovanie_podrazd($i); ?></td>
                <td><?= naimenovanie_zakazchik($i); ?></td>
                <td><?= naimenovanie_konkurs($i); ?></td>
                <td><?= vydelennyi_limit($i); ?></td>
                <td><?= predusmotr_summ($i); ?></td>
                <td><?= plan_data_objavl($i); ?></td>
                <td><?= plan_data_prov($i); ?></td>
                <td><?= fact_data_objavl($i); ?></td>
                <td><?= fact_data_prov($i); ?></td>
                <td><?= data_itog($i); ?></td>
                <td><?= summ_sost_lot($i); ?></td>
                <td><?= summ_nesost_lot($i); ?></td>
                <td><?= econom_sost_lot($i); ?></td>
                <td><?= sposob_odin_ist($i); ?></td>
                <td><?= summ_povtor($i); ?></td>
                <td><?= prim($i); ?></td>
            </tr>

            <?php
#_________________________________Закрытие скобок меньше 4000МРП
               }
            ?>

            <tr>
                <td colspan="17">Способом из одного истчника</td>
            </tr>

            <?php
# ------------------------Код для таблицы превышения 40000 МРG
#------------------------------------------------------------------------------------
               for ($i = $num; $i >= 1; $i--) {
                    if (naimenovanie_podrazd_n($i) != naimenovanie_zakazchik_n($i)) {
                        continue;  
                    }
            ?>

            <tr>
                <td><?= nomer_konkurs($i); ?></td>
                <td><?= naimenovanie_podrazd($i); ?></td>
                <td><?= naimenovanie_zakazchik($i); ?></td>
                <td><?= naimenovanie_konkurs($i); ?></td>
                <td><?= vydelennyi_limit($i); ?></td>
                <td><?= predusmotr_summ($i); ?></td>
                <td><?= plan_data_objavl($i); ?></td>
                <td><?= plan_data_prov($i); ?></td>
                <td><?= fact_data_objavl($i); ?></td>
                <td><?= fact_data_prov($i); ?></td>
                <td><?= data_itog($i); ?></td>
                <td><?= summ_sost_lot($i); ?></td>
                <td><?= summ_nesost_lot($i); ?></td>
                <td><?= econom_sost_lot($i); ?></td>
                <td><?= sposob_odin_ist($i); ?></td>
                <td><?= summ_povtor($i); ?></td>
                <td><?= prim($i); ?></td>
            </tr>

            <?php
#_________________________________Закрытие скобок способом из одного источника
               }
            ?>

        </table>
		<form method="get" action="add_konkurs.php">	
			<h3>Внести новые данные по конкурсу</h3>
			<input type="submit" value="Подтвердить">
		</form>

	</body>
</html>