<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['_method']) && $_POST['_method'] === 'PATCH') {
        $id = $_GET['id'];
        $status = $_POST['status'];
        $actionTaken = $_POST['actionTaken'];
        $actionTakenDate = $_POST['actionTakenDate'];

        $photoActionTaken = null;

        if (!empty($_FILES['photoActionTaken']['name'])) {
            $novoNome = md5(rand());
            $extensao = pathinfo($_FILES['photoActionTaken']['name'], PATHINFO_EXTENSION);
            $photoActionTaken = "images/$novoNome.$extensao";

            move_uploaded_file($_FILES['photoActionTaken']['tmp_name'], __DIR__ . '/../public/' . $photoActionTaken);
        }

        $request = $database->query(
            query: "SELECT * FROM requests WHERE id = :id",
            class: Request::class,
            params: compact('id')
        )->fetch();

        if ($request) {
            if ($photoActionTaken === null) {
                $photoActionTaken = $request->photoActionTaken;
            }

            $database->query(
                query: "UPDATE requests SET 
                        photoActionTaken = :photoActionTaken,
                        status = :status,
                        actionTaken = :actionTaken,
                        actionTakenDate = :actionTakenDate 
                        WHERE id = :id",
                params: compact('photoActionTaken', 'status', 'actionTaken', 'actionTakenDate', 'id')
            );

            flash()->push('mensagem', 'Ação registrada com sucesso!');
            header('location: /updated_request?id=' . $id);
            exit();
        } else {
            flash()->push('mensagem', 'Pedido não encontrado!');
            header('location: /');
            exit();
        }
    }
}

$request = $database->query(
    query: "SELECT * FROM requests WHERE id = :id",
    class: Request::class,
    params: ['id' => $_GET['id']]
)->fetch();

if (!$request) {
    flash()->push('mensagem', 'Pedido não encontrado!');
    header('location: /');
    exit();
}

view('updated_request', compact('request'));
