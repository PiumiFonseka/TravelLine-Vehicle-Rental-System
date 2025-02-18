<?php
		//Linking the configuration file
		include_once'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vehicle Rental System</title>
	
	<!-- Connecting CSS code to HTML -->
	<link rel = "stylesheet" href="Styles/services.css">
	
	<link rel = "stylesheet" href="Styles/header.css">
	
	<link rel = "stylesheet" href="Styles/footer.css"> 
	

	<!-- Connecting JS code to HTML -->
	<script src="Scripts/submit_selectvehicle.js"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	
	<!--footer stylesheet icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!--font-awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" type="text/css"  href="Styles/reservationAccount.css">
	
</head>

<body>
<!-- add a horizontal menu bar --> 
                <button type="button" class="rentbtn"><a href="reservation.php">Rent a vehicle</a></button>
                <div class="navbar">
                    
                    <a href="homepage.php">Home</a>
                    <a href="login.php">Login</a>
                    <div class="servicebtn">
                        <button class="dropbtn">Service
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="servicebutton-content">
                            <a href="services.php">Select vehicle</a>
                        </div>
                        
                    </div>
        
                    <div class="profilesbtn">
                        <button class="dropbtn">Profiles
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="profilesbutton-content">
                            <a href="register.php">Create an account</a>
                            <a href="user.php">User account</a>
                            <a href="Vehicle_owner.php">Vehicle owner account</a>
                            <a href="adminpage.php">Admin account</a>
                        </div>
                    </div>
        
                    <div class="aboutusbtn">
                        <button class="dropbtn">About us
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="aboutusbutton-content">
                            <a href="Terms and conditions.php">Terms & Conditions</a>
                            <a href="Privacy & Policy page.html">Privacy & Policy</a>
                            </div>
                        </div>
                    <a href="contactUs.html">Contact Us</a>
                </div>
	
	<!--Heading -->
	<h1><center><u>Services we offer</u></center></h1><br><br>
	
	
	<div class="row">
		<div class="service">
			<h2>Our Experience</h2>
			<p>Having worked in the field for more than 30 years, so that we can provide you better experience</p>
		</div>
		
		<div class="service">
			<h2>Over 500 Vehicles</h2>
			<p>large fleet of automobiles in a variety of collections, all vehicles are in good condition</p>
		</div>
		
		<div class="service">
			<h2>Car Rental Software Website</h2>
			<p>Online car rental website equipped with simple functionalities with many features</p>
		</div>
		
		<div class="service">
			<h2>Our Strength</h2>
			<p>In-house Operational Staff, Automobile Technincians from every part of the country </p>
		</div>		
		
		<div class="service">
			<h2>24/7 Breakdown Service</h2>
			<p>24 hrs island wide backup services with affliliated garages and mobile units </p>
		</div>
		
		<div class="service">
			<h2>Affordable Rates</h2>
			<p>Get the most affordable rental rate on a fantastic contemporary automobile. </p>
		</div>
	</div>
	
	
	
	<br/><br/>
	
	<!-- Let user to select the vehicle category-->				
	<!--Reffered from codingstatus.com  -->		
	
	<form method = "POST"  >
		<p class="topic">Vehicle category :</p><br>
		<select id="category" onchange="selectVehicle()">
				<option disables selected > -- Vehicle category -- </option>
				
				<?php
					  
				 $sql = "select Distinct v_category from vehicle"; 
				$result=$conn->query($sql);
			
				
					while($row=$result->fetch_assoc()) 
					{
					
						
						echo	"<option value='".$row['v_category']."'>".$row['v_category']."</option>";
					}
				
				
				
				
				//close the connection   
				mysqli_close($conn);	
			
				?>		
		</select>	
		
		</form>

			
		<br/><br/>					
		
		<table border ="1" width ="75%" >
	
			<thead>
				<th style="width: 10%">Vehicle Model</th>
				<th style="width: 10%">Vehicle Number</th>
				<th style="width: 10%">Vehicle Category</th>
				<th style="width: 10%">Action</th>
			</thead>
				  
			<tbody id = "ans" style="text-align: center">
			</tbody>
				
			
		</table>




	
	<br><br><br><br><br><br><br><br><br>
	
	<!--footer-->
    <footer>
    <div class="foot">
        <div class="footer">
            <div class="row">
                <dic class="col" id="company">

                    <img src="Images/logo.png" alt="" class="logo"><br>

                    <p>"With the help of our amazing rental fleet, unleash your trip. <br> Go off exploring!"</p>
                    
                    <div class="social"><br>
                        <a href="www.facebook.com"><i class="fab fa-facebook"></i></a>
                        <a href="www.instagram.com"><i class="fab fa-instagram"></i></a>
                        <a href="www.twitter.com"><i class="fab fa-twitter"></i></a>
                        <a href="www.youtube.com"><i class="fab fa-youtube"></i></a>
                    </div>

                </div>

                <div class="col" id="useful-links"><br>
                   <!-- <h3>Links</h3>-->
                    <div class="link">
					<h3>Links</h3>
                        <a href="About us.php">About us</a>
                        <a href="services.php">Services</a>
                        <a href="Privacy & Policy page.html">Privacy and Policy</a>
                        <a href="Terms and conditions.php">Terms and condditions</a>
                        <a href="contactUs.html">Contact us</a>
                    </div>
                </div>

                <div class="col" id="contacts"><br>
                    <h3>Contact</h3>
                    <div class="contact-details">
                        <p>Address :<br> 70/5,  Post Office Road,  Malabe</p><br>
                        <p><i class="material-icons">call</i>+94-112345678</p>
                        <p><i class="material-icons">email</i>TravelLine.SriLanka@email.com</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </footer>
		
</body>
</html>