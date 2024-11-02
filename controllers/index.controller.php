<?php

$where = match($_REQUEST['filter'] ?? '') {
    'all' => "requestType IN ('denuncia', 'coleta')",
    'complaints' => "requestType = 'denuncia'",
    'collections' => "requestType = 'coleta'",
    default => "requestType IN ('denuncia', 'coleta')"
};

$params = [];

if (isset($_REQUEST['search']) && !empty($_REQUEST['search'])) {
    $where .= " AND description LIKE :search";
    $params['search'] = "%{$_REQUEST['search']}%";
}

$requests = Request::all($where, $params);

view('index', compact('requests'));