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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style type="text/css">
input[readonly] {
  background-color: white !important;
  cursor: text !important;
}

 input[type=radio] {
    width: 1.8em;
    height: 1.8em;
    }
	
		input[type=text] {
    height: 3em;
	border:2px solid #dfdfdf;
	 border-radius: 10px;
	 font-size:20px
    }
	input[type=email] {
    height: 3em;
	border:2px solid #dfdfdf;
	 border-radius: 10px;
	 font-size:20px
    }
    .well {
	background-color:#BCBCBC;
	 
	}
	   .form-control:focus {
	border-color: #fddbab;
	outline: 0; 
	-webkit-box-shadow: inset 0;
		  box-shadow: inset 0;
	background-color: #E9F1F2;
}
  
    td>section>h4{
        text-align: left;
    }
    .jumbotron, .container-fluid .jumbotron{
        background-color:#BCBCBC;
        border-radius: 0;
        text-align: left;
    }
	 .container {
  background-color: #F2CD9E;
            border-radius: 10px;
            border: 1px solid #e5e5e5;
			text-align:center;
	   width:70%;
	 }
    .intro-hr , .form-hr{
        width:1080px;
        height:2px;
        background-color: #FF974F;
        margin-left:0px;
        padding-left: 0;
    }
    .form-control{
        border:0px;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 0px;
        -webkit-box-shadow: none ;
        -moz-box-shadow: none ;
        box-shadow: none ;
        text-align:left;
    }
    textarea:focus,
    input[type="radio"]:focus,
    input[type="radio"]:hover,
    input[type="text"]:focus,
    input[type="textbox"]:focus,
    input[type="password"]:focus,
    input[type="datetime"]:focus,
    input[type="datetime-local"]:focus,
    input[type="date"]:focus,
    input[type="month"]:focus,
    input[type="time"]:focus,
    input[type="week"]:focus,
    input[type="number"]:focus,
    input[type="email"]:focus,
    input[type="url"]:focus,
    input[type="search"]:focus,
    input[type="tel"]:focus,
    input[type="color"]:focus,
    .uneditable-input:focus,
    select:focus,
    select:hover,
    option:focus,
    option:hover{
        border-bottom: 2px solid #E9F1F2;
        -webkit-box-shadow: 0 2px 2px -6px grey;
        -moz-box-shadow: 0 2px 2px -6px grey;
        box-shadow: 0px 11px 6px 6px grey;
        outline: 0 none;
        margin-right:0px;
        text-align: left;
    }
    h5,h4,h2{
        text-align: left;
    }
    .ng-invalid.ng-dirty.ng-touched{
        background-color: lightpink;
    }
body {
    
    font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 400;
    margin-bottom: 150px;
    margin-top: 50px;
  
	background-color:red;
	 padding-top: 30px;
            background-color: #112b45;
	
}
h1,
h2,
h3,
h5,
h6 {
    font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 700;
}
h4{
font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 700;
	font-size:20px;
}

.topnav {
    font-size: 20px; 
}



.intro-header {
    padding-top: 20px; 
    padding-bottom: 50px;
    text-align: center;
    color:black;
    
    background-size: cover;
}
 textarea {
    width: 300px;
    height: 300px;
    border-radius: 10px;
    border: 1px solid #000;
}
</style>
<body>
	<?php include 'db.php';?>
	<?php
	 $id = $_GET['ID'];
	$email=$_GET['email'];
	$table=$_GET['table'];
	
	
	$sql = "SELECT\n"
    . " *\n"
    . "FROM\n"
    . " $table\n"
    . "WHERE\n"
     . " email = \"$email\" AND ID = $id ";
	
	
	$res = $mysqli->query($sql);
