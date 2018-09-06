var myOptions, map;

function init() {
  $('.map').each(function (index, Element) {
      var coords = $(Element).text().split(",");
      if (coords.length != 3) {
          $(this).display = "none";
          return;
      }
      var latlng = new google.maps.LatLng(parseFloat(coords[0]), parseFloat(coords[1]));

      var myOptions = {
          zoom: 9,
          center: latlng,
          linksControl: false,
          panControl: false,
          addressControl: false,
          enableCloseButton: false,
          zoomControl: false,
          fullscreenControl: false,
          gestureHandling: 'none',
          // gestureHandling: 'greedy',
          styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#c7eced"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#fac8a8"},{"lightness":40}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#44828f"},{"lightness":10}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
      };
      var map = new google.maps.Map(Element, myOptions);

  });
}


$(document).ready(function(){
  init();
  $('.show-map').click(function(Element){
    google.maps.event.trigger(window, 'resize', init);
    // map.setCenter(myOptions.center);
  });
});

// lazyload
function lazyloader() {
  $('.d-infinitum .lazyload').lazyload({
  	threshold: 100,
  	trigger: "appear mousedown touchstart",
  	load: function(){
  		init();
  		setTimeout(function(){
  			google.maps.event.trigger(window, 'resize', init);
  		}, 100);
  }});
}

lazyloader();

$('.filter-option').on('change', function(){
  $.lazyload.check();
});
