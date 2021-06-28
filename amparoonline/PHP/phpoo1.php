<?php
    require_once "model/produto.php"; //chama a classe produto.php que está dentro da model

    $p = new Produto();

    $p -> setId(10);
    $p -> setNome("Tênis");
    $p -> setVlrCompra(100.00);
    $p -> setVlrVenda(150.00);
    $p -> setQtdEstoque(50);

    echo "Dados do produto: <br>";
    echo "Código: ". $p->getId(). "<br>";
    echo "Produto: ". $p->getNome(). "<br>";
    echo "Valor de compra R$: ". $p->getVlrCompra(). "<br>";
    echo "Valor de venda R$: ". $p->getVlrVenda(). "<br>";
    echo "Quantidade em estoque: ". $p->getQtdEstoque(). "<br>";

    $id = $p->getId();
    $nome = $p->getNome();
    $vlrC = $p->getVlrCompra();
    $vlrV = $p->getVlrVenda();
    $qtd = $p->getQtdEstoque();
    


    $db = mysqli_connect("localhost:3306", "root", "senac", "dbphpoo1");
    $sql = "insert into produto value ('$id', '$nome', '$vlrC', '$vlrV', '$qtd')";
    mysqli_query($db, $sql);
?>