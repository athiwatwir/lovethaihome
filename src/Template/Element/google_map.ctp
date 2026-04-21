<div id="google_ptm_map" style="width: 100%; height: 300px;margin: 20px 0"></div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKSNfU1vGys8LbtQ4Je2ILOKvcy91rJ5I&callback=initMap" async defer></script>
<script>
    var latitude = document.getElementById('latitude').value;
    var longitude = document.getElementById('longitude').value;
   var map;
var i;
var markers = [];
var infowindow ;
var infowindows ;
var image;
    
    function initialize() {
        var myLatlng = new google.maps.LatLng(latitude, longitude);
        var mapOptions = {
            zoom: 13,
            center: myLatlng
        }
        var map = new google.maps.Map(document.getElementById('google_ptm_map'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: ''
        });
    }

    function initMap() {
        google.maps.event.addDomListener(window, 'load', initialize);
    }

    
    
</script>