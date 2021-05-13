<?php
    $sessionID =  $_POST["sessionid"];
    $serviceCode = $_POST["serviceCode"];
    $phonenumber = $_POST["phoneNumber"];
    $text = $_POST["text"];

    if($text == ""){
        $response = "CON choose your services \n";
        $response .= "1, Biscuits \n";
        $response .= "2, My Phone number";
    }
    else if($text == "1"){
        // choose service
        $response = "CON Choose services you want to see \n";
        $response .= "1. Groceries \n";
        $response .= "2. Account Balance \n";
    }
    else if($test == "2"){
        // Business Logic
        $response = "END your phone number is ".$phonenumber;
    }
    else if($text == "1*1"){
        $product = "Choice assorted";
        $response = "END your chosen item is ".$product;
    }
    else if($text = "1*2"){
        $price = "MWK 5,000";

        $response "END your balance is ".$balance;
    }
    header('content-type; text/plain');
    echo $response;
?>