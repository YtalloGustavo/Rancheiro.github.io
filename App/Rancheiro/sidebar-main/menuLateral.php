<nav id="sidebar">
    <div id="sidebar_content">
        <div id="user">
            <img src="../sidebar-main/src/images/fundodetela1.jpeg" id="user_avatar" alt="Avatar">
            <p id="user_infos">
                <span class="item-description">Gustavo</span>
                <span class="item-description">Soldado</span>
            </p>
        </div>

        <ul id="side_items">
            <li class="side-item">
                <a href="../sidebar-main/index.php">
                    <i class="fa-solid fa-house"></i>
                    <span class="item-description">Inicio</span>
                </a>
            </li>
            <li class="side-item">
                <a href="../site/relatorio.php">
                    <i class="fa-solid fa-chart-line"></i>
                    <span class="item-description">Relatorios</span>
                </a>
            </li>
            <li class="side-item" id="inserirCardapioLink">
                <a href="../site/inserircardapio.php" id="inserirCardapio">
                    <i class="fa-solid fa-file-import"></i>
                    <span class="item-description">Inserir Cardapio</span>
                </a>
            </li>
            <li class="side-item">
                <a href="../site/usuarios.php">
                    <i class="fa-solid fa-address-card"></i>
                    <span class="item-description">Militares Registrados</span>
                </a>
            </li>
            
            <li class="side-item" id="cadastroMilitaresLink">
                <a href="../site/cadMilitar.php" id="cadastroMilitares">
                    <i class="fa-regular fa-id-card"></i>
                    <span class="item-description">Cadastro dos Militares</span>
                </a>
            </li>

            <li class="side-item">
                <a href="#">
                    <i class="fa-solid fa-person-military-to-person"></i>
                    <span class="item-description">Escala dos Militares</span>
                </a>
            </li>

            <li class="side-item">
                <a href="../site/cadEscala.php" id="cadastroEscala">
                    <i class="fa-solid fa-person-military-rifle"></i>
                    <span class="item-description">Cadastro da Escala</span>
                </a>
            </li>

            <li class="side-item">
                <a href="../site/cardapio.php">
                    <i class="fa-regular fa-clipboard"></i>
                    <span class="item-description">Cardápio</span>
                </a>
            </li>
            <li class="side-item">
                <a id="refeicoesSemanaLink" href="../site/vercardapio.php">
                    <i class="fa-solid fa-table"></i>
                    <span class="item-description">Refeições da Semana</span>
                </a>
            </li>

        </ul>

        <button id="open_btn">
            <i id="open_btn_icon" class="fa-solid fa-chevron-right"></i>
        </button>
    </div>

    <div id="logout">
        <button id="logout_btn">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span class="item-description">Logout</span>
        </button>
    </div>


</nav>