<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			box-sizing: border-box;
		}
		body{
			padding: 0px;
			margin: 0px
		}
		.form{
			width: 60%;
			margin: auto;
			margin-top: 30px;
			background-color: blue;
			padding: 30px 30px;
		}
		h2{
			text-align: center;
			color: white;
			font-size: 34px;
			text-transform: uppercase;
		}
		input[type="text"]{
			padding: 15px;
			margin: 15px 15px 15px 0px;
			width: 47.3%;
		}
		input[type="submit"]{
			width: 97%;
			padding: 15px;
			font-weight: bold;
		}
		textarea{
			width: 87%;
			height: 100px;
			padding: 15px;
		}
		h3{
			text-align: center;
			color: white;
		}
	</style>
</head>
<body>
			<div class="form">
			<form method="post">
				
				<?php 

						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "upload";

						// Create connection
						$conn = mysqli_connect($servername, $username, $password, $dbname);
						// Check connection
						if (!$conn) {
						  die("Connection failed: " . mysqli_connect_error());
						}

						$sql = "SELECT id, photos, itemname, itemprice, date FROM products
						WHERE id='".$_REQUEST['id']."'";

						$result = mysqli_query($conn, $sql);

						$row = mysqli_fetch_assoc($result);

						if (isset($_POST['update'])) {
							
								$photos = $_POST['photos'];
								$itemname = $_POST['item'];
								$itemprice = $_POST['price'];

								$sql = "UPDATE products SET photos='$photos',itemname='$itemname',itemprice='$itemprice' WHERE id='".$_REQUEST['id']."'";
								
								if (mysqli_query($conn, $sql)) {
									echo '<p style="background-color:red;padding: 14px 16px; color: white; text-align:center;">Record updated succcessfully';
								}else{
									echo "Unable to update record, please try again later";
								}
						}

				 ?>
				<h2>Edit Product</h2>
				<label>
					<input type="file" name="photos" value="<?= $row['photos']; ?>">
				</label><br><br>
				<label>
					<input type="text" name="item" value="<?= $row['itemname']; ?>" placeholder="Enter othernames...">
				</label>
				<label>
					<input type="text" name="price" value="<?= $row['itemprice']; ?>" placeholder="Enter othernames...">
				</label>
				<input type="submit" name="update" value="Update"><br><br>
			</form>
		</div>
</body>
</html>