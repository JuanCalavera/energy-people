<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Teste Energy</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center m-5 text-danger">Teste Energy</h1>

        <h3 class="m-5">Inserir:</h3>
        <form action="inserir.php" method="post">
        <div class="form-group">
                <label for="exampleInputEmail1">Nome do Benefício</label>
                <input name="name" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="Codigo">Código do Benefício</label>
                <input name="codigo" type="number" min="1" class="form-control" id="Codigo">
            </div>
            <div class="form-group">
                <label for="Operadora">Operadora</label>
                <input name="operadora" type="text" class="form-control" id="Operadora">
            </div>
            <div class="form-group">
                <label for="Tipo">Tipo</label>
                <input name="tipo" type="text" class="form-control" id="Tipo">
            </div>
            <div class="form-group">
                <label for="Valor">Valor</label>
                <input name="valor" type="text" class="form-control" id="Valor">
            </div>
            <div class="form-group">
                <label for="Data">Data</label>
                <input name="data" type="date" class="form-control" id="Data">
            </div>
            <button type="submit" class="btn btn-primary">Inserir</button>
        </form>

        <h3 class="m-5">Atualizar via ID:</h3>
        <form action="atualizar.php" method="post">
            <div class="form-group">
                <label for="ID">ID</label>
                <input name="id" type="number" min="1" class="form-control" id="ID">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nome do Benefício</label>
                <input name="name" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="Codigo">Código do Benefício</label>
                <input name="codigo" type="number" min="1" class="form-control" id="Codigo">
            </div>
            <div class="form-group">
                <label for="Operadora">Operadora</label>
                <input name="operadora" type="text" class="form-control" id="Operadora">
            </div>
            <div class="form-group">
                <label for="Tipo">Tipo</label>
                <input name="tipo" type="text" class="form-control" id="Tipo">
            </div>
            <div class="form-group">
                <label for="Valor">Valor</label>
                <input name="valor" type="text" class="form-control" id="Valor">
            </div>
            <div class="form-group">
                <label for="Data">Data</label>
                <input name="data" type="date" class="form-control" id="Data">
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>

        <h3 class="m-5">Puxar pelo ID:</h3>
        <form action="unique.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">ID</label>
                <input type="number" min="0" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Puxar</button>
        </form>

        <h3 class="m-5">Deletar pelo ID:</h3>
        <form action="unique.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">ID</label>
                <input type="number" min="0" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-danger">Deletar</button>
        </form>


    </div>

</body>

</html>