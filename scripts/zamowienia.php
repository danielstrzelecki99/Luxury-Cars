<?php
    include_once("Classes/Baza.php");
    include_once 'Classes/UserManager.php';
    $db = new Baza("localhost", "root", "", "LuxuryCars");
    $um = new UserManager();
    session_start();
    $user = $um->getLoggedInUser($db, session_id());
    if(filter_input(INPUT_POST, "zamow")){
        dodajZamowienie();
    }
    if(filter_input(INPUT_GET, "akcja") == "usun"){
        usunZamowienie(filter_input(INPUT_GET, "element"));
    }
    if(filter_input(INPUT_POST, "edytuj")){
        edytujZamowienie(filter_input(INPUT_POST, "i"));
    }

    function dodajZamowienie(){
        $args = [
            'markamodel' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            'typ' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            'silnik' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            'kolor' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            'audio' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            'adaptacyjne_zawieszenie' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            'kamery_parkowania' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            'payment-method'=> FILTER_SANITIZE_FULL_SPECIAL_CHARS
        ];
        $dane = filter_input_array(INPUT_POST, $args);
        $errors = "";
        $dane['wyposazenie'] = "";
        if($dane['audio'] !== NULL){
            $dane['wyposazenie'].=$dane['audio'].", ";
        }
        if($dane['adaptacyjne_zawieszenie'] !== NULL){
            $dane['wyposazenie'].=$dane['adaptacyjne_zawieszenie'].", ";
        }
        if($dane['kamery_parkowania'] !== NULL){
            $dane['wyposazenie'].=$dane['kamery_parkowania'].", ";
        }
        if($dane['wyposazenie'] != ""){
            $dane['wyposazenie'] = substr($dane['wyposazenie'],0,strlen($dane['wyposazenie'])-2);
        }
        foreach ($dane as $key => $val) {
            if ($val === false or $val === NULL) {
                if($key == 'audio' || $key == 'adaptacyjne_zawieszenie' || $key == 'kamery_parkowania'){
                    continue;
                }
                $errors .= $key . " ";
            }
        }
        
        if ($errors === "") {
            $date = new DateTime();
            $date = $date->format('Y-m-d H:i:s');
            
            if($GLOBALS['db']->insert("INSERT INTO orders VALUES (NULL, '".$GLOBALS['user']."', '".$dane['markamodel']."', '".$dane['silnik']."', '".$dane['typ']."', '".$dane['kolor']."', '".$dane['wyposazenie']."', '".$dane['payment-method']."', '$date')")){
                echo "Dodano zamówienie";
                header("Location: ../index.php#team");
            }
            else{
                echo "Błąd dodawania zamówienia!";
            }

        } else {
            echo "<p>Błędne dane:$errors</p>";
        }
    }

    function usunZamowienie($i){  
        if($GLOBALS['db']->delete("DELETE FROM orders WHERE id=$i")){
            echo "Usunięto zamówienie";
            header("Location: ../index.php#team");
        }
        else{
            echo "Błąd usuwania zamówienia!";
        }
    }

    function edytujZamowienie($i){ 
        $args = [
            'markamodel' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            'typ' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            'silnik' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            'kolor' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            'audio' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            'adaptacyjne_zawieszenie' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            'kamery_parkowania' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            'payment-method'=> FILTER_SANITIZE_FULL_SPECIAL_CHARS
        ];
        $dane = filter_input_array(INPUT_POST, $args);
        $errors = "";
        $dane['wyposazenie'] = "";
        if($dane['audio'] !== NULL){
            $dane['wyposazenie'].=$dane['audio'].", ";
        }
        if($dane['adaptacyjne_zawieszenie'] !== NULL){
            $dane['wyposazenie'].=$dane['adaptacyjne_zawieszenie'].", ";
        }
        if($dane['kamery_parkowania'] !== NULL){
            $dane['wyposazenie'].=$dane['kamery_parkowania'].", ";
        }
        if($dane['wyposazenie'] != ""){
            $dane['wyposazenie'] = substr($dane['wyposazenie'],0,strlen($dane['wyposazenie'])-2);
        }
        foreach ($dane as $key => $val) {
            if ($val === false or $val === NULL) {
                if($key == 'audio' || $key == 'adaptacyjne_zawieszenie' || $key == 'kamery_parkowania'){
                    continue;
                }
                $errors .= $key . " ";
            }
        }
        
        if ($errors === "") {
            $date = new DateTime();
            $date = $date->format('Y-m-d H:i:s');
            
            if($GLOBALS['db']->insert("UPDATE `orders` SET car = '".$dane['markamodel']."', engine = '".$dane['silnik']."', type = '".$dane['typ']."', color = '".$dane['kolor']."', equipment = '".$dane['wyposazenie']."', payment_method = '".$dane['payment-method']."', date = '".$date."' WHERE id = $i")){
                echo "Edytowano zamówienie";
                header("Location: ../index.php#team");
            }
            else{
                echo "Błąd edycji zamówienia!";
            }

        } else {
            echo "<p>Błędne dane:$errors</p>";
        }
    }  
?>