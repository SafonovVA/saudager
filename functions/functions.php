<?php

require_once "connect.php";

	function num_rows () {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `konkurs` ORDER BY `id_konkurs` ASC");
		closeDB();
		return ($result->num_rows);
	}

    function id_konkurs($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `konkurs` WHERE `id_konkurs`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["id_konkurs"];
		};
		closeDB();
    }

    function nomer_konkurs($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `konkurs` WHERE `id_konkurs`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["nomer_konkurs"];
		};
		closeDB();
    }

    function naimenovanie_podrazd($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `konkurs` WHERE `id_konkurs`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["naimenovanie_podrazd"];
		};
		closeDB();
    }

    function naimenovanie_zakazchik($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `konkurs` WHERE `id_konkurs`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["naimenovanie_zakazchik"];
		};
		closeDB();
    }
#________________________Для получения значений организатора 
#________________________и заказчика________________________

    function naimenovanie_podrazd_n($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `konkurs` WHERE `id_konkurs`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			return $row["naimenovanie_podrazd"];
		};
		closeDB();
    }

    function naimenovanie_zakazchik_n($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `konkurs` WHERE `id_konkurs`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			return $row["naimenovanie_zakazchik"];
		};
		closeDB();
    }

    function naimenovanie_konkurs($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `konkurs` WHERE `id_konkurs`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["naimenovanie_konkurs"];
		};
		closeDB();
    }

    function vydelennyi_limit($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `konkurs` WHERE `id_konkurs`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["vydelennyi_limit"];
		};
		closeDB();
    }

    #__________________Для получения числового значения выделенного лимита
    #__________________больше ли 4000 МРП_________________________________

    function vydelennyi_limit_n($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `konkurs` WHERE `id_konkurs`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			return $row["vydelennyi_limit"];
		};
		closeDB();
    }    

    function predusmotr_summ($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `konkurs` WHERE `id_konkurs`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["predusmotr_summ"];
		};
		closeDB();
    }

    function plan_data_objavl($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `konkurs` WHERE `id_konkurs`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["plan_data_objavl"];
		};
		closeDB();
    }

    function plan_data_prov($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `konkurs` WHERE `id_konkurs`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["plan_data_prov"];
		};
		closeDB();
    }

    function fact_data_objavl($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `konkurs` WHERE `id_konkurs`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["fact_data_objavl"];
		};
		closeDB();
    }
    
    function fact_data_prov($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `konkurs` WHERE `id_konkurs`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["fact_data_prov"];
		};
		closeDB();
    }
        
    function data_itog($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `konkurs` WHERE `id_konkurs`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["data_itog"];
		};
		closeDB();
    }

    function summ_sost_lot($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `konkurs` WHERE `id_konkurs`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["summ_sost_lot"];
		};
		closeDB();
    }
    
    function summ_nesost_lot($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `konkurs` WHERE `id_konkurs`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["summ_nesost_lot"];
		};
		closeDB();
    }
        
    function econom_sost_lot($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `konkurs` WHERE `id_konkurs`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["econom_sost_lot"];
		};
		closeDB();
    }
            
    function sposob_odin_ist($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `konkurs` WHERE `id_konkurs`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["sposob_odin_ist"];
		};
		closeDB();
    }
                
    function summ_povtor($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `konkurs` WHERE `id_konkurs`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["summ_povtor"];
		};
		closeDB();
    }

    function prim($number) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query("SELECT * FROM `konkurs` WHERE `id_konkurs`= '$number'");					
		while (($row = $result_set->fetch_assoc()) != false){
			echo $row["prim"];
		};
		closeDB();
    }





?>