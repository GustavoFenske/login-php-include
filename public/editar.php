<?php

include("../infra/db/sessao_start.php");
include("../infra/db/connect.php");
include("../infra/db/get_id.php");

$sql = "SELECT * FROM usuarios WHERE id = $id";
include("../infra/db/resultado_query.php");
$usuario = $resultado -> fetch_assoc();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    include("../infra/db/novo_variaveis.php");
    $sqlUpdate = " UPDATE usuarios SET usuario = '$novoUsuario', senha = '$novaSenha' WHERE id = $id";
    include("../infra/db/condicao_true_query.php");

}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>

<h2>Editar Usuário</h2>
<form method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario" value =" <?php echo $usuario['usuario'] ?>">
        <br>
        <label>Senha:</label>
        <input type="password" name="senha" value =" <?php echo $usuario['senha'] ?>">
        <br>
        <br>
        <button type="submit">Salvar</button>
    </form>
    
</body>
</html>