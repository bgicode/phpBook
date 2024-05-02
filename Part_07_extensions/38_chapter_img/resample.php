<?php
 ## Увеличение картинки со сглаживанием
$from = imageCreateFromJpeg("button.jpg");
$to = imageCreateTrueColor(2000, 2000);
imageCopyResampled(
    $to, $from, 0, 0, 0, 0, imageSX($to), imageSY($to),
    imageSX($from), imageSY($from)
);
header("Content-type: image/jpeg");
imageJpeg($to);
?>