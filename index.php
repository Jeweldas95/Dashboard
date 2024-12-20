<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Finopians-Home</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <style>
        /* Initially hide the form */
        #myForm {
            display: none;
            border: 1px solid #ccc;
            padding: 20px;
            width: 300px;
            margin-top: 20px;
            background-color: #f9f9f9;
        }
    </style>
  
</head>
<body>
<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redirect if not logged in
    $is_logged_in = isset($_SESSION['user_id']);
}

// echo "Welcome, " . $_SESSION['username'] . "!<br>";
// echo "<a href='logout.php'>Logout</a>";
?>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><?php echo "Hi, " . $_SESSION['username'] ;  ?></a> 
            </div>

<?php
if (isset($_SESSION['user_id'])) { ?>
    <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
    <?php
}else{ ?>
    <div style="color: white;
    padding: 15px 50px 5px 50px;
    float: right;
    font-size: 16px;"> <a href="login.php" class="btn btn-danger square-btn-adjust">Login</a> </div>
     <div style="color: white;
    padding: 15px 50px 5px 50px;
    float: right;
    font-size: 16px;"> <a href="signup.php" class="btn btn-danger square-btn-adjust">signup</a> </div>
<?php
}
?>

        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
								
                    <li>
                        <a class="active-menu"  href="index.php"> Dashboard</a>
                    </li>
                     <li>
                        <a href="notes.php"></i> Notes</a>
                      
                    </li>
                    <li>
                        <a href="clock.php"> Clock</a>
                    </li>
						   <li>
                        <a href="weather.php"> Weather</a>
                    </li>				
					
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
  
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                 
                        <h5><?php echo "Welcomes " . $_SESSION['username'] ;  ?>, Love to see you back. </h5>
                       
                    </div>
                </div>
                  <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">             
                <div class="text-box" >
                      <!-- Button to open the form -->
    <button onclick="openForm()">Add Widget</button>

<!-- Form to be opened -->
<div id="myForm">
    <h2>Add Widget</h2>
    <form>
        <label for="name">Widget Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Widget Content:</label><br>
        <input type="textarea" id="content" name="content"><br><br>
        <label for="email">Widget Position:</label><br>
        <input type="textarea" id="content" name="content"><br><br>
        <input type="submit" value="Submit">
    </form>
</div>
                </div>
             </div>
		     </div>

                    <div class="col-md-6 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
              
                <div class="text-box" >
                <button onclick="deleteForm()">Delete Widget</button>

<!-- Form to be opened -->

                  
                </div>
             </div>
		     </div>
			</div>
                 <!-- /. ROW  -->
               
    </div>
			
    </div>
                        
        </div>

                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script>
        // JavaScript function to open the form
        function openForm() {
            document.getElementById('myForm').style.display = 'block';
        }
    </script>
      <script>
        // JavaScript function to open the form
        function deleteForm() {
            document.getElementById('dltForm').style.display = 'block';
        }
    </script>

</body>
</html>
