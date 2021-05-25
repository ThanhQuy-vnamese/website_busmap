<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'ZaloPayment.php';
    $zaloPayment = new ZaloPayment();
    $bankCode = $_REQUEST['iCheck'] ?? '';
    $zaloPayment->callApi($bankCode);
} else {
    throw new Exception('Invalid method');
}
