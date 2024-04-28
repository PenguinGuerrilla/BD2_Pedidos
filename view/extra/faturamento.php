<h1>Consultar Faturamento</h1>
<?php


    $de = $_COOKIE['de'];
    $ate = $_COOKIE['ate'];

    $sql = "call faturamento('{$de}','{$ate}');";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;
    
    if($qtd > 0) {
        print"<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>De</th>";
        print "<th>Até</th>";
        print "<th>Entrada</th>";
        print "<th>Saida</th>";
        print "<th>Faturamento</th>";   
        print "</tr>";
        while($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".date("d/m/Y ",strtotime($row->data_ini))."</td>";
            print "<td>".date("d/m/Y ",strtotime($row->data_fim))."</td>";
            print "<td>". 0 + $row->Entrada." R$</td>";            
            print "<td>". 0 + $row->Saida." R$</td>";
            print "<td>". 0 + $row->faturamento." R$</td>";   
            print "</tr>";
        }
        print"</table>";
    }else{
        print "<p class='alert alert danger'>Não há nenhum cliente cadastrado!</p>";
    }
?>