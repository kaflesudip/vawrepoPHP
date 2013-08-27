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




	

		function onEachFeature(feature, layer) {
			
layer.setStyle({
				fillColor: 'blue',
				weight: 5,
				color: '#666',
				dashArray: '',
				fillOpacity: 0.7
			});

		}
	
		
function style(feature) {
	
    return {
        fillColor: '#f03',
        weight: 2,
        opacity: 1,
        color: 'blue',
        dashArray: '3',
        fillOpacity: 0.7
    };
}


  $.getJSON("r-pr-upr-school/2011",function(json){
  jsonvalues = json;
   geojson = L.geoJson(districtmap, {
			style: style,
			onEachFeature: onEachFeature
		}).addTo(map); 
       
    }); 

