var lat
var lon
getLocation()

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  lat = position.coords.latitude;
  lon = position.coords.longitude;
  test(String(lat), String(lon))
}

function test(latitude, longitude){
    $.getJSON("https://us1.locationiq.com/v1/reverse.php?key=pk.3092058d79ca7b3ac5f39fea8a6328b0&lat="+latitude+"&lon="+longitude+"&format=json", 
        function(data){
            if(data.address.city){
                var kota = data.address.city;
            }
            else var kota = data.address.state;
            
            $('#lokasi').html(kota);
        }
    )
    
}
