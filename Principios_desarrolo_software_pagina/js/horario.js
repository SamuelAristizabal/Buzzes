// Datos de ejemplo
const busSchedule = [
    {route: "Ruta 1", departureTime: "15:00", arrivalTime: "21:00"},
    {route: "Ruta 2", departureTime: "15:30", arrivalTime: "22:30"},
    {route: "Ruta 3", departureTime: "23:00", arrivalTime: "00:00"}
];

// Agregar filas a la tabla
const table = document.getElementById("bus-schedule");
for (const bus of busSchedule) {
    const row = table.insertRow(-1);
    row.insertCell(0).innerHTML = bus.route;
    row.insertCell(1).innerHTML = bus.departureTime;
    row.insertCell(2).innerHTML = bus.arrivalTime;

    // Marcar como disponible si la hora actual es menor a la hora de salida
    const currentTime = new Date();
    const departureTime = new Date();
    const [departureHours, departureMinutes] = bus.departureTime.split(":");
    departureTime.setHours(departureHours);
    departureTime.setMinutes(departureMinutes);
    if (currentTime < departureTime) {
        row.classList.add("available");
    }
     else {
        row.classList.add("unavailable");
    }
}