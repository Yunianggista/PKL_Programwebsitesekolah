@extends('layouts.nav')

@section('content')
<div class="wrapper row4">
  <div id="container"  class="clear">
    <!-- ####################################################################################################### -->
    <div style="min-height: 60vh" id="a" class="clear"></div>
  </div>
</div>
<script>
function myMap() {
var myLatLng = {lat: -7.4027, lng: 109.9338 };

        var map = new google.maps.Map(document.getElementById('a'), {
          zoom: 16,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
}
</script>
@endsection