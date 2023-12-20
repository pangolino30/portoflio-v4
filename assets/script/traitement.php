<?php

// Checking valid form is submitted or not 
if (isset($_POST['submit_btn'])) {

    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Storing google recaptcha response 
    // in $recaptcha variable 
    $recaptcha = $_POST['g-recaptcha-response'];

    // Put secret key here, which we get 
    // from google console 
    $secret_key = '6LfeQzcpAAAAAAJuxiZNjYUl0NUSzzNZmvqxclTJ';

    // Hitting request to the URL, Google will 
    // respond with success or error scenario 
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret='
        . $secret_key . '&response=' . $recaptcha;

    // Making request to verify captcha 
    $response = file_get_contents($url);

    // Response return by google is in 
    // JSON format, so we have to parse 
    // that json 
    $response = json_decode($response);

    // Checking, if response is true or not 
    if ($response->success == true) {
        echo '<script>alert("Google reCAPTACHA verified")</script>';
        mail("contact@lucasspitzer.fr", "Message de $nom", $message);
    } else {
        echo '<script>alert("Error in Google reCAPTACHA")</script>';
    }
}

?>