
<?php

try{

$conn = new PDO("mysql:host=localhost;dbname=webshopdb", "root", "");
$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// $stmt = $conn->query(SELECT * FROM producten);

$stmt = $conn->prepare(SELECT * FROM producten);
$stmt->execute;([
    fid =>

])

while ($row $stmt->fetch()) {

    echo "<LI>" . $row['naam'] . " : " . $row['prijs'] . "/LI"
    }
}
catch (PDOExeption $e) {
    echo "connection failed" . e$->getMessage() ;

}

$conn = null;



?>