function cambiar(){

var xmlhttp;
    if (window.XMLHttpRequest){
         //Navegadores Modernos
        xmlhttp = new XMLHttpRequest();
        console.log(xmlhttp)
    }else if(window.ActiveXObject){
        //Código para IE
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = acciones;
    function acciones (){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
          document.getElementById("Cotizar").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","cotizacion.php",true);
    xmlhttp.send();

}