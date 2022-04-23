function sprawdzPole(pole_id, obiektRegex) {
    var obiektPole = document.getElementById(pole_id);
    if (!obiektRegex.test(obiektPole.value)) return (false);
    else return (true);
}

function sprawdzRejstracje() {
    var ok = true;
    var error = "Niepoprawne "
    obiektImie = /^[AaĄąBbCcĆćDdEeĘęFfGgHhIiJjKkLlŁłMmNnŃńOoÓóPpQqRrSsŚśTtUuVvWwXxYyZzŹźŻż_ ]{2,25}$/;
    obiektNazwisko = /^[AaĄąBbCcĆćDdEeĘęFfGgHhIiJjKkLlŁłMmNnŃńOoÓóPpQqRrSsŚśTtUuVvWwXxYyZzŹźŻż_ ]{2,25}$/;
    obiektEmail = /^([a-zA-Z0-9])+([.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-]+)+/;
    obiektTelefon = /^(\+)?[0-9]{9,15}$/;
    obiektHaslo = /^(?=.*\d)(?=.*[a-z])(?=.*[\!\@\#\$\%\^\&\*\(\)\_\+\-\=])(?=.*[A-Z])(?!.*\s).{8,}$/;
    if (!sprawdzPole("name", obiektImie)) {
        ok = false;
        error += "imię ";
    }
    if (!sprawdzPole("surname", obiektNazwisko)) {
        ok = false;
        error += "nazwisko ";
    }
    if (!sprawdzPole("email", obiektEmail)) {
        ok = false;
        error += "email ";
    }
    if (!sprawdzPole("phone_number", obiektTelefon)) {
        ok = false;
        error += "numer_telefonu ";
    }
    if (!sprawdzPole("password", obiektHaslo)) {
        ok = false;
        error += "hasło ";
    }

    if (ok) {
        return ok;
    } else {
        document.getElementById("registration_error").style.display = "block";
        document.getElementById("registration_error").innerHTML = error;
        return false;
    }
}