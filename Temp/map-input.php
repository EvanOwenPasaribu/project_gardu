<?php
include 'locations_model.php';
//get_unconfirmed_locations();exit;
?>

    <script>
        /**
         * Create new map
         */
        var infowindow;
        var map;
        var red_icon =  'http://maps.google.com/mapfiles/ms/icons/red-dot.png' ;
        var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;
        var locations = <?php get_all_locations() ?>;
        var myOptions = {
            zoom: 5,
            center: new google.maps.LatLng(-0.789275, 113.921327),
            mapTypeId: 'roadmap'
        };
        map = new google.maps.Map(document.getElementById('map-input'), myOptions);

        /**
         * Global marker object that holds all markers.
         * @type {Object.<string, google.maps.LatLng>}
         */
        var markers = {};

        /**
         * Concatenates given lat and lng with an underscore and returns it.
         * This id will be used as a key of marker to cache the marker in markers object.
         * @param {!number} lat Latitude.
         * @param {!number} lng Longitude.
         * @return {string} Concatenated marker id.
         */
        var getMarkerUniqueId= function(lat, lng) {
            return lat + '_' + lng;
        };

        /**
         * Creates an instance of google.maps.LatLng by given lat and lng values and returns it.
         * This function can be useful for getting new coordinates quickly.
         * @param {!number} lat Latitude.
         * @param {!number} lng Longitude.
         * @return {google.maps.LatLng} An instance of google.maps.LatLng object
         */
        var getLatLng = function(lat, lng) {
            return new google.maps.LatLng(lat, lng);
        };

        /**
         * Binds click event to given map and invokes a callback that appends a new marker to clicked location.
         */
        var addMarker = google.maps.event.addListener(map, 'click', function(e) {
            var lat = e.latLng.lat(); // lat of clicked point
            var lng = e.latLng.lng(); // lng of clicked point
            var markerId = getMarkerUniqueId(lat, lng); // an that will be used to cache this marker in markers object.
            var marker = new google.maps.Marker({
                position: getLatLng(lat, lng),
                map: map,
                animation: google.maps.Animation.DROP,
                id: 'marker_' + markerId,
                html: "    <div id='info_"+markerId+"'>\n" +
                "        <table class=\"map1\">\n" +
                "            <tr>\n" +
                "                <td><a>Kode Gardu Trafo:</a></td>\n" +
                "                <td><input type='text' id='kode'></td>\n </tr>" +
                "            <tr>\n" +
                "                <td><a>Alamat Gardu Trafo:</a></td>\n" +
                "                <td><input type='text' id='alamat'></td>\n </tr>" +                    
                "             <tr>\n" +
                "                <td><a>Daya Gardu Trafo:</a></td>\n" +
                "                <td><input type='number' id='daya' min='0'></td>\n </tr>" +
                "             <tr>\n" +
                "                <td><a>Penyulang Gardu Trafo:</a></td>\n" +
                "                <td><input type='text' id='penyulang'></td>\n </tr>" +            
                "            <tr><td></td><td><input type='button' value='Save' onclick='saveData("+lat+","+lng+")'/></td></tr>\n" +
                "        </table>\n" +
                "    </div>"
            });
            markers[markerId] = marker; // cache marker in markers object
            bindMarkerEvents(marker); // bind right click event to marker
            bindMarkerinfo(marker); // bind infowindow with click event to marker
        });

        var bindMarkerinfo = function(marker) {
            google.maps.event.addListener(marker, "click", function (point) {
                var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); // get marker id by using clicked point's coordinate
                var marker = markers[markerId]; // find marker
                infowindow = new google.maps.InfoWindow();
                infowindow.setContent(marker.html);
                infowindow.open(map, marker);
                // removeMarker(marker, markerId); // remove it
                alert("Cliker")
            });
        };

        var bindMarkerEvents = function(marker) {
            google.maps.event.addListener(marker, "rightclick", function (point) {
                var markerId = getMarkerUniqueId(point.latLng.lat(), point.latLng.lng()); // get marker id by using clicked point's coordinate
                var marker = markers[markerId]; // find marker
                removeMarker(marker, markerId); // remove it
            });
        };

        var removeMarker = function(marker, markerId) {
            marker.setMap(null); // set markers setMap to null to remove it from map
            delete markers[markerId]; // delete marker instance from markers object
        };


        /**
         * loop through (Mysql) dynamic locations to add markers to map.
         */
        var confirmed = 0;
        generate_map()
        function generate_map(){
            for (var i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map,
                    icon :  red_icon,
                    html: "    <div>\n" +
                    "        <table class=\"map1\">\n" +
                    "            <tr>\n" +
                    "                <td><a>Kode Gardu Trafou:</a></td>\n" +
                    "                <td><input type='text' id='kode' value='" + locations[i][3] + "'></td>\n </tr>" +
                    "            <tr>\n" +
                    "                <td><a>Alamat Gardu Trafo:</a></td>\n" +
                    "                <td><input type='text' id='alamat' value='" + locations[i][4] + "'></td>\n </tr>" +                    
                    "             <tr>\n" +
                    "                <td><a>Daya Gardu Trafo:</a></td>\n" +
                    "                <td><input type='number' id='daya' value='" + locations[i][5] + "' min='0'></td>\n </tr>" +
                    "             <tr>\n" +
                    "                <td><a>Penyulang Gardu Trafo:</a></td>\n" +
                    "                <td><input type='text' id='penyulang' value='" + locations[i][6] + "'></td>\n </tr>" +            
                    "        </table>\n" +
                    "    </div>"
                });

                // bindMarkerinfo(marker);

                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow = new google.maps.InfoWindow();
                        //confirmed =  locations[i][4] === '1' ?  'checked'  :  0;
                        // $("#confirmed").prop(confirmed,locations[i][4]);
                        // $("#id").val(locations[i][0]);
                        // $("#kode").val(locations[i][3]);
                        // $("#alamat").val(locations[i][4]);
                        // $("#daya").val(locations[i][5]);
                        // $("#penyulang").val(locations[i][6]);
                        // $("#form").show();
                        infowindow.setContent(marker.html);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }
        }

        /**
         * SAVE save marker from map.
         * @param lat  A latitude of marker.
         * @param lng A longitude of marker.
         */
        function saveData(lat,lng) {
            var kode = document.getElementById('kode').value;
            var alamat = document.getElementById('alamat').value;
            var daya = document.getElementById('daya').value;
            var penyulang = document.getElementById('penyulang').value;
            var url = 'locations_model.php?add_location&kode=' + kode + '&alamat=' + alamat + '&daya=' + daya + '&penyulang=' + penyulang + '&lat=' + lat + '&lng=' + lng;
            
            locations.push([1,lat,lng,kode,alamat,daya,penyulang]);

            downloadUrl(url, function(data, responseCode) {
                if (responseCode === 200  && data.length > 1) {
                    var markerId = getMarkerUniqueId(lat,lng); // get marker id by using clicked point's coordinate
                    var manual_marker = markers[markerId]; // find marker
                    manual_marker.setIcon(red_icon);
                    infowindow.close();
                    infowindow.setContent("<div style=' color: purple; font-size: 25px;'> lokasi Sudah Tersimpan!!</div>");
                    infowindow.open(map, manual_marker);
                    generate_map()
                }else{
                    console.log(responseCode);
                    console.log(data);
                    infowindow.setContent("<div style='color: red; font-size: 25px;'>Inserting Errors</div>");
                }
            });
        }

        function downloadUrl(url, callback) {
            var request = window.ActiveXObject ?
                new ActiveXObject('Microsoft.XMLHTTP') :
                new XMLHttpRequest;
            request.onreadystatechange = function() {
                if (request.readyState == 4) {
                    callback(request.responseText, request.status);
                }
            };

            request.open('GET', url, true);
            request.send(null);
        }

    </script>

    