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
            <option value="x">[Voto em Branco]</option>
            <option value="1">Sebastião</option>
            <option value="2">Raimundo</option>
            <option value="3">Joana</option>
        </select>
        <input type="submit" value="votar" name="voto">

    </form>
    
      
   
</body>
</html>


<?php

$sebastiao=0; $raimundo=0; $joana=0; $branco=0;
        if (isset($_POST['voto'])){
  
            switch ($_POST['candidato']) {
                  case '1': 
                  echo "<h2> Você votou em: Sebastião </h2>";
                  $sebastiao++;
                  break;
              
                  case '2': 
                      echo "<h2>Você votou em: Raimundo </h2>";
                      $raimundo++;
                      break;
          
                  case '3': 
                      echo "<h2>Você votou em: Joana </h2>";
                      $joana++;
                      break;
              
                  default:
                  echo "Voto em branco";
                  $branco++;
                  break;
              }        
      
              
          } 
          echo $sebastiao;
          echo $raimundo;
          echo $joana;
          echo $branco;

        

    


    



    
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
        echo "Está no limbo";
        # code...
        break;
    }*/


?>
