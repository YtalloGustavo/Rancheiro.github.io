document.addEventListener("DOMContentLoaded", function () {
    // Simula um clique no botão de abertura do menu ao carregar a página
    document.getElementById('open_btn').click();
});

document.getElementById('open_btn').addEventListener('click', function () {
    document.getElementById('sidebar').classList.toggle('open-sidebar');
});

function toggleSidebar() {
    document.getElementById('sidebar').classList.toggle('collapsed');
} // Side-bar

document.addEventListener("DOMContentLoaded", function () {
    // Obtém o elemento do link "Inserir Cardápio"
    var inserirCardapioLink = document.getElementById("inserirCardapio");

    // Adiciona um ouvinte de evento de clique ao link
    inserirCardapioLink.addEventListener("click", function (event) {
        // Impede o comportamento padrão do link (não seguir o href)
        event.preventDefault();

        // Obtém o URL de destino do href do link
        var url = inserirCardapioLink.getAttribute("href");

        // Redireciona para o URL de destino
        window.location.href = url;
    });
}); // Inserir Cardapio

document.addEventListener("DOMContentLoaded", function () {
    // Obtém o elemento do link "Cadastro do Rancho"
    var cadastroRanchoLink = document.getElementById("cadastroRancho");

    // Adiciona um ouvinte de evento de clique ao link
    cadastroRanchoLink.addEventListener("click", function (event) {
        // Impede o comportamento padrão do link (não seguir o href)
        event.preventDefault();

        // Obtém o URL de destino do href do link
        var url = cadastroRanchoLink.getAttribute("href");

        // Redireciona para o URL de destino
        window.location.href = url;
    });
}); // Cadastro do Rancho

// Adiciona o ouvinte de evento de clique para "Cadastro dos Militares"
var cadastroMilitaresLink = document.getElementById("cadastroMilitares");
cadastroMilitaresLink.addEventListener("click", function (event) {
    event.preventDefault();
    var url = cadastroMilitaresLink.getAttribute("href");
    window.location.href = url;
});


document.addEventListener("DOMContentLoaded", function () {
    // Obtém o elemento do link "Refeições da Semana"
    var refeicoesSemanaLink = document.querySelector("#side_items .side-item:nth-child(8) a");

    // Adiciona um ouvinte de evento de clique ao link
    refeicoesSemanaLink.addEventListener("click", function (event) {
        // Impede o comportamento padrão do link (não seguir o href)
        event.preventDefault();

        // Obtém o URL de destino do href do link
        var url = refeicoesSemanaLink.getAttribute("href");

        // Redireciona para o URL de destino
        window.location.href = url;
    });
}); // Refeições da semana

// Obtém o elemento do link "Cadastro da Escala"
var cadastroEscalaLink = document.getElementById("cadastroEscala");

var cadastroEscalaLink = document.getElementById("cadastroEscala");

// Adiciona um ouvinte de evento de clique ao link "Cadastro da Escala"
if (cadastroEscalaLink) {
    cadastroEscalaLink.addEventListener("click", function (event) {
        // Impede o comportamento padrão do link (não seguir o href)
        event.preventDefault();

        // Obtém o URL de destino do href do link
        var url = cadastroEscalaLink.getAttribute("href");

        // Redireciona para o URL de destino
        window.location.href = url;
    });
}
