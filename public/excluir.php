<?php

include("../infra/db/sessao_start.php");


include("../infra/db/connect.php");

include("../infra/db/get_id.php");

$sql = " DELETE FROM usuarios WHERE id = $id ";

include("../infra/db/condicao_true_query.php");
?>