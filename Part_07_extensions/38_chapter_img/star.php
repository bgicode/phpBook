<?php
// Start Star_______________
$im = imageCreateTrueColor(920, 855);
imagesavealpha($im, true);
imagefill($im, 0, 0, imagecolorallocatealpha($im, 0, 0, 0, 127));
$color = imageColorAllocate($im, 225, 240, 0);

$arStarCoord = [
    27, 329,
    316, 271,
    460, 10,
    603, 271,
    892, 329,
    692, 547,
    727, 833,
    460, 718,
    192, 844,
    227, 547
];

imageFilledPolygon($im, $p, count($arStarCoord) / 2, $color);
// End Star_______________

// Start Elips1____________
$Elips1 = imageCreateTrueColor(920, 855);
imagesavealpha($im, true);
imagefill($im, 0, 0, imagecolorallocatealpha($im, 0, 0, 0, 127));
$color = imageColorAllocate($im, 225, 240, 0);



header("Content-type: image/png");
imagePng($im);

?>