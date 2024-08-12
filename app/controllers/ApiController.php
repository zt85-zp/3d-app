<?php

use MyApp\Controller;
use MyApp\Database;

class ContactController extends Controller
{
    /**
     * Display the index page.
     */
    public function getmodeldata($product)
    {
        $db_dir = 'sqlite:'.BASEURL.'/public/db/database.db';

        $db = new PDO($db_dir, "user", "password", array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ));

        if(isset($_GET['product'])) {
            $product = $_GET['product'];

            $results = $db->query("SELECT * FROM Brand WHERE Name=".$product);

            $data = $results->fetchAll();

            echo json_encode($data);
        } else {
            echo "Product parameter not set.";
        }
    }
}
