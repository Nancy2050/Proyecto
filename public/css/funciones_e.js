function validarImagen(obj){
    var uploadFile = obj.files[0];

    if (!window.FileReader) {
        alert('El navegador no soporta la lectura de archivos');
        return;
    }

    if (!(/\.(jpg|png|gif)$/i).test(uploadFile.name)) {
        alert('El archivo a adjuntar no es una imagen');
    }
    else {
        var img = new Image();
        img.onload = function () {
            if (this.width.toFixed(0) != 200 && this.height.toFixed(0) != 200) {
                alert('Las medidas deben ser: 200 * 200');
            }
            else if (uploadFile.size > 20000)
            {
                alert('El peso de la imagen no puede exceder los 200kb')
            }
            else {
                alert('Imagen correcta :)')                
            }
        };
        img.src = URL.createObjectURL(uploadFile);
    }                 
}
function menu_es(){
var val=validar();
if(val==true){
/*AQUI VA CODIGO PARA AGREGAR LOS VALORES DE LOS CAMPOS EN LA BASE DE DATOS*/
    alert("Se creo con exito :)");
}else{
    alert("Error");
}
}
function validar(){
    valor = document.getElementById("campo").value;
    if( valor == null || valor.length == 0 || /^\s+$/.test(document.getElementById("nombre").value))
{
    alert('Hay un error en el nombre');
    document.getElementById("nombre").style.backgroundColor='red';
    document.getElementById("nombre").focus();
    return false;
}else{
/*VALIDA CONTRASEÑA
    La contraseña debe tener al entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula.
NO puede tener otros símbolos.*/
if(!(/^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+)+[\s]*([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])*[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])*?$/.test(document.getElementById("caracteristicas").value)))
{
    alert('Hay un error en la descripcion');
    document.getElementById("Descripcion").style.backgroundColor='red';
    document.getElementById("Descripcion").focus();
    return false;

    }else if(!(/(\+52|0052|52)?[ -]*([0-9][ -]*){10}$/.test(document.getElementById("precio").value))){
        /*VALIDA TELEFONO
   Se debe o no incluir el codigo del pais, y de ahi diez digitos del numero*/
        alert('Hay un error en el precio');
        document.getElementById("precio").style.backgroundColor='red';
        document.getElementById("precio").focus();
        return false;
        
    }else{
        return true;
    }

    }


}