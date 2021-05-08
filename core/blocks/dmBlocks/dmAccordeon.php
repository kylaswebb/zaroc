<?php

function dmAccordeon( array $aImageArray, array $aTitleArray, array $aSubtitleArray, array $aTextArray)
{
  $raw = '';
  for($i = 0; $i < count($aTitleArray); $i ++):
  $raw .=
      '{
      "type": "accordion",
      "title": "' . $aTitleArray[$i] . '",
      "subtitle": "' . $aSubtitleArray[$i] . '",
      "text": "' . $aTextArray[$i] . '",
      "image": {
        "src": {
          "rawUrl": "' . $aImageArray[$i] . '"
        }
      }
    },';
  endfor;
   $result = rtrim($raw, ",");
  echo $result;
}


?>
