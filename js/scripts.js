/*!
 * Start Bootstrap - Agency v7.0.4 (https://startbootstrap.com/theme/agency)
 * Copyright 2013-2021 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
 */
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });
    //pokazDane();
    showMap();
    //===============================================================================
});

modify = false;

function sprawdzPole(pole_id, obiektRegex) {
    var obiektPole = document.getElementById(pole_id);
    if (!obiektRegex.test(obiektPole.value)) return (false);
    else return (true);
}

function zaznaczone_boxy() {
    let zaznaczone_boxy = "";
    if (document.getElementById("audio").checked) zaznaczone_boxy += "Premium Audio";
    if (document.getElementById("adaptacyjne_zawieszenie").checked) zaznaczone_boxy += " Adaptacyjne zawieszenie";
    if (document.getElementById("kamery_parkowania").checked) zaznaczone_boxy += " Kamery parkowania";

    return zaznaczone_boxy;
}

function zaznaczone_radio() {
    let obiekty = document.getElementsByName("payment-method");
    for (let i = 0; i < obiekty.length; i++) {
        if (obiekty[i].checked) {
            return obiekty[i].value;
        }
    }
}

function sprawdz() {
    var ok = true;
    obiektNazw = /^[A-Z??????????????][a-z??????????????????]{2,20}$/;
    obiektemail =
        /^([a-zA-Z0-9])+([.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-]+)+/;
    obiektNrTelefonu = /^[1-9][0-9]{8}$/;
    if (!sprawdzPole("lname", obiektNazw)) {
        ok = false;
        document.getElementById("im_error").innerHTML =
            "Wpisz poprawnie imie!";
    } else document.getElementById("im_error").innerHTML = "";
    if (!sprawdzPole("lsurname", obiektNazw)) {
        ok = false;
        document.getElementById("nazw_error").innerHTML =
            "Wpisz poprawnie nazwisko!";
    } else document.getElementById("nazw_error").innerHTML = "";
    if (!sprawdzPole("number", obiektNrTelefonu)) {
        ok = false;
        document.getElementById("number_error").innerHTML =
            "Wpisz poprawny numer telefonu!";
    } else document.getElementById("number_error").innerHTML = "";
    if (!sprawdzPole("adress_email", obiektemail)) {
        ok = false;
        document.getElementById("email_error").innerHTML =
            "Wpisz poprawnie email!";
    } else document.getElementById("email_error").innerHTML = "";
    if (document.getElementById("markamodel").value == "---") {
        ok = false;
        document.getElementById("markamodelerror").innerHTML =
            "Wybierz auto!";
    } else document.getElementById("markamodelerror").innerHTML = "";

    if (ok) {
        let komunikat = "Dane z wype??nionego przez Ciebie formularza: " +
            "\nImi??: " + document.getElementById("lname").value +
            "\nNazwisko: " + document.getElementById("lsurname").value +
            "\nNr telefonu: " + document.getElementById("number").value +
            "\nKraj: " + document.getElementById("country").value +
            "\nE-mail: " + document.getElementById("adress_email").value +
            "\nMarka i model: " + document.getElementById("markamodel").value +
            "\nTyp: " + document.getElementById("typ").value +
            "\nSilnik: " + document.getElementById("silnik").value +
            "\nKolor: " + document.getElementById("kolor").value +
            "\nWyposa??enie: " + zaznaczone_boxy() +
            "\nSpos??b zap??aty: " + zaznaczone_radio();
        if (window.confirm(komunikat) && !modify) zapiszDane();
        else if (modify) pass;
        else ok = false;
    }
    return ok
}

// function zapiszDane() {

//     var item = {};
//     item.name = document.getElementById("lname").value;
//     item.surname = document.getElementById("lsurname").value;
//     item.number = document.getElementById("number").value;
//     item.country = document.getElementById("country").value;
//     item.mail = document.getElementById("adress_email").value;
//     item.car = document.getElementById("markamodel").value;
//     item.cartype = document.getElementById("typ").value;
//     item.engine = document.getElementById("silnik").value;
//     item.color = document.getElementById("kolor").value;
//     item.equipment = zaznaczone_boxy();
//     item.payment = zaznaczone_radio();
//     var orders = JSON.parse(localStorage.getItem("orders"));
//     if (orders === null) orders = [];
//     orders.push(item);
//     localStorage.setItem('orders', JSON.stringify(orders));
//     pokazDane();
// }

