<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $postArgs = filter_input_array(INPUT_POST);
  
  $name = '';
  $company = '';
  $email = '';
  $phone = '';
  
  if(
    isset($postArgs['form_text_35'])
    && !empty($postArgs['form_text_35'])
  ){
    $name = filter_var( $postArgs['form_text_35'], FILTER_SANITIZE_SPECIAL_CHARS);
  }

  if(
    isset($postArgs['form_text_36'])
    && !empty($postArgs['form_text_36'])
  ){
    $company = filter_var( $postArgs['form_text_36'], FILTER_SANITIZE_SPECIAL_CHARS);
  }

  if(
    isset($postArgs['form_email_37'])
    && !empty($postArgs['form_email_37'])
  ){
    $filteredEmail = filter_var($postArgs['form_email_37'], FILTER_VALIDATE_EMAIL);

    if ($filteredEmail) {
      $email = filter_var($filteredEmail, FILTER_SANITIZE_EMAIL);
    }

  }

  if(
    isset($postArgs['form_text_38'])
    && !empty($postArgs['form_text_38'])
  ){
    $phone = filter_var($postArgs['form_text_38'], FILTER_SANITIZE_SPECIAL_CHARS);
  }

  if(
    $name 
    && $company
    && $email
    && $phone
  ){
    $message = filter_var($postArgs['form_text_39'], FILTER_SANITIZE_SPECIAL_CHARS);

    $arSite = \Bitrix\Main\SiteTable::getById(SITE_ID)->fetch();

    \Bitrix\Main\Mail\Event::sendImmediate(array(
      "EVENT_NAME" => "USER_INFO",
      "LID" => $arSite['LID'],
      "C_FIELDS" => array( 
          "NAME" => $name,
          "COMPANY" => $company,
          "EMAIL" => $email,
          "PHONE" => $phone,
          "MESSAGE" => $message,
      ), 

    ));

    LocalRedirect('/forma/uspeshno.php');

  }else{

    $form_errors = [];

    if(!$name){
      array_push($form_errors, 'Поле Ваше имя обязательно к заполнению!');
    }

    if(!$company){
      array_push($form_errors, 'Поле Компания/Должность обязательно к заполнению!');
    }

    if(!$email){
      array_push($form_errors, 'Введите корректный email!');
    }

    if(!$phone){
      array_push($form_errors, 'Поле Номер телефона обязательно к заполнению!');
    }

    $_SESSION['form_errors'] = $form_errors;

    LocalRedirect('/forma/');
  }

}else{
  LocalRedirect('/forma/');
}
