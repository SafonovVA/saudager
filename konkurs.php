<html>
	<head>
		<?php
			$title = "Конкурсы";
            require_once "blocks/head.php";
            require_once "functions/functions_konkurs.php";
            $login = file_get_contents('login.txt');
            $num = num_rows ();
		?>
	</head>
	<body>  
        <?php require_once "blocks/header.php" ?>
        <div id="logo">
			<a href="dogovor.php">
				<div class="logot">Перейти в договоры</div>
			</a>
            <a href="konkurs.php">
				<div class="logot">Обновить</div>
			</a>
        </div>
        <div class="zagolovok"><h3 style="text-align: center">Сведения о конкурсах по состоянию на <?=date('d.m.Y')?> года</h3></div>
        <br /><table border="1" cellspacing="0">
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
                <th colspan="17">Конкурс свыше 4000 МРП</th>
            </tr>

            <?php

# ------------------------Код для таблицы превышения 40000 МРG
#------------------------------------------------------------------------------------
                $first = 0;
                $second = 0;
                $third = 0;
                $fourth = 0;
                $fifth = 0;
                $sixth = 0;
                for ($i = $num; $i >= 1; $i--) {
                    if ($login == 2456) {                     
                        if (vydelennyi_limit_n($i) < 40000) continue;          
                            $mass = all($i);
                            $mass = array_values($mass);
                            echo "<tr>";
                            for ($j = 1; $j <= 17; $j++) {
                                echo "<td>$mass[$j]</td>";
                            }
                            echo "</tr>";
                    }
                    elseif (in_array($login, $great)) {
                        $reg = vyshestoyashee_id_n($login);
                        $reg[] = $login;
                            if (vydelennyi_limit_n($i) < 40000 || (!in_array( naimenovanie_podrazd_n($i),$reg) && !in_array(naimenovanie_zakazchik_n($i), $reg))) continue;
                            $mass = all($i);
                            $mass = array_values($mass);
                            echo "<tr>";
                            for ($j = 1; $j <= 17; $j++) {
                                echo "<td>$mass[$j]</td>";
                            }
                            echo "</tr>";       
                    }
                    else {
                        if (vydelennyi_limit_n($i) < 40000 || ((naimenovanie_podrazd_n($i) != $login) && (naimenovanie_zakazchik_n($i) != $login))) continue;
                            $mass = all($i);
                            $mass = array_values($mass);
                            echo "<tr>";
                            for ($j = 1; $j <= 17; $j++) {
                                echo "<td>$mass[$j]</td>";
                            }
                            echo "</tr>"; 
                    }
                    $first += vydelennyi_limit_n($i);
                    $second += predusmotr_summ_n($i);
                    $third += summ_sost_lot_n($i);
                    $fourth += summ_nesost_lot_n($i);
                    $fifth += econom_sost_lot_n($i);
                    $sixth += summ_povtor_n($i);
                }
            
#_________________________________Закрытие скобок свыше 4000МРП
            ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <th>Итого:</th>
                <th><?= $first ?></th>
                <th><?= $second ?></th>
                <td colspan="5"></td>
                <th><?= $third ?></th>
                <th><?= $fourth ?></th>
                <th><?= $fifth ?></th>
                <td></td>
                <th><?= $sixth ?></th>
                <td></td>
            </tr>
            <tr>
                <th colspan="17">Конкурс до 4000 МРП</th>
            </tr>
            
            <?php
