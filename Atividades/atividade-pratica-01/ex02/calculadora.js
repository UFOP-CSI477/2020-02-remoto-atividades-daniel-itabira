function inserir(parametro){
    
    if(document.getElementById('resultado').innerHTML == "Vazio..?"){
        document.getElementById('resultado').innerHTML = "";
    }

    let x = document.getElementById('resultado').innerHTML;
    document.getElementById('resultado').innerHTML = x + parametro;
}

function limpar(){
    document.getElementById('resultado').innerHTML = "";
}

function apagar(){

    let resultado = document.getElementById('resultado').innerHTML;
    document.getElementById('resultado').innerHTML = resultado.substring(0,resultado.length -1);
    
}

function calcular(){

    let resultado = document.getElementById('resultado').innerHTML;
    if(resultado) {
        document.getElementById('resultado').innerHTML = eval(resultado);
    }else{
        document.getElementById('resultado').innerHTML = "Vazio..?" 
    }

}
