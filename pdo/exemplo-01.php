<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$stmt = $conn->prepare("select * from tb_usuarios order by login");

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {
    foreach ($row as $key => $value) {

        echo $key.": ".$value."<br/>";
    }
    echo "--------------------------------------<br/>";
}
