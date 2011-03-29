<?php
// a dynamic icon
header('Content-type: image/png');
$im = imagecreatetruecolor(72,72);		
for($i = 0; $i < 8; $i++){	
	$ci = imagecolorallocate($im, rand(0,255), rand(0,255), rand(0,255));
	imagefilledrectangle($im, $i * 9, 0, 71, 71, $ci);
}
imagepng($im, 'cache/icon.png');
readfile('cache/icon.png');
exit();
?>