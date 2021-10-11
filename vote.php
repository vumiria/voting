<?php include ('head.php');?>
<?php include("sess.php")?>
<body>
    <div id="wrapper">
        <?php include ('side_bar.php');?>
    </div>
	<form method = "POST" action = "vote_result.php">
	<div class="col-lg-6">

                    <div class="panel panel-primary">
                        <div class="panel-heading " style="background-color:#0b0097;color:white;">
                          <center><strong> REPRESENTATIVE(CP)</strong></center>
                        </div>
                        <div class="panel-body" style = "background-color:;">
                          <table class="table table-striped table-bordered table-hover" >
                            <thead>
                              <tr>
                            <th >Photo</th>
                            <th >Names</th>
                            <th >Vote Here</th>
                          </tr>
                          </thead>
                          <tr>
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Class representative '") or die(mysqli_errno());
							while($fetch = $query->fetch_array())
						{
						?>
                           <div id = "position">

							      <td><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></td>
					         <td><strong><?php echo $fetch['firstname']." ".$fetch['lastname']?></strong></button></td>
                    &nbsp;<td><label for = "votes" >Vote Here</label><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "pres_id" class = "president"></td>
                  </tr>
              </div>

						<?php
							}
						?>

						</div>
        </table>
      </div>
    </div>
  </div>
<br><br><br>
      <div class="col-lg-6">

                        <div class="panel panel-primary">

                            <div class="panel-body" style = "background-color:;">
                              <table class="table table-striped  table-hover">


                               <div id = "position">
      <tr>
                        <td></td>
                       <td>  <center><button class = "btn btn-success ballot" type = "submit" name = "submit"><strong> Submits your vote</strong></button>
                       </center></td>

                       <td>  </td>
                      </tr>
                  </div>
                </div>
            </table>
          </div>
        </div>
        <br>




</body>
<?php include ('script.php')?>

  <script type = "text/javascript">
		$(document).ready(function(){
			$(".president").on("change", function(){
				if($(".president:checked").length == 1)
					{
						$(".president").attr("disabled", "disabled");
						$(".president:checked").removeAttr("disabled");
					}
				else
					{
						$(".president").removeAttr("disabled");
					}
			});
		});
	</script>
</html>
