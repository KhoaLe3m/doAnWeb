<?php
   
   
   include '../../modules/database.php';
   include '../../modules/format.php';
   
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
        public function getproduct_new()
        {
            
            $query = "SELECT * FROM tbl_product order by product_id desc limit 4 ";
            $result = $this->db->select($query);
           
            return $result;
            
        }
        
    }
?>