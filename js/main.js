var resultado = document.getElementById("respuesta_precio");

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
    var procesor        = document.getElementById("procesador").value;
    var storage         = document.getElementById("discoDuro").value;
    var ram             = document.getElementById("memoriaRam").value;
    var cabinet         = document.getElementById("gabinete").value;
    var peripherals     = document.getElementById("perifericos").value;
    var monitor         = document.getElementById("pantalla").value;
    var workforce       = document.getElementById("manoObra").value;

    //var d = "nombre="+a+"&apellido="+b+"&edad="+c;


    xmlhttp.onreadystatechange = acciones;

    function acciones() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var mensaje = xmlhttp.responseText;
            resultado.innerHTML = mensaje;
        }
    }
    xmlhttp.open("POST", "cotizacion.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(monitor);


    

}