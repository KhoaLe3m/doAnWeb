<?php
    include '../modules/database.php';
    include '../modules/format.php';
?>
<?php
     class category
     {
        private $db;
        private $fm;
        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }
        // public function show_category()
        // {
        //     $query = "SELECT * FROM  tbl_product_category order by category_id DESC;
        //     $result = $this->db->select($query);
        //     return $result;
        // }
        public function insert_category($category_name)
        {
            $category_name = $this->fm->validation($category_name);
            $category_name = mysqli_real_escape_string($this->db->link,$category_name);      
            if(empty($category_name))    
            {
                $alert = "Category must be not emty";
                return $alert;
            } 
            else
            {
            $query = "INSERT INTO tbl_product_category(category_name) VALUES('$category_name')";
            $result = $this->db->insert($query);
            if($result){
                $alert = "<span class = 'success'>Them Thanh Cong</span>";
                return $alert;
            }else{
                $alert = "<span class = 'success'> Them Khong Thanh Cong</span>";
                return $alert;
            }
            }
        }
         public function show_category()
        {
            $query = "SELECT * FROM  tbl_product_category ORDER BY category_id DESC";
            $result = $this->db->select($query);
            return $result;
        }
        public function getcatebyId($id){
            $query = "SELECT * FROM  tbl_product_category Where category_id='$id'";
            $result = $this->db->select($query);
            return $result;
        }
        public function update_category($category_name,$id){
            $category_name = $this->fm->validation($category_name);
            $category_name = mysqli_real_escape_string($this->db->link,$category_name); 
            $id = mysqli_real_escape_string($this->db->link,$id); 
            if(empty($category_name))    
            {
                $alert = "Category must be not emty";
                return $alert;
            } 
            else
            {
            $query = "UPDATE tbl_product_category set category_name= '$category_name' where category_id='$id'";
            $result = $this->db->insert($query);
            if($result){
                $alert = "<span class = 'success'>UPDATE Thanh Cong</span>";
                return $alert;
            }else{
                $alert = "<span class = 'success'> UPDATE Khong Thanh Cong</span>";
                return $alert;
            }
            }   
        }
        public function del_category($id){
            $query = "DELETE  FROM  tbl_product_category Where category_id='$id'";
            $result = $this->db->delete($query);
            if($result){
                $alert = "<span class = 'success'>DELETE Thanh Cong</span>";
                return $alert;
            }else{
                $alert = "<span class = 'success'> DELETE Khong Thanh Cong</span>";
                return $alert;
            }
        }
    }
    ?>