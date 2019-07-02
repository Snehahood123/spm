<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SPM | Courses1</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png"> -->
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- bootstrap v3.3.7 css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- font-awesome v4.6.3 css -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- flaticon.css -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- magnific-popup.css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- slicknav.min.css -->
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- slicknav.min.css -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- header-area start -->
   <?php include'includes/navbar.php'?>
    <!-- header-area end -->
    <!-- breadcumb-area start -->
    <div class="breadcumb-area black-opacity bg-img-6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap">
                        <h2>Services</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>/</li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcumb-area end -->
    <!-- ablout-area start -->
    <div class="container">
    <div class="about-page-area ptb-120" style="
    border: 1px solid;
    margin-top: 40px;
    padding: 70px;
    background-color: rgba(255,152,0,0.6);">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul>
                        <li><a href="#">1.All religious mass marriages</a></li>
                        <li><a href="#">2. Narayan Seva Project </li>
                        <li><a href="#">3. Eye surgery camp </li>
                        <li><a href="#">4. Heart surgery camp</li>
                        <li><a href="#">5.  Family planning camp</li>
                        <li><a href="#">6. AIDS awareness camp</li>
                        <li><a href="#">7. Football project for slum residents </li>
                        <li><a href="#">8. Kumbh  Mela visit</li>
                        <li><a href="#">9. Tsunami  Relief  project </li>
                        <li><a href="#">10. Bhuj Earth quake rehabilitation project</li>
                        <li><a href="#">11. O  rissa  cyclone rehabilitation project </li>
                        <li><a href="#">12. Social Awareness  Marathon  race </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul>
                        <li><a href="#">12. Killari Earth quake rehabilitation project </li>
                        <li><a href="#">13. N.S.S. camp</li>
                        <li><a href="#">14. Adult Education project </li>
                        <li><a href="#">15. Computer literacy project</li> 
                        <li><a href="#">16. Child development project </li>
                        <li><a href="#">17. Senior citizen health project </li>
                        <li><a href="#">18. H  ealth  councelling project </li>
                        <li><a href="#">19. Yoga Education for children </li>
                        <li><a href="#">20. R oad safety workshop</li>
                        <li><a href="#">21. Ganesh U  tsav</li>
                        <li><a href="#">22. Free Water Distribution</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- ablout-area end -->
    
    <!-- footer-area start -->
    <?php include 'includes/footer.php' ?>
    <!-- footer-area start -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- popper.min.js -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- slick.min.js -->
    <script src="assets/js/slick.min.js"></script>
    <!-- plugins js -->
    <script src="assets/js/plugins.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbeBYsZSDkbIyfUkoIw1Rt38eRQOQQU0o"></script>
    <script>
    function initialize() {
        var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: new google.maps.LatLng(40.712764, -74.005667),
            styles: [{
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f5f5f5"
                    }]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#616161"
                    }]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "color": "#f5f5f5"
                    }]
                },
                {
                    "featureType": "administrative.land_parcel",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#bdbdbd"
                    }]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#eeeeee"
                    }]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#757575"
                    }]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#e5e5e5"
                    }]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#9e9e9e"
                    }]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ffffff"
                    }]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#757575"
                    }]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#dadada"
                    }]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#616161"
                    }]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#9e9e9e"
                    }]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#e5e5e5"
                    }]
                },
                {
                    "featureType": "transit.station",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#eeeeee"
                    }]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#c9c9c9"
                    }]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#9e9e9e"
                    }]
                }
            ]
        };

        var map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);


        var marker = new google.maps.Marker({
            position: map.getCenter(),
            animation: google.maps.Animation.BOUNCE,
            map: map
        });

    }

    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- main js -->
    <script src="assets/js/scripts.js"></script>
</body>

</html>