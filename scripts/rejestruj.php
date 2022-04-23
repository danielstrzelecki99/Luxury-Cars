<?php
    include_once("Classes/Baza.php");
    $bd = new Baza("localhost", "root", "", "LuxuryCars");
    if(filter_input(INPUT_POST, "register")){
        $args = [
            'name' => ['filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/^[A-Za-ząęłńśćźżó]{2,25}$/']],
            'surname' => ['filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/^[A-Za-ząęłńśćźżó]{2,25}$/']],
            'country' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            'phone_number' => ['filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/^(\+)?[0-9]{9,15}$/']],
            'email' => FILTER_VALIDATE_EMAIL,
            'password' => FILTER_SANITIZE_FULL_SPECIAL_CHARS
        ];
        $dane = filter_input_array(INPUT_POST, $args);
        $errors = "";
        foreach ($dane as $key => $val) {
            if ($val === false or $val === NULL) {
                $errors .= $key . " ";
            }
        }
        
        if ($errors === "") {
            $date = new DateTime();
            $date = $date->format('Y-m-d H:i:s');
            
            if($bd->insert("INSERT INTO users VALUES (NULL, '".$dane['name']."', '".$dane['surname']."', '".$dane['country']."', '".$dane['email']."', '".$dane['phone_number']."', '".password_hash($dane['password'], PASSWORD_DEFAULT)."', '$date')")){
                echo "Zarejestrowano pomyślnie";
                header("Location: ../login.php?status=logged");
            }
            else{
                echo "Błąd rejestracji!";
                header("Location: ../registration.php?status=badEmail");
            }

        } else {
            echo "<p>Błędne dane:$errors</p>";
        }
    }
?>

