<?php
require_once __DIR__ . "/database/db.php";

$contactName = $_POST['name_contact'];
$contactEmail = $_POST['email_contact'];
$contactMessage = $_POST['message_contact'];

$query = "INSERT INTO `contacts` (`name_contact`, `email_contact`, `message_contact`, `time_contact`) VALUES (:name_contact, :email_contact, :message_contact, NOW())";

$params = [
    "name_contact" => $contactName,
    "email_contact" => $contactEmail,
    "message_contact" => $contactMessage,
];

try {
    $prepare = $db->prepare($query);
    $prepare->execute($params);
    
} catch (PDOException $e) {
    echo "Помилка: " . $e->getMessage();
}
?>

<script>
    setTimeout(() => {
        window.location.replace('index.php')
    }, 1000)
</script>
