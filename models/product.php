<?php
    $filepath = realpath(dirname(__FILE__));
    require_once('../modules/session.php');
    
    Session ::checkLogin();
    require_once("../modules/database.php");
    
    require_once('../modules/format.php');
   
?>
<?php
     class product
     {
        private $db;
        private $fm;
        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function getproduct_feature()
        {
            
            $query = "SELECT * FROM tbl_product ";
            $result = $this->db->select($query);
           
            return $result;
        }
        public function getproduct_adidas(){
            $query2 = "SELECT * FROM tbl_product ";
            $result = $this->db->select($query2);
            return $result;
        }
    
    }
    
?>