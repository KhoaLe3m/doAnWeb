<?php
    require_once('../controllers/user_controller.php');
    UserController ::checkLogin();
    
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
        public function GetAdidas()
        {
            $producer = "Adidas";
            $query = "SELECT * FROM tbl_product WHERE product_producer='$producer'";
            $result = $this->db->select($query);
            return $result;
        }
        public function GetNike(){
            $producer = "Nike";
            $query = "SELECT * FROM tbl_product WHERE product_producer='$producer'";
            $result = $this->db->select($query);
            return $result;
    
        }
        public function GetJordan(){
            $producer = "Jordan";
            $query = "SELECT * FROM tbl_product WHERE product_producer='$producer'";
            $result = $this->db->select($query);
            return $result;
    
        }
        public function GetYezzy(){
            $producer = "Yezzy";
            $query = "SELECT * FROM tbl_product WHERE product_producer='$producer'";
            $result = $this->db->select($query);
            return $result;
    
        }
        public function SortPrice($chosen)
        {   
            if(isset($_GET['Options']))
            {
            if($_GET['Options']=="ASC"){
            $query = "SELECT * FROM `tbl_product` WHERE product_producer='$chosen' ORDER BY `tbl_product`.`product_price` ASC";
            $result = $this->db->select($query);
            return $result;}
            else{
            $query = "SELECT * FROM `tbl_product` WHERE product_producer='$chosen' ORDER BY `tbl_product`.`product_price` DESC";
            $result = $this->db->select($query);
            return $result;
            }
            }
            else {
                $query = "SELECT * FROM tbl_product WHERE product_producer='$chosen'";
                $result = $this->db->select($query);
                return $result;    
            }
        }
        public function Search($text){
            if (isset($_GET['keyword'])){//all keywword
    
            $query = "SELECT * FROM tbl_product WHERE product_name LIKE '%".$text."%'";
            $result = $this->db->select($query);
            return $result;}
            else//all product
            {
            $query = "SELECT * FROM tbl_product WHERE product_name LIKE '%".$text."%'";
            $result = $this->db->select($query);
            return $result;
            }
        }
        public function GetCount($text){
            if (isset($_GET['keyword'])){//all keywword
    
                $query = "SELECT Count(*) FROM tbl_product WHERE product_name LIKE '%".$text."%'";
                $result = $this->db->select($query);
                return $result;}
                else//all product
                {
                return $result;
                }
    
        }
    }
    
?>