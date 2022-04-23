<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/LoginStyle.css">

</head>

<body>
    <div class="wrapper">
        <section class="form registration">
        <header><a href="index.php"><img src="assets/img/Luxury_Cars.png" alt="..." /></a></header>
            <form action="scripts/rejestruj.php" method="POST" enctype="multipart/form-data"
                onsubmit="return sprawdzRejstracje()">
                <?php
                        if (filter_input(INPUT_GET, "status")=="badEmail") {
                            echo "<div id='registration_error' style='display: block'>Istnieje użytkownik o podanym emailu</div>";
                        }
                        else{
                            echo "<div id='registration_error'></div>";
                        }
                ?>
                <div class="user_name_details">
                    <div class="field input">
                        <label>Imię</label>
                        <input type="text" placeholder="Podaj imię" name="name" id="name">
                    </div>
                    <div class="field input">
                        <label>Nazwisko</label>
                        <input type="text" placeholder="Podaj nazwisko" name="surname" id="surname">
                    </div>
                </div>
                <div class="field input">
                    <label>Kraj</label>
                    <select name="country" id="country">
                        <option value="Polska">Polska</option>
                        <option value="Niemcy">Niemcy</option>
                        <option value="Wielka Brytania">Wielka Brytania</option>
                    </select>
                </div>
                <div class="field input">
                    <label>Email</label>
                    <input type="email" placeholder="Podaj email" name="email" id="email">
                </div>
                <div class="field input">
                    <label>Numer telefonu</label>
                    <input type="number" placeholder="Podaj numer telefonu" name="phone_number" id="phone_number">
                </div>
                <div class="field input">
                    <label>Hasło (Musi zawierać conajmniej 1 mała literę, 1 dużą literę, znak specjalny i cyfrę.
                        Minimalna długość 8.)</label>
                    <input type="password" placeholder="Podaj hasło" name="password" id="password">
                </div>
                <div class="field button">
                    <input type="submit" value="Rejestruj" name="register">
                </div>
                <div class="link">Masz już konto? <a href="login.php">Zaloguj się!</a></div>
            </form>
        </section>
    </div>
    <script src="js/validation.js"></script>
</body>

</html>