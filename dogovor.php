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
        <?php require_once "blocks/header.php" ?>
        <div id="logo">
			<a href="konkurs.php">
				<div class="logot">Перейти в конкурсы</div>
			</a>
        </div>
        <h3  style="text-align: center">Сведения о договорах по состоянию на <?=date('d.m.Y')?> года</h3>
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
                <td colspan="18">Конкурс свыше 4000 МРП</td>
            </tr>

            <?php

# ------------------------Код для таблицы превышения 40000 МРG
#------------------------------------------------------------------------------------
               for ($i = $num; $i >= 1; $i--) {
                    if ($login == 2456) {
                        if (obw_summ_s_nds_n($i) < 40000) {
                            continue;  
                        }
                    }

                    elseif (in_array($login, $great)) {
                        $reg = vyshestoyashee_id_n($login);
                        $reg[] = $login;
                            if (obw_summ_s_nds_n($i) < 40000 || (!in_array( zakazchik_n($i),$reg) && !in_array(naimenovanie_zakazchik_n($i), $reg))) {
                                continue;  
                        }
                    }


                    else {
                        if (obw_summ_s_nds_n($i) < 40000 || ((zakazchik_n($i) != $login) && (naimenovanie_zakazchik_n($i) != $login))) {
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
                <td colspan="18">Конкурс до 4000 МРП</td>
            </tr>
            
            <?php
# ------------------------Код для таблицы меньше 40000 МРG
#------------------------------------------------------------------------------------
                for ($i = $num; $i >= 1; $i--) {
                    if ($login == 2456) {
                        if (obw_summ_s_nds_n($i) > 40000) {
                            continue;  
                        }
                    }

                    elseif (in_array($login, $great)) {
                        $reg = vyshestoyashee_id_n($login);
                        $reg[] = $login;
                            if (obw_summ_s_nds_n($i) > 40000 || (!in_array(zakazchik_n($i),$reg) && !in_array(naimenovanie_zakazchik_n($i), $reg))) {
                                continue;  
                        }
                    }

                    else {
                        if (obw_summ_s_nds_n($i) > 40000 || ((zakazchik_n($i) != $login) && (naimenovanie_zakazchik_n($i) != $login))) {
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
#_________________________________Закрытие скобок меньше 4000МРП
               }
            ?>

            <tr>
                <td colspan="18">Способом из одного источника</td>
            </tr>

                <?php
# ------------------------Код для таблицы способом из одного источника
#------------------------------------------------------------------------------------
//                 for ($i = $num; $i >= 1; $i--) {
//                     if ($login == 2456) {
//                         if (zakazchik($i) != naimenovanie_zakazchik_n($i)) {
//                             continue;  
//                         }
//                     }
                
//                     elseif (in_array($login, $great)) {
//                         $reg = vyshestoyashee_id_n($login);
//                         $reg[] = $login;
//                             if ((zakazchik($i) != naimenovanie_zakazchik_n($i)) || (!in_array( zakazchik_n($i),$reg) && !in_array(naimenovanie_zakazchik_n($i), $reg))) {
//                                 continue;  
//                         }
//                     }    

//                     else {
//                         if ((zakazchik($i) != naimenovanie_zakazchik_n($i))  || ((zakazchik_n($i) != $login) && (naimenovanie_zakazchik_n($i) != $login))) {
//                             continue;  
//                         }
//                     }
//                     ?>

//             <!-- <tr>
//                 <td><?= id_dogovor($i); ?></td>
//                 <td><?= naimenovanie_konkurs($i); ?></td>
//                 <td><?= zakazchik($i); ?></td>
//                 <td><?= postavshik($i); ?></td>
//                 <td><?= nomer_data_dogovor($i); ?></td>
//                 <td><?= predmet_dogovor($i); ?></td>
//                 <td><?= summa_dogovor_bez_nds($i); ?></td>
//                 <td><?= summa_dogovor_s_nds($i); ?></td>
//                 <td><?= nomer_data_postavsik($i); ?></td>
//                 <td><?= summa_vnes_obesp($i); ?></td>
//                 <td><?= nomer_data_dop($i); ?></td>
//                 <td><?= summa_dop_bez_nds($i); ?></td>
//                 <td><?= summa_dop_s_nds($i); ?></td>
//                 <td><?= obw_summ_bez_nds($i); ?></td>
//                 <td><?= obw_summ_s_nds($i); ?></td>
//                 <td><?= srok_isp_dogovor($i); ?></td>
//                 <td><?= nomer_data_akt_isp($i); ?></td>
//                 <td><?= summa_isp_dogovor($i); ?></td>
//             </tr> -->

//             <?php
// #_________________________________Закрытие скобок способом из одного источника
//                }
//             ?>

        </table>
		<!-- <form method="get" action="add_dogovor_form.php" style="text-align: center">	
			<h3>Внести новые данные по договору</h3>
			<input type="submit" value="Подтвердить">
        </form> -->
        <div id="logo1">
			<a href="add_dogovor_form.php">
				<div class="logot1">Внести новые данные по договору</div>
			</a>
        </div>

	</body>
</html>


