<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $validacao = Validacao::validar([
        'name' => ['required'],
        'email' => ['required', 'email', 'unique:users'],
        'password' => ['required', 'min:8', 'max:30', 'strong'],
        'isAdmin' => ['required']
    ], $_POST);

    if ($validacao->naoPassou()) {
        $users = $database->query("SELECT * FROM users", class: User::class)->fetchAll();
        view('users', compact('users'));
        exit();
    }

    $database->query(
        query: "INSERT INTO users (name, email, password, isAdmin) VALUES (:name, :email, :password, :isAdmin)",
        params: [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
            'isAdmin' => $_POST['isAdmin'],
        ]
    );

    flash()->push('mensagem', 'Registrado com sucesso!');
    header('location: /users');
    exit();
}

$users = $database->query(
    query: "SELECT * FROM users",
    class: User::class
)->fetchAll();

view('users', compact('users'));
