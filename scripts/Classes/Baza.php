<?php
class Baza {
    private $mysqli;
    public function __construct($serwer, $user, $pass, $baza) {
        $this->mysqli = new mysqli($serwer, $user, $pass, $baza);
        if ($this->mysqli->connect_errno) {
            printf("Nie udało sie połączenie z serwerem: %s\n",
            $mysqli->connect_error);
            exit();
        }
        if ($this->mysqli->set_charset("utf8")) {}
    }
    function __destruct() {
        $this->mysqli->close();
    }
    public function selectUser($login, $passwd, $tabela) {
        $id = -1;
        $sql = "SELECT * FROM $tabela WHERE email='$login'";
        if ($result = $this->mysqli->query($sql)) {
            $ile = $result->num_rows;
            if ($ile == 1) {
                $row = $result->fetch_object(); //pobierz rekord z użytkownikiem
                $hash = $row->password; //pobierz zahaszowane hasło użytkownika
                //sprawdź czy pobrane hasło pasuje do tego z tabeli bazy danych:
                if (password_verify($passwd, $hash)){
                    $id = $row->id; //jeśli hasła się zgadzają - pobierz id użytkownika
                }
            }
        }
        return $id; //id zalogowanego użytkownika(>0) lub -1
       }

    public function select($sql, $pola) {
        $tresc = "";
        if ($result = $this->mysqli->query($sql)) {
            $ilepol = count($pola); //ile pól
            $ile = $result->num_rows; //ile wierszy
            // pętla po wyniku zapytania $results
            while ($row = $result->fetch_object()) {
                for ($i = 0; $i < $ilepol; $i++) {
                    $p = $pola[$i];
                    $tresc.=$row->$p;
                }
            }
            $result->close();
        }
        return $tresc;
    }
    public function delete($sql) {
        if( $this->mysqli->query($sql)) return true; else return false;
    }
    public function insert($sql) {
        if( $this->mysqli->query($sql)) return true; else return false;
    }
    public function getMysqli() {
        return $this->mysqli;
    }

    function showOrders($sql, $pola) {
        $zamowienia = [];
        if ($result = $this->mysqli->query($sql)) {
            $ilepol = count($pola); //ile pól
            $ile = $result->num_rows; //ile wierszy
            // pętla po wyniku zapytania $results
            
            while ($row = $result->fetch_object()) {
                array_push($zamowienia, $row);
            }
            $result->close();
        }
        return $zamowienia;
    }
}