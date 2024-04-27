<?php

// логиним пользователя если учетные данные совпадают

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password)) {
    $errors['password'] = 'Please provide a valid password.';
}

if (!empty($errors)) {
    return view('session/create.view.php', [
        'errors' => $errors
    ]);
}

// проверяем соответствие учетных данных

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

// у нас есть пользователь, но мы не знаем соответствует ли введенный пароль - паролю с нашей базы данных.

if ($user) {
    if (password_verify($password, $user['password'])) {
        login([
            'email' => $email
        ]);

        header('location: /');
        exit();
    }
}

return view('session/create.view.php', [
    'errors' => [
        'email'=>'No matching account found for that email and password.'
    ]
]);


