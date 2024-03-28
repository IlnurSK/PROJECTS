<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;

class HomeController
{
    public function index(): View
    {
//        phpinfo();
        try {
            $db = new \PDO('mysql:host=db;dbname=my_db', 'root', 'root', [
//                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ
                \PDO::ATTR_EMULATE_PREPARES => false,
            ]);
//            $email = $_GET['email'];
            $email = 'gex1@doe.com';
            $name = 'Gex1 Doe';
            $isActive = 1;
            $createdAt = date('Y-m-d H:m:i', strtotime('07/11/2021 9:00PM'));
//            $query = 'SELECT * FROM users WHERE email = ?';
            $query = 'INSERT INTO users (email, full_name, is_active, created_at, updated_at)
                        VALUES (:email, :name, :active, :date1, :date2)';

//            echo $query . '<br />';

//            $stmt = $db->query($query);
//
//            var_dump($stmt->fetchAll());
            $stmt = $db->prepare($query);

            $stmt->bindValue(':name', $name);
            $stmt->bindValue(':email', $email);
            $stmt->bindParam(':active', $isActive, \PDO::PARAM_BOOL);
            $stmt->bindValue(':date1', $createdAt);
            $stmt->bindValue(':date2', $createdAt);
//            $stmt->bindValue(2, $name);
//            $stmt->bindValue(1, $email);
//            $stmt->bindValue(3, $isActive, \PDO::PARAM_BOOL);
//            $stmt->bindValue(4, $createdAt);

//            $isActive = 0;
//            $name = 'foo bar';

            $stmt->execute(
//                [
//                    'email' => $email,
//                    'name' => $name,
//                    'active' => $isActive,
//                    'date' => $createdAt
//                ]
            );

            $id = (int) $db->lastInsertId();

            $user = $db->query('SELECT * FROM users WHERE id = ' . $id)->fetch();

//            foreach ($stmt->fetchAll() as $user) {
//            foreach ( as $user) {
            echo '<pre>';
            var_dump($user);
            echo '</pre>';
//            }
        } catch (\PDOException $e) {
//            var_dump($e->getCode());
            throw new \PDOException($e->getMessage(), (int) $e->getCode());
        }
//        var_dump($db);

        return View::make('index');
    }

    public function download()
    {
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment;filename="myfile.pdf"');

        readfile(STORAGE_PATH . '/receip2.pdf');
    }

    public function upload()
    {
        $filePath = STORAGE_PATH . '/' . $_FILES['receipt']['name'];

        move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath);

        header('Location: /');
        exit;
    }
}