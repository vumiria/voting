<?php include ('head.php');?>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading"><br>
                        <center><h3 class="panel-title"><strong>Administrator Log In</strong></h3></center>
                        <br>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>

                                <div class="form-group">
									<label for = "username" >Username</label>
										<input class="form-control" placeholder="Please Enter your Username" name="username" type="text" autofocus>
                  </div>

                                <div class="form-group">
									<label for = "username" >Password</label>
										<input class="form-control" placeholder="Password" name="password" type="password" value="">
                  </div><br>


                                <button class="btn btn-lg btn-primary btn-block " name = "login">Login</a>


                            </fieldset><br>

									<?php include ('login_query.php');?>
                </form><br>
                    </div>
                    <a href="../index.php"><strong>Students<strong></a>
                    <div class="panel-heading">
                        <center><h3 class="panel-title"><strong> CP-ELECTION | ULK</strong></h3></center>
                    </div>
                </div>
            </div>


			 </div>
        </div>
    </div>

  <?php include ('script.php');?>

</body>

</html>
