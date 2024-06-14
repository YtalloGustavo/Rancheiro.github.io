<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Refeição</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: rgb(0,100,0);
            background: #e3e9f7;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 15px;
            width: 30%;
            color: white;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: solid 1px;
            outline: none;
            font-size: 15px;
            width: 100%;
            color: white;
            letter-spacing: 2px;
        }
        fieldset{
            border: 3px solid #000;
        }
        legend{
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
            background-color: #000;
            border-radius: 15px;
        }
        .label_input{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        #submit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 50%;
            border-radius: 10px;
            font-size: 15px;
            cursor: pointer;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0 auto; 
            display: block;
        }
        #submit:hover{
            background-color: aqua;
            cursor: pointer;
        }

        input::placeholder {
        color: #000; /* Cor desejada */
        }   


    </style>
</head>
<body>
    <div class="box">
        <form action="">
            <fieldset>
                <legend><b>Painel de Refeição</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="Nome de Guerra" id="Nome_de_Guerra" class="inputUser" required placeholder="Nome de Guerra">
                    <label for="Nome_de_Guerra" class="label_input"></label> 
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="CPF" id="CPF" class="inputUser" required placeholder="CPF"> 
                    <label for="CPF" class="label_input"></label> 
                </div>
                <br><br>
                <div>
                    <body id="checkbox1">
                        <label class="checkbox-container">Manhã 
                          <input type="checkbox" checked="checked">
                          <span class="checkmark"></span>
                        </label>
                        
                        <label class="checkbox-container">Tarde 
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        
                        <label class="checkbox-container">Noite 
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                </div>
                <br><br>
                <div>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>P/G</option>
                        <option value="1">Soldado</option>
                        <option value="2">Cabo</option>
                        <option value="3">Sargento</option>
                        <option value="4">Sub-Tenente</option>
                        <option value="5">Aspirante a Oficial</option>
                        <option value="6">Tenente</option>
                        <option value="7">Capitão</option>
                        <option value="8">Major</option>
                        <option value="9">Tenente-Coronel</option>
                        <option value="10">Coronel</option>
                        <option value="11">General</option>
                    </select>
                </div>
                <br><br>
                <select class="form-select" aria-label="Default select example">
                        <option selected>Companhia</option>
                        <option value="1">1a Companhia</option>
                        <option value="2">2a Companhia</option>
                        <option value="3">3a Companhia</option>
                        <option value="4">4a Companhia</option>
                        <option value="5">5a Companhia</option>
                        <option value="6">6a Companhia</option>
                </select>
                
                <br><br>
                <input type="submit" name="submit" id="submit">
                
            </fieldset>
        </form>
    </div>
</body>
</html>
