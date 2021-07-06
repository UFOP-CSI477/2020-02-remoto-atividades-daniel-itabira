let carros = [];
let total = {
    total_combustivel: 0,
    total_km: 0,
    media_consumo: 0,
    media_km: 0,
    media_kmL: 0,
};
function inserir() {
    
    let combustivel = document.getElementById("qtdCombustivel");
    let rodada = document.getElementById('qtdKm');
    let media = parseFloat(rodada.value) / parseFloat(combustivel.value);

    if(combustivel.value =="" || rodada.value == "" ){
        return;
    }
        
    let carro = {
        qtdCombustivel: parseFloat(combustivel.value),
        qtdRodada: parseFloat(rodada.value),
        desempenho: media,
    };

    carros.push(carro);
    addTotal(carro);
    limpar();
    addTabela(carros.length - 1);
   



}

function addTotal(carro) {

    total.total_combustivel = total.total_combustivel + carro.qtdCombustivel;
    total.total_km = total.total_km + carro.qtdRodada;
    total.media_consumo = total.total_combustivel / carros.length;
    total.media_km = total.total_km / carros.length;
    total.media_kmL = total.total_km / total.total_combustivel;

}

function addTabela(index) {

    let tbody = document.getElementById('tbody');

    let tr = tbody.insertRow();
    let td_qtdCombustivel = tr.insertCell();
    let td_qtdKm = tr.insertCell();
    let td_media = tr.insertCell();

    td_qtdCombustivel.innerText = carros[index].qtdCombustivel.toFixed(2);
    td_qtdKm.innerText = carros[index].qtdRodada.toFixed(2);
    td_media.innerText = carros[index].desempenho.toFixed(2);



}

function finalizar() {

    if(carros.length == 0){
        return;
    }

    let tbody = document.getElementById('tresultado');

    let tr = tbody.insertRow();
    let td_qtdCombustivel = tr.insertCell();
    let td_qtdKm = tr.insertCell();
    let td_mediaConsumo = tr.insertCell();
    let td_mediaKm = tr.insertCell();
    let td_mediaDesempenho = tr.insertCell();

    td_qtdCombustivel.innerText = total.total_combustivel.toFixed(2);
    td_qtdKm.innerText = total.total_km.toFixed(2);
    td_mediaConsumo.innerText = total.media_consumo.toFixed(2);
    td_mediaKm.innerText = total.media_km.toFixed(2);
    td_mediaDesempenho.innerText = total.media_kmL.toFixed(2);

    carros.splice(0, carros.length);


}
function limpar() {
    document.getElementById("qtdCombustivel").value = "";
    document.getElementById("qtdKm").value = "";

}

function limparTudo(){
    document.getElementById('tbody').innerHTML = "";
    document.getElementById('tresultado').innerHTML = "";

    total.media_consumo = parseFloat(0) ;
    total.media_km = parseFloat(0) ;
    total.media_kmL = parseFloat(0) ;
    total.total_combustivel = parseFloat(0) ;
    total.total_km = parseFloat(0) ;
}