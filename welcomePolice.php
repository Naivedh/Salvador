<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginPolice.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif;}

    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salvador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b577eb39ae.js"></script>
        <script src="nav.js"></script>
        
        <script scr="police.js"></script>
    
    <link rel="stylesheet" href="police.css">
    <style type="text/css">
        .box {
            border: 1px solid black;
            height: 300px;
            border-radius: 5%;
            padding: 30px;
        }
    </style>

</head>
<body style="background-color: white;">
    <!-- geolocation -->
      <!-- End of Geolocation -->
    <div id="mySidenav" class="sidenav">
        <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
        <p>Hi,</br><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</p>
        <a href="#">Profile</a>
        <a href="#">Settings</a>
        <a href="faq.html">FAQs</a>
        
        <div style="position: fixed; bottom:0px;display: none; padding-bottom: 35px;" id="down">
            <div style="padding-bottom: 1rem;">
                <a href="tel:8511274542" style="display: inline;"><i class="fas fa-phone-alt"></i></a>
                <a href="#" style="display: inline;"><i class="fab fa-twitter"></i></a>
                <a href="#" style="display: inline;"><i class="fab fa-facebook"></i></a>
            </div>
            <a href="reset-password.php">Reset Password</a>
            <a href="logout.php">Sign Out</a>
        </div>
    </div>
    <span style="font-size:30px;cursor:pointer; padding:1.2rem;" onclick="openNav()">&#9776;</span>
   
    <div class="container" style="padding-top:15px; ">
        <!-- <form class="needs-validation" novalidate>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Driver's Name</label>
                    <input type="text" class="form-control" id="validationCustom01" required>
                </div>
            
                <div class="col-md-4 mb-3">
                    <label for="validationCustomUsername">plate number</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="validationCustomUsername" style="z-index: 0;"aria-describedby="inputGroupPrepend" required>
                    </div>
                </div>
            
           
                <div class="col-md-3 mb-3">
                    <label for="validationCustom04">Area</label>
                    <select class="custom-select" id="validationCustom04" required>
                    <option selected disabled value=""></option>
                    <option>Channi</option>
                    <option>Samta</option>
                    <option>Gotri</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom05">Phone number</label>
                    <input type="text" class="form-control" id="validationCustom05" required>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
    -->

    <div class="box">
        <h1> Requested Time: 23:16:05 </h1>
        <h3> Latitude: 22.2972271</h3>
        <h3> Longitude: 73.1395648</h3>
        <h3> Link: <a href="http://www.maps.google.com/?q=22.2972271,73.1395648">http://www.maps.google.com/?q=22.2972271,73.1395648</a></h3>
        <button class="btn btn-primary" style="font-size: 2rem;">Accept free drop</button>
    </div>
        </br>
    <div class="box">
        <h1> Requested Time: 1:16:05 </h1>
        <h3> Latitude: 92.2972271</h3>
        <h3> Longitude: 74.1395648</h3>
        <h3> Link: <a href="http://www.maps.google.com/?q=22.2972271,73.1395648">http://www.maps.google.com/?q=22.2972271,73.1395648</a></h3>
        <button class="btn btn-primary" style="font-size: 2rem;">Accept free drop</button>
    </div>
</body>
</html>