function mueveReloj() {
    momentoActual = new Date()
    hora = momentoActual.getHours()
    minuto = momentoActual.getMinutes()
    segundo = momentoActual.getSeconds()
    momentoActual1 = new Date()
    ampm = "AM"


    str_segundo = new String(segundo)
    if (str_segundo.length == 1)
        segundo = "0" + segundo

    str_minuto = new String(minuto)
    if (str_minuto.length == 1)
        minuto = "0" + minuto

    str_hora = new String(hora)
    if (str_hora.length <= 12) {
        hora = hora - 12
        ampm = "AM"
    }

    if (str_hora.length < 10) {
        hora = "0" + hora
        ampm = "PM"
    }

    horaImprimible = hora + " : " + minuto + " : " + segundo + " " + ampm

    document.form_reloj.reloj.value = horaImprimible

    var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    var f = new Date();
    document.form_reloj1.reloj.value = f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear();


    setTimeout("mueveReloj()", 1000)
}

function ventana(theUrl, winName, virtual, myWidth, myHeigth, isCenter) {
    if (Window.screen)
        if (isCenter)
            if (isCenter == "true") {
                var myLeft = (screen.width - myWidth) / 2;
                var myTop = (screen.height - myHeigth) / 2;
                virtual += (virtual != "") ? ',' : '';
                virtual += ',left=' + myLeft + ',top=' + myTop;
            }
    window.open(theUrl, winName, virtual = ((virtual != "") ? ',' : '') + 'wigth=' + myWidth + ',heigth=' + myHeigth);

}

function asistente() {
    ventana('asistente.php', 'Asistente virtual', '', '900', '500', 'true')
}

function asistente2() {
    ventana('asistente2.php', 'Asistente virtual', '', '900', '500', 'true')
}

function g_cmd() {
    ventana('g_cmd.php', 'Guardar Comandos', '', '900', '500', 'true')
}

function dictar() {
    ventana('dictar.php', 'Guardar Comandos', '', '900', '1024', 'true')
}

function cmd() {
    ventana('cmd.php', 'Comandos', '', '900', '1024', 'true')
}
// Escribir lo que escucha.
artyom.redirectRecognizedTextOutput(function(text, isFinal) {
    var texto = $('#text');
    if (isFinal) {
        texto.val(text);
    } else {

    }
});


//inicializamos la libreria Artyom
function startArtyom() {
    artyom.initialize({
        lang: "es-ES",
        continuous: true, // Reconoce 1 solo comando y para de escuchar
        listen: true, // Iniciar !
        debug: true, // Muestra un informe en la consola
        speed: 1 // Habla normalmente
    });
};

// Stop libreria;
function stopArtyom() {
    artyom.fatality(); // Detener cualquier instancia previa
};