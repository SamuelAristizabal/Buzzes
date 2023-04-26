// Datos de ejemplo
const busSchedule = [
    {route: "Ruta 1", departureTime: "05:00", arrivalTime: "21:00"},
    {route: "Ruta 2", departureTime: "09:30", arrivalTime: "10:30"},
    {route: "Ruta 3", departureTime: "11:00", arrivalTime: "12:00"}
];

// Agregar filas a la tabla
const table = document.getElementById("bus-schedule");
for (const bus of busSchedule) {
    const row = table.insertRow(-1);
    row.insertCell(0).innerHTML = bus.route;
    row.insertCell(1).innerHTML = bus.departureTime;
    row.insertCell(2).innerHTML = bus.arrivalTime;

    // Marcar como disponible o no disponible según la hora actual
    const currentTime = new Date();
    const departureTime = new Date();
    const [departureHours, departureMinutes] = bus.departureTime.split(":");
    departureTime.setHours(departureHours);
    departureTime.setMinutes(departureMinutes);
    if (currentTime < departureTime) {
        row.classList.add("available");
    } else {
        row.classList.add("unavailable");
    }
}