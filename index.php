<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css" type="text/css">
</head>
<body>
    <div>
        <h1 id="titulo">Descubra seu signo</h1>
        <p id="subtitulo">Digite suas informações</p>
    </div>

    <form action="test.php" method="POST">
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">nome</label>
                <input type="text" name="nome" id="nome" required >
            </div>

            <div class="campo">
                <label for="Sobrenome">Sobrenome</label>
                <input type="text" nome="Sobrenome" id="sobrenome">
            </div>
        
        </fieldset>
       
        <fieldset class="grupo">
        <div class="campo">
            
            <label for="Email">Email</label>
            <input type="text" nome="email" id="email" >

        </div>
        
        <div class="campo">
            <label for="dataN">Data de Nascimento</label>
            <label for="dataN">
                <input type="date" name="dataN" id="dataN" value="" required date_format(yyyy-mm-dd)>
            </label>
            <br>
        </div>
        
    </fieldset>

        <input id="botao" type="submit" ></input>
        

    </form>

</body>
<!-- Weverson Silva de Lima -->

</html>