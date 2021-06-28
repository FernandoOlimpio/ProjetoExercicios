<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if (isset($_COOKIE["cookie_c1"])) {
    setcookie("cookie_c1", 1);
    setcookie("cookie_c2", 1);
    setcookie("cookie_c3", 1);
    setcookie("cookie_n", 1);
    setcookie("cookie_contador", 1);
    setcookie("cookie_vencedor", 0);
    setcookie("cookie_x", 1);
   
}

do{
    $aux = $_COOKIE['cookie_contador']+1;
setcookie("cookie_contador", $aux);

?>
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
<?php

if (isset($_POST['voto'])){

    
    switch ($_POST['candidato']) {
          case '1': 
          echo "<h2> Você votou em: Sebastião </h2>";
          setcookie("cookie_c1", ($_COOKIE['cookie_c1']+ 1));
          break;
      
          case '2': 
              echo "<h2>Você votou em: Raimundo </h2>";
              setcookie("cookie_c2", ($_COOKIE['cookie_c2']+ 1));
              break;
  
          case '3': 
              echo "<h2>Você votou em: Joana </h2>";
              setcookie("cookie_c3", ($_COOKIE['cookie_c3']+ 1));
              break;
      
          default:
          echo "Voto em branco";
          setcookie("cookie_n", ($_COOKIE['cookie_n']+ 1));
          break;
      }  
    } 

    }while ($_COOKIE["cookie_contador"] < 5);
        
            if ($_COOKIE["cookie_vencedor"] = $_COOKIE["cookie_c1"]) {
               setcookie("cookie_vencedor", $_COOKIE["cookie_c1"]);
                $nomeVencedor =  "Sebastião";
            }
            if ($_COOKIE["cookie_vencedor"] = $_COOKIE["cookie_c2"]) {
                setcookie("cookie_vencedor", $_COOKIE["cookie_c2"]);
                $nomeVencedor =  "Raimundo";
            }
            if ($_COOKIE["cookie_vencedor"] = $_COOKIE["cookie_c3"]) {
                setcookie("cookie_vencedor", $_COOKIE["cookie_c3"]);
                $nomeVencedor =  "Joana";
            }
            
        

        echo "<br> Sindico eleito: $nomeVencedor, com " .$_COOKIE['cookie_vencedor']. " votos.";
        echo "<br> Votos Brancos:" .$_COOKIE['cookie_n'];
        echo "<br> Fim!";


?>
</body>
</html>






    
    




echo "Número de votos Sebastião: $sebastiao";
echo "Número de votos Raimundo: $raimundo";
    

 


   


?>


