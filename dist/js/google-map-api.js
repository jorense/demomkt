var markers = new Array();
var map;

var icon = 'dist/images/page_template/pin.png';

function initialize() {
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 9,
        center: new google.maps.LatLng(20.59, 78.96),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: false,
        streetViewControl: false,
        panControl: false,
        fullscreenControl: false,
        zoomControlOptions: {
            position: google.maps.ControlPosition.LEFT_BOTTOM
        },
        styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#c7eced"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#fac8a8"},{"lightness":40}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#44828f"},{"lightness":10}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
    });


    var infowindow = new google.maps.InfoWindow({
        maxWidth: 445
    });

    google.maps.event.addListener(infowindow,'closeclick',function(){
      // Remove Class Active On the Nav
      $('.c-l-l-inner').removeClass('active');
    });

    // Add the markers and infowindows to the map
    for (var i = 0; i < locations.length; i++) {
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map,
            icon: icon,
            title: 'Click to zoom'
        });

        markers.push(marker);

        google.maps.event.addListener(marker, 'click', (function (marker, i) {

            return function () {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
                //map.setZoom(9);
                //map.setCenter(marker.getPosition());
            }
        })(marker, i));

        google.maps.event.addListener(marker, 'click', (function (marker, i) {

            return function () {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
                map.setZoom(12);
                map.setCenter(marker.getPosition());

                // Add Class Active On the Nav
                $('.c-l-l-inner').removeClass('active');
                $('#'+[i]).addClass('active');

                $('.contact-us-box-page .contact-tabs li').first().removeClass('active');
                $('.contact-us-box-page .contact-tabs li').last().addClass('active');

                $('.contact-us-box-page .contact-form').removeClass('active')
                $('.contact-us-box-page .contact-us-location').addClass('active');
            }
        })(marker, i));

    }
    autoCenter();
}
google.maps.event.addDomListener(window,'load',initialize);
function triggerClick(i) {
  google.maps.event.trigger(markers[i], 'click');
    //map.getBounds();
}



function autoCenter() {
    //  Create a new viewpoint bound
    var bounds = new google.maps.LatLngBounds();
    //  Go through each...
    for (var i = 0; i < markers.length; i++) {
        bounds.extend(markers[i].position);
    }
    //  Fit these bounds to the map
    map.fitBounds(bounds);
}
