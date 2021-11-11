
function ventana(){
    $('#ventana').modal('show');
}

function start_reporte(luminaria){

  $('#start_reporte').modal('show');
}

const iconos = {
  ok: repositorio + "pin.png"
};

var mapProp= {
  center: new google.maps.LatLng(19.2611411,-103.7488254),
  zoom:16,
  styles: estilo,
  disableDefaultUI: true,
  minZoom: 13, 
  maxZoom: 19
};

$(document).ready(function()
{
    const map = new google.maps.Map(document.getElementById("map"),mapProp);
    var bounds = new google.maps.LatLngBounds();

  for ( var i = 0; i < luminarias.length; i++ )
  {
    var luminaria = luminarias[ i ];
    var infowindow = new google.maps.InfoWindow();
    var position = new google.maps.LatLng( luminaria.lat, luminaria.lng );
   
    bounds.extend( position );
    
    var marker = new google.maps.Marker({
        map: map, 
        icon: iconos['ok'],
        position: position, 
       // title: luminaria[ 3 ] + (luminaria[ 5 ] ? luminaria[ 5 ] : "")
    });

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() {
         var id   = 'L3-3445',
             html = '<h1 class="text-primary">' +id+ '</h1><ul><li>Calle: '+ luminarias[i].data.calle + '</li><li>Colonia: Nombre de colonia</li><li>Ubicación: ' + luminarias[i].data.lado + '</li><li>Tipo: LED</li></ul><br> <button luminaria="L3-3445" onclick="start_reporte(\'' +id+ '\')" class="btn btn-primary col-12">Reportar problema <i class="i-derecha"></i></button>';
        infowindow.setContent(html);
        infowindow.open(map, marker);
      }
    })(marker, i));

  };

if(luminarias.length)
  map.fitBounds( bounds ); 

});



var estilo = [{"elementType":"geometry","stylers":[{"color":"#d9d9d9"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#f5f5f5"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#bdbdbd"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#dadada"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#c9c9c9"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#c6cbcd"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]}];