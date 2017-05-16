/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function validaNumeros(e){
    tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite
    if (tecla===8){
       return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function validaLetrasYEspacio(e){
    tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite
    if (tecla===8){
       return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[a-zA-Z" "]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function validaLetrasEspacioYNumeros(e){
    tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite
    if (tecla===8){
       return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[a-zA-Z0-9" "]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}




