<?php
$valor = $_POST['valor'];

if($valor > 0)
    echo "valor positivo";
elseif($valor < 0)
    echo "valor negativo!";
else
    echo "valor igual a zero!!";

    