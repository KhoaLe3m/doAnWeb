<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php
    include "../models/user_model.php";
    

?>

<?php
    if(isset($_GET['userid']) ){
        $id = $_GET['userid'];
    }
    $class = new User_Model();
   

    if($_SERVER['REQUEST_METHOD'] === 'POST' ) {
        $user_email = $_POST['user_email'];
        
        $user_phone = $_POST['user_phone'];
        $user_name = $_POST['user_name'];
        $user_address = $_POST['user_address'];
        $updateUser = $class->update_user($id,$user_email,$user_phone,$user_name, $user_address);
    }
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Update User</h2>
               <div class="block copyblock"> 
               <?php
                            if(isset($updateUser)){
                             echo $updateUser;
                             }
                ?>
                <?php
                    $get_user_id = $class->getuserid($id);
                    if($get_user_id){
                        while($result = $get_user_id-> fetch_assoc()){

                       
                ?>

                 <form action="" method="POST">
                    <table class="form">					
                        <tr>
                            <td>
                                <label>Full name :</label>
                            </td>
                            <td>
                            <input type="text" value="<?php echo $result['user_name'] ?>" id="user-name" class="medium" placeholder="Full name" required="" autofocus="" name="user_name">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Email :</label>
                            </td>
                            <td>
                                <input type="email" value="<?php echo $result['user_email'] ?>" id="user-email" class="medium" placeholder="Email" required autofocus="" name="user_email">
                            </td>
                        </tr>
                                
                        <tr>
                            <td>
                                <label>Phone number :</label>
                            </td>
                            <td>
                                
                                <input type="text" value="<?php echo $result['user_phone'] ?>" id="user-phone" class="medium" placeholder="Phone number" required autofocus="" name="user_phone">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Address :</label>
                            </td>
                            <td>
                                
                                <input type="text" value="<?php echo $result['user_address'] ?>" id="user-address" class="medium" placeholder="Address" required autofocus="" name="user_address">
                            </td>
                        </tr>
                            
                        
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
                    <?php
                     }
                    }
                    ?>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>