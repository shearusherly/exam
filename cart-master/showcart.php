


<?php
	session_start();
	require("connection.php");
	require("header.php");
	require("functions.php");
	
	echo "<h1>Your Cart</h1>";
	echo "<br>";
        
       
        
	showcart();
	if(isset($_SESSION['SESS_ORDERNUM'])){
		$sess_ordernum = $_SESSION['SESS_ORDERNUM'];
		$sql = "SELECT * FROM orderitems WHERE order_id =$sess_ordernum";
		
		$result = mysqli_query($conn,$sql) or die(mysql_error());
		
		$row = mysqli_num_rows($result);
		
		if($row >= 1){
			echo "<h2><a href='checkout-address.php'>Go to the checkout</a></h2>";

		}
	}
	require("footer.php");
	
?><html>
    <head>
        <title>Show Cart </title>
    </head>
    <menu> <a href="delete.php">Delete</a>
        <a href="checkout-address.php">Checkout Address</a>
        <a href="checkout-pay.php">Checkout Pay</a>
        <a href="products.php"> Product</a>
    </menu>
    <br>
    <br>
    <body>
        
    <h1> Show Cart</h1>
    <form name="myform" method="post">
        <input type ="text" name="txtsearch"/>
        <br>
        <input type="submit" name="tbnsearch" value="Search"/>
    </form>
</html>
<?php
	if(isset($_GET["btnsearch"]))
	{
		$pname=$_GET['txtpname'];
		echo "$pname";
	}
	else
	{
	 echo "Search failed";
	}
?>
