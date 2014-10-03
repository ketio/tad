<?php
	$email=$_GET["email"];

	$mysqli = new mysqli('localhost', 'tadfesti_liang', 'zaqwedcxsgengyu81', 'tadfesti_tad');

	if(mysqli_connect_errno()){echo "error~";}
	
	mysqli_query($mysqli, 'SET CHARACTER SET utf8');
	//mysqli_query($mysqli, "SET Collation_connection = 'utf8_general_ci'");
	
	$query="INSERT INTO `subscribed`(`email`) VALUES (?)";
	
	$stmt = mysqli_prepare($mysqli, $query);

    /* bind parameters for markers */
    mysqli_stmt_bind_param($stmt, "s", $email);

    /* execute query */
    mysqli_stmt_execute($stmt);

    /* bind result variables */
    //mysqli_stmt_bind_result($stmt, $district);

    /* fetch value */
    //mysqli_stmt_fetch($stmt);

    //printf("%s is in district %s\n", $city, $district);

    /* close statement */
    mysqli_stmt_close($stmt);
	
	echo "SUCCESS";

?>