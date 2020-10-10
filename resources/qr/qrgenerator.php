<?php
include "qrlib.php";

function generateQR($prefix, $code)
{
    if ($prefix == "topupcredit;")
    {
        $img_dir = "payments_qr";
    }
    else
    {
        $img_dir = "patients_qr";
    }
    
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.$img_dir.DIRECTORY_SEPARATOR;
    $PNG_WEB_DIR = $img_dir . "/";

    if (!file_exists($PNG_TEMP_DIR))
    {
        mkdir($PNG_TEMP_DIR);
    }
    
    $generate = $prefix . $code;

    $errorCorrectionLevel = "H";
    $matrixPointSize = min(max(10, 1), 10);
    $filename = $PNG_TEMP_DIR.$code.'.png';
    QRcode::png($generate, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
}
?>