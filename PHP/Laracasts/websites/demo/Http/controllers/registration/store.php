<?php


use Core\App;
use Core\Authenticator;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

// проверить формы ввода

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a password of at least seven characters.';
}

if (!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}


// проверить существует ли уже учетная запись
$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();


if ($user) {
    // значит ктото с таким же емаилом уже существует и имеет аккаунт
    // если да, перенаправить на страницу входа в систему
    header('location: /login');
    exit();
} else {
    // если нет, сохраните запись в базе данных и залогиньтесь и перенаправьте страницу
    $db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    // отметить что пользователь вошел в систему
    (new Authenticator())->attempt($user, $password);

    header('location: /');
    exit();
}
