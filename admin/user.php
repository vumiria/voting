
<?php include ('session.php');?>
<?php include ('head.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header" ><strong>Administrators</strong></h3>

                </div>

				<button class="btn btn-primary" data-toggle="modal" data-target="#add_user">Add new Administrator</button>
				<?php include ('add_user_modal.php');?>
                <!-- /.col-lg-12 -->


				<hr/>

                    <div class="panel panel-default">
                        <div class="panel-heading" >
                            <h4 class="modal-title" id="myModalLabel">
												<div class="panel panel-primary">
													<div class="panel-heading" style="background-color:#0b0097;color:white;">
														Administrators List
													</div>
												</div>
											</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>

                                            <th>Username</th>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
										<?php
										require 'dbcon.php';
										$bool = false;
										$query = $conn->query("SELECT * FROM user ORDER BY user_id DESC");
										while($row = $query->fetch_array()){
										$user_id=$row['user_id'];
										?>

											                      <td><?php echo $row ['username'];?></td>
                                            <td><?php echo $row ['firstname'];?></td>
                                            <td><?php echo $row ['lastname'];?></td>
                                            <td style="text-align:center">

												 <a  title="Delete" id="<?php echo $user_id ?>" href="#delete_admin<?php echo $user_id; ?>" data-target="#delete_admin" data-toggle="modal"class="btn btn-danger btn-outline"><i class="fa fa-trash-o"></i> Delete</a>
											 <?php include ('delete_user_modal.php'); ?>
												  <a   title="Edit" id="<?php echo $row['user_id'] ?>" href="#edit_user<?php echo $row['user_id'] ?>"  data-toggle="modal"class="btn btn-primary btn-outline"><i class="fa fa-pencil"></i> Edit</a>

											</td>
											    <?php include ('edit_user_modal.php');?>
                                        </tr>

                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    <?php include ('script.php');?>

</body>

</html>