# ------------------------Код для таблицы меньше 40000 МРG
#------------------------------------------------------------------------------------
                for ($i = $num; $i >= 1; $i--) {
                    if ($login == 2456) {                     
                        if (vydelennyi_limit_n($i) > 40000) continue;          
                            $mass = all($i);
                            $mass = array_values($mass);
                            echo "<tr>";
                            for ($j = 1; $j <= 17; $j++) {
                                echo "<td>$mass[$j]</td>";
                            }
                            echo "</tr>";
                    }

                    elseif (in_array($login, $great)) {
                        $reg = vyshestoyashee_id_n($login);
                        $reg[] = $login;
                            if (vydelennyi_limit_n($i) > 40000 || (!in_array(naimenovanie_podrazd_n($i),$reg) && !in_array(naimenovanie_zakazchik_n($i), $reg))) continue;
                        $mass = all($i);
                        $mass = array_values($mass);
                        echo "<tr>";
                        for ($j = 1; $j <= 17; $j++) {
                            echo "<td>$mass[$j]</td>";
                        }
                            echo "</tr>";  
                    }

                    else {
                        if (vydelennyi_limit_n($i) > 40000 || ((naimenovanie_podrazd_n($i) != $login) && (naimenovanie_zakazchik_n($i) != $login))) continue;
                        $mass = all($i);
                        $mass = array_values($mass);
                        echo "<tr>";
                        for ($j = 1; $j <= 17; $j++) {
                            echo "<td>$mass[$j]</td>";
                        }
                        echo "</tr>";    
                    }
                }
#_________________________________Закрытие скобок меньше 4000МРП
            ?>

            <tr>
                <th colspan="17">Способом из одного источника</th>
            </tr>

                <?php
#------------------------Код для таблицы способом из одного источника
#------------------------------------------------------------------------------------
                $first = 0;
                $second = 0;
                $third = 0;
                $fourth = 0;
                $fifth = 0;
                $sixth = 0;
                for ($i = $num; $i >= 1; $i--) {
                    if ($login == 2456) {
                        if (naimenovanie_podrazd_n($i) != naimenovanie_zakazchik_n($i)) continue;  
                        $mass = all($i);
                        $mass = array_values($mass);
                        echo "<tr>";
                        for ($j = 1; $j <= 17; $j++) {
                            echo "<td>$mass[$j]</td>";
                        }
                        echo "</tr>";
                    }
                
                    elseif (in_array($login, $great)) {
                        $reg = vyshestoyashee_id_n($login);
                        $reg[] = $login;
                            if ((naimenovanie_podrazd_n($i) != naimenovanie_zakazchik_n($i)) || (!in_array( naimenovanie_podrazd_n($i),$reg) && !in_array(naimenovanie_zakazchik_n($i), $reg))) continue;
                            $mass = all($i);
                            $mass = array_values($mass);
                            echo "<tr>";
                            for ($j = 1; $j <= 17; $j++) {
                                echo "<td>$mass[$j]</td>";
                            }
                            echo "</tr>"; 
                    }    

                    else {
                        if ((naimenovanie_podrazd_n($i) != naimenovanie_zakazchik_n($i))  || ((naimenovanie_podrazd_n($i) != $login) && (naimenovanie_zakazchik_n($i) != $login))) continue;
                        $mass = all($i);
                        $mass = array_values($mass);
                        echo "<tr>";
                        for ($j = 1; $j <= 17; $j++) {
                            echo "<td>$mass[$j]</td>";
                        }
                        echo "</tr>"; 
                    }
                    $first += vydelennyi_limit_n($i);
                    $second += predusmotr_summ_n($i);
                    $third += summ_sost_lot_n($i);
                    $fourth += summ_nesost_lot_n($i);
                    $fifth += econom_sost_lot_n($i);
                    $sixth += summ_povtor_n($i);
                }
                    ?>
            <?php
#_________________________________Закрытие скобок способом из одного источника
            ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <th>Итого:</th>
                <th><?= $first." тыс. тенге" ?></th>
                <th><?= $second ?></th>
                <td colspan="5"></td>
                <th><?= $third ?></th>
                <th><?= $fourth ?></th>
                <th><?= $fifth ?></th>
                <td></td>
                <th><?= $sixth ?></th>
                <td></td>
            </tr>

        </table>
        <div id="logo1">
			<a href="add_konkurs_form.php">
				<div class="logot1" style="text-align: center;" >Внести новые данные по конкурсу</div>
			</a>
        </div>
        <?php require_once "blocks/footer.php"?>      
	</body>
</html>

