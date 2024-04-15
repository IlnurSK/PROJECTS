<?php

declare(strict_types=1);


// WC3schools/PHP DAY 8

//echo "<table style='border: solid 1px black;'>";
//echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";
//
//class TableRows extends RecursiveIteratorIterator
//{
//    function __construct($it)
//    {
//        parent::__construct($it, self::LEAVES_ONLY);
//    }
//
//    function current()
//    {
//        return "<td style='width: 150px;border: 1px solid black;'>" . parent::current() . "</td>";
//    }
//
//    function beginChildren()
//    {
//        echo "<tr>";
//    }
//
//    function endChildren()
//    {
//        echo "</tr>" . "\n";
//    }
//}


$servername = 'db';
$username = 'root';
$password = 'root';
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
//    $sql = "CREATE DATABASE myDBPDO";

//    $sql = "CREATE TABLE MyGuests (
//    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//    firstname VARCHAR(30) NOT NULL,
//    lastname VARCHAR(30) NOT NULL,
//    email VARCHAR(50),
//    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//)";

//    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('Johnyq', 'Doeeq', 'johnyq@example.com')";

//    $conn->beginTransaction();
//    $conn->exec("INSERT IGNORE INTO MyGuests (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com')");
//    $conn->exec("INSERT IGNORE INTO MyGuests (firstname, lastname, email)
//VALUES ('Mary', 'Moe', 'mary@example.com')");
//    $conn->exec("INSERT IGNORE INTO MyGuests (firstname, lastname, email)
//VALUES ('Julie', 'Dooley', 'julie@example.com')");
//    $conn->commit();
//    echo "New records created successfully";

//    $conn->exec($sql);
//    echo "Database created successfully";
//    echo "Table MyGuests created successfully";
//    echo "New record created successfully";
//    $last_id = $conn->lastInsertId();
//    echo "New record created successfully. Last inserted ID is: " . $last_id;

//    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
//VALUES (:firstname, :lastname, :email)");
//    $stmt->bindParam(':firstname', $firstname);
//    $stmt->bindParam(':lastname', $lastname);
//    $stmt->bindParam(':email', $email);
//
//    $firstname = 'John';
//    $lastname  = 'Doe';
//    $email = 'john@example.com';
//    $stmt->execute();
//
//    $firstname = 'Mary';
//    $lastname  = 'Moe';
//    $email = 'mary@example.com';
//    $stmt->execute();
//
//    $firstname = 'Julie';
//    $lastname  = 'Dooley';
//    $email = 'julie@example.com';
//    $stmt->execute();
//
//    echo "New records created successfully";

//    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
//    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'");
//    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname");
//    $stmt->execute();

//    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//    foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
//        echo $v;
//    }
//    $sql = "DELETE FROM MyGuests WHERE id=3";
    $sql = "UPDATE MyGuests SET lastname='Whoe' WHERE id=2";
//    $conn->exec($sql);
//    echo "Record deleted successfully";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount() . " records UPDATED successfully";
} catch (PDOException $e) {
//    echo "Connection failed: " . $e->getMessage();
//    echo $sql . "<br>" . $e->getMessage();
//    $conn->rollBack();
    echo "Error: " . $e->getMessage();
}
$conn = null;
//echo "</table>";