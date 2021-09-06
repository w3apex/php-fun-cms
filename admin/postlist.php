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
                    <li><a href="javascript:avoid(0)">Post</a></li>
                    <li><a href="javascript:avoid(0)">All Posts</a></li>
                </ul>
            </div>
        </div>

        <div class="row animated fadeInUp">

            <div class="col-md-8 col-md-offset-2">
			    <div class="panel">
			        <div class="panel-content">
			        	<div class="row">
			        		<div class="col-md-6">
			        			<h4>All Posts</h4>
			        		</div>
			        		<div class="col-md-6 text-right">
			        			<a href="post.php" class="btn btn-primary">Add New Post</a>
			        		</div>
			        	</div>
			            <div class="table-responsive">
	                        <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
	                            <thead>
		                            <tr>
		                                <th>SL.</th>
		                                <th>Title</th>
		                                <th>Action</th>
		                            </tr>
	                            </thead>
	                            <tbody>
	                            	<tr>
	                            		<td>1</td>
	                            		<td>National</td>
	                            		<td>
	                            			<a href="#">Edit</a> ||
	                            			<a onclick="return confirm('Are you sure to delete?');" href="#">Delete</a>
	                            		</td>
	                            	</tr>	
	                            </tbody>
	                        </table>
	                    </div>
			        </div>
			    </div>
			</div> 
<?php include 'inc/footer.php';?>  

         