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
                <main class="container">
                    <form  method="post">
                        <h2>Make an appointment</h2>
                        <div class="col">
                            <label for="finame" class="form-label">First Name</label>
                            <input type="text" id="finame" name="finame" class="form-control" placeholder="Your First Name" required >
                          </div>
                          <div class="col">
                            <label for="laname" class="form-label">Last Name</label>
                            <input type="text" id="laname" name="laname" class="form-control" placeholder="Your Last Name" required >
                          </div>
                        </div>
                          <div class="col">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required >
                          </div>
                        </div>
                          <div class="col">
                            <label for="phonenum" class="form-label">Phone Number</label>
                            <input type="tel" id="phonenum" name="phonenum" class="form-control" placeholder="Phone Number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
       required required >
                          </div>
                          <div class="col">
                          <label class="form-label" for="services">Service:</label>
                          <select class="form-control" id="services" name="services" required>
                            <option value="">--Select--</option>
                            <option value="Pedicure">Pedicure</option>
                            <option value="Manicure">Manicure</option>
                            <option value="Manicure-Pedicure">Manicure and Pedicure</option>
                            <option value="Fullset-Biogel">Full Set Bio Gel</option>
                            <option value="Fullset-acrylic">Full Set Acrylic</option>
                          </select>
                        </div>
                          <div class="col">
                          <label for="oppointmentDate" class="form-label">Date</label>
                          <input type="date" id="oppointmentDate" name="oppointmentDate" class="form-control" required >
                        </div>
                        <div class="button">
                    <input class="summit" type="submit" value="Submit">
                    <input class="reset" type="reset" value="Clear">
                </div>
                    </form>
                    <div class="form-group submit-message">
           <?php
					 	require_once('database.php');
						if(isset($_POST) & !empty($_POST)){
							$finame = $_POST['finame'];
							$laname = $_POST['laname'];
							$email = $_POST['email'];
              $phonenum = $_POST['phonenum'];
              $services= $_POST['services'];
              $oppointmentDate=$_POST['oppointmentDate'];
							$res   = $database->create($finame, $laname, $email,$phonenum,$services,$oppointmentDate);
							if($res){
								echo "<p>Successfully inserted data</p>";
							}else{
								echo "<p>Failed to insert data</p>";
							}
						}
					 ?>
        </div>
                </main>
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