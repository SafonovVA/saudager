<?php

require_once "connect.php";

		function num_rows_dogovor () {
			global $mysqli;
			connectDB();
			$result = $mysqli->query("SELECT * FROM `dogovor` ORDER BY `id_dogovor` ASC");
			closeDB();
			return ($result->num_rows);
		}

    function id_dogovor($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["id_dogovor"];
		};
		closeDB();
    }
    
    function naimenovanie_konkurs($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["naimenovanie_konkurs"];
		};
		closeDB();
    }

    function zakazchik($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["zakazchik"];
		};
		closeDB();
    }

    function postavshik($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["postavshik"];
		};
		closeDB();
    }

    function nomer_data_dogovor($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["nomer_data_dogovor"];
		};
		closeDB();
    }

    function predmet_dogovor($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["predmet_dogovor"];
		};
		closeDB();
    }

    function summa_dogovor_bez_nds($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["summa_dogovor_bez_nds"];
		};
		closeDB();
    }

    function summa_dogovor_s_nds($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["summa_dogovor_s_nds"];
		};
		closeDB();
    }

    function nomer_data_postavsik($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["nomer_data_postavsik"];
		};
		closeDB();
    }

    function summa_vnes_obesp($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["summa_vnes_obesp"];
		};
		closeDB();
    }

    function nomer_data_dop($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["nomer_data_dop"];
		};
		closeDB();
    }
    
    function summa_dop_bez_nds($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["summa_dop_bez_nds"];
		};
		closeDB();
    }
        
    function summa_dop_s_nds($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["summa_dop_s_nds"];
		};
		closeDB();
    }

    function obw_summ_bez_nds($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["obw_summ_bez_nds"];
		};
		closeDB();
    }
    
    function obw_summ_s_nds($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["obw_summ_s_nds"];
		};
		closeDB();
    }
        
    function srok_isp_dogovor($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["srok_isp_dogovor"];
		};
		closeDB();
    }
            
    function nomer_data_akt_isp($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["nomer_data_akt_isp"];
		};
		closeDB();
    }
                
    function summa_isp_dogovor($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["summa_isp_dogovor"];
		};
		closeDB();
    }

    function nomer_dogovor($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["nomer_dogovor"];
		};
		closeDB();
    }

    #__________________Для получения числового значения выделенного лимита
    #__________________больше ли 4000 МРП_________________________________

    function vydelennyi_limit_n($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			return $row["vydelennyi_limit"];
		};
		closeDB();
    }    

    function vyshestoyashee_id_n($naimenovanie) {
			global $mysqli;
			connectDB();
			switch($naimenovanie) {
				case 2040: $bigger = 2; break;
				case 2024: $bigger = 3; break;
				case 2039: $bigger = 4; break;
				case 2015: $bigger = 5; break;
				case 2201: $bigger = 6; break;
			}
			for ($i = 0; $i<=51; $i++) {
				$result_set = $mysqli->query("SELECT * FROM `podrazdelenie` WHERE `id_podrazd`= '$i'");	
				while (($row = $result_set->fetch_assoc()) != false) {
					if ($row["vyshestoyashee_id"] == $bigger) $arr[] = $row["naimenovanie_podrazd"];
				};
			}
			return $arr;
			closeDB();
		}

		#________________________Для получения
#________________________заказчика________________________

function naimenovanie_podrazd_n($number) {
	global $mysqli;
	connectDB();
	$result_set = $mysqli->query("SELECT * FROM `konkurs` WHERE `id_konkurs`= '$number'");					
	while (($row = $result_set->fetch_assoc()) != false){
		return $row["naimenovanie_podrazd"];
	};
	closeDB();
	}

	function zakazchik_n($number) {
	global $mysqli;
	connectDB();
	$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
	while (($row = $result_set->fetch_assoc()) != false){
		return $row["zakazchik"];
	};
	closeDB();
	}

	function postavshik_n($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			return $row["postavshik"];
		};
		closeDB();
		}

	
	#__________________________________________________________

	function obw_summ_s_nds_n($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `dogovor` WHERE `id_dogovor`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			return $row["obw_summ_s_nds"];
		};
		closeDB();
    }
?>