const form = document.querySelector("form");
const tarefas = document.getElementById("tarefas");
const titulo = document.getElementById("titulo");
const desc = document.getElementById("desc");

form.addEventListener("submit", function(event){
    event.preventDefault();
    // criar um h3 com o título da tarefa
    const h3 = document.createElement("h3");
    h3.innerHTML = titulo.value;
    // criar um p com a descrição da tarefa
    const p = document.createElement("p");
    p.innerHTML = desc.value;
    // uma div para receber o título e a descrição
    const div = document.createElement("div");
    div.appendChild(h3);
    div.appendChild(p);
    // colocar tudo na div tarefas
    tarefas.appendChild(div);
    // apagar campos
    titulo.value="";
    desc.value="";
    titulo.focus();
});

