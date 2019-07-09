@extends('layouts.app')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }

#map{
    width: 100%;
    height: 350px;
}
</style>


<div class="card uper">
  <div class="card-header">
    Add info
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form id="form"  method="post" action="{{ route('infos.store') }}" enctype="multipart/form-data">
              <div class="form-group">
                @csrf
            <label for="name">mobile:</label>
            <input type="text" class="form-control" required name="mobile" />
        </div>
        <div class="form-group">
                <label for="name">phone:</label>
                <input type="text" class="form-control" required name="phone" />
            </div>
          <div class="form-group">
            <label for="name">email:</label>
            <input type="text" class="form-control" required name="email" />
        </div>
          <div class="form-group">
            <label for="name">fax:</label>
            <input type="text" class="form-control" required name="fax" />
        </div>

          <div class="form-group">
            <label for="name">address:</label>
            <input type="text" class="form-control" required name="address_1" />
        </div>
          <div class="form-group">
            <label for="name">address:</label>
            <input type="text" class="form-control"  name="address_2" />
        </div>
          <div class="form-group">
            <label for="name">address:</label>
            <input type="text" class="form-control"  name="address_3" />
        </div>
          <div class="form-group">
            <label for="name">Map:</label>
            <div id="map"></div>
            <div id="current">Nothing yet...</div>
        </div>
        <div class="form-group">
                <label for="name">Lat:</label>
                <input type="text" class="form-control"  name="lat" id="lat" />
            </div>
            <div class="form-group">
                    <label for="name">Lng:</label>
                    <input type="text" class="form-control"  name="lng" id="lng"/>
                </div>

          <button type="submit" class="btn btn-primary">Create info</button>
      </form>
  </div>
</div>

<script>
 function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 1,
    center: new google.maps.LatLng(33.744879, 52.836914),
    mapTypeId: google.maps.MapTypeId.ROADMAP
});

var myMarker = new google.maps.Marker({
    position: new google.maps.LatLng(33.744879, 52.836914),
    draggable: true
});

google.maps.event.addListener(myMarker, 'dragend', function (evt) {
    document.getElementById('current').innerHTML = '<p>Marker dropped:  Lat: ' + evt.latLng.lat().toFixed(3) + '  Lng: ' + evt.latLng.lng().toFixed(3) + '</p>';
    document.getElementById("lat").value = evt.latLng.lat().toFixed(3);
    document.getElementById("lng").value = evt.latLng.lng().toFixed(3);
});

google.maps.event.addListener(myMarker, 'dragstart', function (evt) {
    document.getElementById('current').innerHTML = '<p>Currently dragging marker...</p>';
});

map.setCenter(myMarker.position);
myMarker.setMap(map);

 }
            </script>
@endsection
