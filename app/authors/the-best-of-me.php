<?php
$file = "the_best_of_me.pdf";
$filename="the_best_of_me.pdf";
header ('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);
?>