<?php

    $contato = new contatoDAO();
    $result = $contato->lists();

    if ($result->num_rows > 0) {
        echo "<table class='table table-striped tb-list-contatos'>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr id='" . $row["IDCONTATO"] . "'>"
            . "<td id='td-id-nome'>" . $row["NOME"] . "</td>"
            . "<td id='td-id-telefone'>" . $row["TELEFONE"] . "</td>"
            . "<td id='td-id-email'>" . $row["EMAIL"] . "</td>"
            . "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }