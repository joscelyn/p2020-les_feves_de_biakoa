
  function initMap() {
    var uluru = {lat: -25.363, lng: 131.044};
    var map = new google.maps.Map(document.querySelector('.googleMap'), {
      zoom: 4,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }


  var slider = tns({
      container: '.partners__slider',
      items: 5,
      nav: false,
      controlsContainer: '.partners__controls'
  });
