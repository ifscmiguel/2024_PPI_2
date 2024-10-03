const selectEstados = document.getElementById("estados");
const selectMunicipios = document.getElementById("municipios");

function popularEstados(){
    fetch("https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome")
    .then(dados=>dados.json())
    .then(dados=>{
        //console.log(JSON.stringify(dados)); // imprime o json de retorno
        dados.forEach(estado=>{
            console.log(estado);
            const option = document.createElement("option");
            option.value = estado.id;
            option.innerHTML = estado.nome;
            selectEstados.appendChild(option);
        });
        popularMunicipios(selectEstados.value); // carregar os municipios na primeira execução
    })
}

/*
Recebe o nome de um estado e busca os municípios dele via API pública
*/
function popularMunicipios(estado){
    console.log(estado);
    selectMunicipios.innerHTML = "";
    fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estado}/municipios`)
    .then(dados=>dados.json())
    .then(dados=>{
        console.log(JSON.stringify(dados)); // imprime o json de retorno
        dados.forEach(municipio=>{
            console.log(municipio);
            const option = document.createElement("option");
            option.value = municipio.nome;
            option.innerHTML = municipio.nome;
            selectMunicipios.appendChild(option);
        });
    })
}

/*
Evento: quando mudar o estado selecionado, chama a função popularMunicipios passando o nome do estado selecionado
*/
selectEstados.addEventListener("change", function(){
    popularMunicipios(this.value)
});

// chamar a função ao carregar a página
popularEstados();
