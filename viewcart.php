<?php include('core/connection.php'); ?>
<?php include 'includes/head.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<?php
$totalprice = 0;

if(isset($_POST['delete'])){
	$id = $_POST['delete'];
	$sql = "DELETE FROM cart WHERE P_ID = '$id'";
	$result = oci_parse($conn, $sql);
 	oci_execute($result);
	echo "<script>window.location.href='viewcart.php';</script>";	
}
	if(isset($_POST['submit'])){
		if(isset($_SESSION['USER_ID'])){
			//header('location:checkout.php');
			echo "<script>window.location.href='checkout.php';</script>";
		}else{
			echo "<script>alert('You need to login to Proceed to checkout.');window.location.href='login.php';</script>";
		}
	}
?>
	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Checkout</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
					<div class="col-md-12">
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">Order Review</h3>
							</div>
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th>Product</th>
										<th></th>
										<th class="text-center">Price</th>
										<th class="text-center">Quantity</th>
										<th class="text-center">Total</th>
										<th class="text-right"></th>
									</tr>
								</thead>
								<tbody>
									
                               <?php
									if(isset($_SESSION['USER_ID'])){
										$usrid = $_SESSION['USER_ID'];
										$sql = "SELECT * FROM cart WHERE USERID = '$usrid'";										
									}else{
										$ip_add = getRealUserIp();
										$sql = "SELECT * FROM cart WHERE ip_add = '$ip_add'";
									}									
	                                $query = oci_parse($conn, $sql);
	                                oci_execute($query);
									$allTotal = 0;
    	                            while ($row = oci_fetch_assoc($query)) {
                                    ?>

                                    
                                    <tr>
                                    
                                    <?php
											$pid = $row['P_ID'];
											$sql1 = "SELECT * FROM product WHERE PRODUCT_ID = '$pid'";
											$result = oci_parse($conn, $sql1);
											oci_execute($result);
											while ($row2 = oci_fetch_assoc($result)) {
												$pname = $row2['PRODUCT_NAME'];
												$price = $row2['PRODUCT_PRICE'];
												$PRODUCT_DISCOUNT = $row2['PRODUCT_DISCOUNT_PERCENT'];
												$imagePath = $row2['PRODUCT_IMAGE_PATH'];
												$qty = $row['QTY'];												
												if($PRODUCT_DISCOUNT>0 AND $PRODUCT_DISCOUNT!=null){
													$price = $price-($PRODUCT_DISCOUNT/100)*$price;
												}										
												$total = $price * $qty;
												$allTotal += $total;
												
												
											}
											?>
										
										<td class="thumb"><img src="<?php echo $imagePath?>" alt="Image Not Found"></td>
										<td class="details">
											<a href="#"><?php echo $pname;?></a>
											
										</td>
										<td class="price text-center"><strong><?php echo '$'.$price?></strong></td>
										<td class="qty text-center"><span><?php echo $qty?></td>
										<td class="total text-center"><strong class="primary-color"><?php echo '$'.$total?></strong></td>
                                        <form action="" method="post">
										<td class="text-right"><button name="delete" value="<?php echo $pid?>" class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
                                        </form>
									</tr>
									 <?php } ?>
								</tbody>
								<tfoot>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SUBTOTAL</th>
										<th colspan="2" class="sub-total"><?php echo '$'.$allTotal?></th>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SHIPING</th>
										<td colspan="2">Free Shipping</td>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>TOTAL</th>
										<th colspan="2" class="total"><?php echo '$'.$allTotal?></th>
									</tr>
								</tfoot>
							</table>
							<div class="pull-right">
								<form action="" method="post">				
								<button type="submit" name="submit" class="primary-btn">Proceed To Checkout</button>
								</form>								
							</div>
						</div>

					</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

<?php include 'includes/footer.php'; ?>
</body>

</html>
