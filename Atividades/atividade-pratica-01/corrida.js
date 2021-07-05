let arrayCompetidores = [];

function somenteNumeros(num) {
    var er = /[^0-9.]/;
    er.lastIndex = 0;
    var campo = num;
    if (er.test(campo.value)) {
      campo.value = "";
    }
}

function classificarDados() {

    for (let index = 1; index <= 6; index++) {
        const largada = index;
        const nome = document.querySelector("#nomeCompetidor" + `${index}`);
        const tempo = document.querySelector("#tempoCompetidor" + `${index}`);
        console.log(nome.value)

        let obj = {
            largada: parseInt(largada),
            name: nome.value,
            time: parseInt(tempo.value),
            resultado: "--",

        };

        arrayCompetidores.push(obj);
    }

    document.getElementById("btnLimpar").click();
    arrayCompetidores.sort(ordenarPorTempo)
    compararVencedores();
    desfragmentarObjeto();

}

function ordenarPorTempo(a, b) {
    return a.time - b.time;
}

function compararVencedores() {


    for (let index = 0; index < 6; index++) {

        if (index == 0) {
            arrayCompetidores[index].resultado = "Vencedor(a)!"
        } else {

            if (arrayCompetidores[index].time == arrayCompetidores[0].time) {
                arrayCompetidores[index].resultado = "Vencedor(a)!";
            }

        }
    }

}

function desfragmentarObjeto() {

    let tbody = document.getElementById('tbody');
    tbody.innerText = "";


    for (let index = 0; index < 6; index++) {


        let tr = tbody.insertRow();

        let td_posicao = tr.insertCell();
        let td_largada = tr.insertCell();
        let td_nome = tr.insertCell();
        let td_tempo = tr.insertCell();
        let td_resultado = tr.insertCell();

        td_posicao.innerText = index + 1;
        td_largada.innerText = arrayCompetidores[index].largada;
        td_nome.innerText = arrayCompetidores[index].name;
        td_tempo.innerText = arrayCompetidores[index].time;
        td_resultado.innerText = arrayCompetidores[index].resultado;
        tr.style = "color: red;"
    }

    arrayCompetidores.splice(0, 6);

}

function apagarLinhas() {
    document.getElementById('tbody').innerHTML = "";
}


