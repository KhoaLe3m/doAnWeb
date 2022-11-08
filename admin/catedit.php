<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include 'category.php';?>
<?php 
$cat = new category();
if(!isset($_GET['category_id'])||$_GET['category_id']==NULL){
    echo "<script>window.location='catlist.php'</script>";
}
else{
    $id=$_GET['category_id'];
}
if  ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category_name = $_POST['catName'];
    $updateCat = $cat->update_category($category_name,$id);  
}
?>
<?php ?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Sửa danh mục</h2>
                <?php
                if(isset($insertCat)){
                    echo $updateCat;
                }
                ?>
            <?php
                $get_cate_name = $cat->getcatebyId($id);
                if($get_cate_name)
                {
                    while($result= $get_cate_name->fetch_assoc())
                    {
            ?>
                 <form action = "" method = "POST">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value = " <?php echo $result['category_name']?>" name = "catName" placeholder="Sửa danh mục sản phẩm" class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="UPDATE" />
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
<?php include 'inc/footer.php';?>