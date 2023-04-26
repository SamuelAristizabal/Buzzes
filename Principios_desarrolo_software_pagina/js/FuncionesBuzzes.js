var lat1, lon1; // Variables globales

const log = position => {
  console.log(position);
  lat1 = position.coords.latitude;
  lon1 = position.coords.longitude;
  console.log(lat1);

  var lat2 = 40.7128; // Latitud de la ubicación 2
  var lon2 = -74.0060; // Longitud de la ubicación 2
  var d = distancia(lat1, lon1, lat2, lon2);

  var container = document.getElementById("container");
  var result = document.createElement("p");
  result.textContent = "La distancia entre las ubicaciones es de " + d + " km";
  container.appendChild(result);
};

const onLoad = () => {
  navigator.permissions.query({ name: 'geolocation' })
    .then(permissionStatus => {
      if (permissionStatus.state === 'granted') {
        navigator.geolocation.getCurrentPosition(log);
      } else if (permissionStatus.state === 'denied') {
        alert('No se concedió el permiso de geolocalización');
      } else {
        // El estado es 'prompt', lo que significa que se necesita interacción del usuario
        navigator.geolocation.getCurrentPosition(log, error => {
          alert('No se concedió el permiso de geolocalización');
        });
      }
    });
};

function distancia(lat1, lon1, lat2, lon2) {
  var radioTierra = 6371; // Radio de la Tierra en kilómetros
  var dLat = toRad(lat2 - lat1);
  var dLon = toRad(lon2 - lon1);
  var a =
    Math.sin(dLat / 2) * Math.sin(dLat / 2) +
    Math.cos(toRad(lat1)) *
      Math.cos(toRad(lat2)) *
      Math.sin(dLon / 2) *
      Math.sin(dLon / 2);
  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
  var d = radioTierra * c; // Distancia en kilómetros
  return d;
}

function toRad(valor) {
  return (valor * Math.PI) / 180;
}