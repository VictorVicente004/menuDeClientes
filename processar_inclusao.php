<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include_once 'Clientes.php';
 // Inclua o arquivo com a classe Clientes
    // Receber os dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $cliente = new Clientes();
    $cliente->nome = $_POST["nome"];
    $cliente->email = $_POST["email"];
    $cliente->dataNascimento = $_POST["dataNascimento"];
    $cliente->RG = $_POST["RG"];
    $cliente->CPF = $_POST["CPF"];
    $cliente->endereco = $_POST["endereco"];
    
    
    $inserido = $cliente->inserirCliente();
    if ($inserido) 
	{
        echo "Cliente inserido com sucesso!";
   	} 
    else 
	{
        echo "Erro ao inserir cliente.";
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
