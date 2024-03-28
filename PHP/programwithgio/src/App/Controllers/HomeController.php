<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;
use PDO;

class HomeController
{
    public function index(): View
    {
//        var_dump($_ENV['DB_HOST']);
//        exit;
        try {
            $db = new PDO(
                'mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_DATABASE'],
                $_ENV['DB_USER'],
                $_ENV['DB_PASS']
            );
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }

        $email = 'Jani@doe.com';
        $name = 'Jani Doe';
        $amount = 25;

        try {
            $db->beginTransaction();

            $newUserStmt = $db->prepare(
                'INSERT INTO users (email, full_name, is_active, created_at)
    VALUES (?, ?, 1, NOW())'
            );

            $newInvoiceStmt = $db->prepare(
                'INSERT INTO invoices (amount, user_id)
    VALUES (?, ?)'
            );

            $newUserStmt->execute([$email, $name]);

            $userId = (int)$db->lastInsertId();
//            var_dump($userId);

//            throw new \Exception('Test');
            $newInvoiceStmt->execute([$amount, $userId]);

            $db->commit();
        } catch (\Throwable $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }

            throw $e;
        }

        $fetchStmt = $db->prepare(
            'SELECT invoices.id AS invoice_id, amount, user_id, full_name
            FROM invoices
            INNER JOIN users ON user_id = users.id
            WHERE email = ?'
        );

        $fetchStmt->execute([$email]);

        echo '<pre>';
        var_dump($fetchStmt->fetch(PDO::FETCH_ASSOC));
        echo '</pre>';

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