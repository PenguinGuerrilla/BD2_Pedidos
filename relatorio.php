<h1>Relatório Mensal</h1>
<hr>
<?php

    $sql = "select * from total_vendas_mes";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    $sql2 = "select * from total_entradas_mes";
    $res2 = $conn->query($sql2);
    $qtd2 = $res2->num_rows;

    $sql3 = "select sum(Valor_total) as faturamento from total_vendas_mes;";
    $res3 = $conn->query($sql3);
    $row3 = $res3->fetch_object();
    
    $sql4 = "select sum(Valor_total) as faturamento2 from total_entradas_mes;";
    $res4 = $conn->query($sql4);
    $row4 = $res4->fetch_object();
    


    if($qtd > 0) {
        print"<h2 class='mb-3'>Total de vendas do mês</h2>";
        print"<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID do Produto</th>";
        print "<th>Nome do Produto</th>";
        print "<th>Quantidade Vendida</th>";
        print "<th>Valor Unitário</th>";
        print "<th>Valor Total</th>";
        print "</tr>";
        while($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->Id_do_produto."</td>";
            print "<td>".$row->Nome."</td>";
            print "<td>".$row->Quantidade_vendida."</td>";
            print "<td>".number_format((float)($row->Valor_total/$row->Quantidade_vendida), 2, '.', '')." R$ </td>";
            print "<td>".$row->Valor_total."  R$</td>";
            
            print "</tr>";
        }
        print"</table>";
        print"Valor total de vendas do mês: ".$row3->faturamento." R$";
    }else{
        print "<p class='alert alert danger'>Não há nenhum registro!</p>";
    }

    print "<hr>";
    print"<h2 class='mb-3'>Total de entradas do mês</h2>";


    if($qtd2 > 0) {
        print"<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID do Produto</th>";
        print "<th>Nome do Produto</th>";
        print "<th>Quantidade Comprada</th>";
        print "<th>Valor Unitário</th>";
        print "<th>Valor Total</th>";
        print "<th>Mês Atual</th>";
        print "</tr>";
        while($row2 = $res2->fetch_object()) {
            print "<tr>";
            print "<td>".$row2->Id_do_produto."</td>";
            print "<td>".$row2->Nome."</td>";
            print "<td>".$row2->Quantidade_comprada."</td>";
            print "<td>".number_format((float)($row2->Valor_total/$row2->Quantidade_comprada), 2, '.', '')." R$</td>";
            print "<td>".$row2->Valor_total." R$</td>";
            print "<td>".$row2->Mes_atual."</td>";
            print "</tr>";
        }
        print"</table>";
        print"Valor total de entradas do mês: ".$row4->faturamento2." R$";
        print "<hr>";
        print "Faturamento do mês: ".($row3->faturamento - $row4->faturamento2)." R$";
    }else{
        print "<p class='alert alert danger'>Não há nenhum registro!</p>";
    }
    print "<hr>";
    print "<h2>Calcular Faturamento</h2>";

    print"
    <div class='mb-3' style='display: flex'>
        <label for='de' style='margin-right: 10px' class='mt-1'>De:</label>
        <input type='date' name='de' id='de' class='form-control' style='margin-right: 20px'>
        <label for='ate' style='margin-right: 10px' class='mt-1'>Até:</label>
        <input type='date' name='ate' id='ate' class='form-control' style='margin-right: 20px'>
    </div>";

    print "
    <script>
        sessionStorage.setItem('de', document.getElementById('de').value);
        sessionStorage.setItem('ate', document.getElementById('ate').value);
    </script>
    ";

    print "
        <button onclick=\"location.href='?page=faturamento'\" class='btn btn-primary mb-3' >Calcular faturamento <i class='fa-solid fa-calculator'></i></button>
        <hr>
    ";

?>
