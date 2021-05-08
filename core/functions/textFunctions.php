<?php
//------------------------------------TEXTS---------------------------------//
#Check last caracter of a word
function endsWith($haystack, $needle)
{
    $length = strlen($needle);
    if (!$length)
    {
        return true;
    }
    return substr($haystack, -strlen($needle)) === $needle;
}

#Remove blank
function reduce($text)
{
    $text = str_replace(' ', '', $text);
    return $text;
}
#Remove Gaps
function lower($text)
{
    $text = strtolower($text);
    return $text;
}

#Remove blank and Gaps
function reduceLower($text)
{
    $text = lower($text);
    $text = reduce(' ', '', $text);
    return $text;
}

#To Capital and remove gaps
function titleAdjust($text)
{
    $text = str_replace('-', ' ', $text);
    $text = ucwords($text);
    return $text;
}

function adaptJson($text)
{
  $text = str_replace('"','\'',$text);
  return $text;
}

#Prepares a WhatsApp Link
function whatsAppLink($texto,$telefono){
  $telefono = reduce($telefono);
  $telefono = "52$telefono";
  $texto = rawurlencode($texto);
  $final = "https://api.whatsapp.com/send/?phone=$telefono=&text=$texto";
  return $final;

}

function textToUrlEncode($text){
  $raw = '';
  if(is_array($text)){
    for($i1 = 0; $i < count($text); $i++):
      $raw .= $text." ";
    endfor;
  $raw = rawurlencode($raw);
  return $raw;
  } else {
  $text = rawurlencode($text);
  return $text;
}
}





?>
