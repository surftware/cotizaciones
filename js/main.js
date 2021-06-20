/********     Cotizador Ajax    *******/

var resultado = document.getElementById("respuestaMother");

function cambiar() {

    var xmlhttp;
    if (window.XMLHttpRequest) {
        //Navegadores Modernos
        xmlhttp = new XMLHttpRequest();
        console.log(xmlhttp)
    } else if (window.ActiveXObject) {
        //Código para IE
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    var motherBoard     = document.getElementById("tarjetaMadre").value;
    /*var procesor        = document.getElementById("procesador").value;
    var storage         = document.getElementById("almac").value;
    var ram             = document.getElementById("RAM").value;
    var cabinet         = document.getElementById("Gabinete").value;
    var peripherals     = document.getElementById("Kit").value;
    var monitor         = document.getElementById("pantalla").value;
    var workforce       = document.getElementById("manoObra").value;*/

    var respuesta1 = "tarjetaMadre="+motherBoard;
    
    xmlhttp.onreadystatechange = acciones;

    function acciones() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var mensaje = xmlhttp.responseText;
            resultado.innerHTML = mensaje;
        }
    }
    xmlhttp.open("POST", "cotizacion.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(respuesta1);
    
}

/********     Cotizador Ajax    ********/