<?php
    $cidades = "";
    if ($_POST["estado"] == "ms") {
        $cidades.="<option value=\"corumba\">Corumbá</option>";
        $cidades.="<option value=\"ladario\">Ladário</option>";
    } else if ($_POST["estado"] == "sp") {
        $cidades.="<option value=\"andradina\">Andradina</option>";
        $cidades.="<option value=\"ilhaSolteira\">Ilha Solteira</option>";
        $cidades.="<option value=\"lorena\">Lorena</option>";
    }

    echo $cidades;

?>