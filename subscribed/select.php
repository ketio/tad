<?php
	$mysqli = new mysqli('localhost', 'tadfesti_liang', 'zaqwedcxsgengyu81', 'tadfesti_tad');

	if(mysqli_connect_errno()){echo "error~";}
	
	mysqli_query($mysqli, 'SET CHARACTER SET utf8');
	//mysqli_query($mysqli, "SET Collation_connection = 'utf8_general_ci'");
	
	$query="select email from subscribed group by email";
	
	$stmt = mysqli_prepare($mysqli, $query);

    /* bind parameters for markers */
   // mysqli_stmt_bind_param($stmt, "ss", $name,$email);

    /* execute query */
    mysqli_stmt_execute($stmt);

    /* bind result variables */
    mysqli_stmt_bind_result($stmt, $email);

    /* fetch value */
    while(mysqli_stmt_fetch($stmt)){
		echo $email."</br>";
	}

    //printf("%s is in district %s\n", $city, $district);

    /* close statement */
    mysqli_stmt_close($stmt);
?>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script>
$(document).ready(function(){

});
</script>