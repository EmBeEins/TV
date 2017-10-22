<?php
$wert  ="#EXTM3U\r\n"; 
// #################################################### 
$f = fopen("https://raw.githubusercontent.com/EmBeEins/TV/master/DE.txt", "r");
while (!feof($f)) { 
$arrM = explode(",",fgets($f)); 
$wert .="#EXTINF:-1 tvg-id=\"".$arrM[0]."\" tvg-logo=\"https://github.com/EmBeEins/TV/blob/master/logo.png\",".$arrM[0]."\r\n";
$wert .=$arrM[1]."\r\n";
}
fclose($f);
 // #################################################### 
$handle = fopen ("EmBeEins.m3u", w);
fwrite ($handle, $wert);
fclose ($handle);

echo "<h4>Playliste wurde generiert!";
?>
