<!DOCTYPE html>
<html lang="en">
<html>
<head>

    <!-- Bootstrap core CSS -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
    <![endif]-->

    <style>
        #map-container { height: 700px }
    </style>




    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>IKA</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link href="/assets/css/justified-nav.css" rel="stylesheet">
    <link href="/assets/css/theme.css" rel="stylesheet">
    <link href="/assets/css/yamm.css" rel="stylesheet">
    <link href="/assets/css/app.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>
<body>


<div class="container">

    <!-- The justified navigation menu is meant for single line per list item.
         Multiple lines will require custom code not provided by Bootstrap. -->
    <?php include('./_menu.php'); ?>
    <?php include('./_flush.php'); ?>
    <div id="body">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Αρχική Σελίδα</a></li>
            <li class="breadcrumb-item active">Σημεία Εξυπηρέτησης</li>
        </ol>

        <div class = "page-header">
            <h3>Σημεία Εξυπηρέτησης</h3>
        </div>

        <div class="row">
            <div id = "map-outer" class="col-md-12">
                <div id = "search" class="col-lg-4">

                    <h4>Αναζήτηση σε περιοχή</h4>


                    <form class="navbar-form" role="search">

                        <div class="form-group">
                            <select style="width: 100%;" class="form-control" id="sel1">
                                <option disabled selected value style="display:none"> -- Επιλέξτε Νομό -- </option>
                                <option>Αττικής</option>
                                <option>Θεσσαλονίκης</option>
                                <option>Αχαΐας</option>
                                <option>Ηρακλείου</option>
                            </select>
                            <select style="width: 100%;" class="form-control" id="sel1">
                                <option disabled selected value style="display:none"> -- Επιλέξτε Πόλη -- </option>
                                <option>Αθήνα</option>
                                <option>Θεσσαλονίκη</option>
                                <option>Πάτρα</option>
                                <option>Ηράκλειο</option>
                            </select>
                        </div>
                        <br><br>
                        <div class="input-group" style="width: 100%;">
                            <input type="text" class="form-control" placeholder="Διεύθυνση" name="srch-term" id="srch-term">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>

                    <h4>Αποτελέσματα</h4>

                    <ul class="media-list">
                        <li class="media">
                            <div class="media-left">
                                <a href="#">
                                    <span class="..." alt="..."></span>
                                </a>
                            </div>
                            <div class="media-body">
                                <a id="link0" href="#!" class="list-group-item"><h5 class="media-heading"> <span class="glyphicon glyphicon-map-marker"></span> Σημείο Εξυπηρέτησης 1</h5>
                                <b>Διεύθυνση:</b> Παρ. Λεωφ. Βουλιαγμένης 24, Γλυφάδα<br>
                                    <b>Τηλέφωνο:</b> 2135555555</a>
                                <a id="link1" href="#!" class="list-group-item"> <h5 class="media-heading"> <span class="glyphicon glyphicon-map-marker"></span> Σημείο Εξυπηρέτησης 2</h5>
                                <b>Διεύθυνση:</b> Παρ. Λεωφ. Βουλιαγμένης 24, Γλυφάδα<br>
                                    <b>Τηλέφωνο:</b> 2135555555 </a>
                                <a id="link2" href="#!" class="list-group-item"> <h5 class="media-heading"> <span class="glyphicon glyphicon-map-marker"></span> Σημείο Εξυπηρέτησης 3</h5>
                                <b>Διεύθυνση:</b> Παρ. Λεωφ. Βουλιαγμένης 24, Γλυφάδα<br>
                                    <b>Τηλέφωνο:</b> 2135555555</a>
                                <a id="link3" href="#!" class="list-group-item"> <h5 class="media-heading"> <span class="glyphicon glyphicon-map-marker"></span> Σημείο Εξυπηρέτησης 4</h5>
                                <b>Διεύθυνση:</b> Παρ. Λεωφ. Βουλιαγμένης 24, Γλυφάδα<br>
                                    <b>Τηλέφωνο:</b> 2135555555</a>
                                <a id="link4" href="#!" class="list-group-item"> <h5 class="media-heading"> <span class="glyphicon glyphicon-map-marker"></span> Σημείο Εξυπηρέτησης 5</h5>
                                <b>Διεύθυνση:</b> Παρ. Λεωφ. Βουλιαγμένης 24, Γλυφάδα<br>
                                    <b>Τηλέφωνο:</b> 2135555555</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div id="map-container" class="col-lg-8"></div>
            </div>
        </div>
    </div>
    <?php include('./_footer.php'); ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBT6Dbk2on2-8l1esYV9IFEEG0uRhrK-Co&callback=initMap"></script>
<script>

    $(document).on('click', '.yamm .dropdown-menu', function(e) {
        e.stopPropagation()
    });

/*    $('.selectpicker').selectpicker({
        style: 'btn-info',
        size: 4
    });*/

    function init_map() {
        //var results = 5;
        var locations = [];
        var markers = [];
        var infowindows = [];

        var var_content = '<div class="info-window">' +
            '<h4>ΙΚΑ Γλυφάδας 1</h4>' +
            '<div class="info-content">' +
            '<p><b>Διεύθυνση:</b> Παρ. Λεωφ. Βουλιαγμένης 24, Γλυφάδα 166 75<br><b>Τηλέφωνο:</b> 2135555555<br><b>Ωράριο:</b> Δευ-Παρ 8:00-14:00, Σαβ, Κυρ κλειστά</p>' +
            '</div>' +
            '</div>';

        locations[0] = new google.maps.LatLng(37.884346, 23.751638);
        locations[1] = new google.maps.LatLng(37.902443, 23.755614);
        locations[2] = new google.maps.LatLng(37.900410, 23.746375);
        locations[3] = new google.maps.LatLng(37.900410, 23.746375);
        locations[4] = new google.maps.LatLng(37.900410, 23.746375);

        var map_location = new google.maps.LatLng(37.884346, 23.751638);

        var var_mapoptions = {
            center: map_location,
            zoom: 13
        };

        var map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
        for (i=0; i<5; i++) {
            markers[i] = addMarker(locations[i], map, "IKA Glyfadas1");
            infowindows[i] = addInfoWindow(map, markers[i], var_content);
        }


        for (i=0; i<5; i++) {
            var orisma = "link"+i;
            var link1 = document.getElementById(orisma);
            if (typeof window.addEventListener != "undefined") {
                link1.addEventListener("click", handleclick, false);
            } else {
                link1.attachEvent("onclick", handleclick);
            }
        }

        function handleclick() {
            infowindows[0].open(map, markers[0]);
            return false;
        }
    }


    function addMarker (location, map, title) {
        var marker = new google.maps.Marker({
            position: location,
            map: map,
            title: title});

        marker.setMap(map);
        return marker;
    }

    function addInfoWindow(map, marker, content) {
        var infowindow = new google.maps.InfoWindow({
            content: content,
            maxWidth: 400
        });

        marker.addListener('click', function () {
            infowindow.open(map, marker);
        });
        return infowindow;
    }

    google.maps.event.addDomListener(window, 'load', init_map);




</script>



</body>
</html> 
