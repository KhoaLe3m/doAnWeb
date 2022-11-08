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
        public function SortPrice($chosen)//edit here
        {   
            if(isset($_GET['Options'])||isset($_GET['selectname']))
            {
                if(isset($_GET['Options'])&&isset($_GET['selectname'])&&$_GET['selectname']!=" ")//input ca 2 ok
                {
                    if($_GET['Options']=="ASC"){
                        $type= $_GET['selectname'];
                        $query = "SELECT * FROM `tbl_product` ,`tbl_product_category` WHERE `tbl_product_category`.`category_id`=`tbl_product`.`category_id` AND `tbl_product`.`product_producer`='$chosen' AND `tbl_product_category`.`category_name`  = '$type'  ORDER BY `tbl_product`.`product_price` ASC";
                        $result = $this->db->select($query);
                        return $result;
                    }
                    else{
                        $type= $_GET['selectname'];
                        $query = "SELECT * FROM `tbl_product` ,`tbl_product_category` WHERE `tbl_product_category`.`category_id`=`tbl_product`.`category_id` AND `tbl_product`.`product_producer`='$chosen' AND `tbl_product_category`.`category_name`  = '$type'  ORDER BY `tbl_product`.`product_price` DESC";
                        $result = $this->db->select($query);
                        return $result;
                    }
                }
                else//only 1
                {
                    if(isset($_GET['Options']))//chi options
                    {
                        if($_GET['Options']=="ASC"){
                            $query = "SELECT * FROM `tbl_product` WHERE `tbl_product`.`product_producer`='$chosen' ORDER BY `tbl_product`.`product_price` ASC";
                            $result = $this->db->select($query);
                            return $result;
                        }else{
                            $query = "SELECT * FROM `tbl_product` WHERE `tbl_product`.`product_producer`='$chosen' ORDER BY `tbl_product`.`product_price` DESC";
                            $result = $this->db->select($query);
                            return $result;
                        }
                    }
                    if(isset($_GET['selectname']))//chi select ok
                    {
                        $type= $_GET['selectname'];
                        $query = "SELECT * FROM `tbl_product` ,`tbl_product_category` WHERE `tbl_product_category`.`category_id`=`tbl_product`.`category_id` AND `tbl_product`.`product_producer`='$chosen' AND `tbl_product_category`.`category_name`  = '$type'";
                        $result = $this->db->select($query);
                        return $result;
                    }
                }
            }
            else //th chua submit data len  url ok
            {
                $producer = "$chosen";
                $query = "SELECT * FROM tbl_product WHERE product_producer='$producer'";
                $result = $this->db->select($query);
                return $result;
            } 
        }           
        public function Search($text){
            if (isset($_GET['keyword'])){//all keywword
    
            $query = "SELECT * FROM tbl_product WHERE product_name LIKE '%".$text."%'";
            $result = $this->db->select($query);
            if($result!=false)
            {
            return $result;}else return false;}
            else//all product
            {
            $query = "SELECT * FROM tbl_product WHERE product_name LIKE '%".$text."%'";
            $result = $this->db->select($query);
            return $result;
            }
        }
    }
    
?>