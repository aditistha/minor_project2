<?php 
include 'connection.php';
session_start();
// Change Info From Here
$epay_url = "https://uat.esewa.com.np/epay/main";
// $pid = 1342338342;
$successurl = "http://localhost/minor2/esewa-payment-success.php?q=su";
$failedurl = "http://localhost/minor2/esewa-payment-failed.php?q=fu";
$merchant_code = "EPAYTEST"; 
$fraudcheck_url = "https://uat.esewa.com.np/epay/transrec";


?>