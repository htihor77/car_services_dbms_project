<?php
session_start();
$con = mysqli_connect('localhost','root','','carservice1');
mysqli_select_db($con, 'carservice1');
if(isset($_POST['bookpage']))
{  
    $name=$_POST['name'];
    $id=$_POST['id'];
    $type_service=$_POST['type_service'];
    $vehiclenumber=$_POST['vehiclenumber'];
    $vehiclemake=$_POST['vehiclemake'];
    $vehiclemodel=$_POST['vehiclemodel'];
    $servicedate=$_POST['servicedate'];
    $hour=$_POST['hour'];
    $min=$_POST['min'];
    $ampm=$_POST['ampm'];

    $reg= "insert into bookinfo(name,id,type_service,vehiclenumber,vehiclemake,vehiclemodel,servicedate,hour,min,ampm) values ('$name','$id','$type_service','$vehiclenumber','$vehiclemake','$vehiclemodel','$servicedate',$hour,$min,'$ampm')";
    $results= mysqli_query($con, $reg);
    if($results){
        echo '<script>alert("Updated Succesfully!")</script>';header("refresh:1;url=pays.html");
    }
    else{
       echo("Connection failed. Approval Failed!".mysqli_error($con));
    }
    echo"Booking Successful";
	
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<title>Booking Form</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Book a service</h1>
						</div>
						<form action="" method="POST" >
                                <div class="row">
                                        <div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control" type="text" name="name" placeholder="Enter your name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">ID</span>
										<input class="form-control" type="email" name="id" placeholder="Enter your ID">
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label"><label for="cars">Choose a type of service:</label></span>
								<select class="form-control" type="tel" name="type_service" placeholder="Service Type" required>
                                        <option value="n"> </option>
                                        <option value="gc">General Checkup</option>
                                        <option value="fc">Full Checkup</option>
                                        <option value="sr">Specific Requirement</option>
                                      </select>
							</div>
							<div class="form-group">
								<span class="form-label">Vehicle Number</span>
								<input class="form-control" type="text" name="vehiclenumber" placeholder="Enter the vehicle number">
                            </div>
                            <div class="row">
                                    <div class="col-sm-6">
							<div class="form-group">
								<span class="form-label">Vehicle Make</span>
								<input class="form-control" type="text" name="vehiclemake" placeholder="Enter the make">
                            </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                            <span class="form-label">Vehicle Model</span>
                                            <input class="form-control" type="text" name="vehiclemodel" placeholder="Enter the model">
                                        </div>
                                    </div>
                            </div>
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Service Date</span>
										<input class="form-control" name="servicedate" type="date" required>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Hour</span>
												<select class="form-control" name="hour">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>10</option>
													<option>11</option>
													<option>12</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Min</span>
												<select class="form-control" name="min">
													<option>05</option>
													<option>10</option>
													<option>15</option>
													<option>20</option>
													<option>25</option>
													<option>30</option>
													<option>35</option>
													<option>40</option>
													<option>45</option>
													<option>50</option>
													<option>55</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label" >AM/PM</span>
												<select class="form-control" name="ampm">
													<option>AM</option>
													<option>PM</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							
								<button type="submit" name="bookpage" class="submit-btn">Book Now</button>
							
									
								
						</form>
						<button class="re-btn" id="in">Go to inventory</button>
					</div>
				</div>
			</div>
		</div>
    </div>
    <script type="text/javascript">
        document. getElementById("in"). onclick = function () {
        location. href = "inv.html";
        };
        </script>
</body>

</html>