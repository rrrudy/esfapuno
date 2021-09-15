function iniciarMap(){
    var coord = {lat:-15.8391127 ,lng: -70.0246335};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}
