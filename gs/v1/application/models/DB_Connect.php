<?php 
    class DB_Connect extends CI_Model
    {
        public $con;

        public function __construct()
        {
           $this->con = new PDO("mysql:host=localhost;dbname=corporat_gs", "corporat_gs_root", "@guiadesuporte"); 
        }

        public function Select($query)
        {
            $queryResult = $this->con->query($query);

            return $queryResult;
        }
    }
 
?>