document.addEventListener("DOMContentLoaded", function () {
    // Simula um clique no botão de abertura do menu ao carregar a página
    var openBtn = document.getElementById('open_btn');
    if (openBtn) {
        openBtn.click();
        openBtn.addEventListener('click', function () {
            var sidebar = document.getElementById('sidebar');
            if (sidebar) {
                sidebar.classList.toggle('open-sidebar');
            }
        });
    }

    // Função para alternar a visibilidade da sidebar
    function toggleSidebar() {
        var sidebar = document.getElementById('sidebar');
        if (sidebar) {
            sidebar.classList.toggle('collapsed');
        }
    }

    // Adiciona ouvinte de evento ao link "Inserir Cardápio"
    var inserirCardapioLink = document.getElementById("inserirCardapio");
    if (inserirCardapioLink) {
        inserirCardapioLink.addEventListener("click", function (event) {
            event.preventDefault();
            var url = inserirCardapioLink.getAttribute("href");
            if (url) {
                window.location.href = url;
            }
        });
    }

    // Adiciona ouvinte de evento ao link "Cadastro do Rancho"
    var cadastroRanchoLink = document.getElementById("cadastroRancho");
    if (cadastroRanchoLink) {
        cadastroRanchoLink.addEventListener("click", function (event) {
            event.preventDefault();
            var url = cadastroRanchoLink.getAttribute("href");
            if (url) {
                window.location.href = url;
            }
        });
    }

    // Adiciona ouvinte de evento ao link "Cadastro dos Militares"
    var cadastroMilitaresLink = document.getElementById("cadastroMilitares");
    if (cadastroMilitaresLink) {
        cadastroMilitaresLink.addEventListener("click", function (event) {
            event.preventDefault();
            var url = cadastroMilitaresLink.getAttribute("href");
            if (url) {
                window.location.href = url;
            }
        });
    }

    // Adiciona ouvinte de evento ao link "Refeições da Semana"
    var refeicoesSemanaLink = document.querySelector("#side_items .side-item:nth-child(8) a");
    if (refeicoesSemanaLink) {
        refeicoesSemanaLink.addEventListener("click", function (event) {
            event.preventDefault();
            var url = refeicoesSemanaLink.getAttribute("href");
            if (url) {
                window.location.href = url;
            }
        });
    }

    // Adiciona ouvinte de evento ao link "Cadastro da Escala"
    var cadastroEscalaLink = document.getElementById("cadastroEscala");
    if (cadastroEscalaLink) {
        cadastroEscalaLink.addEventListener("click", function (event) {
            event.preventDefault();
            var url = cadastroEscalaLink.getAttribute("href");
            if (url) {
                window.location.href = url;
            }
        });
    }
});
