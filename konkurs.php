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

            <?php
               # if ($num==0) 
            ?>
            <tr>
                <td colspan="17">Конкурс свыше 4000 МРП</td>
            </tr>
            <tr>
                <td><?= id_konkurs(2); ?></td>
                <td><?= naimenovanie_podrazd(2); ?></td>
                <td><?= naimenovanie_zakazchik(2); ?></td>
                <td><?= naimenovanie_konkurs(2); ?></td>
                <td><?= vydelennyi_limit(2); ?></td>
                <td><?= predusmotr_summ(2); ?></td>
                <td><?= plan_data_objavl(2); ?></td>
                <td><?= plan_data_prov(2); ?></td>
                <td><?= fact_data_objavl(2); ?></td>
                <td><?= fact_data_prov(2); ?></td>
                <td><?= data_itog(2); ?></td>
                <td><?= summ_sost_lot(2); ?></td>
                <td><?= summ_nesost_lot(2); ?></td>
                <td><?= econom_sost_lot(2); ?></td>
                <td><?= sposob_odin_ist(2); ?></td>
                <td><?= summ_povtor(2); ?></td>
                <td><?= prim(2); ?></td>
            </tr>
            <tr>
                <td colspan="17">Конкурс до 4000 МРП</td>
            </tr>
            <tr>
                <td><?= id_konkurs(2); ?></td>
                <td><?= naimenovanie_podrazd(2); ?></td>
                <td><?= naimenovanie_zakazchik(2); ?></td>
                <td><?= naimenovanie_konkurs(2); ?></td>
                <td><?= vydelennyi_limit(2); ?></td>
                <td><?= predusmotr_summ(2); ?></td>
                <td><?= plan_data_objavl(2); ?></td>
                <td><?= plan_data_prov(2); ?></td>
                <td><?= fact_data_objavl(2); ?></td>
                <td><?= fact_data_prov(2); ?></td>
                <td><?= data_itog(2); ?></td>
                <td><?= summ_sost_lot(2); ?></td>
                <td><?= summ_nesost_lot(2); ?></td>
                <td><?= econom_sost_lot(2); ?></td>
                <td><?= sposob_odin_ist(2); ?></td>
                <td><?= summ_povtor(2); ?></td>
                <td><?= prim(2); ?></td>
            </tr>
            <tr>
                <td colspan="17">Способом из одного истчника</td>
            </tr>
            <tr>
                <td><?= id_konkurs(2); ?></td>
                <td><?= naimenovanie_podrazd(2); ?></td>
                <td><?= naimenovanie_zakazchik(2); ?></td>
                <td><?= naimenovanie_konkurs(2); ?></td>
                <td><?= vydelennyi_limit(2); ?></td>
                <td><?= predusmotr_summ(2); ?></td>
                <td><?= plan_data_objavl(2); ?></td>
                <td><?= plan_data_prov(2); ?></td>
                <td><?= fact_data_objavl(2); ?></td>
                <td><?= fact_data_prov(2); ?></td>
                <td><?= data_itog(2); ?></td>
                <td><?= summ_sost_lot(2); ?></td>
                <td><?= summ_nesost_lot(2); ?></td>
                <td><?= econom_sost_lot(2); ?></td>
                <td><?= sposob_odin_ist(2); ?></td>
                <td><?= summ_povtor(2); ?></td>
                <td><?= prim(2); ?></td>
            </tr>
        </table>
	</body>
</html>