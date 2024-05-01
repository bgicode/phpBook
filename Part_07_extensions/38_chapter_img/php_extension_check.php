<?php
// Create a 100x100 image
$image = imagecreatetruecolor(100, 100);

// Set the background color to red
$red = imagecolorallocate($image, 255, 0, 0);
imagefill($image, 0, 0, $red);

// Output the image in PNG format
header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);
?>