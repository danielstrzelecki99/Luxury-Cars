<?php
    $value = filter_input(INPUT_POST, "model");
    if ($value == "BMW M5") {
        $wynik->type = "<option value='Sedan'>Sedan</option>";
        $wynik->engine = "<option value='4.4l V8 600KM'>4.4l V8 600KM</option><option value='4.4l V8 650KM'>4.4l V8 650KM</option>";
    }
    else if($value == "Shelby F250"){
        $wynik->type = "<option value='Coupe'>Coupe</option><option value='Kabriolet'>Kabriolet</option>";
        $wynik->engine = "<option value='7.3l V8 671KM'>7.3l V8 671KM</option>";
    }
    else if($value == "Bentley Continental GT"){
        $wynik->type = "<option value='Coupe'>Coupe</option><option value='Kabriolet'>Kabriolet</option>";
        $wynik->engine = "<option value='6.0l W12 560KM'>6.0l W12 560KM</option>";
    }
    else if($value == "Mercedes-Benz Klasa G"){
        $wynik->type = "<option value='Terenowy'>Terenowy</option>";
        $wynik->engine = "<option value='4.0l V8 422KM'>4.0l V8 422KM</option><option value='4.0l V8 585KM'>4.0l V8 585KM</option>";
    }
    else if($value == "Lamborghini Aventador"){
        $wynik->type =  "<option value='Supersamochod'>Supersamochód</option><option value='Kabriolet'>Kabriolet</option>";
        $wynik->engine = "<option value='6.5l V12 700KM'>6.5l V12 700KM</option>";
    }
    else if($value == "Porsche 911 Turbo"){
        $wynik->type = "<option value='Coupe'>Coupe</option><option value='Kabriolet'>Kabriolet</option>";
        $wynik->engine = "<option value='3.7l B6 580KM'>3.7l B6 580KM</option>";
    }
    else{
        $wynik->type = "---";
        $wynik->engine = "---";
    }

    //echo(json_encode($wynik));
    echo "siema";
?>