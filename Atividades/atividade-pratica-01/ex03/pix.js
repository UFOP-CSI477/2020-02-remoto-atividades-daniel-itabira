function carregarBancos() {
    fetch("https://brasilapi.com.br/api/banks/v1")
        .then(response => response.json())
        .then(data => preencherSelectBancos(data))
        .catch(error => console.error(error))
}

function preencherSelectBancos(data) {
    let bancos = document.getElementById("bancos");
    limparSelect(bancos);

    for(let index in data) {
       
        const { ispb,name,code,fullName} = data[index]
        let option = document.createElement("option");
        option.value = ispb;
        option.innerHTML = `${name}-${code}`;
        bancos.appendChild(option);
    }
}

function limparSelect(campo) {
    while( campo.length > 1){
        campo.remove(1);
    }
}

function enviarPIX(){

    let valorPIX = document.getElementById('valor');
    let tipoChave = document.getElementById('tipoPIX');
    tipoChave = tipoChave.options[tipoChave.selectedIndex].value;
    let chavePIX = document.getElementById('chavePix').value;
    let bancoInfo = document.getElementById('bancos');
    bancoInfo = bancoInfo.options[bancoInfo.selectedIndex].innerHTML;
    console.log(bancoInfo);
    let dataInfo = document.getElementById('data');

    let info = {
        valor: parseFloat(valorPIX.value),
        tipoChave: tipoChave,
        chave: chavePIX,
        banco: bancoInfo,
        data: dataInfo,
    
    };

    console.log(info);


}