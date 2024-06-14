<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
</head>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-color: #e3e9f7;

    }
    div{
        background-color: rgba(0, 0, 0, 0.6)    ;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 50px;
        border-radius: 30px;
        color: white;
    }
    input{
        padding: 15px;
        border: none;
        outline: none;   
        font-size: 15px;
    }
    button{
        background-color: dodgerblue;
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 10px;
        font-size: 15px;
        color: #FFF;
    }
    button:hover{
        background-color: deepskyblue;
        cursor: pointer;
    }
    
    input::placeholder {
    color: #000000; /* Cor desejada */
    }

</style>
<body>
    <div>
        <h1>Painel Militar</h1>
        <input type="text" placeholder="Login" min="5" max="16">
        <br><br>
        <input type="password" placeholder= "Senha" min="5" max="16">
        <br><br>
        <button onclick="window.location.href='http://127.0.0.1:5500/sidebar-main/#'">Logar</button>
    </div>
    
</body>
</html>