<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;connectionPooling=0","sa","!octo@932");

$stmt = $conn->prepare("select * from tb_usuarios order by login");

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {
    foreach ($row as $key => $value) {

        echo $key.": ".$value."<br/>";
    }
    echo "--------------------------------------<br/>";
}
