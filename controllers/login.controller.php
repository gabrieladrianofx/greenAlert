<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $validacao = Validacao::validar([
        'email' => ['required', 'email'],
        'password' => ['required']
    ], $_POST);

    if ($validacao->naoPassou()) {
        header('location: /login');
        exit();
    }

    $usuario = $database->query(
        query: "select * from users where email = :email",
        class: User::class,
        params: compact('email')
    )->fetch();

    if ($usuario) {
        if (!password_verify($_POST['password'], $usuario->password)) {
            flash()->push('validacoes', ['Usuário ou password estão incorretos.']);
            header('location: /login');
            exit();
        }

        $_SESSION['auth'] = $usuario;

        flash()->push('mensagem', 'Seja bem vindo ' . $usuario->nome . ' !');

        header('location: /');
        exit();
    }
}

view('login');
