<?php

declare(strict_types=1);


// WC3schools/PHP DAY 9

//$servername = 'db';
//$username = 'root';
//$password = 'root';
//$dbname = "myDBPDO";
//
//try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";

//    $sql = "UPDATE MyGuests SET lastname='Whoe' WHERE id=2";
//    $stmt = $conn->prepare($sql);
//    $stmt->execute();
//    echo $stmt->rowCount() . " records UPDATED successfully";
//} catch (PDOException $e) {
//    echo "Error: " . $e->getMessage();
//}
//$conn = null;

//$myXMLData = "<?xml version='1.0' encoding='UTF-8'>
//<note>
//<to>Tove</to>
//<from>Jani</from>
//<heading>Reminder</heading>
//<body>Don't forget me this weekend!</body>
//</note>";
//
//$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
//print_r($xml);

libxml_use_internal_errors(true);
$myXMLData =
    "<?xml version='1.0' encoding='UTF-8'?>
<document>
  <user>John Doe</wronguser>
  <email>john@example.com</wrongemail>
</document>";

$xml = simplexml_load_string($myXMLData);
if ($xml === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
} else {
    print_r($xml);
}

