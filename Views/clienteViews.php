<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula MVC</title>
</head>
<body>
    <h1>EXEMPLO DA ESTRUTURA MVC</h1>
    <nav>
        <ul>
            <li><a href="cliente">Clientes</a></li>
            <li><a href="produto">Produtos</a></li>
            <li><a href="contato">Contatos</a></li>
        </ul>
    </nav>

    <form action="#" id = formCliente>
        <div>
            <label for = "nome">Nome:</label>
            <input type="text" id = "nome" name = "nome" value="VitorDNJ">
        </div>
        <div>
            <label for = "email">e-mail:</label>
            <input type="email" id = "email" name = "email">
        </div>
        <div>
            <label for = "telefone">Telefone:</label>
            <input type="text" id = "telefone" name = "telefone">
        </div>

        <div>
            <button type="button" onclick="inserir()">Inserir</button>
        </div>
        <script>
            function inserir(){
                alert ($('#nome').val());
            }
        </script>
    </form>
</body>
</html>