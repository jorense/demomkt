var markers = new Array();
var map;

var locations = [
    // Hong Kong
    ['\
    <div class="g-info">\
      <h4>Hong Kong, <span class="g-info-sm">China<span></h4>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/address.png" alt=""></span>\
        <div class="g-info-content">Level 2, The Long Beach Commercial Podium, 8 Hoi Fai Road, Kowloon</div>\
      </div>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/phone.png" alt=""></span>\
        <div class="g-info-content"><a href="tel:+852 2296 8818">+852 2296 8818 (for Solutions)</a></br><a href="tel:+852 2296 8998">+852 2296 8998 (for General)</a></div>\
      </div>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>\
        <div class="g-info-content"><a href="mailto:pccwsolutions@pccw.com">pccwsolutions@pccw.com</a></div>\
      </div>\
    </div>\
    ', 22.319446, 114.15627999999992],

    // Macau
    ['\
    <div class="g-info">\
      <h4>Macau, <span class="g-info-sm">China<span></h4>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/address.png" alt=""></span>\
        <div class="g-info-content">Unit B-C, 16 Floor, Macao Chamber of Commerce Building, 175, Rua De Xangai, Macau</div>\
      </div>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/phone.png" alt=""></span>\
        <div class="g-info-content">Live Chat</div>\
      </div>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>\
        <div class="g-info-content"><a href="mailto:pccwsolutions@pccw.com">pccwsolutions@pccw.com</a></div>\
      </div>\
    </div>\
    ', 22.1920649, 113.54750690000003],

    // Beijing
    ['\
    <div class="g-info">\
      <h4>Beijing, <span class="g-info-sm">China<span></h4>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/address.png" alt=""></span>\
        <div class="g-info-content">Floor 15, Tower B, Pacific Century Place, 2A Gong Ti Bei Road, Chaoyang District, Beijing</div>\
      </div>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/phone.png" alt=""></span>\
        <div class="g-info-content"><a href="tel:+86 10 5732 0828">+86 10 5732 0828</a></div>\
      </div>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>\
        <div class="g-info-content"><a href="mailto:pccwsolutions@pccw.com">pccwsolutions@pccw.com</a></div>\
      </div>\
    </div>\
    ', 39.90419989999999, 116.40739630000007],

    // Guangzhou
    ['\
    <div class="g-info">\
      <h4>Guangzhou, <span class="g-info-sm">China<span></h4>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/address.png" alt=""></span>\
        <div class="g-info-content">Rm 707-713, 7/F, Dong Bao Tower, 767 Dongfeng Dong Road, Guangzhou</div>\
      </div>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/phone.png" alt=""></span>\
        <div class="g-info-content"><a href="tel:+86 20 3832 0123">+86 20 3832 0123</a></div>\
      </div>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>\
        <div class="g-info-content"><a href="mailto:pccwsolutions@pccw.com">pccwsolutions@pccw.com</a></div>\
      </div>\
    </div>\
    ', 23.12911, 113.26438499999995],

    // Shanghai
    ['\
    <div class="g-info">\
      <h4>Shanghai, <span class="g-info-sm">China<span></h4>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/address.png" alt=""></span>\
        <div class="g-info-content">701-704/F,KIC Plaza, No. 333, Songhu Road, Yangpu District, Shanghai </div>\
      </div>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/phone.png" alt=""></span>\
        <div class="g-info-content"><a href="tel:+86 21 60651788">+86 21 60651788</a></div>\
      </div>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>\
        <div class="g-info-content"><a href="mailto:pccwsolutions@pccw.com">pccwsolutions@pccw.com</a></div>\
      </div>\
    </div>\
    ', 31.2303904, 121.47370209999997],

    // Xian
    ['\
    <div class="g-info">\
      <h4>Xian, <span class="g-info-sm">China<span></h4>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/address.png" alt=""></span>\
        <div class="g-info-content">Room 401, Qinfeng Pavilion, Xian Software Park, No. 68, Keji 2nd Road, Xian City</div>\
      </div>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/phone.png" alt=""></span>\
        <div class="g-info-content"><a href="tel:+86 29 6851 8188">+86 29 6851 8188</a></div>\
      </div>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>\
        <div class="g-info-content"><a href="mailto:pccwsolutions@pccw.com">pccwsolutions@pccw.com</a></div>\
      </div>\
    </div>\
    ', 34.341574, 108.93976999999995],

    // Shenzhen
    ['\
    <div class="g-info">\
      <h4>Shenzhen, <span class="g-info-sm">China<span></h4>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/address.png" alt=""></span>\
        <div class="g-info-content">2-3/F, Tower A, Building R3, Keyuan South Road, Hi-tech Industrial Park, Nanshan District, Shenzhen</div>\
      </div>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/phone.png" alt=""></span>\
        <div class="g-info-content"><a href="tel:+86 755 2658 8228">+86 755 2658 8228</a></div>\
      </div>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>\
        <div class="g-info-content"><a href="mailto:pccwsolutions@pccw.com">pccwsolutions@pccw.com</a></div>\
      </div>\
    </div>\
    ', 22.543096, 114.05786499999999],

    // Wuhan
    ['\
    <div class="g-info">\
      <h4>Wuhan, <span class="g-info-sm">China<span></h4>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/address.png" alt=""></span>\
        <div class="g-info-content">20/F, Tower A, Guomao Building, 562 Jianshe Road, Wuhan</div>\
      </div>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/phone.png" alt=""></span>\
        <div class="g-info-content"><a href="tel:+86 27 8535 7888">+86 27 8535 7888</a></div>\
      </div>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>\
        <div class="g-info-content"><a href="mailto:pccwsolutions@pccw.com">pccwsolutions@pccw.com</a></div>\
      </div>\
    </div>\
    ', 30.592849, 114.30553899999995],

    // PHILIPPINES
    ['\
    <div class="g-info">\
      <h4>Pasig City, <span class="g-info-sm">Philippines<span></h4>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/address.png" alt=""></span>\
        <div class="g-info-content">10th Floor, The 30th Corporate Center, 30 Meralco Avenue, Brgy. Ugong, Pasig City, Philippines 1605</div>\
      </div>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/phone.png" alt=""></span>\
        <div class="g-info-content"><a href="tel:+63 28805800">+63 28805800</a></div>\
      </div>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>\
        <div class="g-info-content"><a href="mailto:pccwsolutions@pccw.com">pccwsolutions@pccw.com</a></div>\
      </div>\
    </div>\
    ', 14.5805198, 121.06408579999993],

    // Singapore
    ['\
    <div class="g-info">\
      <h4>Singapore</h4>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/address.png" alt=""></span>\
        <div class="g-info-content">7 Temasek Boulevard, #17-03 Suntec City Tower 1, Singapore 038987</div>\
      </div>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>\
        <div class="g-info-content"><a href="mailto:pccwsolutions@pccw.com">pccwsolutions@pccw.com</a></div>\
      </div>\
    </div>\
    ', 1.2951272, 103.8599418],

    // Taiwan
    ['\
    <div class="g-info">\
      <h4>Taipei</h4>\
      <div class="g-info-c clearfix">\
        <span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>\
        <div class="g-info-content"><a href="mailto:pccwsolutions@pccw.com">pccwsolutions@pccw.com</a></div>\
      </div>\
    </div>\
    ', 25.0329694, 121.56541770000001],
];

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
