<?php
require_once __DIR__."/database.php";
require_once __DIR__."/main.php";

use Main as Response;

class Crud extends Database{
    private $DB;

    function __construct(){
        $this->DB = Database::__construct();
    }

    private function filter($data){
        return htmlspecialchars(trim(htmlspecialchars_decode($data)), ENT_QUOTES);
    }

    private function create(string $personName, int $personCPF, )

}