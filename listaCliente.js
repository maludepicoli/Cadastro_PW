let dados;

function carregarDados(cb){
    fetch("http://3dsfateckge.atwebpages.com/listarCliente.php")
        .then(conteudo => conteudo.text())
        .then((texto) => {
            dados = JSON.parse(texto);
            cb();
        });
}

function exibirTabela(){
    console.log(dados);
    let tabela = '';
    for(let linha in dados){
        tabela += '<tr>';
        tabela += `<td>${dados[linha].id}</td>`;
        tabela += `<td>${dados[linha].nome}</td>`;
        tabela += `<td>${dados[linha].contato}</td>`;
        tabela += `<td>${dados[linha].endereco}</td>`;
        tabela += `<td>${dados[linha].dataNasc}</td>`;
        tabela += `<td>${dados[linha].genero}</td>`;
        tabela += '</tr>';
    }
    document.getElementsByTagName('tbody')[0].innerHTML = tabela;
    
}

function iniciar(){
    carregarDados(exibirTabela)
}

window.onload = iniciar;