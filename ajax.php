<?php  require("include/baglan.php"); require("include/fonksiyon.php");
		error_reporting(0);

	 	 	if (isset($_GET['markalar'])) {
		
			$arac_marka = $db->query("SELECT * FROM arac_marka ORDER BY marka ASC");
			foreach($arac_marka as $arac_markaList){
				$bilgial[] = array(
					"marka_id"			=>	$arac_markaList["marka_id"],
					"marka"				=>	$arac_markaList["marka"],
					"resim"				=>	$arac_markaList["resim"],
					"link"				=>	Seo_Link_Cevir($arac_markaList["link"]),
					"gizli_ozellik"		=>	$arac_markaList["gizli_ozellik"]
				);
			} 
			echo json_encode($bilgial);
		}
		if (isset($_GET['arac_modelleri'])) {
			if (! isset($_GET['marka_id'])) {
				echo json_encode(['state' => 'error', 'message' => 'Marka belirtilmedi.']);
				return;
			}

			$arac_model = $db->query("SELECT * FROM arac_model WHERE marka_id = '{$_GET['marka_id']}' ORDER BY model ASC");
			foreach($arac_model as $arac_modelList){
				$bilgial[] = array(
					"model_id"			=>	$arac_modelList["model_id"],
					"marka_id"			=>	$arac_modelList["marka_id"],
					"model"				=>	$arac_modelList["model"],
					"link"				=>	$arac_modelList["link"],
					"row"				=>	$arac_modelList["row"],
					"gizli_ozellik"		=>	$arac_modelList["gizli_ozellik"],
				);
			} 
			if (! count($bilgial) > 0) {
				echo json_encode(['state' => 'error', 'message' => 'Markaya ait model bulunamadı.']);
				return;
			} 
			echo json_encode($bilgial);
		}
		
		if (isset($_GET['arac_yillari'])) {
			if (! isset($_GET['model_id'])) {
				echo json_encode(['state' => 'error', 'message' => 'Model belirtilmedi.']);
				return;
			} 
		
			$arac_yil = $db->query("SELECT * FROM arac_yil WHERE model_id = '{$_GET['model_id']}' ORDER BY yil ASC");
			

			foreach($arac_yil as $arac_yilList){
				$bilgial[] = array(
					"yil_id"			=>	$arac_yilList["yil_id"],
					"model_id"			=>	$arac_yilList["model_id"],
					"yil"				=>	$arac_yilList["yil"],
					"link"				=>	$arac_yilList["link"],
					"row"				=>	$arac_yilList["row"],
					"gizli_ozellik"		=>	$arac_yilList["gizli_ozellik"],
				);
			} 

			if (! count($bilgial) > 0) {
				echo json_encode(['state' => 'error', 'message' => 'Modele ait yıl bulunamadı.']);
				return;
			}

			echo json_encode($bilgial);
		}
		if (isset($_GET['arac_tipleri'])) {
			if (! isset($_GET['yil_id'])) {
				echo json_encode(['state' => 'error', 'message' => 'Yıl belirtilmedi.']);
				return;
			}

			$arac_tip = $db->query("SELECT * FROM arac_tip WHERE yil = '{$_GET['yil_id']}' ORDER BY arac ASC");

			foreach($arac_tip as $arac_tipList){
				$bilgial[] = array(
					"arac_id"		=>	$arac_tipList["arac_id"],
					"yil"			=>	$arac_tipList["yil"],
					"arac"			=>	$arac_tipList["arac"],
					"yakit"			=>	$arac_tipList["yakit"],//($arac_tipList["yakit"] = 1 ? "Benzin" : "Dizel"),
					"oguc"			=>	$arac_tipList["oguc"],
					"yguc"			=>	$arac_tipList["yguc"],
					"gfark"			=>	$arac_tipList["gfark"],
					"gyuz"			=>	$arac_tipList["gyuz"],
					"otork"			=>	$arac_tipList["otork"],
					"ytork"			=>	$arac_tipList["ytork"],
					"tfark"			=>	$arac_tipList["tfark"],
					"tyuz"			=>	$arac_tipList["tyuz"],
					"ytas"			=>	$arac_tipList["ytas"],
					"aciklama"		=>	$arac_tipList["aciklama"],
					"link"			=>	Seo_Link_Cevir($arac_tipList["link"]),
					"row"			=>	$arac_tipList["row"],
					"gizli_ozellik"	=>	$arac_tipList["gizli_ozellik"],
				);
			} 

			if (! count($arac_tip) > 0) {
				echo json_encode(['state' => 'error', 'message' => 'Yıla ait araç bulunamadı.']);
				return;
			}

			$dizel = [];
			$benzin = [];

			foreach ($bilgial as $key => $arac) {
				if (strtolower($arac["yakit"]) == '2') {
					$dizel[] = $arac;
				} else {
					$benzin[] = $arac;
				}
			}

			$response = [
				'dizel' => $dizel,
				'benzin' => $benzin,
			];

			echo json_encode($response);
		}
		
		if (isset($_GET['arac'])) {
			if (! isset($_GET['arac_id'])) {
				echo json_encode(['state' => 'error', 'message' => 'Model belirtilmedi.']);
				return;
			}

			$arac_tip = $db->query("SELECT * FROM arac_tip WHERE arac_id = '{$_GET['arac_id']}' ORDER BY arac ASC");

			foreach($arac_tip as $arac_tipList){
				$bilgial[] = array(
					"arac_id"		=>	$arac_tipList["arac_id"],
					"yakit"			=>	$arac_tipList["dizel"],
					"arac"			=>	$arac_tipList["arac"],
				);
			} 


			if (! $bilgial) {
				echo json_encode(['state' => 'error', 'message' => 'Arac bulunamadı.']);
				return;
			}

			echo json_encode($bilgial[0]);
		}  

		if (isset($_GET['gizli_ozellik'])) {
			if (! isset($_GET['yil_id'])) {
				echo json_encode(['state' => 'error', 'message' => 'Model belirtilmedi.']);
				return;
			}


			$bilgi = $db->query("SELECT * FROM gizli_ozellikler WHERE yil_id = '{$_GET['yil_id']}' AND dil_id = '{$lang}' ORDER BY row ASC");

			foreach($bilgi as $bilgial){
				$bilgial[] = array(
					"gizli_id"		=>	$bilgial["gizli_id"],
					"isim"			=>	$bilgial["isim"],
					"aciklama"		=>	$bilgial["aciklama"]
				);
			} 

			if (! $bilgial) {
				echo json_encode(['state' => 'error', 'message' => 'Gizli özellik bulunamadı.']);
				return;
			}

			echo json_encode($bilgial[0]);
		}
		 