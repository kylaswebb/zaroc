<?php

function dmInformation( array $iTitleArray, array $iSubTitleArray, array $iImageArray, array $iLinkArray){

  $raw = '';
  for($i = 0; $i < count($iTitleArray); $i++):

  $raw .='{
          "type": "info",
          "title": "'.$iTitleArray[$i].'",
          "subtitle": "'.$iSubTitleArray[$i].'",
          "actionLink": "'.$iLinkArray[$i].'",
          "image": {
            "src": {
              "rawUrl": "'.$iImageArray[$i].'"
            }
          }
        },';
      endfor;
      $result = rtrim($raw, ",");
      echo $result;

      }

?>
