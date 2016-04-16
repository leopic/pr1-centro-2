// Manejo de fechas en JS:

// Fecha de hoy
var hoy = new Date();
console.log('Fecha del navegador:', hoy);

// Componentes de las fechas
var dia = asegurarDobleDigito(hoy.getDate());
var ano = hoy.getFullYear();
var mes = hoy.getMonth();

// Mes es un array con offset 0, hay que agregarle 1
mes++;

// Nos aseguramos que tenga la misma forma que el día
mes = asegurarDobleDigito(mes);

// Juntemos los componentes
var fechaCompleta = ano + '-' + mes + '-' + dia;
console.log('Fecha de hoy:', fechaCompleta);

// Obtengamos la hora
var horas = asegurarDobleDigito(hoy.getHours());
var minutos = asegurarDobleDigito(hoy.getMinutes());
var segundos = asegurarDobleDigito(hoy.getSeconds());

// Juntamos los componentes
var horaCompleta = horas + ':' + minutos + ':' + segundos;
console.log('Hora actual:', horaCompleta);

// Paso final
var horaFechaCompleta = fechaCompleta + ' ' + horaCompleta;
console.log('Hora/Fecha completa:', horaFechaCompleta);

// // Algunos valores no regresan los ceros alrededor de las fechas
function asegurarDobleDigito(valor) {
    if (valor < 10) {
        return  '0' + valor;
    } else {
        return valor
    }
}