// function zapiszDaneI(i) {
//     var item = {};
//     item.name = document.getElementById("lname").value;
//     item.surname = document.getElementById("lsurname").value;
//     item.number = document.getElementById("number").value;
//     item.country = document.getElementById("country").value;
//     item.mail = document.getElementById("adress_email").value;
//     item.car = document.getElementById("markamodel").value;
//     item.cartype = document.getElementById("typ").value;
//     item.engine = document.getElementById("silnik").value;
//     item.color = document.getElementById("kolor").value;
//     item.equipment = zaznaczone_boxy();
//     item.payment = zaznaczone_radio();
//     var orders = JSON.parse(localStorage.getItem('orders'));
//     orders[i] = item;
//     localStorage.setItem('orders', JSON.stringify(orders));
// }

function pokazDane() {
    var orders = JSON.parse(localStorage.getItem('orders'));
    var el = document.getElementById('list');
    var str = "";
    if (orders === null || orders.length == 0) el.innerHTML = str + "<p>Nie zam??wi??e?? jeszcze ??adnego auta</p>";
    else {
        str += '<table><thead><tr><th>Marka i model</th><th>Typ</th><th>Silnik</th><th>Kolor</th></tr></thead>'
        for (i = 0; i < orders.length; i++) {
            str += '<tr>';
            str += "<td>" + orders[i].car + "</td>";
            str += "<td>" + orders[i].cartype + "</td>";
            str += "<td>" + orders[i].engine + "</td>";
            str += "<td>" + orders[i].color + "</td>";
            str += "<td><button onclick='usunDane(" + i + ")'><i class='fas fa-trash-alt'></i></button></td>";
            str += "<td><button onclick='edytujDane(" + i + ")'><a href='#about'><i class='fas fa-edit'></i></a></button></td>";
            str += "<td><p id='edit" + i + "'></p></td>"
            str += "</tr>";
        }
        str += '</tbody></table>';
        el.innerHTML = str;
    }
}

function edytujDane(i) {
    document.getElementById("zamow").style = "display: none";
    document.getElementById("anuluj1").style = "display: none";
    const formData = new FormData();
    formData.append("id", i);
    fetch("http://localhost/ProjektKoncowy/scripts/ajax/orderDetails.php", {
            method: "post",
            body: formData
        })
        .then(response => {
            return response.json();
        })
        .then(dane => {
            document.getElementById("markamodel").value = dane["car"];
            uzupelnianieTypow();
            return dane;
        })
        .then(dane => {
            document.getElementById("typ").value = dane["type"];
            document.getElementById("silnik").value = dane["engine"];
            document.getElementById("kolor").value = dane["color"];
            const equip = dane['equipment'].split(", ");
            document.getElementById(dane["payment_method"]).checked = true;

            return equip
        })
        .then(equip => {
            if (equip.length > 0) {
                for (const element of equip) {
                    document.getElementById(element).checked = true;
                }
            }
        })
        .catch(error => console.log("B????d: ", error));

    //modify = true;
    document.getElementById("sendrest").innerHTML = '<input type="text" value="' + i + '" style="display: none" name="i">' + '<input name="edytuj" id="edytuj" type="submit" value="Edytuj">'
}

function usunDane(i) {
    var orders = JSON.parse(localStorage.getItem('orders'));
    orders.splice(i, 1);
    localStorage.setItem('orders', JSON.stringify(orders));
    pokazDane();
}

function showMap() {
    var wspolrzedne = new google.maps.LatLng(51.249151999999995, 22.528);
    var opcjeMapy = {
        zoom: 13,
        center: wspolrzedne,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var mapa = new
    google.maps.Map(document.getElementById("mapka"),
        opcjeMapy);
}

function uzupelnianieTypow() {
    var value = document.getElementById("markamodel").value;
    const formData = new FormData();
    formData.append("model", value);
    fetch("http://localhost/ProjektKoncowy/scripts/ajax/carsTypesAndEngines.php", {
            method: "post",
            body: formData
        })
        .then(response => {
            return response.json();
        })
        .then(dane => {
            document.getElementById("typ").innerHTML = dane["type"];
            document.getElementById("silnik").innerHTML = dane["engine"];
        })
        .catch(error => console.log("B????d: ", error));
}