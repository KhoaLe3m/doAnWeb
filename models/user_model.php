<?php 
<?php
    
include '../modules/session.php';
Session ::checkLogin();

include '../modules/database.php';
include '../modules/format.php';

?>
<?php
 class UserModer
 {
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
}
?>