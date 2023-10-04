<?php include 'core/connection.php';
	$uid = $_GET['uid'];
	$fid = $_GET['fid'];
	$rating = $_GET['rating'];
	$review = $_GET['review'];	
	date_default_timezone_set('Asia/Kathmandu');
	$date = date("Y-m-d h:i:sA");
	
	//check if user had already given review to a product or shop
	//if already given then delete previous data and add new data
	
	$sql = "SELECT * FROM REVIEW WHERE FOREIGN_ID=$fid AND USER_ID=$uid";
	$result = oci_parse($conn,$sql);
	oci_execute($result);
	$rows = 0;
	while ($row = oci_fetch_assoc($result)) {						
		$rows++;
	}
	if($rows>0){	
		$sql1 = "UPDATE REVIEW SET REVIEW_DESCRIPTION = '$review', REVIEW_CREATED='$date', REVIEW_RATING = '$rating'  WHERE USER_ID = '$uid'";
		$result1 = oci_parse($conn,$sql1);
		oci_execute($result1);			
		echo "<script>alert('Your Review Is Updated.');window.location.href='product-details.php?pid=$fid';</script>";
		//header("Location: {$_SERVER['HTTP_REFERER']}");
	}else{
		$sql = "INSERT INTO REVIEW (REVIEW_ID, FOREIGN_ID, REVIEW_DESCRIPTION, REVIEW_CREATED, USER_ID, REVIEW_RATING) VALUES (seq_review.nextval, '$fid','$review','$date', '$uid', '$rating')";		
		$result = oci_parse($conn,$sql);
		oci_execute($result);
		echo "<script>alert('Your Review Is Saved.');window.location.href='product-details.php?pid=$fid';</script>";
		
		//header("Location: {$_SERVER['HTTP_REFERER']}");
	}		
	//header("Location: {$_SERVER['HTTP_REFERER']}");
	
	
	//header("Location: {$_SERVER['HTTP_REFERER']}");
	//href="addfavourites.php?eid='.$row["eid"].'" name="favourites"
	
?>