<?php
$url = 'https://www.tokocrypto.com/trade/BUSD_BIDR';
$url1 = 'https://www.tokocrypto.com/trade/DGB_USDT';
$url2 = 'https://www.tokocrypto.com/trade/USDT_BIDR';
$html = file_get_contents($url);
$html1 = file_get_contents($url1);
$html2 = file_get_contents($url2);
$dom = new DOMDocument();
$dom1 = new DOMDocument();
$dom2 = new DOMDocument();
@$dom->loadHTML($html);
@$dom1->loadHTML($html1);
@$dom2->loadHTML($html2);
$title = $dom->getElementsByTagName('title')->item(0)->textContent;
$title1 = $dom1->getElementsByTagName('title')->item(0)->textContent;
$title2 = $dom2->getElementsByTagName('title')->item(0)->textContent;
echo 'Judul halaman: ' . $title;
echo '<br>Judul halaman: ' . $title1;
echo '<br>Judul halaman: ' . $title2;
?>
