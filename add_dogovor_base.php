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
	        $nomer_dogovor = $_GET['nomer_dogovor'];
            $naimenovanie_konkurs = $_GET['naimenovanie_konkurs'];
            $zakazchik = $_GET['zakazchik'];
            $postavshik = $_GET['postavshik'];
            $nomer_data_dogovor = $_GET['nomer_data_dogovor'];
            $predmet_dogovor = $_GET['predmet_dogovor'];
            $summa_dogovor_bez_nds = $_GET['summa_dogovor_bez_nds'];
            $summa_dogovor_s_nds = $_GET['summa_dogovor_s_nds'];
            $nomer_data_postavsik = $_GET['nomer_data_postavsik'];
            $summa_vnes_obesp = $_GET['summa_vnes_obesp'];
            $nomer_data_dop = $_GET['nomer_data_dop'];
            $summa_dop_bez_nds = $_GET['summa_dop_bez_nds'];
            $summa_dop_s_nds = $_GET['summa_dop_s_nds'];
            $obw_summ_bez_nds = $_GET['obw_summ_bez_nds'];
            $obw_summ_s_nds = $_GET['obw_summ_s_nds'];
            $srok_isp_dogovor = $_GET['srok_isp_dogovor'];
            $nomer_data_akt_isp = $_GET['nomer_data_akt_isp'];
            $summa_isp_dogovor = $_GET['summa_isp_dogovor'];
           
            connectDB ();

            $mysqli->query ("INSERT INTO `dogovor` (`id_dogovor`, `nomer_dogovor`, `naimenovanie_konkurs`, `zakazchik`, `postavshik`, `nomer_data_dogovor`, `predmet_dogovor`, `summa_dogovor_bez_nds`, `summa_dogovor_s_nds`, `nomer_data_postavsik`, `summa_vnes_obesp`, `nomer_data_dop`, `summa_dop_bez_nds`, `summa_dop_s_nds`, `obw_summ_bez_nds`, `obw_summ_s_nds`, `srok_isp_dogovor`, `nomer_data_akt_isp`, `summa_isp_dogovor`) VALUES (NULL, '$nomer_dogovor', '$naimenovanie_konkurs', '$zakazchik', '$postavshik', '$nomer_data_dogovor', '$predmet_dogovor', '$summa_dogovor_bez_nds', '$summa_dogovor_s_nds', '$nomer_data_postavsik', '$summa_vnes_obesp', '$nomer_data_dop', '$summa_dop_bez_nds', '$summa_dop_s_nds', '$obw_summ_bez_nds', '$obw_summ_s_nds', '$srok_isp_dogovor', '$nomer_data_akt_isp', '$summa_isp_dogovor')");
            closeDB ();

            $login = file_get_contents('login.txt');

   
            echo("<script>function func() {
                location.href='dogovor.php'
                }
            setTimeout(func,5)</script>");
            
       
        ?>
    </body>
</html>