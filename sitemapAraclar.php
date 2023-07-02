<?php  include("include/baglan.php");  include("include/fonksiyon.php"); 
?>
<?php header('Content-type: Application/xml; charset="utf8"', true); ?>
		<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
				xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
				xmlns:xhtml="http://www.w3.org/1999/xhtml"
				xsi:schemaLocation="
					http://www.sitemaps.org/schemas/sitemap/0.9
					http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
			
			<url>
				<loc><?php echo $ayarlar["strURL"]; ?></loc> 
				<changefreq>always</changefreq>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<priority>1</priority>
			</url>
 

			<?php 
		//Markalar
		$list = $db->query("SELECT * FROM arac_marka WHERE marka_durum = 1 ORDER BY marka ASC");
		foreach($list as $row){  	 
			$strURL = $ayarlar["strURL"].'/car/'.$row["link"]; 
?>
			<url>
				<loc><?php echo $strURL ?></loc>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<changefreq>always</changefreq>
				<priority>1.00</priority>
			</url>
<?php 
			} 
?> 

<?php 
		//Araç Model
		$list = $db->query("SELECT * FROM arac_model WHERE model_durum = 1 ORDER BY model ASC");
		foreach($list as $row){
		$arac_marka = $db->query("SELECT * FROM arac_marka WHERE marka_id = '{$row["marka_id"]}'")->fetch(PDO::FETCH_ASSOC);
		$strURL = $ayarlar["strURL"].'/car/'.$arac_marka["link"].'/'.$row["link"]; 
?>
			<url>
				<loc><?php echo $strURL ?></loc>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<changefreq>always</changefreq>
				<priority>1.00</priority>
			</url>
<?php 
			}
?> 




<?php 
		//Araç Yıl
		$list = $db->query("SELECT * FROM arac_yil ORDER BY yil ASC");
		foreach($list as $row){
		$arac_model = $db->query("SELECT * FROM arac_model WHERE model_id = {$row["model_id"]}")->fetch(PDO::FETCH_ASSOC);
		$arac_marka = $db->query("SELECT * FROM arac_marka WHERE marka_id = '{$arac_model["marka_id"]}'")->fetch(PDO::FETCH_ASSOC);
		$strURL = $ayarlar["strURL"].'/car/'.$arac_marka["link"].'/'.$arac_model["link"].'/'.$row["link"]; 
?>
			<url>
				<loc><?php echo $strURL ?></loc>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<changefreq>always</changefreq>
				<priority>1.00</priority>
			</url>		 
<?php 
			}
?>  


<?php 

		//Araç Türü
		$list = $db->query("SELECT * FROM arac_tip WHERE tip_durum = 1 ORDER BY arac ASC");
		foreach($list as $row){
		$arac_yil = $db->query("SELECT * FROM arac_yil WHERE yil_id = '{$row["yil"]}'")->fetch(PDO::FETCH_ASSOC);
		$arac_model = $db->query("SELECT * FROM arac_model WHERE model_id = '{$arac_yil["model_id"]}'")->fetch(PDO::FETCH_ASSOC);
		$arac_marka = $db->query("SELECT * FROM arac_marka WHERE marka_id = '{$arac_model["marka_id"]}'")->fetch(PDO::FETCH_ASSOC);
		$strURL = $ayarlar["strURL"].'/chip-tunings/'.$arac_marka["link"].'/'.$arac_model["link"].'/'.$arac_yil["link"].'/'.$row["link"].'/'.$row["arac_id"]; 
?>
			<url>
				<loc><?php echo $strURL ?></loc>
				<lastmod><?php echo date('c', strtotime(date("Y-m-d H:i:s"))); ?></lastmod>
				<changefreq>always</changefreq>
				<priority>1.00</priority>
			</url>
<?php 
			}
?> 
 
 

		</urlset>