<?php

    $name = $_POST["name"];
    $email = $_POST["email"];
    $services = $_POST["services"];
    $budget = $_POST["budget"];
    $message = $_POST["message"];

    $email_from = "Akanbren Nigeria Limited";
    $email_subject = "New Mail From Migrant Solutions";
    $email_body =   "name: $name.\n".
                    "email: $email.\n".
                    "services: $services.\n".
                    "budget: $budget.\n".
                    "message: $message. \n";

    $to = 'talktoadeolahere@gmail.com';
    $headers = "FROM: $email_from \r\n";
    $headers = "REPLY-TO: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html");





?>