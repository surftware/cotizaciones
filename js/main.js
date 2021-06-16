var resultado = document.getElementById("demo");

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

    var a = document.getElementById("nombre").value;
    var b = document.getElementById("apellido").value;
    var c = document.getElementById("edad").value;

    var d = "nombre="+a+"&apellido="+b+"&edad="+c;

    xmlhttp.onreadystatechange = acciones;

    function acciones() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var mensaje = xmlhttp.responseText;
            resultado.innerHTML = mensaje;
        }
    }
    xmlhttp.open("POST", "cotizacion.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(d);

}