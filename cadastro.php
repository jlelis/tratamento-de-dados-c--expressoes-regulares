<?php

require 'autoload.php';

//$usuario = new \Jlelis\Usuario($data['nome']);
if ($data = filter_input_array(INPUT_POST)) {
//    require 'Usuario.php';
//    require 'Contato.php';
//    var_dump($data['nome']);
    $usuario = new \App\Jlelis\Usuario($data['nome'], $data['senha'], $data['genero']);
    $contato = new \App\Jlelis\Contato($data['email'], $data['endereco'], $data['telefone']);
}
?>

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
</head>
<body>

<div class="container">
    <div class="mx-5 my-5">
        <h1> cadastro feito com sucesso!!!</h1>
        <p><?php echo htmlspecialchars($usuario->getTratamento()); ?> seguem os dados da sua conta</p>
        <ul class="list-group">
            <li class="list-group-item">Primeiro Nome: <?php echo htmlspecialchars($usuario->getNome()); ?></li>
            <li class="list-group-item">Sobrenome: <?php echo htmlspecialchars($usuario->getSobreNome()); ?></li>
            <li class="list-group-item">Usuário: <?php echo htmlspecialchars($contato->getUsuario()); ?></li>
            <li class="list-group-item">Senha: <?php echo htmlspecialchars($usuario->getSenha()); ?></li>
            <li class="list-group-item">Telefone: <?php echo htmlspecialchars($contato->getTelefone()); ?></li>
            <li class="list-group-item">Email:<?php echo htmlspecialchars($contato->getEmail()); ?></li>
            <li class="list-group-item">Endereco: <?php echo htmlspecialchars($contato->getEndereco()); ?></li>
            <li class="list-group-item">Genero: <?php echo htmlspecialchars($usuario->getTratamento()); ?></li>
        </ul>
    </div>
</div>
</body>
</html>
