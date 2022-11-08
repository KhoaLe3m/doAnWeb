<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php
    include "../models/user_model.php";
    

?>

<?php
    $class = new User_Model();
    if($_SERVER['REQUEST_METHOD'] === 'POST' ) {
        $user_email = $_POST['user_email'];
        $user_password = md5($_POST['user_password']);
        $user_phone = $_POST['user_phone'];
        $user_name = $_POST['user_name'];
        $user_address = $_POST['user_address'];
        $insertUser = $class->insert_user_($user_email,$user_password,$user_phone,$user_name, $user_address);
    }
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New User</h2>
               <div class="block copyblock"> 
                 <form action="useradd.php" method="POST">
                    <table class="form">					
                        <tr>
                            <td>
                            <?php
                            if(isset($insertUser)){
                             echo $insertUser;
                             }
                            ?>
                                <br>
                                <input type="text" id="user-name" class="medium" placeholder="Full name" required="" autofocus="" name="user_name">
                                <br>
                                <input type="email" id="user-email" class="medium" placeholder="Email" required autofocus="" name="user_email">
                                <br>
                                <input type="password" id="user-pass" class="medium" placeholder="Password" required autofocus="" name="user_password">
                                <br>
                                <input type="text" id="user-phone" class="medium" placeholder="Phone number" required autofocus="" name="user_phone">
                                <br>
                                <input type="text" id="user-address" class="medium" placeholder="Address" required autofocus="" name="user_address">
                            </td>
                            
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>