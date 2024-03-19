<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Inclua o arquivo com a classe Clientes:
require_once 'Clientes.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 // Instancio um objeto da classe clientes:
    $cliente = new Clientes();
 // Recebo no atributo nome o valor do nome que foi passado no POST do formulário:
    $cliente->nome = $_POST["nome"];
    // Chamo o método removerCliente para remover o cliente que tenha o nome digitado no formulário:
    $removido = $cliente->removerCliente();
        // Testo se o retorno do método removerCliente foi verdadeiro, e exibo ok... :
    if ($removido) {
        echo "Cliente removido com sucesso!";
    } else { // se não removeu, exibe mensagem de erro...
        echo "Erro ao remover cliente.";
    }
}
?>

<button onclick="voltarTelaInicial()">Tela Inicial</button>
<script>
  function voltarTelaInicial() {
    window.location.href = "index.html"; // Substitua "index.html" pelo nome do arquivo da sua tela inicial
  }
</script>    
</body>
</html>
