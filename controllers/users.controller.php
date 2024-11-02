<?php

$users = $database->query(
    query: 'SELECT * FROM users',
    class: User::class
)->fetchAll();

view('users', compact('users'));