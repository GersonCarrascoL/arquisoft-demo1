function getValueOrigen(sel){
    var value = JSON.parse(sel.value);
    $('#nombre_origen').val(value.nombre);
    $('#pais_origen').val(value.pais);
    $('#ciudad_origen').val(value.ciudad);
    $('#id_origen').val(value.id);    
}

function getValueDestino(sel){
    var value = JSON.parse(sel.value);
    $('#nombre_destino').val(value.nombre);
    $('#pais_destino').val(value.pais);
    $('#ciudad_destino').val(value.ciudad);
    $('#id_destino').val(value.id);
}

function getValueAvion(sel){
    var value = JSON.parse(sel.value);
    console.log(value);
    $('#avion_matricula').val(value.matricula);
    $('#avion_modelo').val(value.modelo);
    $('#avion_capacidad').val(value.capacidad);
    $('#avion_fabricante').val(value.fabricante);
    $('#avion_autonomia').val(value.autonomia);
    $('#id_avion').val(value.id);
}