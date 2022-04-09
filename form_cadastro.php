<!doctype html>
<html lang="pt-rb">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- cdn BS5-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn BS5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
            crossorigin="anonymous"></script>
    <title>Jlelis - Cadastro</title>
    <style>
        .btn{
            border-radius:50px 25px;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="mx-5 my-5">
        <h1>Formulário de Cadastro</h1>
        <form action="cadastro.php" method="POST" name="vai_tomar_no_cu" id="vai_tomar_no_cu">

            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
                <label for="sobrenome">Sobrenome: </label>
                <input type="text" class="form-control" id="sobrenome" name="sobrenome"
                       placeholder="Digite seu sobrenome">
            </div>
            <div class="form-group">
                <label for="usuario">Usuário: </label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Digite seu usuário">
            </div>
            <div class="form-group">
                <label for="senha">Senha: </label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone: </label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite seu telefone">
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu email">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço: </label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite seu endereco">
            </div>
            <div class="form-group">
                <label for="genero">Genero: </label>
                <select class="form-select" aria-label="Default select" id="genero" name="genero">
                    <option selected="">Selecione o Genero</option>
                    <option value="f">F</option>
                    <option value="m">M</option>
                </select>

            </div>
            <br>
            <hr>

            <input type="submit" class="btn btn-success" id="deu" name="deu" value="Enviar">

        </form>

    </div>
</body>
</html>
