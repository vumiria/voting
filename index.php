<?php include ('head.php');?>
<body><div class="container">
   <strong><marquee> <h1 style="text-align : center; font-size: 24px; font-family: serif;">WELCOME TO VOTING ONLINE</h1> </marquee></strong>  
        
        <div class="row">

            <div class="col-md-5 col-md-offset-4">

                <div class="login-panel col-md  panel panel-default">


                    <div class="panel-heading"><br>
                        <center><h3 class="panel-title"><strong>PEOPLE  LOG IN </strong></h3></center><br>
                    </div>
                    <div class="panel-body">
									
                        <form role="form" action="login_query.php" method = "post"  enctype = "multipart/form-data">
                            <fieldset>

                                <div class="form-group">
									                         <label for = "username" >Name & Number</label>
										                                 <input class="form-control" placeholder="Enter Name & Number" name="idno" type="text" required = "required" autofocus>
                                </div><br>

                                      <center>  <button class="btn btn-lg btn-primary   btn-block" name = "User-login" >Login</a></center>

                            </fieldset>

									<?php include ('login_query.php');?>
                        </form>
                    </div><br>
                    <a href="admin/index.php"><strong>Administrator<strong></a>
                    <div class="panel-heading">
                        <center><h3 class="panel-title"><strong> PEOPLE /  RWANDA</strong></h3></center>
                    </div>
                </div>
            </div>
        </div>


  <?php include ('script.php');?>

</body>

</html>
