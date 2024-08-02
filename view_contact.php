<?php
include 'form-handler.php'; 
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Contacts</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="https://kit.fontawesome.com/2c6c63b917.js"></script>
</head>
<body>
	<div class="container">
		<button class="btn btn-primary my-5"><a href="form-handler.php" class="text-light">View Data</a></button>
		<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Subject</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	$sql = "select * from `posts`";
  	$result = mysql_query($conn, $sql);
  	if($result){
  		while ($row = mysqli_fetch_assoc($result)){
  			$id = $row['id'];
  			$name = $row['name'];
  			$email = $row['email'];
  			$phone_number = $row['number'];
  			$subject = $row['subject'];
  			echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$phone_number.'</td>
            <td>'.$subject.'</td>
            <td><button class="btn btn-primary"><a href="update.php" class="text-light">Update</a></button>
  	 	         <button class="btn btn-danger"><a href="delete.php" class="text-light">Delete</a></button>
  	        </td>
            </tr>';
  		}
  	}

  	 ?>
  	
  </tbody>
</table>
	</div>





















<section class="footer">
		<h4>Let's Get Social</h4>
		<p>Follow us on the following handles</p>
		<div class="icons">
			<i class="fa-brands fa-facebook"></i>
			<i class="fa-brands fa-twitter"></i>
			<i class="fa-brands fa-instagram"></i>
			<i class="fa-brands fa-youtube"></i>
		</div>
		<p>Made with love <i class="fa-regular fa-heart"></i>by Charles-Wesley</p>
	</section>
<script src="https://kit.fontawesome.com/2c6c63b917.js"></script>
<script src="js/script.js"></script>
</body>
</body>
</html>