<?php
	require_once('database.php');
	$res = $database->read();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="PHP Assignment 1">
        <link rel="shortcut icon" href="./images/nails.png" type="image/x-icon" />
        <link rel="stylesheet" href="./css/styles.css" />
        <title>Beer Nails & Spa</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@300;700&display=swap" rel="stylesheet">
    </head>
    <body>
                <!-- Page-level Header -->
                <header class="navbar">
                    <a href="index.html" title="Visit Beer Nails Spa"><img src="./images/logo nails.png" alt="nails logo" /></a>
                    <nav>
                        <ul class="navigation">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="view.php">View</a></li>
                        </ul>
                    </nav>
                  </header>  
                <section class="head-title">
                    <h1>Welcome to <br> Beer Nails&Spa</h1>
                </section>
                <div class="container">   
                <table class="table">
			<tr>
				<th>Full Name</th>
				<th>Email</th>
                <th>Phone Number</th>
                <th>Service</th>
                <th>Date</th>
			</tr>
			<?php
				while($r = mysqli_fetch_assoc($res)){
			?>
					<tr>
						<td><?php echo $r['finame'] . " " . $r['laname']; ?></td>
						<td><?php echo $r['email'] ?></td>
                        <td><?php echo $r['phonenum']; ?></td>
                        <td><?php echo $r['services']; ?></td>
                        <td><?php echo $r['oppointmentDate']; ?></td>
					</tr>
				<?php
				}
			?>
		</table>
        </div>
                <footer class="footer">
                    <div class="first-part">
                    <p><Strong>Beer Nails & Spa</Strong></p>
                    <p>Welcome to our nail salon, where artistry meets relaxation. </p>
                   </div>
                   <div class="second-part">
                    <p><Strong>Contact Us</Strong></p>
                    <p>Phone: (416) 736-9888</p>
                    <p>1270 Finch Ave W, North York, ON M3J 3J7 </p>
                   </div>
                </footer>
    </body>
     
</html>