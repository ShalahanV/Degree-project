<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$db = new PDO('mysql:host=localhost;dbname=style','root','');

$query = "INSERT INTO contacts (name, email, message, `time`) VALUES (:name, :email, :message, NOW())";

$prepare = $db->prepare($query);
$prepare->bindParam(':name', $name, PDO::PARAM_STR);
$prepare->bindParam(':email', $email, PDO::PARAM_STR);
$prepare->bindParam(':message', $message, PDO::PARAM_STR);
prepare->execute();
echo "1";
//require_once __DIR__ . "/database/db.php";
/*try{
        //$name = $_POST['name'];
        //$email = $_POST['email'];
        //$message = $_POST['message'];
        $db = new PDO('mysql:host=localhost;dbname=style','root','');

        if(empty($_POST['name'])) exit("Поле не заповнене");
        if(empty($_POST['email'])) exit("Поле не заповнене");
        if(empty($_POST['message'])) exit("Поле не заповнене");

        //$query = "INSERT INTO contacts (name, email, message, `time`) VALUES (:name, :email, :message, NOW())";
        $query = "INSERT INTO contacts VALUES (NULL, :name, :email, :message, NOW())";

        $prepare = $db->prepare($query);
        $prepare->execute(["name" => $_POST['name'], "email" => $_POST['email'], "message" => $_POST['message']]);
        //header('location: ./contacts.php');

        echo "Сообщение успешно отправлено в базу данных.";
}
catch (PDOException $e) {
    echo "Ошибка: " . $e->getMessage();
}  */     

//if (isset($_POST['send'])) {

//}

?>