<?php include 'inc/header.php';?>
<?php 
	include '../config/config.php';

	$sql = "SELECT * FROM category ORDER BY id DESC";
	$result = mysqli_query($conn, $sql);
?>
<!-- page BODY -->
<div class="page-body">
    <?php include 'inc/sidebar.php';?>
    <!-- CONTENT -->
    <div class="content">
        <!-- content HEADER -->
        <div class="content-header">
            <!-- leftside content header -->
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
                    <li><a href="javascript:avoid(0)">Category</a></li>
                    <li><a href="javascript:avoid(0)">All Categories</a></li>
                </ul>
            </div>
        </div>

        <div class="row animated fadeInUp">

            <div class="col-md-8 col-md-offset-2">
			    <div class="panel">
			        <div class="panel-content">
			        	<div class="row">
			        		<div class="col-md-6">
			        			<h4>All Categories</h4>
			        		</div>
			        		<div class="col-md-6 text-right">
			        			<a href="category.php" class="btn btn-primary">Add New category</a>
			        		</div>
			        	</div>
			            <div class="table-responsive">
	                        <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
	                            <thead>
		                            <tr>
		                                <th>SL.</th>
		                                <th>Category Name</th>
		                                <th>Action</th>
		                            </tr>
	                            </thead>
	                            <tbody>
	                            	<?php 
	                            		while ($rows = mysqli_fetch_assoc($result)) {
	                            	?>
	                            	<tr>
	                            		<td><?php echo $rows['id'];?></td>
	                            		<td><?php echo $rows['cat_name'];?></td>
	                            		<td>
	                            			<a href="editCategory.php?editId=<?php echo $rows['id'];?>">Edit</a> ||
	                            			<a onclick="return confirm('Are you sure to delete?');" href="#">Delete</a>
	                            		</td>
	                            	</tr>
	                            	<?php } ?>	
	                            </tbody>
	                        </table>
	                    </div>
			        </div>
			    </div>
			</div> 
<?php include 'inc/footer.php';?>  

         