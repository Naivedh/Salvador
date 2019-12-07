<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
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
        #map {
          position: absolute;
          z-index: -1;
          width: 100%;
  		  	height: 100%;
        }
    </style>

        <script src="nav.js"></script>
        <link rel="stylesheet" href="main.css">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/b577eb39ae.js"></script>
        <!--<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRl3gVi9G9pg5lgnPEqsD6w-bkUxNUurk&callback=initMap"></script>-->
        <script src="Float.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>

</head>
<body>
    <!-- geolocation -->
    <div id="mapid" style="width: 100%; height: 100%; z-index: -1;position: absolute;"></div>
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
    <span style="font-size:30px;cursor:pointer; padding:3.6rem; background-color: #FFCB47; border-radius: 50%; margin-left: -25px;" onclick="openNav()">&#9776;</span>
    <!-- <img style="float: right; width: 48px; height: 48px;" src="logo.png"> -->
    
    <div class="container-fluid padding " style="text-align: end; margin-top:100px ;">
       
       <script>

          var mymap = L.map('mapid').setView([51.505, -0.09], 13);

          L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
              '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
              'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11'
          }).addTo(mymap);

          L.marker([51.5, -0.09]).addTo(mymap)
            .bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();

          L.circle([51.508, -0.11], 500, {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5
          }).addTo(mymap).bindPopup("I am a circle.");

          L.polygon([
            [51.509, -0.08],
            [51.503, -0.06],
            [51.51, -0.047]
          ]).addTo(mymap).bindPopup("I am a polygon.");


          var popup = L.popup();

          function onMapClick(e) {
            popup
              .setLatLng(e.latlng)
              .setContent("You clicked the map at " + e.latlng.toString())
              .openOn(mymap);
          }

          mymap.on('click', onMapClick);

        </script>
        <div class="events-4">
            <form name="sub" action="sms.php" method="GET">
                <h6><button data-aos="fade-up" data-aos-duration="700" id="CAR" type="submit" class="btn" style="background: #47A8BD;"><i class="fas fa-car" ></i></button></h6>
            </form>
            <form name="tweet" action="tweet/tweet.php" method="GET">
               
              <input type="text" id="lat" name="lat" style="display: none;">
              <input type="text" id="lng" name="lng" style="display: none;">

              <script>
                  var x=document.getElementById("lat");
                  var y=document.getElementById("lng");
                  function getLocation()
                  {
                  if (navigator.geolocation)
                  {
                    navigator.geolocation.getCurrentPosition(showPosition);
                  }
                  else{x.innerHTML="Geolocation is not supported by this browser.";}
                  }
                  function showPosition(position)
                  {
                    x.value = position.coords.latitude;
                    y.value = position.coords.longitude;  
                  }
                  getLocation()

              </script>

                <h6><button data-aos="fade-up" data-aos-duration="700" id="SOS" type="submit" value="submit" class="btn" style="background: #C40233;"><i class="fas fa-exclamation-circle"></i></button></h6>

                </form>

              <form name="sms" action="sms/index.php" method="GET">
                <input type="text" id="latX" name="latX" style="display: none;">
                <input type="text" id="lngX" name="lngX" style="display: none;">

                <script>
                    var x=document.getElementById("latX");
                    var y=document.getElementById("lngX");
                    function getLocation()
                    {
                    if (navigator.geolocation)
                    {
                      navigator.geolocation.getCurrentPosition(showPosition);
                    }
                    else{x.innerHTML="Geolocation is not supported by this browser.";}
                    }
                    function showPosition(position)
                    {
                      x.value = position.coords.latitude;
                      y.value = position.coords.longitude;  
                    }
                    getLocation()

                </script>
                <h6><button data-aos="fade-up" data-aos-duration="700" id="sms" type="submit" value="submit" class="btn" style="background: greenyellow;"><i class="fa fa-envelope"></i></button></h6>
              </form>
        </div>
    </div>
</body>
</html>