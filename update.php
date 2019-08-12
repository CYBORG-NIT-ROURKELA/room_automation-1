<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  

<script>
	
	$(document).ready(function() {
		$('button').click(function(){
		  $("$_GET['id']").toggle();
		});
	});
	
</script>

<?php

include 'db.php';
if ($_GET['id']) {
	// echo $_GET['id'];
	$id=$_GET['id'];


	$query1 = "SELECT * FROM appliances WHERE id = '$id'";
	$res = mysqli_query($con, $query1);
	$status=0;
	$query='';
	if($res)
	{
			$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
			$status = $row['status'];
	}
	if($status==0)
	{
		$query = mysqli_query($con,"UPDATE appliances SET status='1' WHERE id=$id ");
	}	
	else if($status==1)
	{
		$query = mysqli_query($con,"UPDATE appliances SET status='0' WHERE id=$id ");
	}





		if($query)
		{
			echo "Update sucessful";
		}
		else
		{
			echo "helani";
		}
		header('Location: abcd.php');
}

?>