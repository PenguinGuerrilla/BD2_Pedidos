
<h1 class="mb-3">Histórico</h1>
<?php

    $sql = "SELECT * FROM historico order by id_historico desc";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;
    $sql3 = "DELETE FROM historico WHERE quantidade = 0";
    $res3 = $conn->query($sql3);

    //print"<button onclick=\"location.href='?page=faturamento'\" class='btn btn-success mb-3'>Calcular Faturamento</button>";


    if($qtd > 0) {
        print"<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>ID do Produto</th>";
        print "<th>Nome do Produto</th>";
        print "<th>Quantidade</th>";
        print "<th>Valor unitário</th>";
        print "<th>Valor total</th>";
        print "<th>Data</th>";
        print "</tr>";
        while($row = $res->fetch_object()) {
            $sql2 = "SELECT * FROM produto WHERE id_produto=".$row->id_produto;
            $res2 = $conn->query($sql2);
            $row2 = $res2->fetch_object();
            print "<tr>";
            print "<td>".$row->id_historico."</td>";
            print "<td>".$row->id_produto."</td>";
            print "<td>".$row2->nome."</td>";
            print "<td>".$row->quantidade."</td>";
            print "<td>".$row2->valor." R$</td>";
            print "<td>".$row->valor * $row->quantidade." R$</td>";
            print "<td>".date("d/m/Y ",strtotime($row->data))."</td>";

            print "</tr>";
        }
        print"</table>";
    }else{
        print "<p class='alert alert danger'>Não há nenhum produto cadastrado!</p>";
    }
?>
