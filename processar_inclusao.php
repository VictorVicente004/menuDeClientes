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
