var year = 2011;
var parameter = 'p-female-teacher';
var limits = {};


var dxcord = 84.4; var dycord = 28.48; var mapzoomlevel=7; 

var map = L.map('map').setView([dycord, dxcord],mapzoomlevel); //28.48, 84.4], 7);

		L.tileLayer('http://{s}.tile.cloudmade.com/{key}/22677/256/{z}/{x}/{y}.png', {
			attribution: 'Educational Data Mining, Pulchwok Campus, 2013',
			key: 'BC9A493B41014CAABB98F0471D759707'
		}).addTo(map);

		var baseballIcon = L.icon({
			iconUrl: 'baseball-marker.png',
			iconSize: [32, 37],
			iconAnchor: [16, 37],
			popupAnchor: [0, -28]
		});
var dist = {};
var jsonvalues;





		function resetHighlight(e) {
			//geojson.resetStyle(e.target);
			info.update();
		}

		function zoomToFeature(e) {


			popup
				.setLatLng(e.latlng)
				.setContent("You clicked the map at " + e.latlng.toString())
				.openOn(map);
		

			// map.fitBounds(e.target.getBounds());
		}

function highlightFeature(e) {
			var layer = e.target;

			// layer.setStyle({
			// 	weight: 5,
			// 	color: '#666',
			// 	dashArray: '',
			// 	fillOpacity: 0.7
			// });

			if (!L.Browser.ie && !L.Browser.opera) {
				layer.bringToFront();
			}

			info.update(layer.feature.properties);
		}


	

		function onEachFeature(feature, layer) {

		
			layer.on({
				mouseover: highlightFeature,
				mouseout: resetHighlight,
				click: zoomToFeature
			});

			var districtname = (layer.feature.properties.Name).toLowerCase();

			districtname = districtname.charAt(0).toUpperCase() + districtname.slice(1);
			if(districtname=="Kathmandu")
				clr = "#000000";
			else
				clr = "#ffffff";

			
			
layer.setStyle({

				fillColor: clr,
				weight: 0.5,
				color: '#000000',
				dashArray: '0',
				fillOpacity: 1
			});

		}
	
		
function style(feature) {
	
    return {
        fillColor: '#f03',
        weight: 5,
        opacity: 1,
        color: '#000000',
        dashArray: '3',
        fillOpacity: 0
    };
}







   geojson = L.geoJson(districtmap, {
			style: style,
			onEachFeature: onEachFeature
		}).addTo(map);     
   
   


