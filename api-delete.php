<?php
$con = new mysqli("localhost","id20032196_root","_W>d45b=r06kjZ++","id20032196_test") or die("Connection failed");

header('Content-Type: application/json');
header('Access-Control-Allow-Method: DELETE');

$data = json_decode(file_get_contents("php://input"), true);
if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];

$sql = "delete from student where user_id = '$user_id'";
if ($result = $con->query($sql)) {
    echo json_encode(array('message' => 'data deleted successfully', 'status' => 'true'));
} else {
    echo json_encode(array('message' => 'failed to delete data', 'status' => 'false'));
}
}
