<?php
$file = "See-Me-by-Nicholas-Sparks-PDF.pdf";
$filename="See-Me-by-Nicholas-Sparks-PDF.pdf";
header ('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);
?>