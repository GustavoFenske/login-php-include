<?php

include("../infra/db/sessao_start.php");


include("../infra/db/connect.php");

$id = $_GET["id"];

$sql = " DELETE FROM usuarios WHERE id = $id ";

include("../infra/db/condicao_true_query.php");
?>