?>
	

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">Complaint Box</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html" style="color:white">Home</a>
                    </li>
					<li>
                        <a href="index.html" style="color:white">Logout</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->

  
    
        <div class="container">
            <div class="col">
        
				<h1 style="text-align: center">COMPLAINT DETAILS</h1>
				<br/>
				<hr class="intro-hr" style="margin: 12px 0 12px 0;width:100%;">
			</div>	

    
			<?php
				while($row = $res->fetch_assoc())
				{?>	
	
					<section id="af" class="col form-horizontal" role="form">
						
					<?php 
						 if($table=="public_issue")
					 {?>
						
							<div class="row">
								<div class="col-lg-12">
								
									<div class="form-group">
										<label for="dob" class="control-label col-sm-3"><h4>COMPLAINT ID:<span style="color:red;"> *</span></h4></label>
										<div class="col-sm-2">
												<h4> <?php echo "$row[ID]";?> </h4>
										</div>
									</div>
					
									<div class="form-group">
										<label for="dob" class="control-label col-sm-3"><h4>ISSUE TYPE: <span style="color:red;"> *</span></h4></label>
										<div class="col-sm-2">
												<h4> Public Issue</h4>
										</div>
									</div>
									
									<div class="form-group">
										<label for="dob" class="control-label col-sm-3"><h4>NAME: <span style="color:red;"> *</span></h4></label>
										<div class="col-sm-9">
											<h4> <?php echo "$row[complainername]";?>  </h4>
										</div>
									</div>
									
									<div class="form-group">
										<label for="contact" class="control-label col-sm-3"><h4>CONTACT: <span style="color:red">*</span></h4></label>
										<div class="col-sm-9">
											<h4> <?php echo "$row[contact]";?> </h4>
										</div>
									</div>

									<div class="form-group">
										<label for="email" class="control-label col-sm-3"><h4>E-MAIL: <span style="color:red">*</span></h4></label>
										<div class="col-sm-9">
											<h4> <?php echo "$row[email]";?>  </h4>
										</div>
									</div>
									
									<div class="form-group">
										<label for="address" class="control-label col-sm-3"><h4>ADDRESS:</h4></label>
										<div class="col-sm-9">
										   <h4> <?php echo "$row[address]";?> </h4>
										 </div>
									</div>
	 
								   <div class="form-group">
										<label for="email" class="control-label col-sm-3"><h4>COMPLAINT TITLE: <span style="color:red">*</span></h4></label>
										<div class="col-sm-9">
										   <h4> <?php echo "$row[title]";?>  </h4>
										 </div>
									</div>
									
									  <div class="form-group">
									<label for="address" class="control-label col-sm-3"><h4>COMPLAINT DESCRIPTION:</h4></label>
										<div class="col-sm-9">
										   <h4> <?php echo "$row[description]";?> </h4>
										</div>
									</div>
				  
									<div class="form-group">
										<label for="address" class="control-label col-sm-3"><h4>ANY OTHER DEATAILS:</h4></label>
										<div class="col-sm-9">
										  <h4> <?php echo "$row[otherdetails]";?> </h4>
										</div>
									</div>
									
									<div class="form-group">
										<label for="address" class="control-label col-sm-3"><h4>STATUS:</h4></label>
										<div class="col-sm-9">
										  <h4> <?php echo "$row[status]";?> </h4>
										</div>
											<br/> <br/> <br/>
												
									</div>
                 
				 
								</div> 
								<div >
										<img src="public/<?php echo"$row[ID]"?>" style="width:400px;height:400px"> </img>
										
								</div>

							
							<div>	<br/><br/>
							
							<a href='update.php?ID=<?php echo "$row[ID]";?>&email=<?php echo "$row[email]";?>&table=<?php echo "$table" ?>&status=accepted' >
												<button type="submit" class="btn btn-primary btn-sm-2" value="accepted" name="accepted"><h4> ACCEPTED </h4></button>
												&nbsp &nbsp
							</a>
							<a href='update.php?ID=<?php echo "$row[ID]";?>&email=<?php echo "$row[email]";?>&table=<?php echo "$table" ?>&status=rejected'>
												<button type="submit" class="btn btn-danger btn-sm-2" value="rejected" name="rejected" ><h4> REJECTED </h4></button>
											&nbsp &nbsp
							</a>					
							<a href='update.php?ID=<?php echo "$row[ID]";?>&email=<?php echo "$row[email]"; ?>&table=<?php echo "$table" ?>&status=processing' >							
												
												<button type="submit" class="btn btn-warning btn-sm-2" value="processing" name="processing" ><h4> PROCESSING </h4></button>
						    &nbsp &nbsp
						    </a>				
							<a href='update.php?ID=<?php echo "$row[ID]";?>&email=<?php echo "$row[email]"; ?>&table=<?php echo "$table" ?>&status=success' >					
										<button type="submit" class="btn btn-success btn-sm-2" value="success" name="success"><h4> SUCCESS </h4></button>
							</a>
							</div>	
					    </div>
						
						<?php } ?>
						
						<?php 
						 if($table=="missing_cases")
					 {?>
						
							<div class="col">
								<div class="col-lg-12">
									<div class="form-group">
										<label for="dob" class="control-label col-sm-3"><h4>COMPLAINT ID:<span style="color:red;"> *</span></h4></label>
										<div class="col-sm-2">
												<h4> <?php echo "$row[ID]";?> </h4>
										</div>
									</div>
									
									<div class="form-group">
										<label for="dob" class="control-label col-sm-3"><h4>ISSUSE TYPE: <span style="color:red;"> *</span></h4></label>
										<div class="col-sm-2">
												<h4>missing case</h4>
										</div>
									</div>
									
									<div class="form-group">
										<label for="dob" class="control-label col-sm-3"><h4>COMPLAINER: <span style="color:red;"> *</span></h4></label>
										<div class="col-sm-2">
												<h4> <?php echo "$row[complainer]";?> </h4>
										</div>
									</div>
									
																		
									<div class="form-group">
										<label for="contact" class="control-label col-sm-3"><h4>CONTACT: <span style="color:red">*</span></h4></label>
										<div class="col-sm-9">
											<h4> <?php echo "$row[contact]";?> </h4>
										</div>
									</div>

									<div class="form-group">
										<label for="email" class="control-label col-sm-3"><h4>E-MAIL: <span style="color:red">*</span></h4></label>
										<div class="col-sm-9">
											<h4> <?php echo "$row[email]";?>  </h4>
										</div>
									</div>
									
									<div class="form-group">
										<label for="address" class="control-label col-sm-3"><h4>ADDRESS:</h4></label>
										<div class="col-sm-9">
										   <h4> <?php echo "$row[address]";?> </h4>
										 </div>
									</div>
	 
								   <div class="form-group">
										<label for="email" class="control-label col-sm-3"><h4>MISSING PERSON:<span style="color:red">*</span></h4></label>
										<div class="col-sm-9">
										   <h4> <?php echo "$row[missingperson]";?>  </h4>
										 </div>
									</div>
									
									  <div class="form-group">
									<label for="address" class="control-label col-sm-3"><h4>AGE:</h4></label>
										<div class="col-sm-9">
										   <h4> <?php echo "$row[age]";?> </h4>
										</div>
									</div>
				  
									<div class="form-group">
										<label for="address" class="control-label col-sm-3"><h4>HEIGHT:</h4></label>
										<div class="col-sm-9">
										  <h4> <?php echo "$row[height]";?> </h4>
										</div>
									</div>
									
									<div class="form-group">
										<label for="address" class="control-label col-sm-3"><h4>WEIGHT:</h4></label>
										<div class="col-sm-9">
										  <h4> <?php echo "$row[weight]";?> </h4>
										</div>
									</div>
									
									<div class="form-group">
										<label for="address" class="control-label col-sm-3"><h4>LANGUAGE:</h4></label>
										<div class="col-sm-9">
										  <h4> <?php echo "$row[language]";?> </h4>
										</div>
									</div>
									
									<div class="form-group">
										<label for="address" class="control-label col-sm-3"><h4>PLACE:</h4></label>
										<div class="col-sm-9">
										  <h4> <?php echo "$row[place]";?> </h4>
										</div>
									</div>
									
									<div class="form-group">
										<label for="address" class="control-label col-sm-3"><h4>ABOUT MISSING:</h4></label>
										<div class="col-sm-9">
										  <h4> <?php echo "$row[aboutmissing]";?> </h4>
										</div>
									</div>
									
									<div class="form-group">
										<label for="address" class="control-label col-sm-3"><h4>OTHER DETAILS:</h4></label>
										<div class="col-sm-9">
										  <h4> <?php echo "$row[otherdetails]";?> </h4>
										</div>
									</div>
									<div class="container">
										<img src="missing/<?php echo"$row[ID]"?>" style="width:400px ;height:400px" > </img>
								</div>
								</div>
							
							<div>	<a href='update.php?ID=<?php echo "$row[ID]";?>&email=<?php echo "$row[email]";?>&table=<?php echo "$table" ?>&status=accepted' >
												<button type="submit" class="btn btn-primary btn-lg-2" value="accepted" name="accepted"><h4> ACCEPTED </h4></button>
							</a>
							<a href='update.php?ID=<?php echo "$row[ID]";?>&email=<?php echo "$row[email]";?>&table=<?php echo "$table" ?>&status=rejected'>
												<button type="submit" class="btn btn-danger btn-lg-2" value="rejected" name="rejected" ><h4> REJECTED </h4></button>
							</a>					
							<a href='update.php?ID=<?php echo "$row[ID]";?>&email=<?php echo "$row[email]"; ?>&table=<?php echo "$table" ?>&status=processing' >							
												<button type="submit" class="btn btn-warning btn-lg-2" value="processing" name="processing" ><h4> PROCESSING </h4></button>
							</a>				
							<a href='update.php?ID=<?php echo "$row[ID]";?>&email=<?php echo "$row[email]"; ?>&table=<?php echo "$table" ?>&status=success' >					
										<button type="submit" class="btn btn-success btn-lg-2" value="success" name="success"><h4> SUCCESS </h4></button>
							</a>
							</div>	
							</div>
					
						<?php } ?>
						
						
						<?php 
						 if($table=="other_issue")
						{?>
						
							<div class="col">
								<div class="col-lg-12">
				
									<div class="form-group">
										<label for="dob" class="control-label col-sm-3"><h4>COMPLAINT ID:<span style="color:red;"> *</span></h4></label>
										<div class="col-sm-2">
												<h4> <?php echo "$row[ID]";?> </h4>
										</div>
									</div>
									
									<div class="form-group">
										<label for="dob" class="control-label col-sm-3"><h4>ISSUSE TYPE: <span style="color:red;"> *</span></h4></label>
										<div class="col-sm-2">
												<h4> <?php echo "$row[issuetype]";?> </h4>
										</div> 
									</div>
									
									<div class="form-group">
										<label for="dob" class="control-label col-sm-3"><h4>COMPLAINER NAME: <span style="color:red;"> *</span></h4></label>
										<div class="col-sm-9">
											<h4> <?php echo "$row[complainername]";?>  </h4>
										</div>
									</div>
									
									<div class="form-group">
										<label for="contact" class="control-label col-sm-3"><h4>CONTACT: <span style="color:red">*</span></h4></label>
										<div class="col-sm-9">
											<h4> <?php echo "$row[contact]";?> </h4>
										</div>
									</div>

									<div class="form-group">
										<label for="email" class="control-label col-sm-3"><h4>E-MAIL: <span style="color:red">*</span></h4></label>
										<div class="col-sm-9">
											<h4> <?php echo "$row[email]";?>  </h4>
										</div>
									</div>
									
									<div class="form-group">
										<label for="address" class="control-label col-sm-3"><h4>ADDRESS:</h4></label>
										<div class="col-sm-9">
										   <h4> <?php echo "$row[address]";?> </h4>
										 </div>
									</div>
	 
								   								
									  <div class="form-group">
									<label for="address" class="control-label col-sm-3"><h4>COMPLAINT DESCRIPTION:</h4></label>
										<div class="col-sm-9">
										   <h4> <?php echo "$row[description]";?> </h4>
										</div>
									</div>
				  
									<div class="form-group">
										<label for="address" class="control-label col-sm-3"><h4>ANY OTHER DEATAILS:</h4></label>
										<div class="col-sm-9">
										  <h4> <?php echo "$row[otherdetails]";?> </h4>
										</div>
									</div>
										
									<div class="container">
										<img src="others/<?php echo"$row[ID]";?>" style="width:400px ;height:400px" > </img>
								</div>
				 
								</div>

							
							<div>	<a href='update.php?ID=<?php echo "$row[ID]";?>&email=<?php echo "$row[email]";?>&table=<?php echo "$table" ?>&status=accepted' >
												<button type="submit" class="btn btn-primary btn-lg-2" value="accepted" name="accepted"><h4> ACCEPTED </h4></button>
							</a>
							<a href='update.php?ID=<?php echo "$row[ID]";?>&email=<?php echo "$row[email]";?>&table=<?php echo "$table" ?>&status=rejected'>
												<button type="submit" class="btn btn-primary btn-lg-2" value="rejected" name="rejected" ><h4> REJECTED </h4></button>
							</a>					
							<a href='update.php?ID=<?php echo "$row[ID]";?>&email=<?php echo "$row[email]"; ?>&table=<?php echo "$table" ?>&status=processing' >							
												<button type="submit" class="btn btn-primary btn-lg-2" value="processing" name="processing" ><h4> PROCESSING </h4></button>
							</a>				
							<a href='update.php?ID=<?php echo "$row[ID]";?>&email=<?php echo "$row[email]"; ?>&table=<?php echo "$table" ?>&status=success' >					
										<button type="submit" class="btn btn-primary btn-lg-2" value="success" name="success"><h4> success </h4></button>
							</a>
						</div>	
						</div>
						
						<?php } ?>
						
						
					</section>  <br/> <br/> <br/>
					<?php } ?>
							
					
		</div>
							
	

  
    <!-- Footer -->
    <footer>
        <div style="text-align:center" >
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                     
                    <p class="copyright text-muted small">Copyright &copy;Hanumanth.K.B and Abrar. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>	
</body>		
</html>