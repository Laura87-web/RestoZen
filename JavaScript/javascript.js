//alert("Funcionaaaa!!");

function validarDatosPost(){
    var verificar = true;
    let min = 6;
    var valorCampo = document.getElementById("usuario").value;
    let largo = valorCampo.toString().length;
    let caracteresPermitidos = /^[0-9a-zA-Z]+$/;
    let txt = valorCampo.toString();
    let largoPassword = document.formPost.password.value.toString().length;
   
    if (largo < min){
        verificar = false;
        alert ("Tu usuario debe tener al menos "+min+" caracteres");
        document.formPost.usuario.focus();
    }
    else if(!txt.match(caracteresPermitidos)){
        verificar = false;
        alert("Tu usuario solo puede tener letras y numeros");
        document.formPost.usuario.focus();
    }
    else if (!document.formPost.password.value){
        verificar = false;
        alert(" Te faltó la contraseña... :) ");
        document.formPost.password.focus();

    }
    else if (largoPassword < min){
        verificar = false;
        alert("Contraseña muy corta! al menos escribe 6 caracteres");
        document.formPost.password.focus();
    }

    if(verificar){ //si no ingresa a ningun if se envia el formulario
        document.formPost.submit();
    }
   
}


window.onload = function(){
    document.getElementById("ingresar").onclick = validarDatosPost;
}




/*function validar(min, idcampo){
    let valorCampo = document.getElementById(idcampo).value;
    let largo =valorCampo.toString().length;
    if (largo < min ){
        alert("El campo "+ idcampo +" deberia tener al menos " + min + " caracteres" );
        return false;
    }
    return true;
}

const soloAlfanumericos = (idcampo)=>{
    let txt = document.getElementById(idcampo).value.toString();
    let permitidos = /^[0-9a-zA-Z]+$/; 
    if(!txt.match(permitidos)){
        alert("El valor del campo debe ser alfanumerico");
        return false;
    }
    return true;
}

const ingresar = ()=> {
    if (validar(6,"usuario") && soloAlfanumericos("usuario") && validar(6,"password")){
       return true;
      }
      else{
          return false;
      }
}
*/
