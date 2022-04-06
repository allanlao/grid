<template>
  <AppLayout>
    <div id="map" class="h-screen w-full bg-gray-100">not showing</div>
  </AppLayout>
</template>

<script>
import "leaflet/dist/leaflet.css";
import L from "leaflet";

import { onMounted } from "@vue/runtime-core";
export default {
  components: { L },

    props: {
    errors: Object,
    nodes: Array,
    paths: Array,
  },
  setup(props) {
    let map;
    var greenIcon = new L.icon({
      iconUrl:
        "https://api.geoapify.com/v1/icon/?type=material&color=red&size=small&icon=cloud&iconType=awesome&apiKey=ba768d6c9d5d4a5c91622419a8970a6e",
      iconSize: [25, 37], // size of the icon
      iconAnchor: [13, 34], // point of the icon which will correspond to marker's location
      popupAnchor: [0, -51], // point from which the popup should open relative to the iconAnchor
    });

  

    var tiles = L.tileLayer(
      "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiYWxsYW5yb3NhbGxhbyIsImEiOiJjbDE3ajFhdWExcGw5M3JuMXl6dGlsaWdyIn0.l8Qa7rrf6yqhY-OPY5raxA",
      {
        attribution:
          'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: "mapbox/streets-v8",
        tileSize: 512,
        zoomOffset: -1,
        accessToken:
          "pk.eyJ1IjoiYWxsYW5yb3NhbGxhbyIsImEiOiJjbDE3ajFhdWExcGw5M3JuMXl6dGlsaWdyIn0.l8Qa7rrf6yqhY-OPY5raxA",
      }
    );

 //build the markers
    var towers =new L.layerGroup();
    var connections =new L.layerGroup();

   props.nodes.forEach(element => {

      L.marker([parseFloat(element.lat), parseFloat(element.long)], { icon: greenIcon }).bindPopup(element.name).openPopup().addTo(towers);

    });


  var polyline; 
       props.paths.forEach(element => {

       var lat = element.nodeA.lat;

       console.log((element.nodeA.lat));

    /*  L.polyline( [
        [parseFloat(element.nodeA.lat), parseFloat(element.nodeA.long)],
         [parseFloat(element.nodeB.lat), parseFloat(element.nodeB.long)],
      ], { color: "red" }).addTo(connections);

      */
  
    });


    var baseMaps = {
      Tile: tiles,
    };

    var overlayMaps = {
      Towers: towers,
      Lines: lines,
      
    };

    onMounted(() => {
     
      map = L.map("map", {
        layers: [towers,tiles],
        center: [17.420725096886095, 121.43240686416075],
    zoom: 9
      });

      L.control.layers(baseMaps, overlayMaps).addTo(map);

      // create a red polyline from an array of LatLng points
      /*var latlngs = [
        [m1._latlng.lat, m1._latlng.lng],
        [17.61867361931853, 121.71594065214276],
      ];

      var polyline = L.polyline(latlngs, { color: "red" }).addTo(map);
*/
      // zoom the map to the polyline
  //    map.fitBounds(polyline.getBounds());
    });

    return {};
  },
};
</script>

