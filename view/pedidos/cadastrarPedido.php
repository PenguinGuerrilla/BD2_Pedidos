<h1>Cadastrar Novo Pedido</h1>
<?php
$sql = "SELECT id_produto FROM produto";
$res = $conn->query($sql);

?>
<input type="text" name="telefone" hidden id="tfTelefone" placeholder="(12) 9 1234-5678" required class="form-control">
<form action="?page=salvarPedido" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="divzin" id="d1">

            
            
        <div class="mb-3">
            <label for="tfNome">Nome do Cliente:</label>
            <select id="selectClientes" class="form-select"></select>
        </div>
        <div class="mb-3">
            <label for="tfCPF">CPF do Cliente:</label>
            <input type="text" name="cpf" autocomplete="off" readonly maxlength="14" id="tfCPF" placeholder="Ex: 123.456.789-10"
                required class="form-control">
        </div>
        <div class="mb-3">
            <label for="tfIdProduto">Nome do produto: R$</label>
            <select id="selectPedido" class="form-select"></select>
        </div>
        <div class="mb-3">
            <label for="tfIdProduto">ID do produto:</label>
            
            <input type="text" name="id_produto" id="tfIdProduto" placeholder="Ex: 5454" required class="form-control">
        </div>
        

        <div class="mb-3">
            <label for="tfValor">Valor: R$</label>
            <input type="number" name="valor" id="tfValor" pattern="[0-9]+" readonly step="any" required>
        </div>
        <div class="mb-3">
            <label for="tfQuantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="tfQuantidade" pattern="[0-9]+" step="1" required>
        </div>
        <div class="mb-3">
            <label for="tfSubtotal">Subtotal: R$</label>
            <input type="number" name="subtotal" id="tfSubtotal" pattern="[0-9]+" step="any" required onclick="
            var valor = document.getElementById('tfValor').value;
                var quantidade = document.getElementById('tfQuantidade').value;
                var subtotal = document.getElementById('tfSubtotal');
                var res = valor * quantidade;
                subtotal.value = res;
            ">
        </div>


    </div>

    <hr>


    <div class="mb-3">
        <button type="submit" class="btn btn-success">Cadastrar <i class='fa-solid fa-plus'></i></button>
    </div>
    </div>
</form>