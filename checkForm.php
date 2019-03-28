<?php
session_start();
$errors = [];

$goodInput = '<div class="formInput"><span class="color-good-input">&#10004;</span> Le champ est correctement rempli.</div>';
$badInput = '<div class="formInput"><span class="color-bad-input">&#10008;</span> Le champ n\'est pas correctement rempli</div>';

if(isset($_SESSION['errors'])){

    unset($_SESSION['errors']);

}


if (!empty($_POST)) {

    if (empty($_POST['name']) || (!preg_match("#^[a-zA-Z]{1,30}$#",$_POST['name']))) {

        $errors['name'] = $badInput;

    } else {

        $errors['name'] = $goodInput;

    }
    if (empty($_POST['lastName']) || (!preg_match("#^[a-zA-Z]{1,30}$#",$_POST['lastName']))) {

        $errors['lastName'] = $badInput;

    } else {

        $errors['lastName'] = $goodInput;
    }

    if (empty($_POST['mail']) || (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))) {

        $errors['mail'] = $badInput;

    } else {

        $errors['mail'] = $goodInput;

    }

    if (empty($_POST['phone']) || (!preg_match( "#^\d{10}$#", $_POST['phone']))) {

        $errors['phone'] = $badInput;

    } else {

        $errors['phone'] = $goodInput;
    }

    if (empty($_POST['subject'])) {

        $errors['subject'] = $badInput;

    } else {

        $errors['subject'] = $goodInput;
    }

    if (empty($_POST['text'])) {

        $errors['text'] = $badInput;

    } else {

        $errors['text'] = $goodInput;

    }
    var_dump($errors);

    if ( in_array( $badInput , $errors)){

        $_SESSION['errors'] = $errors;
        header('Location:form.php');

    }else{

        header('Location:alert_box.php');

    }

}







