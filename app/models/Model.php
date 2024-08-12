<?php
// Connect to SQLite database
$db_dir = 'sqlite:../../public/db/database.db';

$db =  new PDO($db_dir, "user", "password", array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
));

if(isset($_GET['product'])) {
    $product = $_GET['product'];

    $result = $db->query("SELECT * FROM Brand WHERE NAME=".$product);
    $rows = $result->fetchAll();

    echo json_encode($rows);
} else {
    echo "Product parameter not set.";
}
?>