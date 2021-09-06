<?php include 'inc/header.php';?>
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
                    <li><a href="javascript:avoid(0)">Add Category</a></li>
                </ul>
            </div>
        </div>

        <div class="row animated fadeInUp">

            <div class="col-md-8 col-md-offset-2">
			    <div class="panel">
			        <div class="panel-content">
			        	<div class="row">
			        		<div class="col-md-6">
			        			<h4>Add New Category</h4>
			        		</div>
			        		<div class="col-md-6 text-right">
			        			<a href="categoeylist.php" class="btn btn-primary">All Categories</a>
			        		</div>
			        	</div>
			            <div class="row">
			                <div class="col-md-12">
			                    <form class="form-horizontal">
			                        <div class="form-group">
			                            <label for="cat_name" class="col-sm-2 control-label">Category Name</label>
			                            <div class="col-sm-10">
			                                <input type="text" class="form-control" name="cat_name" id="cat_name" placeholder="Name">
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <div class="col-sm-offset-2 col-sm-10">
			                                <button type="submit" class="btn btn-primary">Save</button>
			                            </div>
			                        </div>
			                    </form>
			                </div>
			            </div>
			        </div>
			    </div>
			</div> 
<?php include 'inc/footer.php';?>  

         