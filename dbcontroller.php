<?php
namespace Database;
class DBController {
public $database_name;
function __construct() {
$this->database_name = "db_namespace";
}
}
function print_database_name($objDBController) {
echo $objDBController->database_name;
}
?>