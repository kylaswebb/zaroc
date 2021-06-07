<?php
$retrievedUser = $_SERVER['PHP_AUTH_USER'];
$retrievedPassword = $_SERVER['PHP_AUTH_PW'];

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);
header('Content-Type: application/json;charset=utf-8');

#Auth
function auth($user, $password)
{
    global $retrievedUser;
    global $retrievedPassword;
    if (($user != $retrievedUser) or ($password != $retrievedPassword))
    {
        echo "Put your Credentials Correctly";
        die();
    }
}
#check if Intent is Available
function intent($name)
{
    global $input;
    if ($input["queryResult"]["intent"]["displayName"] == $name)
    {
        return true;
    }
    else
    {
        return false;
    }
}
#Retrieve an Intent Variable
function getIntentVariable()
{
    global $input;
    if (isset($input["queryResult"]["parameters"]))
    {
        return $input["queryResult"]["parameters"];
    }
    else
    {
        return false;
    }
}
#Retrieve a Context Variable
function getContextVariable($number)
{
    if ($number == '' )
    {
        $number = 0;
    }
    global $input;
    if (isset($input["queryResult"]["outputContexts"][$number]["parameters"]))
    {
        return $input["queryResult"]["outputContexts"][$number]["parameters"];
    }
    else
    {
        return false;
    }
}
//To see

function getContextLocation($number1,$number2)
{

  if($number1 == '' ){
    $number1 = 0;
  }

  if($number2 == '' ){
    $number2 = 0;
  }

  global $input;
  if(isset($input["queryResult"]["outputContexts"][$number1]["parameters"]["location"][$number2]))
  {
  return $input["queryResult"]["outputContexts"][$number1]["parameters"]["location"][$number2];
  } else {
    return false;
  }

}

//AVAILABLE ONLY WHATSAPP

function getWhatsappPhoneNumber()
{
    global $input;
    $userPhone = substr(intval(preg_replace('/[^0-9]+/', '', $input["session"]), 10),-10);
    return $userPhone;
}

//AVAILABLE ONLY TELEGRAM
function getTelegramChatId()
{
    global $input;

    $chatId = $input["originalDetectIntentRequest"]["payload"]["data"]["chat"]["id"];
    return $chatId;
}




?>
