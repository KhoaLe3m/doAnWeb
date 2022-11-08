<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include 'category.php';?>
<?php
$cat = new category();
if(isset($_GET['del_id'])){
	$id=$_GET['del_id'];
	$delCat = $cat->del_category($id);  

}
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>
                <div cl ass="block">   
					<?php
					if(isset($delCat)){
						echo $delCat;
					}
					?>     
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$show_cate = $cat->show_category();
						if($show_cate){
							$i=0;
							while($result = $show_cate->fetch_assoc()){
							$i++;
						?>
						<tr class="odd gradeX">
							<td><?php echo $i?></td>
							<td><?php echo $result['category_name']?></td>
							<td><a href="catedit.php?category_id=<?php echo $result['category_id']?>">Edit</a> || <a onclick = "return confirm('Xoa?')" href="?del_id=<?php echo $result['category_id']?>">Delete</a></td>
						</tr>
						<?php
						}
					}
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

