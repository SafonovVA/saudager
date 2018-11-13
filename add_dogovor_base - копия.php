<html>
	<head>
		<?php
			$title = "Внесение данных договора";
			require_once "blocks/head.php";
		?>
	</head>
	<body>
        <?php
        echo 'DA';
	        $nomer_konkurs = $_GET['nomer_konkurs'];
            $naimenovanie_podrazd = $_GET['naimenovanie_podrazd'];
            $naimenovanie_zakazchik = $_GET['naimenovanie_zakazchik'];
            $naimenovanie_konkurs = $_GET['naimenovanie_konkurs'];
            $vydelennyi_limit = $_GET['vydelennyi_limit'];
            $predusmotr_summ = $_GET['predusmotr_summ'];
            $plan_data_objavl = $_GET['plan_data_objavl'];
            $plan_data_prov = $_GET['plan_data_prov'];
            $fact_data_objavl = $_GET['fact_data_objavl'];
            $fact_data_prov = $_GET['fact_data_prov'];
            $data_itog = $_GET['data_itog'];
            $summ_sost_lot = $_GET['summ_sost_lot'];
            $summ_nesost_lot = $_GET['summ_nesost_lot'];
            $econom_sost_lot = $_GET['econom_sost_lot'];
            $sposob_odin_ist = $_GET['sposob_odin_ist'];
            $summ_povtor = $_GET['summ_povtor'];
            $prim = $_GET['prim'];
           
            connectDB ();

           # $mysqli->query ("INSERT INTO `dogovor` (`id_konkurs`, `nomer_konkurs`, `naimenovanie_podrazd`, `naimenovanie_zakazchik`, `naimenovanie_konkurs`, `vydelennyi_limit`, `predusmotr_summ`, `plan_data_objavl`, `plan_data_prov`, `fact_data_objavl`, `fact_data_prov`, `data_itog`, `summ_sost_lot`, `summ_nesost_lot`, `econom_sost_lot`, `sposob_odin_ist`, `summ_povtor`, `prim`) VALUES (NULL, '$nomer_konkurs', '$naimenovanie_podrazd', '$naimenovanie_zakazchik', '$naimenovanie_konkurs', '$vydelennyi_limit', '$predusmotr_summ', '$plan_data_objavl', '$plan_data_prov', '$fact_data_objavl', '$fact_data_prov', '$data_itog', '$summ_sost_lot', '$summ_nesost_lot', '$econom_sost_lot', '$sposob_odin_ist', '$summ_povtor', '$prim')");

            closeDB ();

            $login = file_get_contents('login.txt');

   
            echo("<script>function func() {
                location.href='dogovor.php'
                }
            setTimeout(func,5)</script>");
            
       
        ?>
    </body>
</html>