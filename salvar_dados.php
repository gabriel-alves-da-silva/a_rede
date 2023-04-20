<?php
  $nome = $_POST['nome'];
  $preco = $_POST['preco'];
  $quantidade = $_POST['quantidade'];
  
  // Cria uma string com os dados em formato de tabela
  $linha = "| " . str_pad($nome, 20) . " | " . str_pad($preco, 30) . " | " . str_pad($quantidade, 15) . " |\n";
  $separador = "+----------------------+--------------------------------+------------------------------+\n";
  $tabela = $separador . "| Nome                      | Preço                                             | Quantidade      |\n" . $separador . $linha . $separador; 
  
  // Grava a tabela no arquivo txt
  $arquivo = fopen("clientes.txt", "a");
  fwrite($arquivo, $tabela);
  fclose($arquivo);
  
  echo "Dados Armazenados!!";
?>
