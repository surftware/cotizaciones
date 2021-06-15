var resultado = document.getElementById("info");

function cotizar(){

    var xmlhttp;
    if (window.XMLHttpRequest){
        //Navegadores Modernos
        xmlhttp = new XMLHttpRequest();
    }else if {
        //Microsoft IE
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    var a = document.getElementById("nombre").value;
    var b = documnet.getElementById("apellido").value;
    var informacionDelUsuario = "nombre" +a+"$apellido"+b;

    xmlhttp.onreadystatechange = function {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var mensaje = xmlhttp.responseText;
            resultado.innerHTML = mensaje;
        }
    }

    xmlhttp.open("GET", "cotizaion.php", true);
    xmlhttp.send(informacionDelUsuario);
}
