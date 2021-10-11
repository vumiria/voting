
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


              </div>	<hr/>

                    <div class="panel panel-default">
                         <div class="panel-heading" style="background-color:#0b0097;color:white;">
							               <h4 ><strong> Summary</strong></h4>
                    </div>

					<br/>
                       <form method="post" action="sort.php">

			<select name="position" id="position" class = "form-control pull-left" style = "width:300px;margin-left:19px; ">

				<option readonly>representative </option>

			</select>

			&nbsp;
			&nbsp;
			<button id ="sort" class = "btn btn-primary"><strong>GET WINNER</strong></button>
</form>
                        <div class="panel-body">


			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:400px; background-color:#0b0097;color:white;"  class = "alert">Candidate for Class Representative</td>
						<td style = "width:400px; background-color:#0b0097;color:white;" class = "alert ">Image</td>
						<td class = "alert" style = "width:200px; background-color:#0b0097;color:white;">Total votes</td>

					</thead>
					<?php
		require 'dbcon.php';
			$query = $conn->query("SELECT * FROM candidate WHERE position = 'Class representative '");
		while($fetch = $query->fetch_array())
		{
			$id = $fetch['candidate_id'];
			$query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'   ");
			$fetch1 = $query1->fetch_assoc();

	?>
					<tbody>
						<td><strong><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></strong></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:50px; height:50px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>


			</table>

    	</div>
     </div>
   </div>
 </div>
</div>
    </div>
      </div>
      <?php include ('script.php');?>

</body>

</html>
