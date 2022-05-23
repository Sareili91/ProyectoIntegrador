function evaluaDomicilio(){
var pais, localidad, codigoP, direccion, tel;
pais = document.getElementById("txtPais").value;
localidad = document.getElementById("txtLocalidad").value;
codigoP = document.getElementById("txtCodigoPostal").value;
direccion = document.getElementById("txtDireccion").value;
tel = document.getElementById("txtTelefono").value;

if(pais==="" || localidad==="" || codigoP==="" || direccion==="" || tel===""){
alert("Todos los campos deben llenarse");
return false;
}

if(isNaN(tel)){
    alert("El telefono no es valido");
    return false;
}

if(isNaN(codigoP)){
    alert("El código postal no es valido");
    return false;
}
}

function evaluaTarjeta(){
    var titular, dia, mes, tarjeta, codigoSeguridad;
    titular = document.getElementById("txtTitular").value;
    dia = document.getElementById("txtDia").value;
    mes = document.getElementById("txtMes").value;
    tarjeta = document.getElementById("txtTarjeta").value;
    codigoSeguridad = document.getElementById("txtCodigo").value;
    
    if(titular==="" || dia==="" || mes==="" || tarjeta==="" || codigoSeguridad===""){
        alert("Todos los campos deben llenarse");
        return false;
}

    if(isNaN(tarjeta)){
        alert("La tarjeta no es valida");
        return false;
    }

    if(isNaN(codigoSeguridad)){
        alert("El codigo de seguridad no es valido");
        return false;
    }

    if(isNaN(dia)){
        alert("El dia no es valido");
        return false;
    }

    if(isNaN(mes)){
        alert("El mes no es valido");
        return false;
    }
}