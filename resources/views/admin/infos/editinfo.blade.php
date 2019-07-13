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
    Edit Info
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
      <form id="form" method="post" action="{{ route('infos.update', $info->id) }}" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">phone:</label>
              <input type="text" class="form-control" required name="phone" value="{{$info->phone}}"/>
          </div>
          <div class="form-group">
            <label for="name">mobile:</label>
            <input type="text" class="form-control" required name="mobile" value="{{$info->mobile}}"/>
        </div>
          <div class="form-group">
            <label for="name">email:</label>
            <input type="text" class="form-control" required name="email" value="{{$info->email}}"/>
        </div>
          <div class="form-group">
            <label for="name">fax:</label>
            <input type="text" class="form-control" required name="fax" value="{{$info->fax}}"/>
        </div>

          <div class="form-group">
            <label for="name">address:</label>
            <input type="text" class="form-control" required name="address_1" value="{{$info->address_1}}"/>
        </div>
          <div class="form-group">
            <label for="name">address fa:</label>
            <input type="text" class="form-control" required name="address_1_fa" value="{{$info->address_1_fa}}"/>
        </div>
          <div class="form-group">
            <label for="name">address 2:</label>
            <input type="text" class="form-control"  name="address_2" value="{{$info->address_2}}"/>
        </div>
          <div class="form-group">
            <label for="name">address 2 fa:</label>
            <input type="text" class="form-control"  name="address_2_fa" value="{{$info->address_2_fa}}"/>
        </div>
          <div class="form-group">
            <label for="name">address 3:</label>
            <input type="text" class="form-control"  name="address_3" value="{{$info->address_3}}"/>
        </div>
          <div class="form-group">
            <label for="name">address 3 fa:</label>
            <input type="text" class="form-control"  name="address_3_fa" value="{{$info->address_3_fa}}"/>
        </div>

        <div class="form-group">
            <label for="name">Map:</label>
            <div id="map"></div>
            <div id="current">Nothing yet...</div>
        </div>
        <div class="form-group">
                <label for="name">Lat:</label>
        <input type="text" class="form-control"  name="lat" id="lat" value="{{$info->lat}}" />
            </div>
            <div class="form-group">
                    <label for="name">Lng:</label>
                    <input type="text" class="form-control"  name="lng" id="lng" value="{{$info->lng}}"/>
                </div>

                <div class="form-group">
                        <label for="des">about us :</label>
                        <input name="aboutus"  type="hidden">
                        <div id="summernote"> </div>
                    </div>
                    <div class="form-group">
                        <label for="des">about us fa:</label>
                        <input name="aboutus_fa"  type="hidden">
                        <div id="summernote_fa"> </div>
                    </div>


          <button type="submit" class="btn btn-primary">Update info</button>
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
       position: new google.maps.LatLng({{$info->lat}}, {{$info->lng}}),
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





    var toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'], // toggled buttons
        ['blockquote', 'code-block', 'image', 'link'],
        [{ header: 1 }, { header: 2 }], // custom button values
        [{ list: 'ordered' }, { list: 'bullet' }],
        [{ script: 'sub' }, { script: 'super' }], // superscript/subscript
        [{ indent: '-1' }, { indent: '+1' }], // outdent/indent
        [{ direction: 'rtl' }], // text direction
        [{ size: ['small', false, 'large', 'huge'] }], // custom dropdown
        [{ header: [1, 2, 3, 4, 5, 6, false] }],
        [{ color: [] }, { background: [] }], // dropdown with defaults from theme
        [{ font: [] }],
        [{ align: [] }],
        ['clean'] // remove formatting button
    ];
    var options = {
        modules: { toolbar: toolbarOptions },
        placeholder: 'Waiting for your precious content',
        theme: 'snow'
    };
    var editor = new Quill('#summernote', options);
    editor.root.innerHTML = '{!!html_entity_decode($info->aboutus)!!} ';
    var editor_fa = new Quill('#summernote_fa', options);
    editor_fa.root.innerHTML = '{!!html_entity_decode($info->aboutus_fa)!!} ';
    var form = document.getElementById('form'); // get form by ID
    form.onsubmit = function() {
        // onsubmit do this first
        var des = document.querySelector('input[name=aboutus]'); // set name input var
        var des_fa = document.querySelector('input[name=aboutus_fa]'); // set name input var
        des.value = editor.root.innerHTML;
        des_fa.value = editor_fa.root.innerHTML;
        return true; // submit form
    };
    </script>
@endsection
