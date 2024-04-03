<?php

declare(strict_types=1);

namespace App\Controllers;

use App\App;
use App\Models\Invoice;
use App\Models\SignUp;
use App\Models\User;
use App\View;
use PDO;

class HomeController
{
    public function index(): View
    {
//        try {
//            $db = new PDO(
//                'mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_DATABASE'],
//                $_ENV['DB_USER'],
//                $_ENV['DB_PASS']
//            );
//        } catch (\PDOException $e) {
//            throw new \PDOException($e->getMessage(), (int)$e->getCode());
//        }

//        $db = App::db();
//        $db1 = App::db();
//        $db2 = App::db();
//        $db3 = App::db();
//
//        var_dump($db1 === $db2, $db2 === $db3, $db1 === $db3);
//        exit;

        $email = 'Alex@doe.com';
        $name = 'Alex Doe';
        $amount = 25;

        $userModel = new User();
        $invoiceModel = new Invoice();

        $invoiceId = (new SignUp($userModel, $invoiceModel))->register(
            [
                'email' => $email,
                'name' => $name,
            ],
            [
                'amount' => $amount,
            ]
        );

        return View::make('index', ['invoice' => $invoiceModel->find($invoiceId)]);
    }

//        try {
//            $db->beginTransaction();
//
//            $userId = $userModel->create($email, $name);
//            $invoiceId = $invoiceModel->create($amount, $userId);
//
//            $db->commit();
//        } catch (\Throwable $e) {
//            if ($db->inTransaction()) {
//                $db->rollBack();
//            }
//
//            throw $e;
//        }
//            $newUserStmt = $db->prepare(
//                'INSERT INTO users (email, full_name, is_active, created_at)
//    VALUES (?, ?, 1, NOW())'
//            );

//            $newInvoiceStmt = $db->prepare(
//                'INSERT INTO invoices (amount, user_id)
//    VALUES (?, ?)'
//            );

//            $newUserStmt->execute([$email, $name]);

//            $userId = (int)$db->lastInsertId();

//            $newInvoiceStmt->execute([$amount, $userId]);


//        $fetchStmt = $db->prepare(
//            'SELECT invoices.id AS invoice_id, amount, user_id, full_name
//            FROM invoices
//            INNER JOIN users ON user_id = users.id
//            WHERE email = LIKE ?'
//        );
//
//        $fetchStmt->execute(['%' . $email . '%']);
//
//        echo '<pre>';
//        var_dump($fetchStmt->fetch(PDO::FETCH_ASSOC));
//        echo '</pre>';


//    public function download()
//    {
//        header('Content-Type: application/pdf');
//        header('Content-Disposition: attachment;filename="myfile.pdf"');
//
//        readfile(STORAGE_PATH . '/receip2.pdf');
//    }
//
//    public function upload()
//    {
//        $filePath = STORAGE_PATH . '/' . $_FILES['receipt']['name'];
//
//        move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath);
//
//        header('Location: /');
//        exit;
//    }
}