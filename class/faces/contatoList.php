<?php

    $contato = new contatoDAO();
    $result = $contato->lists();

    if ($result->num_rows > 0) {
        echo "<table class='table table-striped tblistcontatos'>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr id='" . $row["IDCONTATO"] . "'>"
            . "<td id='idnome'>" . $row["NOME"] . "</td>"
            . "<td id='idtelefone'>" . $row["TELEFONE"] . "</td>"
            . "<td id='idemail'>" . $row["EMAIL"] . "</td>"
            . "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }