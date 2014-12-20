<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("127.0.0.1", "root", "", "angular_test");

$result = $conn->query("SELECT * FROM angular_test.produtos");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"nome":"'  . $rs["nome"] . '",';
    $outp .= '"tipo":"'   . $rs["tipo"]        . '",';
    $outp .= '"resumo":"'   . $rs["resumo"]        . '",';
    $outp .= '"foto":"'. $rs["foto"]     . '"}'; 
}
$outp .="]";

$conn->close();

echo($outp);
