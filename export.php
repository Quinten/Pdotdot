<?php
require_once('config.php');

// input from post
$sUID = ($_POST['sUID'] != "") ? $_POST['sUID'] : uniqid("p");
$sCode = $_POST['sCode'];
$fWidth = $_POST['fWidth'];
$fHeight = $_POST['fHeight'];

// write file
$filename = $sUID . ".pjs";
$handle = fopen("cache/" . $filename, "w+");
fwrite($handle, $sCode);
fclose($handle);
chmod("cache/" . $filename, 0777);

// create links
$rawLink = $config['url'] . "sketch/" . $sUID;
$encRawLink = urlencode($rawLink);
if(!empty($config['bitlylogin']) && !empty($config['bitlykey'])){
  $shortLink = file_get_contents("http://api.bit.ly/v3/shorten?login=" . $config['bitlylogin'] . "&apiKey=" . $config['bitlykey'] . "&uri=" . $encRawLink . "&format=txt");
}else{
  $shortLink = "";
}

// return data
echo json_encode(array("sUID"=>$sUID, "rawLink"=>$rawLink, "shortLink"=>$shortLink, "embedCode"=>"<iframe src=\"" . $rawLink . "\" frameborder=\"0\" scrolling=\"no\" width=\"" . $fWidth . "\" height=\"" . $fHeight . "\"></iframe>"));
exit();
?>