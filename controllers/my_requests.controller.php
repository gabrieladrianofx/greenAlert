<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $validacao = Validacao::validar([
        'requestType' => ['required'],
        'description' => ['required', 'max:255'],
        'longitude' => ['required'],
        'latitude' => ['required']
    ], $_POST);

    if ($validacao->naoPassou()) {
        $requests = Request::all("user_id = :user_id", ['user_id' => auth()->id]);
        view('my_requests', compact('requests'));
        exit();
    }

    $novoNome = md5(rand());
    $extensao = pathinfo($_FILES['photoRequest']['name'], PATHINFO_EXTENSION);
    $photoRequest = "images/$novoNome.$extensao";

    move_uploaded_file($_FILES['photoRequest']['tmp_name'], __DIR__ . '/../public/' . $photoRequest);



    $database->query(
        query: "INSERT INTO requests (user_id, requestType, description, longitude, latitude, date_request, photoRequest) VALUES (:user_id, :requestType, :description, :longitude, :latitude, :date_request, :photoRequest)",
        params: [
            'user_id' => auth()->id,
            'requestType' => $_POST['requestType'],
            'description' => $_POST['description'],
            'longitude' => $_POST['longitude'],
            'latitude' => $_POST['latitude'],
            'date_request' => date('Y-m-d'),
            'photoRequest' => $photoRequest
        ]
    );

    // Mensagem de sucesso
    flash()->push('mensagem', 'Requisição cadastrada com sucesso!');
    header('location: /my_requests');
    exit();
}

$requests = Request::all("user_id = :user_id", ['user_id' => auth()->id]);

view('my_requests', compact('requests'));
