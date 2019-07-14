<div id="dir" >
    <label> </label>
    {{--  <input id="searchInput" class="controls" type="text" name="place[]" >--}}
    <div id="map" class="border-bottom" style="height: 500px"></div>
    <ul id="geoData" style="display:none;">
        <li>Full Address: <span id="location"></span></li>
        <li>Postal Code: <span id="postal_code"></span></li>
        <li>Country: <span id="country"></span></li>


        <li>Latitude: <span id="lat"></span></li>
        <li>Longitude: <span id="lon"></span></li>
    </ul>


</div>

@section('scripts')
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            var uluru = {lat: 31.040949, lng: 31.378469};
            // The map, centered at Uluru
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 3,
                center: uluru
            });
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsT140mx0UuES7ZwcfY28HuTUrTnDhxww">
    </script>
@endsection
