function calcular() {
    var tipo = document.getElementById("tipo").value;
    var cantidad = document.getElementById("cantidad").value;
    var costo = 2850;
    var total;
   if(cantidad>=0){
    if (tipo == "diario") {
        total = costo * cantidad;
    } else if (tipo == "semanal") {
        total = (7 * costo) * cantidad;
    } else if (tipo == "mensual") {
        total = (31 * costo) * cantidad;
    }
}
else{
    alert('No se puede tener pasajes en negativo');
}
    document.getElementById("resultado").innerHTML = "El costo total es: $" + total;
}