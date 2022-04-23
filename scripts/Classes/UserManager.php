<?php
    class UserManager {
        function login($db) {
            $args = [
            'login' => FILTER_SANITIZE_ADD_SLASHES,
            'passwd' => FILTER_SANITIZE_ADD_SLASHES
            ];
            $dane = filter_input_array(INPUT_POST, $args);
            $login = $dane["login"];
            $passwd = $dane["passwd"];
            $userId = $db->selectUser($login, $passwd, "users");
            if ($userId >= 0) {
                session_start();
                $db->delete("DELETE FROM logged_in_users WHERE userId = $userId");
                $date = new DateTime();
                $date = $date->format('Y-m-d H:i:s');
                $sql = "INSERT INTO logged_in_users VALUES (";
                $sql .= "'".session_id()."', ";
                $sql .= "'".$userId."', ";
                $sql .= "'".$date."'";  
                $sql .=")";
                $db->insert($sql);
            }
            return $userId;
            }

        function logout($db){
            session_start();
            $session_id = session_id();
            $db->delete("DELETE FROM `logged_in_users` WHERE `logged_in_users`.`sessionId` = '".session_id()."'");
            $_SESSION = [];
            if(isset($_COOKIE[session_name()])){
                setcookie(session_name(), '', time() - 42000, '/');
            }
            session_destroy();
        }

        function getLoggedInUser($db, $sessionId) {
            $userId = -1;
            if($db->select("SELECT sessionId FROM logged_in_users WHERE sessionId=\"$sessionId\"", ["sessionId"])){
                $userId = $db->select("SELECT userId FROM logged_in_users WHERE sessionId=\"$sessionId\"", ["userId"]);
            }
            return $userId;
        }
    }
?>
