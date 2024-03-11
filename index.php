<?php
include_once "conexao.php";  
try {
    $consulta = $conectar->query("SELECT * FROM login");
    echo "<a href='formCadastro.php'>Novo Cadastro</a>";
    echo "<br><br>Listagem de Usuários<br>";
    echo "<table border ='1'><tr><td>Nome</td><td>Login</td><td>Ações</td></tr>";
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
    echo "<tr><td>$linha[nome]</td><td>$linha[login]</td><td>
    <a href='formEditar.php?id=$linha[id]'>Editar</a>\n
    <a href='excluir.php?id=$linha[id]'>Excluir</a></td></tr>";
}
echo "</table>";
echo $consulta-> rowCount() . " Registros Exibidos";

}catch(PDOException $e){
    echo $e -> getMessage();
}
?>