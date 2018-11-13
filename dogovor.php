<html>
	<head>
		<?php
			$title = "Договоры";
            require_once "blocks/head.php";
            require_once "functions/functions_dogovor.php";
            $login = file_get_contents('login.txt');
            $num = num_rows_dogovor ();
		?>
	</head>
	<body>
        <a href="konkurs.php">Конкурсы</a>
        <h3>Сведения о договорах по состоянию на <?=date('d.m.Y')?> года</h3>
        <h2><?=$login?></h2>
        <table border="1" cellspacing="0">
            <tr>
                <th>№ п/п</th>
                <th>Наименование конкурса</th>
                <th>Заказчик</th>
                <th>Поставщик</th>
                <th>№ и дата договора</th>
                <th>Предмет договора</th>
                <th>Сумма договора без учета НДС</th>
                <th>Сумма договора с учетом НДС</th>
                <th>№ и дата внесения поставщиком обеспечения </th>
                <th>Сумма внесенного обеспечения (с учетом???)</th>
                <th>№ и дата заключения доп.</th>
                <th>Сумма дополнительного без учета НДС</th>
                <th>Сумма дополнительного с учетом НДС</th>
                <th>Общая сумма договора без учета НДС</th>
                <th>Общая сумма договора с учетом НДС</th>
                <th>Срок исполнения договора</th>
                <th>№ и дата акта исполнения договора</th>
                <th>Сумма исполнения договора</th>

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
                <td>18</td>
            </tr>
            <tr>
                <td colspan="17">Конкурс свыше 4000 МРП</td>
            </tr>

            <?php

# ------------------------Код для таблицы превышения 40000 МРG
#------------------------------------------------------------------------------------
               for ($i = $num; $i >= 1; $i--) {
                    if ($login == 2456) {
                        if (vydelennyi_limit_n($i) < 40000) {
                            continue;  
                        }
                    }

                    elseif (in_array($login, $great)) {
                        $reg = vyshestoyashee_id_n($login);
                        $reg[] = $login;
                            if (vydelennyi_limit_n($i) < 40000 || (!in_array( naimenovanie_podrazd_n($i),$reg) && !in_array(naimenovanie_zakazchik_n($i), $reg))) {
                                continue;  
                        }
                    }


                    else {
                        if (vydelennyi_limit_n($i) < 40000 || ((naimenovanie_podrazd_n($i) != $login) && (naimenovanie_zakazchik_n($i) != $login))) {
                            continue;  
                        }
                    }

            ?>

            <tr>
                <td><?= id_dogovor($i); ?></td>
                <td><?= naimenovanie_konkurs($i); ?></td>
                <td><?= zakazchik($i); ?></td>
                <td><?= postavshik($i); ?></td>
                <td><?= nomer_data_dogovor($i); ?></td>
                <td><?= predmet_dogovor($i); ?></td>
                <td><?= summa_dogovor_bez_nds($i); ?></td>
                <td><?= summa_dogovor_s_nds($i); ?></td>
                <td><?= nomer_data_postavsik($i); ?></td>
                <td><?= summa_vnes_obesp($i); ?></td>
                <td><?= nomer_data_dop($i); ?></td>
                <td><?= summa_dop_bez_nds($i); ?></td>
                <td><?= summa_dop_s_nds($i); ?></td>
                <td><?= obw_summ_bez_nds($i); ?></td>
                <td><?= obw_summ_s_nds($i); ?></td>
                <td><?= srok_isp_dogovor($i); ?></td>
                <td><?= nomer_data_akt_isp($i); ?></td>
                <td><?= summa_isp_dogovor($i); ?></td>
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
                    if ($login == 2456) {
                        if (vydelennyi_limit_n($i) > 40000) {
                            continue;  
                        }
                    }

                    elseif (in_array($login, $great)) {
                        $reg = vyshestoyashee_id_n($login);
                        $reg[] = $login;
                            if (vydelennyi_limit_n($i) > 40000 || (!in_array(naimenovanie_podrazd_n($i),$reg) && !in_array(naimenovanie_zakazchik_n($i), $reg))) {
                                continue;  
                        }
                    }

                    else {
                        if (vydelennyi_limit_n($i) > 40000 || ((naimenovanie_podrazd_n($i) != $login) && (naimenovanie_zakazchik_n($i) != $login))) {
                            continue;  
                        }
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
# ------------------------Код для таблицы способом из одного источника
#------------------------------------------------------------------------------------
                for ($i = $num; $i >= 1; $i--) {
                    if ($login == 2456) {
                        if (naimenovanie_podrazd_n($i) != naimenovanie_zakazchik_n($i)) {
                            continue;  
                        }
                    }
                
                    elseif (in_array($login, $great)) {
                        $reg = vyshestoyashee_id_n($login);
                        $reg[] = $login;
                            if ((naimenovanie_podrazd_n($i) != naimenovanie_zakazchik_n($i)) || (!in_array( naimenovanie_podrazd_n($i),$reg) && !in_array(naimenovanie_zakazchik_n($i), $reg))) {
                                continue;  
                        }
                    }    

                    else {
                        if ((naimenovanie_podrazd_n($i) != naimenovanie_zakazchik_n($i))  || ((naimenovanie_podrazd_n($i) != $login) && (naimenovanie_zakazchik_n($i) != $login))) {
                            continue;  
                        }
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
		<form method="get" action="add_dogovor_form.php">	
			<h3>Внести новые данные по договору</h3>
			<input type="submit" value="Подтвердить">
		</form>

	</body>
</html>


