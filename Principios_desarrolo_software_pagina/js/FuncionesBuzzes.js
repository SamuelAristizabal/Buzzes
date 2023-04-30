const log = position => {
  console.log(position);
  lat1 = position.coords.latitude;
  lon1 = position.coords.longitude;
  console.log(lat1);
};

const distanciaEntreCoordenadas = (lat1, lon1, lat2, lon2) => {
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
};

const enviarCoordenadas = (latitud, longitud) => {
  var lat2 = latitud; // Latitud de la ubicación 2
  var lon2 = longitud; // Longitud de la ubicación 2
  var d = distanciaEntreCoordenadas(lat1, lon1, lat2, lon2);

  var container = document.getElementById("container");
  var result = document.createElement("p");
  result.textContent = "La distancia entre las ubicaciones es de " + d + " km";
  container.appendChild(result);
};
