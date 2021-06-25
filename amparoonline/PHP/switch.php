<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch em PHP</title>
</head>
<body>
    <H1>Eleições para síndico</H1>
    <label for=""> Selecione seu Candidato</label>
    
    <form method="POST" action="">

        <label for="">Candidato:</label>
        <select name="candidato">   
            <option value="x">[Selecione]</option>
            <option value="1">Sebastião</option>
            <option value="2">Raimundo</option>
            <option value="3">Joana</option>
        </select>
        <input type="submit" value="votar" name="voto">

    </form>
    
</body>
</html>


<?php



if (isset($_POST['voto'])){
    
    switch ($_POST['candidato']) {
        case ($_POST['candidato'] == 1): 
        echo "<h2> Você voltou em: Sebastião </h2>";
        # code...
        break;
    
        case ($_POST['candidato'] == 2): 
            echo "<h2>Você voltou em: Raimundo </h2>";
            # code...
            break;
    
        default:
        echo "Voto em branco";
        # code...
        break;
    }


    /*$idade = 25;
    switch ($idade) {
        case ($idade < 18): 
        echo "<h2> Menor de idade </h2>";
        # code...
        break;
    
        case ($idade >18): 
            echo "<h2> Maior de idade </h2>";
            # code...
            break;
    
        default:
        echo "Está no limbro";
        # code...
        break;
    }*/
}

?>
