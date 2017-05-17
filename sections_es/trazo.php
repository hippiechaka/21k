
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>




    <div id="map"></div>
    <script>

      // This example creates a 2-pixel-wide red polyline showing the path of William
      // Kingsford Smith's first trans-Pacific flight between Oakland, CA, and
      // Brisbane, Australia.

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 3,
          center: {lat: 0, lng: -180},
          mapTypeId: 'terrain'
        });

        var flightPlanCoordinates = [
          // {lat: 37.772, lng: -122.214},
          // {lat: 21.291, lng: -157.821},
          // {lat: -18.142, lng: 178.431},
          // {lat: -27.467, lng: 153.027}


{lat: 20.706838, lng: -105.299320},
{lat: 20.707403, lng: -105.293420},
{lat: 20.699318, lng: -105.292763},
{lat: 20.691319, lng: -105.288518},
{lat: 20.693908, lng: -105.288611},
{lat: 20.700298, lng: -105.289152},
{lat: 20.700022, lng: -105.277694},
{lat: 20.698195, lng: -105.281926},
{lat: 20.699618, lng: -105.291943},
{lat: 20.706693, lng: -105.292880},
{lat: 20.708881, lng: -105.299993},
{lat: 20.718045, lng: -105.303798},
{lat: 20.725868, lng: -105.307313},
{lat: 20.735852, lng: -105.313512},
{lat: 20.740773, lng: -105.319668},
{lat: 20.738409, lng: -105.317855},
{lat: 20.735046, lng: -105.313158},
{lat: 20.724112, lng: -105.306819},
{lat: 20.716199, lng: -105.303326},
{lat: 20.707165, lng: -105.299637},
{lat: 20.698384, lng: -105.296176}



        ];
        var flightPath = new google.maps.Polyline({
          path: flightPlanCoordinates,
          geodesic: true,
          strokeColor: '#FF0000',
          strokeOpacity: 1.0,
          strokeWeight: 2
        });

        flightPath.setMap(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIJ9XX2ZvRKCJcFRrl-lRanEtFUow4piM&callback=initMap">
    </script>

