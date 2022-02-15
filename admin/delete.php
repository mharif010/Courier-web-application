<?php
include('header.php');
include_once($_SERVER["DOCUMENT_ROOT"] . '/courier/admin/controller/serviceController.php');

$controller = new serviceController;

$id = $_GET['id'];

$controller->deleteService($id);

echo '<script>window.location.replace("/courier/admin/services.php");</script>';
exit();