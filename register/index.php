
<?php include ('head.php');?>
<body>
<?php
	function passFunc($len, $set = "")
		{
			$gen = "";
			for($i = 0; $i < $len; $i++)
				{
					$set = str_shuffle($set);
					$gen.= $set[0];
				}
			return $gen;
		}
?>
    <div id="wrapper">

       <?php include ('side_bar.php');?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><strong>Add New person</strong></h3>
                </div>
				<div class = "well col-lg-5">
					<div class="panel panel-primary">
                        <div class="panel-heading" style="background-color:#0b0097;color:white;">
                            <strong>Please Enter the Detail Needed Below</strong>
                        </div>
                        <div class="panel-body">
                         <form method = "post" enctype = "multipart/form-data">
											<div class="form-group">
												<label>Name & Number</label>
												<input class ="form-control" type = "text" name = "id_number" placeholder = "Roll number" required="true">

											</div>

											<div class="form-group">
												<label>Firstname</label>
													<input class="form-control" type ="text" name = "firstname" placeholder="Firstname" required="true">
											</div>
											<div class="form-group">
												<label>Lastname</label>
													<input class="form-control"  type = "text" name = "lastname" placeholder="Please enter lastname" required="true">
											</div>

											<div class="form-group">
												<label>Year_Level</label>
													<select class = "form-control" name = "year_level">
														<option>select</option>
														<option>Year 1</option>
														<option>Year 2</option>
														<option>Year 3</option>

													</select>
											</div>

											 	 <button name = "save" type="submit" class="btn btn-primary">Save Data</button>

						  				 </div>


										</form>

							<?php
								require 'dbcon.php';

								if (isset($_POST['save'])){
									$firstname=$_POST['firstname'];
									$lastname=$_POST['lastname'];
									$id_number=$_POST['id_number'];
									$year_level=$_POST['year_level'];



									$query = $conn->query("SELECT * FROM voters WHERE id_number='$id_number'") or die (mysql_error());
									$count = $query->fetch_array();

									if ($count  > 0){
									?>
										<script>
											alert("ID Number Already Exist");
										</script>
									<?php
										}
										else{
										$conn->query("INSERT INTO voters(id_number,  firstname,lastname,year_level,status) VALUES('$id_number','$firstname','$lastname','$year_level','Unvoted')");
									?>
									<script>
										alert('Voters Successfully Save');
									</script>
							<?php
									}
								}
							?>


						</div>
						</form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include ('script.php');?>
</body>

</html>
