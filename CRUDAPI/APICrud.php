<?php
ob_start();
header("Content-Type: application/json; charset=UTF-8");

include_once 'config/config.php';
include_once 'config/function.php';
include_once 'config/loadData.php';

$index = 0;
$respon = array(); 

if (empty($_GET['act'])) {
    $respon[$index]['result'] = 'null';
    $respon[$index]['message'] = 'No action';
} else {
    if (!$connection) {
        $respon[$index]['result'] = 'null';
        $respon[$index]['message'] = 'Server connection failed';	
    } else {
        $act = $_GET['act'];
        switch ($act) {
            case 'tes':
                $respon[$index]['result'] = 'OK';
                $respon[$index]['message'] = 'API is alive and working';
                break;
            default:
                $respon[$index]['result'] = 'null';
                $respon[$index]['message'] = 'Invalid action';
        }
    }
}

ob_clean(); // penting
echo json_encode($respon, JSON_PRETTY_PRINT);
ob_end_flush();
?>
