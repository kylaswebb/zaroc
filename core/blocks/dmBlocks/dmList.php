<?php



function dmList( array $lTitleArray, array $lSubtitleArray, array $lImageArray, array $lCustomArray){


    $raw = '';

    for($i = 0; $i <count($lTitleArray); $i ++):

    $raw .= '{
        "type": "list",
        "title": "' . $lTitleArray[0] . '",
        "subtitle": "' . $lSubtitleArray[0] . '",
        "image": {
            "src": {
              "rawUrl": "' . $lImageArray[0] . '"
            }
          },
        "event": {
          "name": "' . $lCustomArray[0] . '",
          "languageCode": "es",
          "parameters": {}
        }
      },';

    endfor;
    $result = rtrim($raw, ",");
    echo $result;


}





















?>
