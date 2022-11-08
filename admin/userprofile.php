<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php
    include "../models/user_model.php";
    

?>

<?php
    $class = new User_Model();
    if(isset($_GET['deleteUserid']) ){
        $id = $_GET['deleteUserid'];
        $deleteUser = $class->delete_user($id);
    }
    
    
?>
        
        <div class="grid_10">
            <div class="box round first grid">
                <h2>User List</h2>
                <div class="block"> 
                    <?php
                    if(isset($deleteUser)){
                        echo $deleteUser;
                    } 
                    ?>
                          
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>User email</th>
                            <th>User pasword</th>
                            <th>User phone</th>
                            <th>User name</th>
                            <th>User address</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                        <?php
                        $show = $class->show_user();
                        if($show){
                            $i = 0;
                            while($result = $show->fetch_assoc()) {
                                $i++;
                            
                        
                        ?>
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['user_email']; ?></td>
                            <td><?php echo $result['user_password']; ?></td>
                            <td><?php echo $result['user_phone']; ?></td>
                            <td><?php echo $result['user_name']; ?></td>
                            <td><?php echo $result['user_address']; ?></td>
							<td><a href="useredit.php?userid=<?php echo $result['user_id'] ?>">Edit</a> || <a onclick="return confirm('Are you want to delete?')" href="?deleteUserid=<?php echo $result['user_id'] ?>">Delete</a></td>
						</tr>
                        <?php
                        }}
                        ?>
					</tbody>
				</table>
               </div>
            </div>
        </div>
<script type="text/javascript">
	$(document).ready(function () {
	    setupLeftMenu();

	    $('.datatable').dataTable();
	    setSidebarHeight();
	});
</script>
<?php include 'inc/footer.php';?>

