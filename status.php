<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This project for online complaint box">
    <meta name="author" content="hanumanth.k.budihal">

    <title>Complaint Box</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> 	
   <style type="text/css">
     body {
            padding-top: 150px;
            background-color: #EA9D84;
        }
        
      .panel-login ,.panel-body{
            border-color: #926252;
            -webkit-box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.1);
            box-shadow: 7px 7px 7px 7px rgba(0, 0, 0, 0.1);
        }
        
        .panel-body,.panel-login>.panel-heading {
            color: #00415d;
            background-color: #926252;
            border-color: #926252;
            text-align: center;
        }
        
        .panel-body,.panel-login>.panel-heading a {
            text-decoration: none;
            color:#F7BB3A;
            font-weight: bold;
            font-size: 15px;
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            transition: all 0.1s linear;
        }
        
        .panel-body>.panel-heading a.active {
            color: #F7BB3A;
            font-size: 20px;
        }
        
        
        
        .panel-body input[type="text"],
        .panel-body input[type="email"],
        .panel-body input[type="password"] {
            height: 45px;
            border: 1px solid black;
            font-size: 16px;
            background-image: #FFF0DD;
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            transition: all 0.1s linear;
            background-color: #FFE5C4
        }
        
        .panel-login input[type=email]:hover,
        .panel-login input[type=email]:focus,
        .panel-login input[type=password]:hover,
        .panel-login input[type=passsword]:focus {
            outline: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.2);
            background-color: #FFE0B8;
            border-color: #B2936B;
        }
        
        .btn-login {
            background-color: #0E435B;
            outline: none;
            color: #fff;
            font-size: 14px;
            height: auto;
            font-weight: bold;
            padding: 14px 0;
            text-transform: uppercase;
            border-color: #0E435B;
        }
        
        .btn-login:hover,
        .btn-login:focus {
            color: #F7BB3A;
            font-weight: bold;
            background-color: #187199;
            border-color: #0E435B;
            box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.2);
        }
        
        .btn-register {
            background-color: #1CB94E;
            outline: none;
            color: #fff;
            font-size: 14px;
            height: auto;
            font-weight: normal;
            padding: 14px 0;
            text-transform: uppercase;
            border-color: #1CB94A;
        }
        
        .btn-register:hover,
        .btn-register:focus {
            color: #fff;
            background-color: #1CA347;
            border-color: #1CA347;
        }
        
        input[type=text],
        input[type=password],
        input[type=email] {
            height: 3em;
            border: 2px solid #F3C8BB;
            font-size: 15px
        }
   
   
  </style>
</head>

<body>
			<div class="container">
   <header align="left">  <button class="btn btn-warning btn-xs"><a class="navbar-brand page-scroll" href="index.html">LOGOUT</a></button> </header>
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
	
									<div class="col-xs-6">
								ENTER YOUR EMAIL
													
						</div>
						
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login" action="status_details.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Invalid email"	 required>
									</div>
									
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="submit" id="submit" tabindex="4"  class="form-control btn btn-login" value="Check Status">
											</div>
										</div>
									</div>
									
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		 <br/>
		 <br/>
		    <h1><center>OR</center></h1>
			 <br/>
		 <br/>
		  <div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
									The message will be sent to Admin using Twilio service
					
									<div class="col-xs-12">
								ENTER YOUR MESSAGES,<br/> TO,ADMIN <br/>
									</div>
						
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form  action="send.php" method="POST" role="form" style="display: block;">
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Invalid email"	 required>
									</div>
								
								
									<div class="form-group">
										<textarea type="text" name="msg" id="msg" tabindex="1" class="form-control" placeholder="Enter your message"  required></textarea>
									</div>
									
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="submit" id="submit" tabindex="4"  class="form-control btn btn-login" value="Send Message">
											</div>
										</div>
									</div>
									
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>
