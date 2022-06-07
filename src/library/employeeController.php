
<?php
ob_start();
require_once('sessionHelper.php');
ob_flush();
require_once('employeeManager.php');

if (isset($_GET['action']) && $_GET['action'] == 'getAll') {
    $data = getAllData();
    echo (json_encode($data));
} else if (isset($_GET['action']) && $_GET['action'] == 'addEmployee') {
    $_GET['data'] = json_decode(file_get_contents('php://input'), true);
    $newEmployee = ($_GET['data']);
    addEmployee($newEmployee);
    $data = getAllData();
    echo (json_encode($data));
}
