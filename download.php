<?php

$filename = "path/to/your/pdf";

header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="'.$filename.'"');
header('Content-Transfer-Encodeing: binary');
header('Accept-Ranges: bytes');

@readfile($filename);